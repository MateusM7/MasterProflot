<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">[ PROFLOT ]</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if(auth()->guest())
                        @if(!Request::is('auth/login'))
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        @endif
                        @if(!Request::is('auth/register'))
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                        @endif
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-m2p sidebar" role="navigation">
            <div class="container-fluid">
             <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- Dashboard -->
                    <li class="active open">
                      <a href="#">
                          <span class="pull-right hidden-xs showopacity glyphicon material-icons">av_timer</span> Dashboard
                      </a>
                  </li>
                  <!-- Banner -->
                  <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">burst_mode</span>
                        Banners <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <li class="separator">Content</li>
                <!-- Page -->
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">description</span>
                        Pages <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <!-- Blog -->
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">chat_bubble_outline</span>
                        Blog <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <!-- Tags -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon material-icons">label</span>
                        Tags <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"> <i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"> <i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <li class="separator">System</li>
                <!-- Users -->
                <li class="#">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">group</span>
                        Users <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <!-- Exit -->
                <li>
                    <a href="#">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">exit_to_app</span> Exit
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">

function htmlbodyHeightUpdate() {
    var height3 = $(window).height();
    var height1 = $('.nav').height() + 50;
    height2 = $('.container-main').height();
    if (height2 > height3) {
        $('html').height(Math.max(height1, height3, height2) + 10);
        $('body').height(Math.max(height1, height3, height2) + 10);
    } else
    {
        $('html').height(Math.max(height1, height3, height2));
        $('body').height(Math.max(height1, height3, height2));
    }

}
$(document).ready(function () {
    htmlbodyHeightUpdate();
    $(window).resize(function () {
        htmlbodyHeightUpdate();
    });
    $(window).scroll(function () {
        height2 = $('.container-main').height();
        htmlbodyHeightUpdate();
    });
});

</script>
</body>
</html>

