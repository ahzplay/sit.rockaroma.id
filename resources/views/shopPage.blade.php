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
        a:hover {color: #FFD143;}

    </style>
    <link rel="stylesheet" href="{{asset('css/add_on/container-card.css')}}">
@endsection

@section('content')
    <div class="container" style="padding-top: 10%; padding-left: 10%; padding-right: 10%; padding-bottom: 45px;">
        <div class="row">
            <div class="col-sm-12 text-center" style="padding-bottom: 3%;">
                <h4 style="color: #FFD143;"><strong>OUR MERCHANDISE</strong></h4>
            </div>

            <div class="col-sm-12 text-center" style="padding-bottom: 8%;">
                <label style="color: white;">&nbsp;&nbsp;<a href="#" style="text-decoration:none;">ALL</a>&nbsp;&nbsp;</label>
                <label style="color: white;">&nbsp;&nbsp;<a href="#" style="text-decoration:none;">CATEGORY 1</a>&nbsp;&nbsp;</label>
                <label style="color: white;">&nbsp;&nbsp;<a href="#" style="text-decoration:none;">CATEGORY 2</a>&nbsp;&nbsp;</label>
                <label style="color: white;">&nbsp;&nbsp;<a href="#" style="text-decoration:none;">CATEGORY 3</a>&nbsp;&nbsp;</label>
            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px;">
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview1.png')}}" alt="Avatar" class="image-card">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock one</strong>
                                <br>
                                <label style="color: white">IDR 88,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview2.png')}}" alt="Avatar" class="image-card">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock two</strong>
                                <br>
                                <label style="color: white">IDR 11,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview3.png')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock three</strong>
                                <br>
                                <label style="color: white">IDR 55,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview3.png')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock four</strong>
                                <br>
                                <label style="color: white">IDR 99,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview1.png')}}" alt="Avatar" class="image-card">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock one</strong>
                                <br>
                                <label style="color: white">IDR 88,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview2.png')}}" alt="Avatar" class="image-card">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock two</strong>
                                <br>
                                <label style="color: white">IDR 11,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview3.png')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock three</strong>
                                <br>
                                <label style="color: white">IDR 55,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview3.png')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock four</strong>
                                <br>
                                <label style="color: white">IDR 99,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview1.png')}}" alt="Avatar" class="image-card">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock one</strong>
                                <br>
                                <label style="color: white">IDR 88,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview2.png')}}" alt="Avatar" class="image-card">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock two</strong>
                                <br>
                                <label style="color: white">IDR 11,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/img.articlePreview3.png')}}" alt="Avatar" class="image-card" width="50">
                            <div class="overlay">
                                <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <p class="card-text" style="text-align: left; font-size: 12px;">
                                <strong style="color: #FFD143">Merhandise Rock three</strong>
                                <br>
                                <label style="color: white">IDR 55,999</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-3" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <a href="#" data-toggle="modal" data-target=".bd-example-modal-sm">
                            <div class="container-card" >
                                <img src="{{asset('img/img.articlePreview3.png')}}" alt="Avatar" class="image-card" width="50">
                                <div class="overlay">
                                    <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                                </div>
                            </div>
                            <div class="card-body" >
                                <p class="card-text" style="text-align: left; font-size: 12px;">
                                    <strong style="color: #FFD143">Merhandise Rock four</strong>
                                    <br>
                                    <label style="color: white">IDR 99,999</label>
                                </p>
                            </div>
                        </a>
                    </div>
                </center>
            </div>
        </div>

        {{--<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    --}}{{--<img src="{{asset('img/tokopedia-logo.png')}}" alt="Avatar" width="100">
                    <img src="{{asset('img/shopee-logo.png')}}" alt="Avatar" width="100">--}}{{--
                </div>
            </div>
        </div>--}}

        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">GRAB IT NOW</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <a href="https://tokopedia.com" target="_blank"><img src="{{asset('img/tokopedia-logo.png')}}" style="padding-right: 5%" width="80"></a>
                        <a href="https://shopee.com" target="_blank"><img src="{{asset('img/shopee-logo.png')}}" style="padding-left: 5%" width="80"></a>
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
        })

        function iframeAdjust(videoEmbed) {
            $(".video-wrapper").html(videoEmbed);
        }
    </script>
@endsection
