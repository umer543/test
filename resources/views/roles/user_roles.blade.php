@extends('layouts.app')

@section('content')


    <script type="text/javascript">
         function setId(id) {
            document.getElementById('user_id').value = id;
        }
    </script>


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
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Roles Assign</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <ul>
                                            @foreach($user->getRoleNames() as $name)
                                                <li>
                                                    {{$name}}
                                                    <form method="post" action="{{route('role.delete_role')}}">
                                                        @csrf
                                                        <input type="hidden" name="user" value="{{$user->id}}">
                                                        <input type="hidden" name="role" value="{{$name}}">
                                                        <input type="submit" value="delete" class="btn btn-danger" style="padding: 5px;">
                                                    </form>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="setId({{$user->id}})">Assign New Role</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('role.index')}}" class="btn btn-primary">View All Roles</a>
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-sm-6 col-sm-offset-5">{{$companies->render()}}</div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog"  id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="{{route('role.assign_role')}}">
                        @csrf
                        <table>
                            @foreach(\Spatie\Permission\Models\Role::all() as $role)
                            <tr>
                                <td>
                                    <input type="checkbox" name="roles[]" value="{{$role->name}}" style="margin: 10px;">{{$role->name}}<br>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <br>
                        <input type="hidden" name="user_id" value="" id="user_id">
                        <input type="submit" value="Assign" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>






@endsection



