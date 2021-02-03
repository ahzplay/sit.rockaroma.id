<div class="carousel-menu" style="position: fixed; background-color: black; opacity: .7; height: 50px;">
    <div class="container">
        <header class="masthead mb-auto">
            <div class="inner">
                <div class="row">
                    {{--<h3 class="masthead-brand" style="color: #FFDF6C;">ROCK AROMA</h3>--}}
                    <div class="col-md-4">
                        <img class="masthead-brand" src="{{asset('img/logo-rockaroma.png')}}" style="padding-top: 0.5%;">
                    </div>
                    <div class="col-md-4">
                        <nav class="nav nav-masthead justify-content-center">
                            <a class="nav-link {{Session::get('menu-active-home')}}" href="{{url('landing-page')}}">HOME</a>
                            <a class="nav-link {{Session::get('menu-active-article')}}" href="{{url('article-page/1/topRow')}}">ARTICLE</a>
                            <a class="nav-link {{Session::get('menu-active-video')}}" href="{{url('video-page/1')}}">VIDEO</a>
                            <a class="nav-link {{Session::get('menu-active-register')}}" href="{{url('register-profile-page')}}">REGISTER</a>
                            <a class="nav-link {{Session::get('menu-active-shop')}}" href="{{url('shop-page/1/1/?categoryId=0')}}">SHOP</a>
                        </nav>
                    </div>
                    <div class="col-md-4 text-right">
                        @if(session()->has('isLogin'))
                            <nav class="nav nav-masthead justify-content-right">
                                <a class="nav-link {{Session::get('menu-active-login')}}" href="{{url('api/logout-action')}}">LOGOUT</a>
                            </nav>
                        @else
                            <nav class="nav nav-masthead justify-content-right">
                                <a class="nav-link {{Session::get('menu-active-login')}}" href="{{url('login-page')}}">REGISTER/LOGIN</a>
                            </nav>
                            {{'is login = ' . Session::get('menu-active-shop')}}
                        @endif
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
{{--
<div class="carousel-menu-background" style="background-color: black; opacity: .7; position: sticky;"></div>
--}}

