<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="{{asset('img/logo.png')}}" alt="Adecor"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item @if(Request::segment(1) == '') active @endif"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item @if(Request::segment(1) == 'about') active @endif"><a class="nav-link" href="{{route('about')}}">About</a></li>
                        <li class="nav-item @if(Request::segment(1) == 'project') active @endif"><a class="nav-link" href="{{route('project')}}">Works</a>
                        <li class="nav-item @if(Request::segment(1) == 'service') active @endif"><a class="nav-link" href="{{route('service')}}">Services</a></li>
                        {{--<li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.blade.php">Blog Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="element.blade.php">Elements</a></li>
                            </ul>
                        </li>--}}
                        <li class="nav-item @if(Request::segment(1) == 'contact') active @endif"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="call-us"><a href=""><i class="ti-headphone-alt"></i>+44 5634 693 785</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->
