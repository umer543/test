<html>

<head>
    <title>Youtube</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"--}}
    {{--          type="text/css">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="{{ asset('css/youtube.css') }}" rel="stylesheet">

    <script type="text/javascript">

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function openSearch() {
            document.getElementById("myOverlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("myOverlay").style.display = "none";
        }

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
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div class="col-12 left-1st">
            <i class="fas fa-home left-ico"></i><span class="left-span">Home</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fas fa-fire left-ico"></i><span class="left-span">Trending</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fab fa-firstdraft left-ico"></i><span class="left-span">Subscriptions</span>
        </div>
        <hr style="border-width: 3px;">
        <div class="col-12 left-1st">
            <i class="fas fa-folder left-ico"></i><span class="left-span">Library</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fas fa-history left-ico"></i><span class="left-span">History</span>
        </div>
        <hr style="border-width: 3px;">
        <div class="col-12">
            <p>Sign in to like the videos, comment and subscribe</p>
            <button href="#" id="sign-in-btn-2"><i class="fas fa-user"></i> sign in</button>
        </div>
        <hr style="border-width: 3px;">
        <h4>Best of youtube</h4>
        <div class="col-12 left-1st">
            <i class="fas fa-music left-ico"></i><span class="left-span">music</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fas fa-volleyball-ball left-ico"></i><span class="left-span">sports</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fas fa-dragon left-ico"></i><span class="left-span">Gaming</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fas fa-history left-ico"></i><span class="left-span">History</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fas fa-music left-ico"></i><span class="left-span">music</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fas fa-volleyball-ball left-ico"></i><span class="left-span">sports</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fas fa-dragon left-ico"></i><span class="left-span">Gaming</span>
        </div>
        <div class="col-12 left-1st">
            <i class="fas fa-history left-ico"></i><span class="left-span">History</span>
        </div>
        <hr style="border-width: 3px;">
        <div class="col-12">
            <p>Copyright all rights reserved</p>
        </div>


    </div>


    <div class="row">

        <nav class="navbar navbar-default head">
            <div class="container-fluid">
                <div class="navbar-header col-md-3">
                    <a class="navbar-brand" href="#"> <span style="font-size:25px;cursor:pointer; margin-right: 12px;"
                                                            onclick="openNav()" id="toggle-myBtn">&#9776;</span><i
                            class="fab fa-youtube" style="font-size: 25px;"></i><b>Youtube</b></a>
                    <button href="#" class="openBtn" onclick="openSearch()" id="search-btn-2"><i class="fas fa-search"></i></button>
                </div>
                <div class="col-md-4">
                    <span><input type="text" value="search" id="upper-search"></span>
                    <button href="#" id="search-btn"><i class="fas fa-search"></i></button>
                </div>
                <ul class="nav navbar-nav col-md-3 ok">
                    <li><span class="upper-span"><i class="fas fa-video"></i></span></li>
                    <li><span class="upper-span"><i class="far fa-share-square"></i></span></li>
                    <li><span class="upper-span"><i class="fas fa-sliders-h"></i></span></li>
                    <li><span class="upper-span"><i class="fas fa-ellipsis-v"></i></span></li>
                </ul>
                <div class="col-md-2">
                    <button href="#" id="sign-in-btn"><i class="fas fa-user"></i> sign in</button>
                </div>
            </div>
        </nav>

    </div>

    <div class="row">

        <div class="col-md-3 col-lg-3 left" id="left">
            <div class="col-12 left-1st">
                <i class="fas fa-home left-ico"></i><span class="left-span">Home</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fas fa-fire left-ico"></i><span class="left-span">Trending</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fab fa-firstdraft left-ico"></i><span class="left-span">Subscriptions</span>
            </div>
            <hr style="border-width: 3px;">
            <div class="col-12 left-1st">
                <i class="fas fa-folder left-ico"></i><span class="left-span">Library</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fas fa-history left-ico"></i><span class="left-span">History</span>
            </div>
            <hr style="border-width: 3px;">
            <div class="col-12">
                <p>Sign in to like the videos, comment and subscribe</p>
                <button href="#" id="sign-in-btn"><i class="fas fa-user"></i> sign in</button>
            </div>
            <hr style="border-width: 3px;">
            <h4>Best of youtube</h4>
            <div class="col-12 left-1st">
                <i class="fas fa-music left-ico"></i><span class="left-span">music</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fas fa-volleyball-ball left-ico"></i><span class="left-span">sports</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fas fa-dragon left-ico"></i><span class="left-span">Gaming</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fas fa-history left-ico"></i><span class="left-span">History</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fas fa-music left-ico"></i><span class="left-span">music</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fas fa-volleyball-ball left-ico"></i><span class="left-span">sports</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fas fa-dragon left-ico"></i><span class="left-span">Gaming</span>
            </div>
            <div class="col-12 left-1st">
                <i class="fas fa-history left-ico"></i><span class="left-span">History</span>
            </div>
            <hr style="border-width: 3px;">
            <div class="col-12">
                <p>Copyright all rights reserved</p>
            </div>

        </div>


        <div class="col-md-9 right">

            {{--            <div class="row">--}}
            {{--                <div class="col-md-8">--}}
            {{--                    <a href="#"><img src="https://via.placeholder.com/600x240" alt="video thumb" class="video-thumbnail"></a>--}}
            {{--                </div>--}}
            {{--                <div class="col-md-4" >--}}
            {{--                    <a href="#"><img src="https://via.placeholder.com/300x240" alt="video thumb" class="video-thumbnail"></a>--}}
            {{--                </div>--}}
            {{--            </div>--}}


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
