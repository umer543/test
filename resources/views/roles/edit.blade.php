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
                                    <th>Role Name</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>
                                            <form method="post" action="{{route('role.delete_role')}}">
                                                @csrf
                                                <input type="hidden" name="user" value="{{$id}}">
                                                <input type="hidden" name="role" value="{{$role->name}}">
                                                <input type="submit" value="delete" class="btn btn-danger" style="padding: 5px;">
                                            </form>
{{--                                            <a href="{{route('role.delete',$id)}}" class="btn btn-danger" style="padding: 5px;">Delete</a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <br>
                            <a href="{{route('role.index')}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Assign New Role</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection
