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
            width: 640px;
            padding-top: 320px;
            margin: 0px auto;
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);
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
        <img src="{{asset('img/img.sliderBanner.png')}}" alt="Los Angeles" width="100%">
    </jumbotron>

    <div class="container" style="padding-left: 15%; padding-right: 15%">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-2">
                <a href="javascript:history.back()"><i class="fa fa-arrow-circle-left" style="font-size: 50px; color: #FFD143"></i></a>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <label style="color: white;">Jakarta, 20 Agustus 2020</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h4 style=" color: #FFD143;">Lorem Ipsum</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p style="color: white;">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                        </p>
                    </div>
                </div>
                <div class="row" style="padding-top: 10px; padding-bottom: 10px">
                    <div class="col-md-12">
                        <div class="col-xs-1 text-center">
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{asset('img/img.sliderBanner.png')}}" style="padding: 5px;" alt="Los Angeles" height="120" width="120"></a>

                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{asset('img/img-article1.jpg')}}" style="padding: 5px;" alt="Los Angeles" height="120" width="120"></a>
                                <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{asset('img/img.articlePreview3.png')}}" style="padding: 5px;" alt="Los Angeles" height="120" width="120"></a>
                                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{asset('img/img.articlePreview2.png')}}" style="padding: 5px;" alt="Los Angeles" height="120" width="120"></a>
                                        <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{asset('img/img.articlePreview1.png')}}" style="padding: 5px;" alt="Los Angeles" height="120" width="120"></a>
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
                                <img src="{{asset('img/img.sliderBanner.png')}}" style="width: 100px; height: 50px;">
                            </label>
                            <img src="{{asset('img/img.sliderBanner.png')}}" style="width: 640px; height: 320px;">

                            <input type="radio" name="slide_switch" id="id2" />
                            <label for="id2">
                                <img src="{{asset('img/img-article1.jpg')}}" style="width: 100px; height: 50px;">
                            </label>
                            <img src="{{asset('img/img-article1.jpg')}}" style="width: 640px; height: 320px;">

                            <input type="radio" name="slide_switch" id="id3" />
                            <label for="id3">
                                <img src="{{asset('img/img.articlePreview3.png')}}" style="width: 100px; height: 50px;">
                            </label>
                            <img src="{{asset('img/img.articlePreview3.png')}}" style="width: 640px; height: 320px;">

                            <input type="radio" name="slide_switch" id="id4" />
                            <label for="id4">
                                <img src="{{asset('img/img.articlePreview2.png')}}" style="width: 100px; height: 50px;">
                            </label>
                            <img src="{{asset('img/img.articlePreview2.png')}}" style="width: 640px; height: 320px;">

                            <input type="radio" name="slide_switch" id="id5" />
                            <label for="id5">
                                <img src="{{asset('img/img.articlePreview1.png')}}" style="width: 100px; height: 50px;">
                            </label>
                            <img src="{{asset('img/img.articlePreview1.png')}}" style="width: 640px; height: 320px;">
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
