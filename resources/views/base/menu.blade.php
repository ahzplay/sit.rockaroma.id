<div class="carousel-menu" style="position: fixed; background-color: black; opacity: .7; height: 50px;">
    <div class="container">
        <header class="masthead mb-auto">
            <div class="inner">
                <div class="row">
                    {{--<h3 class="masthead-brand" style="color: #FFDF6C;">ROCK AROMA</h3>--}}
                    <div class="col-md-3">
                        <img class="masthead-brand" src="{{asset('img/logo-rockaroma.png')}}" style="padding-top: 0.5%; float: left;">
                    </div>
                    <div class="col-md-5 text-left">
                        <nav class="nav nav-masthead justify-content-center">
                            <a class="nav-link {{Session::get('menu-active-home')}}" href="{{url('landing-page')}}">HOME</a>
                            <a class="nav-link {{Session::get('menu-active-article')}}" href="{{url('article-page/1/topRow')}}">NEWS</a>
                            <a class="nav-link {{Session::get('menu-active-video')}}" href="{{url('video-page/1/1/?categoryId=0')}}">VIDEO</a>
                            <a class="nav-link {{Session::get('menu-active-register')}}" href="
                            @if(session()->has('isLogin'))
                            {{url('register-profile-page')}}
                            @else
                            {{url('login-page')}}
                            @endif
                                " style="color: white;">REGISTER
                            </a>
                            <a class="nav-link {{Session::get('menu-active-shop')}}" href="{{url('shop-page/1/1/?categoryId=0')}}">SHOP</a>
                        </nav>
                    </div>
                    <div class="col-md-4 text-right">
                        @if(session()->has('isLogin'))
                            <nav class="nav nav-masthead justify-content-right">
                                <a class="nav-link {{Session::get('menu-active-login')}}" href="{{url('member-profile-page')}}">PROFILE</a>
                                <a class="nav-link {{Session::get('menu-active-login')}}" href="{{url('api/logout-action')}}">LOGOUT</a>
                            </nav>
                        @else
                            <nav class="nav nav-masthead justify-content-right">
                                <a class="nav-link {{Session::get('menu-active-login')}}" href="{{url('login-page')}}">LOGIN</a>
                            </nav>
                        @endif
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>

<div class="pos-f-t" style="display: block;">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4" style="background-color: #212020">
            {{--<h5 class="text-white h4">ROCKAROMA</h5>--}}
            <a class="nav-link {{Session::get('menu-active-home')}}" href="{{url('landing-page')}}" style="color: white;">Home</a>
            <a class="nav-link {{Session::get('menu-active-article')}}" href="{{url('article-page/1/topRow')}}" style="color: white;">News</a>
            <a class="nav-link {{Session::get('menu-active-video')}}" href="{{url('video-page/1/1/?categoryId=0')}}" style="color: white;">Video</a>

            <a class="nav-link {{Session::get('menu-active-register')}}" href="
                @if(session()->has('isLogin'))
                    {{url('register-profile-page')}}
                @else
                    {{url('login-page')}}
                @endif
                " style="color: white;">Register
            </a>



            <a class="nav-link {{Session::get('menu-active-shop')}}" href="{{url('shop-page/1/1/?categoryId=0')}}" style="color: white;">Shop</a>
            @if(session()->has('isLogin'))
                <a class="nav-link {{Session::get('menu-active-login')}}" href="{{url('api/logout-action')}}" style="color: white;">Logout</a>
            @else
                <a class="nav-link {{Session::get('menu-active-login')}}" href="{{url('login-page')}}" style="color: white;">Login</a>
            @endif
            {{--<hr>
            <a class="nav-link" href="{{url('about-us-page')}}" style="color: white;">About Us</a>
            <a class="nav-link" href="{{url('term-and-condition-page')}}" style="color: white;">Term and Condition</a>
            <a class="nav-link" href="mailto:rockaromaid@gmail.com" style="color: white;">Contact Us</a>
            <hr>
            <a href="#" class="nav-link" style="color: white;"><strong>Stay Connected</strong></a>
            <a class="nav-link" href="https://www.instagram.com/rockaroma_id" target="_blank" style="color: white;"><i class="fa fa-instagram" style="color: white;"></i> Instagram</a>
            <a class="nav-link" href="https://www.youtube.com/channel/UCrI6c17u5Fvrf2mFDOAhRFQ" target="_blank" style="color: white;"><i class="fa fa-youtube-play" style="color: white;"></i> Youtube</a>--}}
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark" id="hamburger-menu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img class="masthead-brand" src="{{asset('img/logo-rockaroma.png')}}" style="padding-top: 0.5%;">
    </nav>
</div>
{{--
<div class="carousel-menu-background" style="background-color: black; opacity: .7; position: sticky;"></div>
--}}
