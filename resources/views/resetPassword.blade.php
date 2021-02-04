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
        width: 340px;
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
        border-radius: 2px;
    }
    .btn {
        font-size: 13px;
        font-weight: bold;
    }
</style>
@endsection
@section('content')
    <div class="loading" id="loading-div" style="display:none;"></div>
    <div class="text-center" style="padding-top: 5%;"><a href="{{url('/')}}"><img class="logo" src="{{asset('img/logo-rockaroma.png')}}"></a></div>
    <div class="login-form">
        <form id="login-form" action="" method="post">
            <div class="text-center" style="font-size: 20px; font-weight: bold;">Reset Password</div>
            <div class="text-center" style="padding-bottom: 10%; font-size: 12px;"></div>
            <div class="form-group">
                <label style="color: #FDDA25; font-size: 12px;">New Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your new password">
            </div>
            <div class="form-group">
                <label style="color: #FDDA25; font-size: 12px;">Confirm Password</label>
                <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" placeholder="Confirm your new password">
            </div>
            <input type="hidden" class="form-control" id="code-confirmation" name="codeConfirmation" value="{{$codeConfirmation}}">

            <div class="form-group" style="padding-top: 15px;">
                <button type="button" class="btn btn-warning btn-block" onclick="doLogin()">CHANGE PASSWORD</button>
            </div>
        </form>
    </div>
@endsection
@section('js-add-on')
    <script>
        function doLogin() {
            $('#loading-div').show();
            $.ajax({
                type: "POST",
                url: "{{url('api/change-password-action')}}",
                data: $('#login-form').serialize(),
                processData:false,
                timeout: 60000,
                beforeSend: function(){
                    //$('#upload-demo-submit-btn').attr("disabled","disabled");
                },
                success: function(response){
                    $('#loading-div').hide();
                    if(response.status == 'success') {
                        $.confirm({
                            title: 'Success !',
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
        }
    </script>
@endsection
