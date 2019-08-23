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
                            <form action="{{route('role.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>name</label><br>
                                    <input type="text" name="name" required>
                                    <label>guard name</label><br>
                                    <input type="text" name="guard_name" required>
                                    <input type="submit" name="submit" style="margin-top: 25px;" class="btn btn-outline-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









@endsection
