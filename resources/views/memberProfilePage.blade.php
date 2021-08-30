@extends('base.base')
@section('css-add-on')
    <style>
        body{
            background-image: url("{{asset('img/bg-2.jpg')}}");
            background-repeat: no-repeat;
            background-size: auto;
            background-position: top;
        }
        .login-form {
            width: 470px;
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
    <div class="loading" id="loading-div" style="display:none;"></div>
    {{--<div class="text-center" style="padding-top: 5%;"><a href="{{url('/')}}"><img class="logo" src="{{asset('img/logo-rockaroma.png')}}"></a></div>--}}
    <div class="login-form">
        <form action="#" id="register-form" method="post" enctype="multipart/form-data">
            <div class="text-center" style="font-size: 20px; font-weight: bold;">Profile</div>
            <div class="text-center" style="padding-bottom: 5%; font-size: 12px;"></div>
            <div class="form-group" >
                <label style="color: #FDDA25; font-size: 12px;">Email</label>
                <br>
                <label style="color: #FDDA25; font-size: 18px;">{{$userData->email}}</label>
            </div>
            <div class="form-group">
                <label style="color: #FDDA25; font-size: 12px;">Fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="{{$userData->profile->full_name}}" placeholder="Enter your fullname">
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
                        <input type="number" class="form-control" id="phone-number" value="{{$userData->phone_number}}" name="phoneNumber" placeholder="Ex. 081166738867">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="color: #FDDA25; font-size: 12px;">Smoker</label>
                        <div id="smoker-option" class="form-check">
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
                <div class="col-md-6">
                    <div id="cigarette-brand-select" class="form-group" style="display: none;">
                        <label style="color: #FDDA25; font-size: 12px;">Cigarette Brand</label>
                        <select class="form-control" id="cigarette-brand" name="cigaretteBrandId" placeholder="Select your cigarette">
                            <option value="">Select your cigarette</option>
                            @foreach($cigaretteBrands as $val)
                                <option value="{{$val->id}}">{{$val->cigarette_brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group" style="padding-top: 5%;">
                <button type="button" onclick="updateProfile()" class="btn btn-warning btn-block">UPDATE PROFILE</button>
            </div>
            {{--<hr>
            <div class="form-group">
                <label style="color: #FDDA25; font-size: 12px;">Old Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your old password">
            </div>
            <div class="form-group" >
                <label style="color: #FDDA25; font-size: 12px;">New Password</label>
                <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" placeholder="Enter your new password">
            </div>
            <div class="form-group" >
                <label style="color: #FDDA25; font-size: 12px;">Confirm New Password</label>
                <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" placeholder="Confirm your new password">
            </div>
            <div class="form-group" style="padding-top: 5%;">
                <button type="button" onclick="doRegister()" class="btn btn-warning btn-block">CHANGE PASSWORD</button>
            </div>--}}
        </form>

    </div>
@endsection

@section('js-add-on')
    <script>
        $(document).ready(function() {
            @if($userData->profile->is_smoker)
                document.getElementById("smoker-yes").checked = true;
                document.getElementById("smoker-no").checked = false;
                $('#cigarette-brand-select').show();
                $('#cigarette-brand-select option[value="{{$userData->profile->cigarette_brand_id}}"]').prop('selected',true);
            @else
                document.getElementById("smoker-yes").checked = false;
                document.getElementById("smoker-no").checked = true;
            @endif

            @if($userData->profile->gender == 'm')
                document.getElementById("gender-male").checked = true;
                document.getElementById("gender-female").checked = false;
            @elseif($userData->profile->gender == 'f')
                document.getElementById("gender-male").checked = false;
                document.getElementById("gender-female").checked = true;
            @else
                document.getElementById("gender-male").checked = false;
                document.getElementById("gender-female").checked = false;
            @endif

            $('#province-code option[value="{{$userData->profile->province_code}}"]').prop('selected',true);

            $("#city-code").empty();
            $.get('{{url('api/get-cities')}}/{{$userData->profile->province_code}}', function (data, status) {
                $.each(data, function(index, val) {
                    console.log(val);
                    $("#city-code").append(new Option(val['city_name'], val['city_code']));
                    $('#city-code option[value="{{$userData->profile->city_code}}"]').prop('selected',true);
                });
            });

            $('#province-code').change(function() {
                $("#city-code").empty();
                $.get('{{url('api/get-cities')}}/'+this.value, function (data, status) {
                    $.each(data, function(index, val) {
                        $("#city-code").append(new Option(val['city_name'], val['city_code']));
                    });
                })
            });
        });

        $("#smoker-option input[name='smoker']").click(function(){
            console.log('checked');
            if($('input:radio[name=smoker]:checked').val() == '1'){
                $('#cigarette-brand-select').show();
            } else {
                $('#cigarette-brand-select').hide();
            }
        });

        function updateProfile() {
            $.confirm({
                title: 'Are you sure ?',
                content: 'Your profile will be update',
                buttons: {
                    confirm: function () {
                        $('#file-demo').show();
                        $('#loading-div').show();
                        //$('#loading-div').show();
                        $.ajax({
                            type: "POST",
                            url: "{{url('api/update-member-profile')}}",
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
                                                location.reload();
                                            }
                                        }
                                    });
                                } else {
                                    $('#loading-div').hide();
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
                        $('#loading-div').hide();
                    },
                }
            });
        }
    </script>
@endsection
