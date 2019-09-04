<html>

<head>
    <title>Youtube</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="{{ asset('css/youtube.css') }}" rel="stylesheet">

    <script type="text/javascript">

        function openNav() {
            document.getElementById("mySidenav").style.width = "80px";
            document.getElementById("main").style.marginLeft= "130px";
            document.getElementById("left").classList.add('not-active');

            document.getElementById("toggle-myBtn-full-screen-full").classList.add('not-active');
            document.getElementById("toggle-myBtn-full-screen-mini").classList.remove('not-active');

        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("left").classList.remove('not-active');

            document.getElementById("toggle-myBtn-full-screen-mini").classList.add('not-active');
            document.getElementById("toggle-myBtn-full-screen-full").classList.remove('not-active');
        }


        function openSearch() {
            document.getElementById("myOverlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("myOverlay").style.display = "none";
        }


        $(document).ready(function () {
            $('.left-1st a').click(function () {
                $('.left-1st a.active').removeClass('active');
                $(this).addClass('active');
            });
        });

    </script>
</head>

<body>

<div class="container-fluid">

    {{--    OverLay search --}}
    <div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
            <form action="#">
                <input type="text" placeholder="Search.." name="search" style="padding-bottom: 8px;">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>


    {{--    Togglable side menu--}}

    <div id="mySidenav" class="sidenav">
{{--        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>--}}

        <div class="col-12 left-1st">
            <a href="#" class="active"><i class="fas fa-home collapse-menu"></i><br><p class="collaspe-menu-text">Home</p></a>
        </div>
        <div class="col-12 left-1st">
            <a href="#"><i class="fas fa-fire collapse-menu"></i><br><p class="collaspe-menu-text">Trending</p></a>
        </div>
        <div class="col-12 left-1st">
            <a href="#"><i class="fab fa-firstdraft collapse-menu"></i><br><p class="collaspe-menu-text">Subscriptions</p></a>
        </div>
        <div class="col-12 left-1st">
            <a href="#"><i class="fas fa-folder collapse-menu"></i><br><p class="collaspe-menu-text">Library</p></a>
        </div>
        <div class="col-12 left-1st">
            <a href="#"><i class="fas fa-history collapse-menu"></i><br><p class="collaspe-menu-text">History</p></a>
        </div>


    </div>

    {{--toggle side menu end--}}



    <div class="row">
        <nav class="navbar navbar-fixed-top head">
            <div class="container-fluid">
                <div class="navbar-header col-md-2">
                    <a class="navbar-brand" href="#" style="padding-top: 8px;">
                        <span style="font-size:25px;cursor:pointer; margin-right: 12px;" onclick="openNav()"
                              id="toggle-myBtn">&#9776;</span>
{{--                        could also use toggle class--}}
                        <span class="" style="font-size:25px;cursor:pointer; margin-right: 12px;" onclick="openNav()" id="toggle-myBtn-full-screen-full">&#9776;</span>
{{--                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>--}}
                        <span class="not-active" style="font-size:25px;cursor:pointer; margin-right: 12px;" onclick="closeNav()" id="toggle-myBtn-full-screen-mini">&#9776;</span>
                        <i class="fab fa-youtube" style="font-size: 25px; color: red;"><b style="color: black">YouTube</b></i>

                    </a>
                    <button href="#" class="openBtn" onclick="openSearch()" id="search-btn-2">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="hidden" name="search_param" value="all" id="search_param">
                        <input type="text" class="form-control" name="x" id="upper-search" placeholder="Search">
                        <span class="input-group-btn">
	                        <button class="btn btn-default" type="button" id="search-btn">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                         </span>
                    </div>
                </div>
                <ul class="nav navbar-nav col-md-3">
                    <li><span class="upper-span"><i class="fas fa-video ok"></i></span></li>
                    <li><span class="upper-span"><i class="far fa-share-square ok"></i></span></li>
                    <li><span class="upper-span"><i class="fas fa-sliders-h ok"></i></span></li>
                    <li><span class="upper-span"><i class="fas fa-ellipsis-v ok"></i></span></li>
                    <button href="#" id="sign-in-btn"><i class="fas fa-user"></i> sign in</button>
                </ul>
            </div>
        </nav>

    </div>


    <div class="row">

                <div class="col-md-3 left" id="left">
                    <div class="col-12 left-1st">
                       <a href="#" class="active"> <i class="fas fa-home left-ico"></i><span class="left-span">Home</span> </a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-fire left-ico"></i><span class="left-span">Trending</span></a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fab fa-firstdraft left-ico"></i><span class="left-span">Subscriptions</span></a>
                    </div>
                    <hr style="border-width: 3px;">
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-folder left-ico"></i><span class="left-span">Library</span></a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-history left-ico"></i><span class="left-span">History</span></a>
                    </div>
                    <hr style="border-width: 3px;">
                    <div class="col-12">
                        <p>Sign in to like the videos, comment and subscribe</p>
                        <button href="#" id="sign-in-btn"><i class="fas fa-user"></i> sign in</button>
                    </div>
                    <hr style="border-width: 3px;">
                    <h4>Best of youtube</h4>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-music left-ico"></i><span class="left-span">music</span></a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-volleyball-ball left-ico"></i><span class="left-span">sports</span></a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-dragon left-ico"></i><span class="left-span">Gaming</span></a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-history left-ico"></i><span class="left-span">History</span></a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-music left-ico"></i><span class="left-span">music</span></a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-volleyball-ball left-ico"></i><span class="left-span">sports</span></a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-dragon left-ico"></i><span class="left-span">Gaming</span></a>
                    </div>
                    <div class="col-12 left-1st">
                        <a href="#"><i class="fas fa-history left-ico"></i><span class="left-span">History</span></a>
                    </div>
                    <hr style="border-width: 3px;">
                    <div class="col-12">
                        <p>Copyright all rights reserved.</p>
                    </div>
                </div>



        <div class="col-md-9 right" id="main">

            <div class="row">
                <h4 class="video-heading">Trending</h4>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
            </div>
            <hr>

            <div class="row" style="margin-bottom: 20px;">
                <h4 class="video-heading">Recommended</h4>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
                <div class="col-md-3 video-component">
                    <a href="#"><img src="https://via.placeholder.com/200x100" alt="video thumb"
                                     class="video-thumbnail"></a>
                    <p class="video-title"><b>WWE Live SmackDown 27th August Monday Highlights...</b></p>
                    <p class="channel">Channel</p>
                    <p class="channel">5m views- 5 days ago</p>
                </div>
            </div>


        </div>
    </div>


</div>


</body>

</html>
