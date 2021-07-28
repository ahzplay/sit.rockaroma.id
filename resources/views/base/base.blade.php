<!DOCTYPE html>
<html lang="en">
<head>
    <title>ROCKAROMA -SIT-</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/circle-loader.css')}}">
    <link rel="stylesheet" href="{{asset('css/overlay-loader.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    @yield('css-add-on')

</head>
<body>
@include('base.menu')

<div class="content-wrapper">
@yield('content')
<!-- Modal Cookie -->
    <div class="modal fade in" id="cookie-modal" tabindex="-1" role="dialog" aria-labelledby="cookie-modal" aria-hidden="false" style="display: block;">
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
                        <button type="button" class="btn btn-primary">Izinkan Cookie</button>
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
        var cookie = $.cookie('the_cookie');
        if(!cookie){
            $('#cookie-modal').modal('show');
            $.cookie('the_cookie', 'the_value');
        }
    }

    $(document).ready(function() {
        showPopUp();
    });

</script>
@yield('js-add-on')

</body>
</html>

