<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Company;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    // create branch of a specific company
    public function createBranch($id){
        return view('branch.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $id= $request->company_id;
       $company = Company::find($id);
       $company->branches()->create(['address'=>$request->address,'country'=>$request->country]);
       return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show($company)
    {
        //
        $branches = Branch::where('company_id',$company)->get();
        return view('branch.index',compact('branches'));

    }

    public function detail($id)
    {
//        echo $id;
        $branch = Branch::find($id);
        $timings = $branch->timings->all();
        $contacts = $branch->contacts->all();
        return view('branch.branch_detail',compact('timings','contacts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
