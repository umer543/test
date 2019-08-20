@extends('layouts.app')

@section('content')




    <div class="container ">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="w3-container">
                                <h1 class="w3-animate-right " style="text-align:center">Create Branch</h1>
                                <form action="{{route('branch.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                    <label>Address</label><br>
                                        <input type="text" name="address" required>
                                        <label>country</label><br>
                                        <input type="text" name="country" required>
                                        <input type="hidden" name="company_id" value="{{$id}}"><br>
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
