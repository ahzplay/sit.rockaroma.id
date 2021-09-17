<!DOCTYPE html>
<html lang="en">
<head>
    <title>ROCKAROMA {{Session::get('menu-title')}} -SIT-</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/circle-loader.css')}}">
    <link rel="stylesheet" href="{{asset('css/overlay-loader.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-confirm.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9R2Y4Q7LHB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-9R2Y4Q7LHB');
    </script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    <style>
        /* Absolute Center Spinner */
        .loading-overlay {
            position: fixed;
            z-index: 999;
            height: 2em;
            width: 2em;
            overflow: visible;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        /* Transparent Overlay */
        .loading-overlay:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
        }


    </style>
    @yield('css-add-on')

</head>
<body>
@include('base.menu')

<div class="content-wrapper">
@yield('content')
    <div id="overlay-screen" class="loading-overlay" style="display: none;"></div>
<!-- Modal Cookie -->
    <div class="modal fade in" id="cookie-modal" tabindex="-1" role="dialog" aria-labelledby="cookie-modal" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Situs web ini menggunakan cookie</h4>
                </div>
                <div class="modal-body">
                    Kami menggunakan cookie untuk mempersonalisasi konten dan iklan, untuk menyediakan fitur media sosial dan untuk menganalisis lalu lintas kami. Kami juga membagikan informasi tentang penggunaan Anda atas situs kami dengan mitra media sosial, periklanan, dan analitik kami yang mungkin menggabungkannya dengan informasi lain yang Anda berikan kepada mereka atau yang mereka kumpulkan dari penggunaan Anda atas layanan mereka.
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <button type="button" onclick="closePopUp()" class="btn btn-primary">Izinkan Cookie</button>
                        &nbsp;
                        <a href="{{url('term-and-condition-page')}}" class="btn btn-outline-primary">Syarat &amp; Ketentuan Cookie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@include('base.footer');

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="{{asset('js/jquery.cookie.js')}}"></script>

<script>
    function showPopUp() {
        if(!$.cookie('cookie18Alert')){
            //$('#overlay-screen').show();
            $.confirm({
                title: 'Peringatan',
                content: 'Website ini hanya diperuntukkan bagi Anda yang berusia 18 tahun ke atas',

                buttons: {
                    confirm: function () {
                        var date = new Date();
                        date.setTime(date.getTime() + (1440 * 60 * 1000));
                        $.cookie("cookie18Alert", 1, { expires: date });
                        //$('#overlay-screen').hide();
                        setCookieAccept();
                    },
                    cancel: function () {
                        showPopUp();
                    }
                },
            });
        } else {
            setCookieAccept();
        }
    }

    function setCookieAccept() {
        if(!$.cookie('cookieAccept')){
            $('#cookie-modal').modal('show');
        }
    }

    function closePopUp() {
        $.cookie('cookieAccept', 1);
        $('#cookie-modal').modal('hide');
    }

    $(document).ready(function() {
        showPopUp();
    });

</script>
@yield('js-add-on')

</body>
</html>

