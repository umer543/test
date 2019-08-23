@extends('layouts.app')

@section('content')




    <div class="container ">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="w3-container">
                                <h1 class="w3-animate-right " style="text-align:center">Roles</h1>
                            </div>

                            <table class="table w3-table-all  w3-centered w3-hoverable w3-card w3-animate-bottom">
                                <thead>
                                <tr class="w3-red">
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Guard Name</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($roles as $role)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->guard_name}}</td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('role.create')}}" class="btn btn-primary">Add New</a>
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6 col-sm-offset-5">{{$companies->render()}}</div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









@endsection



