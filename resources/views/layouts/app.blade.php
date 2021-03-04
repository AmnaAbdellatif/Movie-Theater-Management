
<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset("/front/css/bootstrap.css") }}" rel='stylesheet' type='text/css' />
    <link rel="icon" href="{{ asset("/front/images/cinema.png") }}">

    <!-- Custom Theme files -->
    <link href="{{ asset("/front/css/style.css") }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="{{ asset("/front/js/jquery.min.js") }}"></script>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href="{{ asset("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800") }}" rel='stylesheet' type='text/css'>
    @yield('header')
</head>

<body>
<!-- header-section-starts -->
<div class="full">

    <div class="menu">
        <ul>
            <li><a class="active" href="{{url("/home")}}"><i class="home"></i></a></li>
            <li><a href="{{url('/videos')}}"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
            <li><a href="{{url('/reviews')}}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
            <li><a href="{{url('/login')}}"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
            <li><a href="{{url('/contact')}}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
            <li><a href="{{url('/about-us')}}">About-us<div class="aboutus"><i class="aboutus"></i><i class=""></i></div></a></li>
        </ul>
    </div>
    <div class="main">
        <div class="header">
            <div class="top-header">
                <div class="logo">
                  <a href=""><img src="/front/images/logo.png" alt="" /></a>
                    <p>Movie Theater</p>
                </div>
                <div class="search" >
                    <form>
                        <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
                        <input type="submit" value="">

                    </form>
                    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"><i data-feather="log-out"></i>Logout</a>

                 </div>
                <div class="clearfix"></div>
            </div>
            @yield('content')

            <div class="footer">
                <h6>Amna Abdellatif FIA2-GL01: </h6>
                <p class="claim"></p>
                <a href="">emnaabdeltif@gmail.com</a>
            </div>
            <div class="clearfix"></div>

            <script type="text/javascript" src="/front/js/jquery.flexisel.js"></script>
            @yield('script')

        </div>
    </div>
</div>

</body>
</html>


