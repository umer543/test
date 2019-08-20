@extends('layouts.app')

@section('content')




    <div class="container ">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="w3-container">
                                <h1 class="w3-animate-right " style="text-align:center">Branches</h1>
                                <div class="w3-tooltip">
{{--                                    <h2 style="text-align:center"><a href="{{route('company.create')}}">Create New--}}
{{--                                            Company</a></h2>--}}
                                </div>
                            </div>

                            <table class="table w3-table-all  w3-centered w3-hoverable w3-card w3-animate-bottom">
                                <thead>
                                <tr class="w3-red">
                                    <th>Address</th>
                                    <th>Country</th>
                                    <th>details</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($branches))
                                    @foreach($branches as $branch)

                                        <tr>
                                            <td>{{$branch->address}}</td>
{{--                                            <td>--}}
{{--                                                <div>--}}
{{--                                                    <a href="{{route('company.edit',$company->id)}}">{{$company->name}}</a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}

                                            <td>{{$branch->country}}</td>
                                            <td><a href="{{ route('branch.detail', $branch->id) }}"><button type="button" class="alert-primary">View</button></a></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
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
