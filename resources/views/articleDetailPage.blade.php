@extends('base.base')
@section('css-add-on')
    <link rel="stylesheet" href="https://swiperjs.com/package/swiper-bundle.min.css">
    <style>
        body{
            background-color: #212020;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: bottom;
        }

        /* Basic style for Slider */
        .slider{
            position: relative;
            width: 600px;
            padding-top: 400px;
            margin: 0px auto;
            /*box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);*/
        }

        /* Style for Image*/
        .slider>img{
            position: absolute;
            left: 0; top: 0;
            transition: all 0.5s;
        }

        .slider input[name='slide_switch'] {
            display: none;
        }

        .slider label {
            margin: 18px 0 0 18px;
            border: 3px solid #999;
            float: left;
            cursor: pointer;
            transition: all 0.5s;
            opacity: 0.6;
        }

        .slider label img{
            display: block;
        }

        .slider input[name='slide_switch']:checked+label {
            border-color: #666;
            opacity: 1;
        }
        /* Main images */
        .slider input[name='slide_switch'] ~ img {
            opacity: 0;
            transform: scale(1.1);
        }

        .slider input[name='slide_switch']:checked+label+img {
            opacity: 1;
            transform: scale(1);
        }

    </style>
@endsection

@section('content')
    <jumbotron class="mb-0">
        {{--<img src="{{asset('img/article-banner-1.png')}}" alt="Los Angeles" width="100%">--}}
        <img src="{{$articleContent['image_path']}}" width="100%">
    </jumbotron>

    <div class="container" style="padding-left: 15%; padding-right: 15%">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-2">
                <a href="javascript:history.back()"><i class="fa fa-arrow-circle-left" style="font-size: 50px; color: #FFD143"></i></a>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        {{--@php
                            $date = strtotime($data['articleContent']['created_at']);
                            $convertedDate = date('j F Y', $date);
                        @endphp--}}
                        <label style="color: white;">{{--Jakarta, --}}{{date('j F Y', strtotime($articleContent['created_at']))}}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{--<h4 style=" color: #FFD143;">Rockaroma Showcase, wadah baru bagi musisi tanah air unjuk karya terbaik ke mayarakat</h4>--}}
                        <h4 style=" color: #FFD143;">{{$articleContent['title']}}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div style="color: white;">
                            {{--Rockaroma Showcase adalah program yang dibuat oleh Rockaaroma ID untuk menjadi wadah bagi seluruh musisi berbakat tanah air unjuk karya terbaik ke masyarakat.
                            <br>
                            Pada Rockaroma Showcase Vol.1 kali ini, StereoWall unjuk gigi mengenalkan karya mereka. Band yang beranggotakan Cynantia Pratita sebagai vokalis, Rama Mayristha dan Usay Sunny sebagai di gitar, Ramadhan Satria di bass dan Frans Orrico di drum ini menunjukkan 3 karya mereka yang berjudul Blood & Light, Who Saved My Life From Crashing Down (ft. Kevin Diaz) dan Forever.
                            <br>
                            Kalian dapat menyaksikan karya mereka di YouTube Channel @rockaroma_id lho, yuk dukung terus band dan musisi favorit kalian melalui @rockaroma_id dan jangan lupa untuk comment, like dan subscribe channel @rockaroma_id ya, karena suara dan dukungan kalian adalah semangat pergerakan ini.
                            <br>
                            Rockaroma Showcase ini gak cuma ada StereoWall lho, jadi stay tune untuk tahu band mana yang akan tampil selanjutnya.--}}
                            {!! html_entity_decode($articleContent['content']) !!}
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 10px; padding-bottom: 10px">
                    <div class="col-md-12">
                        <div class="col-xs-1">
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{$articleContent['gallery_1_path']}}" style="padding: 5px;" alt="Los Angeles" height="90" width="130"></a>
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{$articleContent['gallery_2_path']}}" style="padding: 5px;" alt="Los Angeles" height="90" width="130"></a>
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{$articleContent['gallery_3_path']}}" style="padding: 5px;" alt="Los Angeles" height="90" width="130"></a>
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{$articleContent['gallery_4_path']}}" style="padding: 5px;" alt="Los Angeles" height="90" width="130"></a>
                            {{--<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{asset('img/article-gallery-5.png')}}" style="padding: 5px;" alt="Los Angeles" height="120" width="120"></a>--}}
                        </div>
                    </div>
                </div>

                <div class="row" style="padding-top: 20px; padding-bottom: 10px">
                    <div class="col-md-12">
                        <label style="color: white; font-weight: bold;">SHARE :</label>
                        <p>
                            <i class="fa fa-instagram" style="font-size: 22px; color: #FFD143; padding-right: 7%;"></i>
                            <i class="fa fa-facebook-square" style="font-size: 22px; color: #FFD143; padding-right: 7%;"></i>
                            <i class="fa fa-twitter" style="font-size: 22px; color: #FFD143;"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="background-color: #212020;">
                    <div class="modal-body">
                        <div class="slider">
                            <input type="radio" name="slide_switch" id="id1" checked="checked" />
                            <label for="id1">
                                <img src="{{$articleContent['gallery_1_path']}}" style="width: 80px; height: 53px;">
                            </label>
                            <img src="{{$articleContent['gallery_1_path']}}" style="width: 600px; height: 400px;">

                            <input type="radio" name="slide_switch" id="id2" />
                            <label for="id2">
                                <img src="{{$articleContent['gallery_2_path']}}" style="width: 80px; height: 53px;">
                            </label>
                            <img src="{{$articleContent['gallery_2_path']}}" style="width: 600px; height: 400px;">

                            <input type="radio" name="slide_switch" id="id3" />
                            <label for="id3">
                                <img src="{{$articleContent['gallery_3_path']}}" style="width: 80px; height: 53px;">
                            </label>
                            <img src="{{$articleContent['gallery_3_path']}}" style="width: 600px; height: 400px;">

                            <input type="radio" name="slide_switch" id="id4" />
                            <label for="id4">
                                <img src="{{$articleContent['gallery_4_path']}}" style="width: 80px; height: 53px;">
                            </label>
                            <img src="{{$articleContent['gallery_4_path']}}" style="width: 600px; height: 400px;">

                            <input type="radio" name="slide_switch" id="id5" />
                            <label for="id5">
                                <img src="{{$articleContent['gallery_5_path']}}" style="width: 80px; height: 53px;">
                            </label>
                            <img src="{{$articleContent['gallery_6_path']}}" style="width: 600px; height: 400px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-add-on')
    <script src="https://swiperjs.com/package/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#video-modal").on('hidden.bs.modal', function (e) {
                $(".video-wrapper iframe").attr("src", $("#video-modal iframe").attr("src"));
            });
        })
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            loop: true,
            freeMode: true,
            loopedSlides: 5, //looped slides should be the same
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            loop: true,
            loopedSlides: 5, //looped slides should be the same
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs,
            },
        });
        /*window.addEventListener('load', function () {
            var button = document.getElementById('slideBack1');
            var container = document.getElementById('carousel_indicators');

            button.addEventListener("click", function (event) {
                event.preventDefault();
                sideScroll(container, 'right', 25, 100, 10);
            });

            var back = document.getElementById('slideNext1');
            back.addEventListener("click", function (event) {
                event.preventDefault();
                sideScroll(container, 'left', 25, 100, 10);
            });

            function sideScroll(element, direction, speed, distance, step) {
                scrollAmount = 0;
                var slideTimer = setInterval(function () {
                    if (direction == 'left') {
                        element.scrollLeft -= step;
                    } else {
                        element.scrollLeft += step;
                    }
                    scrollAmount += step;
                    if (scrollAmount >= distance) {
                        window.clearInterval(slideTimer);
                    }
                }, speed);
            }
        });*/

        <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
