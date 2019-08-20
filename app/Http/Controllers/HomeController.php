<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','IsAdmin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::guard('web')->user();
        $id = \auth()->user()->id;
        $companies=Company::orderBy('id', 'DESC')->where('user_id','=',$id)->paginate(5);;

//        dd($companies);
        return view('company.index',compact('companies'));
    }
}
