@extends('base.base')
@section('css-add-on')
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="Kamu bisa menekan link banner ini untuk membuka artikel." />
    <meta property="og:image" content="" />
    <link rel="stylesheet" href="https://swiperjs.com/package/swiper-bundle.min.css">
    <style>
        body{
            background-color: #212020;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: bottom;
        }
    </style>
@endsection

@section('content')

    <div class="container" style="padding-left: 15%; padding-right: 15%">
        <div class="row" style="padding-top: 20%;">
            <div class="col-md-12" style="color: white; text-align: justify; padding-bottom: 5%">
                <center><img src="{{asset('img/logo-rockaroma.png')}}" style="padding-bottom: 6%;"></center>
                <p>
                    Suatu bentuk kolektif untuk mendukung semua musisi tanah air dan pecinta musik tanah air seperti kalian. Yes! Kalian yang muda, berani, punya semangat membara! Selamat datang, di Rockaroma.id!
                </p>
                <p>
                    Di ​Rockaroma.id ​kalian bebas untuk berekspresi, berbagi inspirasi, mencari informasi atau berinteraksi dengan musisi atau penikmat musik lainnya! Ayo, ikut setiap kegiatan di ​Rockaroma.id!​ Kalian bisa upload demo band kalian, ikut d​ igital event ​seru, atau dapetin merchandise keren dari musisi favorit kalian! Akses juga halaman S​yarat & Ketentuan ​untuk gali informasi lebih lagi tentang rangkaian kegiatan serta berbagai aturan di R​ockaroma.id
                </p>
                <p>
                    Selalu ada ruang apresiasi untuk kalian yang ingin karyanya didengar hingga nama kalian terdengar. R​ ockaroma​.id h​ adir buat kalian semua untuk unjuk karya-karya terbaik kalian!
                </p>
                <p>
                    Tunggu apalagi? Let’s make some noise with us!
                </p>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>
@endsection

@section('js-add-on')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0" nonce="pyhTXSu0"></script>
@endsection
