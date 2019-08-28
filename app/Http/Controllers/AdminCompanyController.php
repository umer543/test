<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequest;
use App\Jobs\sendMarkdown;
use App\Mail\OrderShipped;
use App\Notifications\CompanyCreated;
use App\Notifications\InvoicePaid;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Permission;

class AdminCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('IsAdmin');
//    }


    public function index()
    {
        //
        /*$user=Auth::guard('web')->user();
        $id = Auth::guard('web')->id;*/
        $companies= Company::orderBy('id', 'ASC')->paginate(5);

         //dd($companies);
        return view('company.index',compact('companies'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('company.create');


    }

    public function check(){


//        Mail::to('umermalik4715@gmail.com')->send(new OrderShipped());
//        echo 'ok';

        $users= User::all();


        foreach ($users as $user) {

            // using notification
//            $user->notify((new InvoicePaid())->delay(Carbon::now()->addSeconds(10)));

            // using job
            sendMarkdown::dispatch($user)
                ->delay(now()->addSeconds(10));

        }

        echo "Email Sent.";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        //

        if(Auth::guard('web')->check())
        {
        $input=$request->all();
            $user=Auth::guard('web')->user();
            if($file=$request->file('photo'))
            {
                $name="menu".time().$file->getClientOriginalName();
                $file->move('images',$name);
                $input['photo']=$name;

            }
            $company= $user->companies()->create($input);
         //   Session::flash('create_company','user has been created');

//            $admin= User::find(1);

//            $admin->notify(new CompanyCreated($company));
//            $admin->notify(new InvoicePaid());

            return redirect('/home');


        }
        else
        {
            return redirect('\login');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $companies=Company::find($id);
        return view('company.edit',compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        //
        $user=Auth::guard('web')->user();
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $name = "post" . time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['photo'] = $name;

        }
        Company::whereId($id)->first()->update($input);
        //Session::flash('updated_company','user has been created');
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $companies=Company::findOrFail($id);
        unlink("images/".$companies->photo);
        $companies->Delete();
       // Session::flash('deleted_company','user has been created');
        return redirect('/home');


    }
}
