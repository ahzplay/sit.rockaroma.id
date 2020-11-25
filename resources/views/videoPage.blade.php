@extends('base.base')
@section('css-add-on')
    <style>
        body{
            background-image: url("{{asset('img/bg-home.png')}}");
            background-color: #212020;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top;
        }

        .video-wrapper {position: relative; padding-bottom: 56.25%; /* 16:9 */  padding-top: 25px;}
        .video-wrapper iframe {position: absolute; top: 0; left: 0; width: 100%; height: 100%;}
    </style>
    <link rel="stylesheet" href="{{asset('css/add_on/container-card.css')}}">
@endsection

@section('content')

    <div class="container" style="padding-top: 10%; padding-left: 10%; padding-right: 10%; padding-bottom: 45px;">
        <div class="row">
            <div class="col-sm-12 text-center" style="padding-bottom: 8%;">
                <h4 style="color: #FFD143;"><strong>SHOWCASE VIDEO GALLERY</strong></h4>
            </div>
        </div>

        <div class="row" >
            @foreach($videos as $val)
                <div class="col-md-4" style="padding-bottom: 5%;">
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

        <div class="row">
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="video-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="video-wrapper"></div>
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
