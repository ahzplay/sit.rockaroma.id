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
    </style>
@endsection
@section('content')

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
                            <option>Select your province</option>
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
                            <option>Select your city</option>
                            @foreach($cities as $val)
                                <option value="{{$val->city_code}}">{{$val->city_name}}</option>
                            @endforeach
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
                                    <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male">
                                    <label class="form-check-label" for="gender">
                                        Male
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-female" value="female">
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
                        <input type="text" class="form-control" id="phone-number" name="phoneNumber" placeholder="Ex. 081166738867">
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
                                    <input class="form-check-input" type="radio" name="smoker" id="smoker-yes" value="yes">
                                    <label class="form-check-label" for="smoker">
                                        Yes
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="smoker" id="smoker-no" value="no" >
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
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your fullname">
            </div>
            <div class="form-group" >
                <label style="color: #FDDA25; font-size: 12px;">Email</label>
                <input type="password" class="form-control" id="confirm-password" name="confirmPassword" placeholder="Confirm your password">
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

        function doRegister() {
            $.confirm({
                title: 'Are you sure ?',
                content: 'Your profile will be registered',
                buttons: {
                    confirm: function () {
                        $('#file-demo').hide();
                        $('.loader').show();
                        $.ajax({
                            type: "POST",
                            url: "{{url('register-member')}}",
                            data: $('#register-form').serialize(),
                            processData:false,
                            timeout: 60000,
                            beforeSend: function(){
                                //$('#upload-demo-submit-btn').attr("disabled","disabled");
                            },
                            success: function(response){
                                if(response.status) {
                                    $.alert({
                                        title: 'Something Wrong !',
                                        content: response.message
                                    });
                                }

                            },
                            error: function(){

                            },
                        });
                    },
                    cancel: function () {},
                }
            });
        }
    </script>
@endsection
