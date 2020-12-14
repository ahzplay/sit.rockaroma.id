@extends('base.base')

@section('css-add-on');
<style>
    body{
        background-image: url("{{asset('img/bg-register.png')}}");
        background-size: cover;

        background-position: bottom;
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
    }
</style>
<link rel="stylesheet" href="{{asset('css/loading-modal.css')}}">
<link rel="stylesheet" href="{{asset('css/file-upload.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="container" style="padding-bottom: 5%;">
        <div class="row" style="padding-top: 8%;">
            <div id="register-menu" class="col-lg-3 col-md-3 col-sm-12">
                <h3 style="color: #FFD143;"><strong>REGISTER FORM</strong></h3>
                <p style="font-size: 11px; color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus placerat metus</p>
                <hr style="height:3px;border:none;color:#333;background-color:#ffffff;" />
                <a href="#" onclick="showProfileContainer()" id="profile-label-link" style="text-decoration:none;"><h4 style=" padding-top: 15%;"><strong>Band Profile</strong></h4></a>
                <a href="#" onclick="showDemoTrackContainerIncludingCheck()" id="demo-track-label-link" style="text-decoration:none;"><h4 style=" padding-top: 10%;"><strong>Upload Demo</strong></h4></a>
            </div>

            <div id="register-menu-sm" class="col-lg-3 col-md-3 col-sm-12" >
                <h3 style="color: #FFD143;"><strong>REGISTER FORM</strong></h3>
                <p style="font-size: 11px; color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus placerat metus</p>
                <hr style="height:3px;border:none;color:#333;background-color:#ffffff;" />
                <a href="#" style="text-decoration:none;"> <label id="profile-label-link" ><strong>Band Profile</strong></label> </a>
                <a href="#" style="text-decoration:none;"> <label id="demo-track-label-link" ><strong>Upload Demo</strong></label> </a>
            </div>

            <div class="col-md-1"></div>

            <div id="profile-container" class="col-lg-8 col-md-8 col-sm-12" style="background-color: #F7F7F8; border-radius: 5px; height: 37em; padding-top: 2%; padding-bottom: 2%; padding-right: 5%; padding-left: 5%;">
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
                                BROWSE FILE <input type="file" id="profile-img-file" name="profileImgFile" accept="image/gif,image/jpeg" />
                            </label>
                        </div>
                        <div style="padding-top: 20px;">
                            <label style="font-size: 12px;">
                                Upload your amazing band profile photo. For best result please use photo with ratio 5:4 with jpg or jpeg format
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form id="profile-band-form">
                            <div class="form-group">
                                <label>Band Name</label>
                                <input type="text" class="form-control" id="band-name" name="bandName" aria-describedby="emailHelp" placeholder="Your Band Name">
                            </div>
                            <div class="form-group">
                                <label>City</label>

                                <select type="text" class="form-control form-control-lg" id="city-code" name="cityCode" placeholder="Select You Location">
                                    <option value="" selected >Select Your Location</option>
                                    @foreach($cities as $val)
                                        <option value="{{$val->city_code}}">{{$val->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="basic-url">Contact</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">+62</span>
                                    </div>
                                    <input type="text" class="form-control" id="contact" name="contact" aria-describedby="basic-addon3" placeholder="818 2345 9876">
                                </div>

                            </div>
                            <div class="col-sm-12" style="padding-top: 11em;">
                                <div class="text-right">
                                    <button type="button" id="submit-register-button" onclick="showDemoTrackContainerIncludingCheck()" class="btn btn-primary btn-sm">UPLOAD DEMO</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="demo-track-container" class="col-lg-8 col-md-8 col-sm-12" style="display: none; background-color: #F7F7F8; border-radius: 5px; height: 37em; padding-top: 2%; padding-bottom: 2%; padding-right: 5%; padding-left: 5%;">
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
                                </div><input type="file" id="demo-file" name="fileDemo" class="form-control-file" accept="audio/mp3, audio/m4a, audio/wav, video/mp4" />
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


<script src="https://www.jqueryscript.net/demo/Fullscreen-Loading-Modal-Indicator-Plugin-For-jQuery-loadingModal/js/jquery.loadingModal.js"></script>
<script src="{{asset('js/file-upload.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#profile-container').show();
        $('#profile-label-link').css('color','#FFD143');
        $('#demo-track-container').hide();
        $('#demo-track-label-link').css('color','white');
        $('.file-upload').file_upload();

        $('#city-code').select2();

        $("#contact").keypress(function (e) {
            if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
        });


        $("#demo-file").change(function(){
            //console.log($.inArray($(this).val().split('.').pop().toLowerCase(), musicExtension));
            var audioExtension = ['mp3', 'm4a', 'wav'];
            var videoExtension = ['mp4'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), audioExtension) == 0) { //0 means true, -1 false
                if($(this)[0].files[0].size > 20753206) { //size maximum 20 MB
                    $.alert({
                        title: 'Something wrong !',
                        content: 'File size maximum 20 MB for audio'
                    })
                    $("#demo-file").val('');
                }
            }

            else if ($.inArray($(this).val().split('.').pop().toLowerCase(), videoExtension) == 0) { //0 means true, -1 false
                if($(this)[0].files[0].size > 100753206) { //size maximum 100 MB
                    $.alert({
                        title: 'Something wrong !',
                        content: 'File size maximum 100 MB for video'
                    })
                    $("#demo-file").val('');
                }
            }

        })
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function showProfileContainer() {
        $('#profile-container').show();
        $('#profile-label-link').css('color','#FFD143');
        $('#demo-track-container').hide();
        $('#demo-track-label-link').css('color','white');
    }

    function showDemoTrackContainer() {
        $('#profile-container').hide();
        $('#profile-label-link').css('color','white');
        $('#demo-track-container').show();
        $('#demo-track-label-link').css('color','#FFD143');
    }


    function showDemoTrackContainerIncludingCheck() {
        //console.log($('#band-name').val());
        if(
            $('#profile-img-file').get(0).files.length <= 0 ||
            $('#band-name').val() == '' ||
            $('#city-code').val() == '' ||
            $('#contact').val() == ''
        ) {
            $.alert({
                title: "Something wrong !",
                content: "Please complete your band profile"
            })
        } else {
            $('body').loadingModal({
                position: 'auto',
                text: 'Checking Band Profile, Please Wait...',
                color: '#FFC108',
                opacity: '0.7',
                backgroundColor: 'rgb(0,0,0)',
                animation: 'cubeGrid'
            });

            var data = new FormData();
            data.append('profile-img-file', $('#profile-img-file').prop('files')[0]);
            data.append('profile-img-file', $('#profile-img-file').prop('files')[0]);
            data.append('bandName', $('#band-name').val());
            data.append('cityCode', $('#city-code').val());
            data.append('contact', $('#contact').val());

            $.ajax({
                type: "POST",
                url: "{{url('api/register-checking-profile-form')}}",
                data:
                    'profileImageFile='+$('#profile-img-file').prop('files')[0]+'&'+
                    'bandName='+$('#band-name').val()+'&'+
                    'cityCode='+$('#city-code').val()+'&'+
                    'contact='+$('#contact').val()
                ,
                timeout: 240000,
                success: function(response){
                    var delay = function(ms){ return new Promise(function(r) { setTimeout(r, ms) }) };
                    var time = 2000;

                    delay(time)
                        .then(function() { $('body').loadingModal('hide'); return delay(time); } )
                        .then(function() { $('body').loadingModal('destroy') ;} );
                    console.log(response.status);
                    if(response.status == 'success') {
                        $('#profile-container').hide();
                        $('#profile-label-link').css('color','white');
                        $('#demo-track-container').show();
                        $('#demo-track-label-link').css('color','#FFD143');
                    } else {
                        $.alert({
                            title: "Something wrong !",
                            content: "Please complete your band profile"
                        })
                    }

                },
                error: function(){
                    var delay = function(ms){ return new Promise(function(r) { setTimeout(r, ms) }) };
                    var time = 2000;

                    delay(time)
                        .then(function() { $('body').loadingModal('hide'); return delay(time); } )
                        .then(function() { $('body').loadingModal('destroy') ;} );
                    $('#demo-file').show();
                    $('.loader').hide();
                    $.alert({
                        title: 'Something wrong !',
                        content: 'Uploaded failed, please make sure your internet connection is stable'
                    });
                },
            });

        }
    }

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

    function uploadDemo() {
        //console.log($("#demo-file")[0].files[0].size);
        if($('#demo-file').get(0).files.length === 0) {
            $.alert({
                title: 'Something wrong !',
                content: 'There is no file that you attach'
            })
        } else {

            var data = new FormData();
            data.append('demoFile', $('#demo-file').prop('files')[0]);
            data.append('profileImgFile', $('#profile-img-file').prop('files')[0]);
            data.append('bandName', $('#band-name').val());
            data.append('cityCode', $('#city-code').val());
            data.append('contact', $('#contact').val());
            $.confirm({
                title: 'Are you sure ?',
                content: 'Your track demo will be uploaded',
                buttons: {
                    confirm: function () {
                        $('#demo-file').hide();
                        $('.loader').show();
                        $('body').loadingModal({
                            position: 'auto',
                            text: 'Uploading, 10%',
                            color: '#FFC108',
                            opacity: '0.7',
                            backgroundColor: 'rgb(0,0,0)',
                            animation: 'cubeGrid'
                        });
                        var delay = function(ms){ return new Promise(function(r) { setTimeout(r, ms) }) };

                        delay(1000)
                            .then(function() { $('body').loadingModal('text', 'Uploading... 8%');  return delay(200); } )
                            .then(function() { $('body').loadingModal('text', 'Uploading... 21%');  return delay(500); } )
                            .then(function() { $('body').loadingModal('text', 'Uploading... 35%');  return delay(300); } )
                            .then(function() { $('body').loadingModal('text', 'Uploading... 54%');  return delay(2000); } )
                            .then(function() { $('body').loadingModal('text', 'Uploading... 68%');  return delay(2000); } )
                            .then(function() { $('body').loadingModal('text', 'Uploading... 75%');  return delay(1500); } )
                            .then(function() { $('body').loadingModal('text', 'Uploading... 80%');  return delay(2000); } )
                            .then(function() { $('body').loadingModal('text', 'Uploading... 98%');  /*return delay(time);*/ } );
                        /*.then(function() { $('body').loadingModal('hide'); return delay(time); } )
                        .then(function() { $('body').loadingModal('destroy') ;} );*/
                        $.ajax({
                            type: "POST",
                            url: "{{url('register-save-demo')}}",
                            data: data,
                            contentType: false,
                            cache: false,
                            processData:false,
                            timeout: 300000,
                            beforeSend: function(){
                                $('#upload-demo-submit-btn').attr("disabled","disabled");
                            },
                            success: function(response){ //console.log(response);
                                var delay = function(ms){ return new Promise(function(r) { setTimeout(r, ms) }) };
                                var time = 2000;

                                delay(time)
                                    .then(function() { $('body').loadingModal('hide'); return delay(time); } )
                                    .then(function() { $('body').loadingModal('destroy') ;} );
                                if(response.status == 'success') {
                                    $('#demo-file').show();
                                    $('#upload-demo-form')[0].reset()
                                    $('#profile-band-form')[0].reset()
                                    $('#profile-img-file').val('');
                                    $('#city-code').val('val2').change();
                                    //$('#city-code option[value=""]').prop('selected',true);
                                    $('.file-upload-text').html('BROWSE FILE');
                                    $('#profile-img').attr('src', '{{asset('img/user.group.png')}}');
                                    $('.loader').hide();
                                    $('#upload-demo-submit-btn').removeAttr('disabled');
                                    $.confirm({
                                        title: 'Well done !',
                                        content: 'We have received your band profile and track demo, Thank you for uploaded',
                                        buttons: {
                                            confirm: function() {
                                                location.reload();
                                            }
                                        }
                                    });
                                } else {
                                    console.log(response);
                                    $('#demo-file').show();
                                    $('.loader').hide();
                                    $("#upload-demo-submit-btn").removeAttr("disabled");
                                    $.alert({
                                        title: 'Something wrong !',
                                        content: response.message
                                    });
                                }
                            },
                            error: function(){
                                var delay = function(ms){ return new Promise(function(r) { setTimeout(r, ms) }) };
                                var time = 2000;

                                delay(time)
                                    .then(function() { $('body').loadingModal('hide'); return delay(time); } )
                                    .then(function() { $('body').loadingModal('destroy') ;} );

                                $('#demo-file').show();
                                $('.loader').hide();
                                $("#upload-demo-submit-btn").removeAttr("disabled");
                                $.alert({
                                    title: 'Something wrong !',
                                    content: 'Uploaded failed, please make sure your internet connection is stable',
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
