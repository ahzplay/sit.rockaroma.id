@extends('base.baseBlank')
@section('css-add-on');
    <style>
        body{
            background-image: url("{{asset('img/bg-2.jpg')}}");
            background-repeat: no-repeat;
            background-size: auto;
            background-position: top;
        }

        .login-form {
            width: 37%;
            margin: 2% auto;
            color: white;
        }
        .login-form form {
            border-radius: 10px;
            margin-bottom: 15px;
            background: #212529;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 25px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 20px;
            height: 30px;
            border-radius: 5px;
        }
        .btn {
            font-size: 13px;
            font-weight: bold;
        }

        /* Absolute Center Spinner */
        .loading {
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
        .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.3);
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 1em;
            height: 1em;
            margin-top: -0.5em;
            -webkit-animation: spinner 1500ms infinite linear;
            -moz-animation: spinner 1500ms infinite linear;
            -ms-animation: spinner 1500ms infinite linear;
            -o-animation: spinner 1500ms infinite linear;
            animation: spinner 1500ms infinite linear;
            border-radius: 0.5em;
            -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
            box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
        }

        /* Animation */

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
@endsection
@section('content')
    <div class="loading" id="loading-div" style="display:none;"></div>
    <div class="text-center" style="padding-top: 5%;"><a href="{{url('/')}}"><img class="logo" src="{{asset('img/logo-rockaroma.png')}}"></a></div>
    <div class="login-form">
        <form action="#" id="register-form" method="post" enctype="multipart/form-data">
            <div class="text-center" style="font-size: 20px; font-weight: bold;">Lorem Ipsum</div>
            <div class="text-center" style="padding-bottom: 5%; font-size: 12px;">Lorem ipsum dolor sit amet, consector</div>
            <div class="form-group">
                <label style="color: #FDDA25; font-size: 12px;">Fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your fullname">
            </div>
            <div class="form-group" >
                <label style="color: #FDDA25; font-size: 12px;">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                <div style="font-size: 8px; color: #FDDA25; padding-top: 1%;"> *Pastikan anda menggunakan akun gmail, bukan yang lain! </div>
                <div style="font-size: 8px; color: #FDDA25;"> *Verifikasi akun akan dikirim memalui email, pastikan email kalian aktif </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="color: #FDDA25; font-size: 12px;">Province</label>
                        <select class="form-control" id="province-code" name="provinceCode" placeholder="Select your province">
                            <option value="">Select your province</option>
                            @foreach($provinces as $val)
                                <option value="{{$val->province_code}}">{{$val->province_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="color: #FDDA25; font-size: 12px;">City</label>
                        <select class="form-control" id="city-code" name="cityCode" placeholder="Select your city">
                            <option value="">Select your city</option>
                            {{--@foreach($cities as $val)
                                <option value="{{$val->city_code}}">{{$val->city_name}}</option>
                            @endforeach--}}
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="color: #FDDA25; font-size: 12px;">Gender</label>
                        <div class="form-check">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-male" value="m">
                                    <label class="form-check-label" for="gender">
                                        Male
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-female" value="f">
                                    <label class="form-check-label" for="gender">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="color: #FDDA25; font-size: 12px;">Handphone</label>
                        <input type="number" class="form-control" id="phone-number" name="phoneNumber" placeholder="Ex. 081166738867">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="color: #FDDA25; font-size: 12px;">Smoker</label>
                        <div class="form-check">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="smoker" id="smoker-yes" value="1">
                                    <label class="form-check-label" for="smoker">
                                        Yes
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="smoker" id="smoker-no" value="0" >
                                    <label class="form-check-label" for="smoker">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label style="color: #FDDA25; font-size: 12px;">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group" >
                <label style="color: #FDDA25; font-size: 12px;">Confirm Password</label>
                <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" placeholder="Confirm your password">
            </div>

            <div class="form-group" style="padding-top: 5%;">
                <button type="button" onclick="doRegister()" class="btn btn-warning btn-block">LOGIN</button>
            </div>
            <div class="text-center" style="font-size: 12px;"> Already have account ? <a href="{{url('login-page')}}" style="color: #FDDA25;">Login</a> </div>
        </form>

    </div>
@endsection
@section('js-add-on')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#province-code').change(function() {
                $("#city-code").empty();
                $.get('{{url('api/get-cities')}}/'+this.value, function (data, status) {
                    $.each(data, function(index, val) {
                        $("#city-code").append(new Option(val['city_name'], val['city_code']));
                    });
                })
            });
        });

        function doRegister() {
            $('#loading-div').show();
            $.confirm({
                title: 'Are you sure ?',
                content: 'Your profile will be registered',
                buttons: {
                    confirm: function () {
                        $('#file-demo').hide();
                        $('.loader').show();
                        $.ajax({
                            type: "POST",
                            url: "{{url('api/register-member')}}",
                            data: $('#register-form').serialize(),
                            processData:false,
                            timeout: 60000,
                            beforeSend: function(){
                                //$('#upload-demo-submit-btn').attr("disabled","disabled");
                            },
                            success: function(response){
                                $('#loading-div').hide();
                                if(response.status == 'success') {
                                    $.alert({
                                        title: 'Successfull !',
                                        content: response.message,
                                    });
                                    $.confirm({
                                        title: 'Well done !',
                                        content: response.message,
                                        buttons: {
                                            confirm: function() {
                                                window.location.replace("{{url('login-page')}}");
                                            }
                                        }
                                    });
                                } else {
                                    $.alert({
                                        title: 'Something Wrong !',
                                        content: response.message
                                    });
                                }

                            },
                            error: function(){
                                $('#loading-div').hide();
                            },
                        });
                    },
                    cancel: function () {
                        $('#loading-div').show();
                    },
                }
            });
        }
    </script>
@endsection
