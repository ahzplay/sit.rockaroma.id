<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body{
            background-image: url("{{asset('img/bg.bottomSquare.png')}}");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: bottom;
        }

        .container-card {
            position: relative;
        }

        .image-card {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            opacity: 0;
            transition: .4s ease;
            background-color: #BD7E28;
        }

        .container-card:hover .overlay {
            opacity: 0.7;
        }

        .text-card {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        h2#linkback a:hover{
            text-decoration:underline;
        }

        .masthead {
            margin-bottom: 10rem;
        }

        .masthead-brand {
            margin-bottom: 0;
        }

        .nav-masthead .nav-link {
            padding: .25rem 0;
            font-weight: 500;
            color: white;
            border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: #FFD143; opacity:0.4;
        }

        .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
        }

        .nav-masthead .active {
            color: #FFD143;
            border-bottom-color: #FFD143;
        }

        @media (min-width: 48em) {
            .masthead-brand {
                float: left;
            }
            .nav-masthead {
                float: right;
            }
        }
    </style>
</head>
<body>
<div class="bg"></div>
<jumbotron class="mb-0">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-menu-background" style="background-color: black; opacity: 0.7;"></div>
        <div class="carousel-menu">
            <div class="container">
                <header class="masthead mb-auto">
                    <div class="inner">
                        <h3 class="masthead-brand" style="color: #FFDF6C;">ROCK AROMA</h3>
                        <nav class="nav nav-masthead justify-content-center">
                            <a class="nav-link active" href="#">HOME</a>
                            <a class="nav-link" href="#">ARTICLE</a>
                            <a class="nav-link" href="#">REGISTER</a>
                            <a class="nav-link" href="#">SHOP</a>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
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

<div class="container">

    <div class="row" style="padding-top: 30px">
        <div class="col-sm-5">
            <h4 style="color: #670404"><strong>WHATS NEWS</strong></h4>
            <p style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
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
                <div class="card" style="width: 17.75rem;">
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
                <div class="card" style="width: 17.75rem;">
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
                <div class="card" style="width: 17.75rem;">
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
</div>

<button class="act-floating-btn" onclick="window.location.href = '{{url('logout-action')}}'">Exit</button>>

<footer class="footer" style="background-color: #FFD143;">
    <div class="container" >
        <span class="text-muted" >Place sticky footer content here.</span>
    </div>
</footer>

</body>
</html>

