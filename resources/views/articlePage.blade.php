@extends('base.base')
@section('css-add-on')
    <style>
        body{
            /*background-image: url("{{asset('img/bg-home.png')}}");*/
            background-color: #1e1616;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: bottom;
        }

        .no-padding {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        #headline-image:hover {
            opacity: 1;
            transition: opacity .25s ease-in-out;
            -moz-transition: opacity .25s ease-in-out;
            -webkit-transition: opacity .25s ease-in-out;
        }

        #headline-image:hover {
            background-color: #670404;
            opacity: 0.3;
        }

    </style>
    <link rel="stylesheet" href="{{asset('css/add_on/container-card.css')}}">
@endsection

@section('content')
    <div id="topRow" class="row">
        <div class="col-md-6 no-padding" style="height: 480px;">
            <img id="headline-image" src="{{asset(isset($topThree[0]['image_path'])?$topThree[0]['image_path']:'img/bg-1.jpg')}}" style='height: 100%; width: 100%; object-fit: cover'>
            <a href="{{isset($topThree[0]['id'])?url('article-detail-page').'/'. urlencode($topThree[0]['title']) .'/'.$topThree[0]['id']:'#'}}">
            <div style="color: #FDDA25; background-color: black; opacity: 0.8; padding: 10px; position: absolute; bottom: 5%; left: 5%; width: 95%;">
                <strong>{{isset($topThree[0]['title'])?$topThree[0]['title']:'Rockaroma Article Title'}}</strong><br>
                <label style="color: white;">{!! substr(isset($topThree[0]['content'])?$topThree[0]['content']:'Rockaroma Article Content', 0, 120) !!} ...</label>
            </div>
            </a>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 no-padding" style="height: 240px;">
                    <img id="headline-image" src="{{asset(isset($topThree[1]['image_path'])?$topThree[1]['image_path']:'img/bg-1.jpg')}}" style='height: 100%; width: 100%; object-fit: cover'>
                    <a href="{{isset($topThree[1]['id'])?url('article-detail-page').'/'. urlencode($topThree[1]['title']) .'/'.$topThree[1]['id']:'#'}}">
                    <div style="color: #FDDA25; background-color: black; opacity: 0.8; padding: 10px; position: absolute; bottom: 5%; left: 5%; width: 100%;">
                        <strong>{{isset($topThree[1]['title'])?$topThree[1]['title']:'Rockaroma Article Title'}}</strong><br>
                        <label style="color: white;">{!! substr(isset($topThree[1]['content'])?$topThree[1]['content']:'Rockaroma Article Content', 0, 120) !!} ...</label>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 no-padding" style="height: 240px;">
                    <img id="headline-image" src="{{asset(isset($topThree[2]['image_path'])?$topThree[2]['image_path']:'img/bg-1.jpg')}}" style='height: 100%; width: 100%; object-fit: cover'>
                    <a href="{{isset($topThree[2]['id'])?url('article-detail-page').'/'. urlencode($topThree[2]['title']) .'/'.$topThree[2]['id']:'#'}}">
                    <div style="color: #FDDA25; background-color: black; opacity: 0.8; padding: 10px; position: absolute; bottom: 5%; left: 5%; width: 100%;">
                        <strong>{{isset($topThree[2]['title'])?$topThree[2]['title']:'Rockaroma Article Title'}}</strong><br>
                        <label style="color: white;">{!! substr(isset($topThree[2]['content'])?$topThree[2]['content']:'Rockaroma Article Content', 0, 120) !!} ...</label>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="searchLanding" class="container" style="padding-left: 10%; padding-right: 10%;">
        <div class="row" style="padding-top: 30px">
            <div class="col-sm-9">
                <h4 style="color: #FDDA25;"><strong>WHATS NEWS</strong></h4>
            </div>
            <div class="col-sm-3">
                <div class="text-right">
                    <input id="search-keyword" type="text" class="form-control" placeholder="&#xF002; Search by keyword" style="font-family:Arial, FontAwesome" >
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px;">>
            @foreach($raw as $val)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card w3-animate-top text-center" style="width: 17.75rem;">
                        <center>
                            <div class="container-card" >
                                <img src="{{asset($val['image_path'])}}" alt="Avatar" class="image-card article-card">
                                <div class="overlay">
                                    <a href="{{url('article-detail-page/').'/'. urlencode($val['title']) .'/'.$val['id']}}"><div class="text-card">Read More</div></a>
                                </div>
                            </div>
                            <div class="card-body" >
                                <p class="card-text" style="text-align: left;">
                                    <strong style="color: #FDDA25">{{$val['title']}}</strong>
                                    <br>
                                    <div style="color: white; text-align: left">{!! substr($val['content'], 0, 50)  !!} ... </div>
                                </p>
                            </div>
                        </center>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            @if(Request::segment(2)>1)
                                @php
                                    $prevPage = Request::segment(2)-1;
                                @endphp
                                <a class="page-link" href="{{url('article-page/').'/'.$prevPage.'/searchLanding?keyword='}}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            @else
                                <a class="page-link" href="" aria-label="Previous" style="pointer-events: none; cursor: default;">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            @endif
                        </li>
                        @for ($i = 1; $i <= $page; $i++)
                            <li class="page-item">
                                <a class="page-link" href="{{url('article-page/').'/'.$i.'/searchLanding?keyword='}}">
                                    @if(Request::segment(2) == $i)
                                        <strong>{{$i}}</strong>
                                    @else
                                        {{$i}}
                                    @endif
                                </a>
                            </li>
                        @endfor
                        <li class="page-item">
                            @if(Request::segment(2)<$page)
                                @php
                                    $nextPage = Request::segment(2)+1;
                                @endphp
                                <a class="page-link" href="{{url('article-page/').'/'.$nextPage.'/searchLanding?keyword='}}" aria-label="Previous">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
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
      </div>
@endsection

@section('js-add-on')
    <script>
        $(document).ready(function() {
            $('html, body').animate({
                scrollTop: $('#{{Request::segment(3)}}').offset().top
            }, 'slow');


            $("#search-keyword").on('keyup', function (e) {
                var keyword = encodeURI($(this).val());

                if (e.key === 'Enter' || e.keyCode === 13) {
                    window.location.href = '{{url('article-page/').'/1/searchLanding?keyword='}}'+keyword;
                }
            });
        })
    </script>
@endsection
