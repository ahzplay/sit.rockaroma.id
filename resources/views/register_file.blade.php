@extends('base.base')

@section('css-add-on');
<style>
    body{
        background: url("{{asset('img/img.sliderBanner.png')}}") no-repeat center center fixed;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
    }

    @media (min-width: 48em) {
        #register-menu-sm {
            display: none;
        }
    }

    @media (max-width: 48em) {
        #register-menu {
            display: none;
        }

        #col-registration {
            padding-right: 5%;
            padding-left: 5%;
        }
    }
</style>

@endsection

@section('content')
    <div class="container" style="padding-bottom: 5%;">
        <div class="row" id="profile-container" style="padding-top: 8%;">
            <div id="register-menu" class="col-lg-3 col-md-3 col-sm-12">
                <h3 style="color: #FFD143;"><strong>REGISTER FORM</strong></h3>
                <p style="font-size: 11px; color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus placerat metus</p>
                <hr style="height:3px;border:none;color:#333;background-color:#ffffff;" />
                <a href="{{url('register-profile-page')}}" style="text-decoration:none;"><h4 style="color: white; padding-top: 15%;"><strong>Band Profile</strong></h4></a>
                <a href="{{url('register-file-page')}}" style="text-decoration:none;"><h4 style="color: #FFD143; padding-top: 10%;"><strong>Upload Demo</strong></h4></a>
            </div>

            <div id="register-menu-sm" class="col-lg-3 col-md-3 col-sm-12" >
                <h3 style="color: #FFD143;"><strong>REGISTER FORM</strong></h3>
                <p style="font-size: 11px; color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus placerat metus</p>
                <hr style="height:3px;border:none;color:#333;background-color:#ffffff;" />
                <a href="{{url('register-profile-page')}}" style="text-decoration:none;"><label style="color: white;"><strong>Band Profile</strong></label></a>
                <a href="{{url('register-file-page')}}" style="text-decoration:none;"><label style="color: #FFD143; "><strong>Upload Demo</strong></label></a>
            </div>
            <div class="col-md-1"></div>
            <div id="col-registration" class="col-lg-8 col-md-8 col-sm-12" style="background-color: #F7F7F8; border-radius: 5px; height: 37em; padding-top: 2%; padding-bottom: 2%; padding-right: 5%; padding-left: 5%;">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Upload Demo</h4>
                        <hr style="height:3px;border:none;color:#333;background-color:black;" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form id="upload-demo-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>File Input</label>
                                <div class="loader" style="display: none;">
                                </div><input type="file" id="file-demo" name="fileDemo" class="form-control-file" accept="audio/mp3, audio/m4a, audio/wav, video/mp4" />
                            </div>
                            <div class="form-group" style="padding-top: 2%;">
                                <label>Upload your demo video or sound : </label>
                                <ol>
                                    <li>Rename your file with your band name</li>
                                    <li>For video file upload with format .mp4</li>
                                    <li>For sound file upload with format .mp3, .m4a, .wav</li>
                                </ol>
                            </div>
                            <div class="col-sm-12" style="padding-top: 14em;">
                                <div class="text-right">
                                    <button type="button" id="upload-demo-submit-btn" onclick="uploadDemo()" class="btn btn-primary btn-sm">REGISTER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('js-add-on');

<script type="text/javascript">
    $(document).ready(function() {

    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function uploadDemo() {
        //console.log($("#file-demo")[0].files[0].size);
        if($('#file-demo').get(0).files.length === 0) {
            $.alert({
                title: 'Something wrong !',
                content: 'There is no file that you attach'
            })
        } else {
            var data = new FormData();
            data.append('fileDemo', $('#file-demo').prop('files')[0]);
            $.confirm({
                title: 'Are you sure ?',
                content: 'Your track demo will be uploaded',
                buttons: {
                    confirm: function () {
                        $('#file-demo').hide();
                        $('.loader').show();
                        $.ajax({
                            type: "POST",
                            url: "{{url('register-save-demo')}}",
                            data: data,
                            contentType: false,
                            cache: false,
                            processData:false,
                            timeout: 60000,
                            beforeSend: function(){
                                $('#upload-demo-submit-btn').attr("disabled","disabled");
                            },
                            success: function(response){ //console.log(response);
                                $('#file-demo').show();
                                $('#upload-demo-form')[0].reset()
                                $('.loader').hide();
                                $("#upload-demo-submit-btn").removeAttr("disabled");
                                $.alert({
                                    title: 'Well done !',
                                    content: 'We have received your band profile and track demo, Thank you for uploaded'
                                });
                            },
                            error: function(){
                                $('#file-demo').show();
                                $('.loader').hide();
                                $.alert({
                                    title: 'Something wrong !',
                                    content: 'Uploaded failed, please make sure your internet connection is stable'
                                });
                            },
                        });
                    },
                    cancel: function () {},
                }
            });
        }
    }
</script>
@endsection
