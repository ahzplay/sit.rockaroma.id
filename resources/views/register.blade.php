<!DOCTYPE html>
<html lang="en">
<head>
    <title>ROCKAROMA -SIT-</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/file-upload.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('js/file-upload.js')}}"></script>

    <style>
        body{
            background-image: url("{{asset('img/img.sliderBanner.png')}}");
            background-color: black;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top;
        }

        .container-card {
            position: relative;
        }

        .image-card {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            opacity: 0;
            transition: .4s ease;
            background-color: #BD7E28;
        }

        .container-card:hover .overlay {
            opacity: 0.7;
        }

        .text-card {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        h2#linkback a:hover{
            text-decoration:underline;
        }

        .masthead {
            margin-bottom: 10rem;
        }

        .masthead-brand {
            margin-bottom: 0;
        }

        .nav-masthead .nav-link {
            padding: .25rem 0;
            font-weight: 500;
            color: white;
            border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: #FFD143; opacity:0.4;
        }

        .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
        }

        .nav-masthead .active {
            color: #FFD143;
            border-bottom-color: #FFD143;
        }

        @media (min-width: 48em) {
            .masthead-brand {
                float: left;
            }
            .nav-masthead {
                float: right;
            }
        }

        .act-floating-btn{
            background:#BD7E28;
            display: block;
            width: 120px;
            height: auto;
            line-height: 50px;
            text-align: center;
            color: white;
            font-size: 30px;
            font-weight: bold;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            text-decoration: none;
            transition: ease all 0.3s;
            position: fixed;
            right: 30px;
            bottom:50px;
        }
        .act-btn:hover{background: blue}
    </style>
</head>
<body>
<div class="bg"></div>
<jumbotron class="mb-0">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-menu-background" style="background-color: black; opacity: 0.7;"></div>
        <div class="carousel-menu">
            <div class="container">
                <header class="masthead mb-auto">
                    <div class="inner">
                        <h3 class="masthead-brand" style="color: #FFDF6C;">ROCK AROMA</h3>
                        <nav class="nav nav-masthead justify-content-center">
                            <a class="nav-link" href="{{url('landing-page')}}">HOME</a>
                            <a class="nav-link" href="#">ARTICLE</a>
                            <a class="nav-link active" href="{{url('register-page')}}">REGISTER</a>
                            <a class="nav-link" href="#">SHOP</a>
                        </nav>
                    </div>
                </header>
            </div>
        </div>


    </div>
</jumbotron>

<div class="container">
    <div class="row" style="padding-top: 8%;">
        <div class="col-sm-3" >
            <h3 style="color: #FFD143;"><strong>REGISTER FORM</strong></h3>
            <p style="font-size: 11px; color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus placerat metus</p>
            <hr style="height:3px;border:none;color:#333;background-color:#ffffff;" />
            <h4 style="color: white; padding-top: 15%;"><strong>Band Profile</strong></h4>
            <h4 style="color: white; padding-top: 10%;"><strong>Upload Demo</strong></h4>
        </div>
        <div class="col-md-1"></div>
        <div class="col-sm-8" style="background-color: #F7F7F8; border-radius: 5px; padding-top: 2%; padding-bottom: 2%; padding-right: 5%; padding-left: 5%;">
            <div class="row">
                <div class="col-md-12">
                    <h4>Band Profile</h4>
                    <hr style="height:3px;border:none;color:#333;background-color:black;" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div style="border-width: 1px; border-color: grey; border-style: dashed;">
                        <img id="profile-img" src="{{asset('img/user.group.png')}}" width="100%" style="max-height: 244px; min-height: 244px;">
                    </div>
                    <div style="padding-top: 5px;">
                        <label class="file-upload btn btn-primary btn-sm btn-block">
                            BROWSE FILE <input type="file" id="profile-img-file" />
                        </label>
                    </div>
                    <div style="padding-top: 20px;">
                        <label style="font-size: 12px;">
                            Upload your amazing band profile photo. For best result please use photo with ratio 5:4 with maximum size 5mb
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label>Band Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Band Name">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select type="text" class="form-control" id="exampleFormControlSelect1" placeholder="Select You Location">
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+62 818 2345 9876">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row" style="padding-top: 8%;">
                <div class="col-sm-12">
                    <div class="text-right">
                        <button type="button" class="btn btn-primary btn-sm">UPLOAD DEMO</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<button class="act-floating-btn" onclick="window.location.href = '{{url('logout-action')}}'">Exit</button>>

<footer class="footer" style="
    background-color: #FFD143;
    clear: both;
    position: relative;
    height: 40px;
    margin-top:0px;
">
    <div class="container" >
        <span class="text-muted" >This is not live --S--I--T--.</span>
    </div>
</footer>

<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });

    function readURL(input_files) {
        if (input_files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#profile-img').attr('src', e.target.result);
                $('#profile-img').attr('size', e.target.result);
            }

            reader.readAsDataURL(input_files[0]); // convert to base64 string
        }
    }

    $(".file-upload").change(function() {
        readURL($('#profile-img-file').prop('files'));
        console.log($('#profile-img-file').prop('files'));
    });
</script>
</body>
</html>

