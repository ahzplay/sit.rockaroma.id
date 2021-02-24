@extends('base.base')
@section('css-add-on')
    <style>
        body{
            background-image: url("{{asset('img/bg-4.jpg')}}");
            background-color: #1e1616;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top;
        }

        a:hover {
            color: #FDDA25;
        }

        .video-wrapper {position: relative; padding-bottom: 56.25%; /* 16:9 */  padding-top: 25px;}
        .video-wrapper iframe {position: absolute; top: 0; left: 0; width: 100%; height: 100%;}
    </style>
    <link rel="stylesheet" href="{{asset('css/add_on/container-card.css')}}">
@endsection

@section('content')

    <div class="container" style="padding-top: 10%; padding-left: 10%; padding-right: 10%; padding-bottom: 45px;">
        <div class="row">
            <div class="col-sm-12 text-center" style="padding-bottom: 3%;">
                <h4 style="color: #FDDA25;"><strong>VIDEO GALLERY</strong></h4>
            </div>

                <div class="col-sm-12 text-center" style="padding-bottom: 11%;">
                    <center>
                        @if(Session::get('category-active') == 0)
                            <label style="color: #FFFFFF;">&nbsp;&nbsp;<a href="{{url('video-page/1/1/?categoryId=0')}}" style="text-decoration:none;">All</a>&nbsp;&nbsp;</label>
                        @else
                            <label style="color: #FDDA25;">&nbsp;&nbsp;<a href="{{url('video-page/1/1/?categoryId=0')}}" style="text-decoration:none;">All</a>&nbsp;&nbsp;</label>
                        @endif
                        @foreach($category as $val)
                            @if(Session::get('category-active') == $val['id'])
                                <label style="color: #FFFFFF;">&nbsp;&nbsp;<a href="{{url('video-page/1/0/?categoryId=').$val['id']}}" style="text-decoration:none;">{{$val['name']}}</a>&nbsp;&nbsp;</label>
                            @else
                                <label style="color: #FDDA25;">&nbsp;&nbsp;<a href="{{url('video-page/1/0/?categoryId=').$val['id']}}" style="text-decoration:none;">{{$val['name']}}</a>&nbsp;&nbsp;</label>
                            @endif

                    @endforeach
                    {{--<center>
                        <select class="form-control-yellow" id="category-select" style="width:auto;">
                            <option value="{{url('shop-page/1/1/?categoryId=0')}}">All</option>
                            @foreach($category as $val)
                                <option value="{{url('shop-page/1/0/?categoryId=').$val['id']}}">{{$val['name']}}</option>
                            @endforeach
                        </select>
                    </center>--}}
                    </center>
                </div>

        </div>

        <div class="row" >
            @foreach($raw as $val)
                <div class="col-md-4" style="padding-bottom: 5%;">
                    <center>
                        <div class="card" style="width: 17.75rem;">
                            <div class="container-card" >
                                <a href="#" onclick="iframeAdjust('{{$val['youtube_embeded']}}')" data-toggle="modal" data-target=".bd-example-modal-lg" >
                                    <img src="{{($val['secure_url'])}}" alt="Avatar" class="image-card" width="50">
                                </a>
                            </div>
                            <div class="card-body-videos-list" >
                                <p class="card-text" style="text-align: left;">
                                    <label style="color: white">{{$val['title']}}</label>
                                </p>
                            </div>
                        </div>
                    </center>
                </div>
            @endforeach
            {{--<div class="col-md-4">
                <center>
                    <div class="card" style="width: 17.75rem;">
                        <div class="container-card" >
                            <img src="{{asset('img/yt.vid3.png')}}" alt="Avatar" class="image-card" width="50">
                        </div>
                        <div class="card-body-videos-list" >
                            <p class="card-text" style="text-align: left;">
                                <label style="color: white">RockAroma UDUT Eps.2 Pop Punk Bukan Bucin</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="card" style="width: 17.75rem;">
                        <div class="container-card" >
                            <a id="video-thumb-link" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" video-embed-link="https://youtu.be/embed/Th_r5mcFoXY" >
                                <img src="{{asset('img/yt.vid2.png')}}" alt="Avatar" class="image-card" width="50">
                            </a>
                        </div>
                        <div class="card-body-videos-list" >
                            <p class="card-text" style="text-align: left;">
                                <label style="color: white">RockAroma Showcase #vol.2 | Summerlane</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="card" style="width: 17.75rem;">
                        <div class="container-card" >
                            <a id="video-thumb-link" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" video-embed-link="https://www.youtube.com/embed/CDd_2e9oqVA" >
                                <img src="{{asset('img/yt.vid1.png')}}" alt="Avatar" class="image-card" width="50">
                            </a>
                        </div>
                        <div class="card-body-videos-list" >
                            <p class="card-text" style="text-align: left;">
                                <label style="color: white">RockAroma Showcase #vol.1 | StereoWall</label>
                            </p>
                        </div>
                    </div>
                </center>
            </div>--}}
        </div>



            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            @if(Request::segment(2)>1)
                                @php
                                    $prevPage = Request::segment(2)-1;
                                @endphp

                                @if(Session::get('category-active') == 0)
                                    <a class="page-link" href="{{url('video-page/').'/'.$prevPage.'/'.'1?categoryId=' . Session::get('category-active')}}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                @else
                                    <a class="page-link" href="{{url('video-page/').'/'.$prevPage.'/'.'0?categoryId=' . Session::get('category-active')}}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                @endif

                            @else
                                <a class="page-link" href="" aria-label="Previous" style="pointer-events: none; cursor: default;">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            @endif
                        </li>
                        @for ($i = 1; $i <= $page; $i++)
                            <li class="page-item">
                                @if(Session::get('category-active') == 0)
                                    <a class="page-link" href="{{url('video-page/').'/'.$i.'/'.'1?categoryId=' . Session::get('category-active')}}" >
                                        @if(Request::segment(2) == $i)
                                            <strong>{{$i}}</strong>
                                        @else
                                            {{$i}}
                                        @endif
                                    </a>
                                @else
                                    <a class="page-link" href="{{url('video-page/').'/'.$i.'/'.'0?categoryId=' . Session::get('category-active')}}" >
                                        @if(Request::segment(2) == $i)
                                            <strong>{{$i}}</strong>
                                        @else
                                            {{$i}}
                                        @endif
                                    </a>
                                @endif
                            </li>
                        @endfor
                        <li class="page-item">
                            @if(Request::segment(2)<$page)
                                @php
                                    $nextPage = Request::segment(2)+1;
                                @endphp
                                @if(Session::get('category-active') == 0)
                                    <a class="page-link" href="{{url('video-page/').'/'.$nextPage.'/'.'1?categoryId=' . Session::get('category-active')}}" aria-label="Previous">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                @else
                                    <a class="page-link" href="{{url('video-page/').'/'.$nextPage.'/'.'0?categoryId=' . Session::get('category-active')}}" aria-label="Previous">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                @endif
                            @else
                                <a class="page-link" href="" aria-label="Previous" style="pointer-events: none; cursor: default;">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            @endif
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="video-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="video-wrapper"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-add-on')
    <script>
        $(document).ready(function() {
            $("#video-modal").on('hidden.bs.modal', function (e) {
                $(".video-wrapper iframe").attr("src", $("#video-modal iframe").attr("src"));
            });
        })

        function iframeAdjust(videoEmbed) {
            $(".video-wrapper").html(videoEmbed);
        }
    </script>
@endsection
