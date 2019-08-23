@extends('layouts.app')

@section('content')




    <div class="container ">
        <div class="row">
            <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="w3-container">
                            <h1 class="w3-animate-right " style="text-align:center">Companies</h1>
                            <div class="w3-tooltip">
                                @hasrole('admin')
                                <h2 style="text-align:center"><a href="{{route('company.create')}}">Create New Company</a></h2>
                                @endhasrole
                            </div>
                        </div>

                        <table class="table w3-table-all  w3-centered w3-hoverable w3-card w3-animate-bottom">
                            <thead>
                            <tr class="w3-red">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Added By</th>
                                <th>Branches</th>
                                <th>Contacts</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($companies))
                                @foreach($companies as $company)

                                    <tr>
                                        <td>{{$company->id}}</td>
                                        <td>
                                            <div>
                                                <a href="{{route('company.edit',$company->id)}}">{{$company->name}}</a>
                                            </div>
                                        </td>

                                        <td>{{$company->email}}</td>
                                        <td><img src="{{asset('images/'.$company->photo)}}" alt="" width="100"
                                                 height="100"></td>
                                        <td>{{$company->created_at}}</td>
                                        <td>{{$company->updated_at}}</td>
                                        <td>{{$company->user->name}}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td> <a href="{{ route('branch.show', $company->id) }}"><button type="button" class="alert-primary">View</button></a></td>
                                                    @hasrole('admin')
                                                    <td> <a href="{{ route('branch.branchCreate', $company->id) }}"><button type="button" class="alert-primary">Add</button></a></td>
                                                    @endhasrole
                                                </tr>
                                            </table>

                                        </td>
                                        <td>
                                            <ul>
                                            @foreach($company->contacts->all() as $contact)
                                                <li>{{$contact->phone}}</li>

                                            @endforeach
                                            </ul>
                                        </td>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-5">{{$companies->render()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>









@endsection



