<html>

<head>
    <title>Admin Panel</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/w3.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"
          type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script type="text/javascript">
        function ok() {
            //line
            var ctxL = document.getElementById("lineChart").getContext('2d');
            var myLineChart = new Chart(ctxL, {
                type: 'line',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                        label: "My First dataset",
                        data: [65, 59, 80, 81, 56, 55, 40],
                        backgroundColor: [
                            'rgba(105, 0, 132, .2)',
                        ],
                        borderColor: [
                            'rgba(200, 99, 132, .7)',
                        ],
                        borderWidth: 2
                    },
                        {
                            label: "My Second dataset",
                            data: [28, 48, 40, 19, 86, 27, 90],
                            backgroundColor: [
                                'rgba(0, 137, 132, .2)',
                            ],
                            borderColor: [
                                'rgba(0, 10, 130, .7)',
                            ],
                            borderWidth: 2
                        }
                    ]
                },
                options: {
                    responsive: true
                }
            });

        }

    </script>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-lg-4" id="left">

            <div class="left-heading">
                <div class="row">
                    <div class="col-10">
                        <p class="left-main-head">A1 Marketing </p>
                        <p style="font-size: 13px;"><span class="glyphicon glyphicon-record"></span> Arcadio Buendia</p>
                    </div>
                    <div class="col-2"><span class="glyphicon glyphicon-bell left-noti"></span></div>
                </div>
            </div>

            <div class="thread">
                <div class="row">
                    <i class="far fa-comment"></i>
                    <p>All Threads</p>
                </div>
            </div>

            <div class="starred">
                <p>Starred</p>
                <ul>
                    <li><i class="fa fa-hashtag" style="margin-right: 5px;"></i>lorem</li>
                    <li><i class="fa fa-hashtag" style="margin-right: 5px;"></i>evening</li>
                    <li><i class="fa fa-hashtag" style="margin-right: 5px;"></i>night</li>
                </ul>
            </div>


            <div class="1st-list">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1" id="left-accordian">Channels <span
                                class="glyphicon glyphicon-plus"></span></a>
                    </h4>
                </div>
                <div id="collapse1">
                    <ul class="left-collapse-list">
                        <li><i class="fa fa-hashtag" style="margin-right: 5px;"></i>Accountin-Costs</li>
                        <li><i class="fa fa-hashtag" style="margin-right: 5px;"></i>annual-planning <span
                                class="badge badge-danger noti">1</span></li>
                        <li><i class="fa fa-hashtag" style="margin-right: 5px;"></i>marketing</li>
                    </ul>
                </div>

            </div>

            <div class="2nd-list">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse2" id="left-accordian">Direct Messages <span
                                class="glyphicon glyphicon-plus"></span></a>
                    </h4>
                </div>
                <div id="collapse2">
                    <ul class="left-collapse-list">
                        <li><span class="glyphicon glyphicon-record"></span>Slack Bot</li>
                        <li><span class="glyphicon glyphicon-record"></span>Harry Boone</li>
                        <li><span class="glyphicon glyphicon-record"></span></span>Lisa Zhang</li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="col-md-8 col-sm-8 col-lg-8">
            <div class="row">
                <div class="col-4 upper-main">
                    <h2 style="margin-top: 18px">#Annual-Planning</h2>
                    <span class="upper-span"><i class="far fa-star"></i></span>|
                    <span class="upper-span"><i class="far fa-user"></i> 19</span>|
                    <span class="upper-span"><i class="fas fa-thumbtack"></i> 0</span>|
                    <span class="upper-span">Add a Topic</span>
                </div>

                <div class="col-8">
                    <div class="right-content">
                        <span class="upper-span right-ico" id="up"><i class="fas fa-phone-alt"></i></span>
                        <span class="upper-span right-ico"><i class="fas fa-info-circle"></i></span>
                        <span class="upper-span right-ico"><i class="fas fa-cog"></i></span>
                        <span class="upper-span ">
                      <input type="text" placeholder="Search.." name="search" id="upper-search">
                </span>
                        <span class="upper-span right-ico"><i class="fas fa-at"></i></span>
                        <span class="upper-span right-ico"><i class="far fa-star"></i></span>
                        <span class="upper-span right-ico"><i class="fas fa-ellipsis-v"></i></span>
                    </div>
                </div>
            </div>
            <hr class="line">

            <div class="row">
                <div class="message-section">
                    <!-- Left-aligned media object -->
                    <div class="media" style="padding-left: 18px;">
                        <div class="media-left">
                            <img src="{{asset('images/img_avatar.png')}}" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Zoe Maxwell</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="media" style="padding-left: 18px;">
                        <div class="media-left">
                            <img src="{{asset('images/img_avatar.png')}}" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Lee Hao</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <hr>

                    <canvas id="lineChart" onload="ok()"></canvas>

                    <div class="media" style="padding-left: 18px;">
                        <div class="media-left">
                            <img src="{{asset('images/img_avatar.png')}}" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Sara Parker</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 lower-message">

                <span class="upper-span lower-message-ico"><i class="fas fa-plus"></i></span>
                <input type="text" value="Message #annual-planning" class="lower-row">
                <span class="upper-span lower-message-ico" style="float: right;"><i class="fas fa-at"></i></span>
                <span class="upper-span lower-message-ico" style="float: right;"><i class="far fa-smile"></i></span>
            </div>
        </div>
    </div>

</body>

</html>
