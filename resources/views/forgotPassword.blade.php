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
            <div class="text-center" style="font-size: 20px; font-weight: bold;">Forgot Password</div>
            <div class="text-center" style="padding-bottom: 10%; font-size: 12px;"></div>
            <div class="form-group">
                <label style="color: #FDDA25; font-size: 12px;">Enter your email and we'll send you a link to reset your password.</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-warning btn-block" onclick="doLogin()">SEND EMAIL</button>
            </div>
            <div class="text-center" style="font-size: 12px;"> Back to <a href="{{url('login-page')}}" style="color: #FDDA25;">Login</a> </div>
        </form>

    </div>
@endsection
@section('js-add-on')
    <script>
        function doLogin() {
            $('#loading-div').show();
            $.ajax({
                type: "POST",
                url: "{{url('api/reset-password-action')}}",
                data: $('#login-form').serialize(),
                processData:false,
                timeout: 60000,
                beforeSend: function(){
                    //$('#upload-demo-submit-btn').attr("disabled","disabled");
                },
                success: function(response){
                    $('#loading-div').hide();
                    if(response.status == 'success') {
                        $('#email').val('');
                        $.alert({
                            title: 'Success !',
                            content: response.message
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
