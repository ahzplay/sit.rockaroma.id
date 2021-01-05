@extends('base.base')
@section('css-add-on')
    <style>
        body{
            background-image: url("{{asset('img/bg-1.jpg')}}");
            background-color: #1e1616;
            background-repeat: repeat;
            background-size: auto;
            background-position: bottom;
        }

        .video-wrapper {position: relative; padding-bottom: 56.25%; /* 16:9 */  padding-top: 25px;}
        .video-wrapper iframe {position: absolute; top: 0; left: 0; width: 100%; height: 100%;}

        * {
            box-sizing: border-box;
        }

        .slider {
            width: 100%;
            /*margin: 100px auto;*/
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }

    </style>
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/add_on/container-card.css')}}">
@endsection

@section('content')
    <jumbotron class="mb-0">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            {{--<ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>--}}
            <div class="carousel-inner">
                {{--<div class="carousel-item active">
                    <img src="{{asset('img/slider1.jpg')}}" alt="RockAroma Slider" style="width:100%; max-height:670px;">
                </div>--}}
                @foreach($sliders as $val)
                    <div class="carousel-item {{$val->order==0?'active':''}}">
                        <img src="{{$val->secure_url}}" alt="RockAroma Slider" style="width:100%; max-height:670px;">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </jumbotron>

    <div class="container" >
        <div class="row" style="padding-top: 30px">
            <div class="col-sm-5">
                <h4 style="color: #FDDA25;"><strong>WHATS NEWS</strong></h4>
                <p style="font-size: 12px; color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="col-sm-7">
                <div class="text-right">
                    <a href="{{url('article-page/1/topRow')}}"  class="btn btn-primary btn-sm">MORE NEWS</a>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px;">
            <div class="col-md-4 col-sm-8">
                <center>
                    <div class="card w3-animate-top" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/article-endank-6.png')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <a href="{{url('article-detail-page')}}"><div class="text-card">Read More</div></a>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left;">
                                <strong style="color: #FDDA25">Rockaroma Showcase</strong>
                                <br>
                                <label style="color: white">Wadah baru bagi musisi tanah air unjuk karya terbaik mereka ke masyarakat</label>
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
                                <a href="{{url('article-detail-page')}}"><div class="text-card">Read More</div></a>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left;">
                                <strong style="color: #FDDA25">Nasib event musik masa kini</strong>
                                <br>
                                <label style="color: white">Pandemi membuatevent musik tidak bisa dilakukan,nasib pelakunya ?</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-4 col-sm-8">
                <center>
                    <div class="card w3-animate-top" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/article-endank-7.png')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <a href="{{url('article-detail-page')}}"><div class="text-card">Read More</div></a>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left;">
                                <strong style="color: #FDDA25">Behind the scene:Rockaroma showcase</strong>
                                <br>
                                <label style="color: white">Behind the scene:Rockaroma showcase</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <div class="row" style="padding-top: 70px">
            <div class="col-sm-5">
                <h4 style="color: #FDDA25;"><strong>OUR VIDEOS</strong></h4>
                <p style="font-size: 12px; color: white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="col-sm-7">
                <div class="text-right">
                    <a href="{{url('video-page/1')}}" class="btn btn-primary btn-sm">MORE VIDEOS</a>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px; padding-bottom: 45px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-4">
                        <center>
                            <section class="responsive slider">
                                @foreach($videos as $val)
                                    <div>
                                        <div class="card" style="width: 17.75rem;">
                                            <div class="container-card" >
                                                <a href="#" onclick="iframeAdjust('{{$val['videoEmbed']}}')" data-toggle="modal" data-target=".bd-example-modal-lg" >
                                                    <img src="{{asset($val['thumbPath'])}}" alt="Avatar" class="image-card" width="50">
                                                </a>
                                            </div>
                                            <div class="card-body-videos-list" >
                                                <p class="card-text" style="text-align: left;">
                                                    <label style="color: white">{{$val['title']}}</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{--<div>
                                    <img src="http://placehold.it/350x300?text=6">
                                </div>--}}
                            </section>
                        </center>
                    </div>
                </div>
            </div>
            {{--@foreach($videos as $val)
                <div class="col-md-4">
                    <center>
                        <div class="card" style="width: 17.75rem;">
                            <div class="container-card" >
                                <a href="#" onclick="iframeAdjust('{{$val['videoEmbed']}}')" data-toggle="modal" data-target=".bd-example-modal-lg" >
                                    <img src="{{asset($val['thumbPath'])}}" alt="Avatar" class="image-card" width="50">
                                </a>
                            </div>
                            <div class="card-body-videos-list" >
                                <p class="card-text" style="text-align: left;">
                                    <label style="color: white">{{$val['title']}}</label>
                                </p>
                            </div>
                        </div>
                    </center>
                </div>
            @endforeach--}}
            {{--<div class="col-md-4">
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
                            <a id="video-thumb-link" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" video-embed-link="https://youtu.be/embed/Th_r5mcFoXY" >
                                <img src="{{asset('img/yt.vid2.png')}}" alt="Avatar" class="image-card" width="50">
                            </a>
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
                            <a id="video-thumb-link" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" video-embed-link="https://www.youtube.com/embed/CDd_2e9oqVA" >
                                <img src="{{asset('img/yt.vid1.png')}}" alt="Avatar" class="image-card" width="50">
                            </a>
                        </div>
                        <div class="card-body-videos-list" >
                            <p class="card-text" style="text-align: left;">
                                <label style="color: white">RockAroma Showcase #vol.1 | StereoWall</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>--}}
        </div>
        <div id="video-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="video-wrapper">

                    </div>
                </div>
            </div>
        </div>
        <button class="act-floating-btn" onclick="window.location.href = '{{url('logout-action')}}'">Exit</button>>
    </div>
@endsection

@section('js-add-on')
    <script>
        $(document).ready(function() {
            $("#video-modal").on('hidden.bs.modal', function (e) {
                $(".video-wrapper iframe").attr("src", $("#video-modal iframe").attr("src"));
            });

            $('#myCarousel.slide').carousel({
                interval: 4000,
                pause: "none"
            });
        })

        function iframeAdjust(videoEmbed) {
            $(".video-wrapper").html(videoEmbed);
        }
    </script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {
            $('.autoplay').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
            $(".center").slick({
                dots: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
            $(".variable").slick({
                dots: true,
                infinite: true,
                variableWidth: true
            });
        });


        $('.responsive').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endsection
