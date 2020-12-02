@extends('base.base')
@section('css-add-on')
    <style>
        body{
            background-image: url("{{asset('img/bg-home.png')}}");
            background-color: #212020;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: bottom;
        }

        .video-wrapper {position: relative; padding-bottom: 56.25%; /* 16:9 */  padding-top: 25px;}
        .video-wrapper iframe {position: absolute; top: 0; left: 0; width: 100%; height: 100%;}
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
                    <a href="{{url('article-page/1/topRow')}}"  class="btn btn-primary btn-sm">MORE NEWS</a>
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
                                <a href="{{url('article-detail-page')}}"><div class="text-card">Read More</div></a>
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
                                <a href="{{url('article-detail-page')}}"><div class="text-card">Read More</div></a>
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
                                <a href="{{url('article-detail-page')}}"><div class="text-card">Read More</div></a>
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
                    <a href="{{url('video-page/1')}}" class="btn btn-primary btn-sm">MORE VIDEOS</a>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px; padding-bottom: 45px;">
            @foreach($videos as $val)
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
            @endforeach
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
        })

        function iframeAdjust(videoEmbed) {
            $(".video-wrapper").html(videoEmbed);
        }
    </script>
@endsection
