@extends('base.base')
@section('css-add-on')
    <style>
        body{
            background-image: url("{{asset('img/bg.bottomSquare.png')}}");
            background-color: black;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: bottom;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/add_on/container-card.css')}}">
@endsection

@section('content')
    <jumbotron class="mb-0">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/img.sliderBanner.png')}}" alt="Los Angeles" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/img.sliderBanner.png')}}" alt="Los Angeles" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/img.sliderBanner.png')}}" alt="Los Angeles" width="100%">
                </div>
            </div>

        </div>
    </jumbotron>

    <div class="container" >
        <div class="row" style="padding-top: 30px">
            <div class="col-sm-5">
                <h4 style="color: #FFD143;"><strong>WHATS NEWS</strong></h4>
                <p style="font-size: 12px; color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="col-sm-7">
                <div class="text-right">
                    <button type="button" class="btn btn-primary btn-sm">MORE NEWS</button>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px;">
            <div class="col-md-4 col-sm-8">
                <center>
                    <div class="card w3-animate-top" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview1.png')}}" alt="Avatar" class="image-card">
                            <div class="overlay">
                                <div class="text-card">Read More</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left;">
                                <strong style="color: #FFD143">Lorem ipsum dolor sit amet.</strong>
                                <br>
                                <label style="color: white">Some quick example text to build on the card title</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-4 col-sm-8">
                <center>
                    <div class="card w3-animate-top" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview2.png')}}" alt="Avatar" class="image-card">
                            <div class="overlay">
                                <div class="text-card">Read More</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left;">
                                <strong style="color: #FFD143">Lorem ipsum dolor sit amet.</strong>
                                <br>
                                <label style="color: white">Some quick example text to build on the card title</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-4 col-sm-8">
                <center>
                    <div class="card w3-animate-top" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview3.png')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <div class="text-card">Read More</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left;">
                                <strong style="color: #FFD143">Lorem ipsum dolor sit amet.</strong>
                                <br>
                                <label style="color: white">Some quick example text to build on the card title</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <div class="row" style="padding-top: 70px">
            <div class="col-sm-5">
                <h4 style="color: #FFD143;"><strong>OUR VIDEOS</strong></h4>
                <p style="font-size: 12px; color: white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="col-sm-7">
                <div class="text-right">
                    <button type="button" class="btn btn-primary btn-sm">MORE VIDEOS</button>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px; padding-bottom: 45px;">
            <div class="col-md-4">
                <center>
                    <div class="card" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/yt.vid3.png')}}" alt="Avatar" class="image-card" width="50">
                        </div>
                        <div class="card-body-videos-list" >
                            <p class="card-text" style="text-align: left;">
                                <label style="color: white">RockAroma UDUT Eps.2 Pop Punk Bukan Bucin</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="card" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/yt.vid2.png')}}" alt="Avatar" class="image-card" width="50">
                        </div>
                        <div class="card-body-videos-list" >
                            <p class="card-text" style="text-align: left;">
                                <label style="color: white">RockAroma Showcase #vol.2 | Summerlane</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="card" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/yt.vid1.png')}}" alt="Avatar" class="image-card" width="50">
                        </div>
                        <div class="card-body-videos-list" >
                            <p class="card-text" style="text-align: left;">
                                <label style="color: white">RockAroma Showcase #vol.1 | StereoWall</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <button class="act-floating-btn" onclick="window.location.href = '{{url('logout-action')}}'">Exit</button>>
    </div>
@endsection
