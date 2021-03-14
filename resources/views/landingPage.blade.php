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
                        <a href="{{$val->link}}"><img src="{{$val->secure_url}}" alt="RockAroma Slider" style="width:100%; max-height:670px;"></a>
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
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <h4 style="color: #FDDA25;"><strong>WHATS NEWS</strong></h4>
                <p style="font-size: 12px; color: white;"></p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="text-right">
                    <a href="{{url('article-page/1/topRow')}}"  class="btn btn-primary btn-sm btn-block">MORE NEWS</a>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px;">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <center>
                    <div class="card w3-animate-top text-center" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset(isset($articles[0]['thumb_path'])?$articles[0]['thumb_path']:'img/bg-1.jpg')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <a href="{{isset($articles[0]['id'])?url('article-detail-page').'/'. urlencode($articles[0]['title']) .'/'.$articles[0]['id']:'#'}}"><div class="text-card">Read More</div></a>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left;">
                                <strong style="color: #FDDA25">{{isset($articles[0]['title'])?$articles[0]['title']:'Rockaroma Article Title'}}</strong>
                                <br>
                            <div style="color: white">{!! substr(isset($articles[0]['content'])?$articles[0]['content']:'Rockaroma Article Content', 0, 50) !!}...</div>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <center>
                    <div class="card w3-animate-top" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset(isset($articles[1]['thumb_path'])?$articles[1]['thumb_path']:'img/bg-1.jpg')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <a href="{{isset($articles[1]['id'])?url('article-detail-page').'/'. urlencode($articles[1]['title']) .'/'.$articles[1]['id']:'#'}}"><div class="text-card">Read More</div></a>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left;">
                                <strong style="color: #FDDA25">{{isset($articles[1]['title'])?$articles[1]['title']:'Rockaroma Article Title'}}</strong>
                                <br>
                            <div style="color: white">{!! substr(isset($articles[1]['content'])?$articles[1]['content']:'Rockaroma Article Content', 0, 50) !!}...</div>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <center>
                    <div class="card w3-animate-top" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset(isset($articles[2]['thumb_path'])?$articles[2]['thumb_path']:'img/bg-1.jpg')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <a href="{{isset($articles[2]['id'])?url('article-detail-page').'/'. urlencode($articles[2]['title']) .'/'.$articles[2]['id']:'#'}}"><div class="text-card">Read More</div></a>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left;">
                                <strong style="color: #FDDA25">{{isset($articles[2]['title'])?$articles[2]['title']:'Rockaroma Article Title'}}</strong>
                                <br>
                            <div style="color: white">{!! substr(isset($articles[2]['content'])?$articles[2]['content']:'Rockaroma Article Content', 0, 50) !!}...</div>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <div class="row" style="padding-top: 70px">
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <h4 style="color: #FDDA25;"><strong>OUR VIDEOS</strong></h4>
                <p style="font-size: 12px; color: white"></p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="text-right">
                    <a href="{{url('video-page/1/1/?categoryId=0')}}" class="btn btn-primary btn-block btn-sm">MORE VIDEOS</a>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px; padding-bottom: 45px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <section class="responsive slider">
                                @foreach($videos as $val)
                                    <div>
                                        <div class="card" style="width: 17.75rem;">
                                            <div class="container-card" >
                                                <a href="#" onclick="iframeAdjust('{{$val['youtube_embeded']}}')" data-toggle="modal" data-target=".bd-example-modal-lg" >
                                                    <img src="{{asset($val['secure_url'])}}" alt="Avatar" class="image-card" width="50">
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
                            </section>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div id="video-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="video-wrapper">

                    </div>
                </div>
            </div>
        </div>
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
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
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
