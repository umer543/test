@extends('layouts.app')

@section('content')




    <div class="container ">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="w3-container">
                                <h1 class="w3-animate-right " style="text-align:center">Branch Timings And Contact Info</h1>
                                <div class="w3-tooltip">
                                    {{--                                    <h2 style="text-align:center"><a href="{{route('company.create')}}">Create New--}}
                                    {{--                                            Company</a></h2>--}}
                                </div>
                            </div>

                            <table class="table w3-table-all  w3-centered w3-hoverable w3-card w3-animate-bottom">
                                <thead>
                                <tr class="w3-red">
                                    <th>Timings</th>
                                    <th>Contact</th>
                                </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>
{{--                                                Showing timing table of branch--}}
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <th>day</th>
                                                        <th>start time</th>
                                                        <th>end time</th>
                                                    </tr>
                                                    </thead>
                                                    @foreach($timings as $timing)

                                                        <tr>
                                                            <td>{{$timing->day}}</td>
                                                            <td>{{$timing->start_time}}</td>
                                                            <td>{{$timing->end_time}}</td>
                                                        </tr>

                                                    @endforeach
                                                </table>
                                            </td>

                                            <td>
                                              <ul>
                                                  @foreach($contacts as $contact)
                                                      <li>{{$contact->phone}}</li>

                                                  @endforeach
                                              </ul>
                                            </td>
                                        </tr>
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
