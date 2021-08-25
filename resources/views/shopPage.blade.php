@extends('base.base')
@section('css-add-on')
    <style>
        html{
            height: 100%;
        }
        body{
            background-image: url("{{asset('img/bg-3.jpg')}}");
            background-color: #1e1616;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top;
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        a:hover {color: #FDDA25;}
    </style>
    <link rel="stylesheet" href="{{asset('css/add_on/container-card.css')}}">
@endsection

@section('content')
    <div class="container" style="padding-top: 10%; padding-left: 10%; padding-right: 10%; padding-bottom: 45px;">
        <div class="row">
            <div class="col-sm-12 text-center" style="padding-bottom: 3%;">
                <h4 style="color: #FDDA25;"><strong>OUR MERCHANDISE</strong></h4>
            </div>

            <div class="col-sm-12 text-center" style="padding-bottom: 8%;">
                {{--<label class="dropdown">
                    <select>
                        <option>All</option>
                        @foreach($category as $val)
                            <option value="{{url('shop-page/1/0/?categoryId=').$val['id']}}">{{$val['name']}}</option>
                        @endforeach
                    </select>
                </label>--}}
                {{--<label style="color: white;">&nbsp;&nbsp;<a href="{{url('shop-page/1/1/?categoryId=0')}}" style="text-decoration:none;">All</a>&nbsp;&nbsp;</label>
                @foreach($category as $val)
                    <label style="color: white;">&nbsp;&nbsp;<a href="{{url('shop-page/1/0/?categoryId=').$val['id']}}" style="text-decoration:none;">{{$val['name']}}</a>&nbsp;&nbsp;</label>
                @endforeach--}}
                <center>
                    <select class="form-control-yellow" id="category-select" style="width:auto;">
                        <option uri="{{url('shop-page/1/1/?categoryId=0')}}" value="0">All</option>
                        @foreach($category as $val)
                            <option uri="{{url('shop-page/1/0/?categoryId=').$val['id']}}" value="{{$val['id']}}">{{$val['name']}}</option>
                        @endforeach
                    </select>
                </center>

            </div>
        </div>

        <div class="row" style="padding-top: 35px; padding-left: 25px; padding-right: 25px;">
            @foreach($raw as $val)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" style="padding-bottom: 5%;">
                <center>
                    <div class="card w3-animate-top" style="width: 13rem;">
                        <a href="#" onclick="openOlshopModal('{{$val['tokopedia_url']}}' , '{{$val['shopee_url']}}' )" data-toggle="modal" data-target=".bd-example-modal-sm">
                            <div class="container-card" >
                                <img src="{{asset($val['secure_url'])}}" alt="Avatar" class="image-card">
                                <div class="overlay">
                                    <div class="text-card" style="font-size: 11px;">GRAB IT NOW</div>
                                </div>
                            </div>
                            <div class="card-body" >
                                <p class="card-text text-center" style="text-align: left; font-size: 12px;">
                                    <strong style="color: #FDDA25">{{$val['name']}}</strong>
                                    <br>
                                    <label style="color: white">IDR {{number_format($val['price'], 0, '', '.')}}</label>
                                </p>
                            </div>
                        </a>
                    </div>
                </center>
            </div>
            @endforeach
        </div>

        <div id="olshop-modal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">GRAB IT NOW</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <a id="tokopedia-url" href="#" target="_blank"><img src="{{asset('img/tokopedia-logo.png')}}" style="padding-right: 5%" width="80"></a>
                        <img id="tokopedia-not-available" src="{{asset('img/tokopedia-logo-not-avail.png')}}" style="padding-left: 5%; display: none;" width="80">
                        <a id="shopee-url" href="#" target="_blank"><img src="{{asset('img/shopee-logo.png')}}" style="padding-left: 5%" width="80"></a>
                        <img id="shopee-not-available" src="{{asset('img/shopee-logo-not-avail.png')}}" style="padding-left: 5%; display: none;" width="80">
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="row">
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="" aria-label="Previous" style="pointer-events: none; cursor: default;">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                1
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="" aria-label="Previous" style="pointer-events: none; cursor: default;">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>--}}

        <div class="row">
            <div class="col-md-12 text-center">
                {{Request::segment(2)}}
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            @if(Request::segment(2)>1)
                                @php
                                    $prevPage = Request::segment(2)-1;
                                @endphp

                                @if(Session::get('category-active') == 0)
                                    <a class="page-link" href="{{url('shop-page/').'/'.$prevPage.'/'.'1?categoryId=' . Session::get('category-active')}}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                @else
                                    <a class="page-link" href="{{url('shop-page/').'/'.$prevPage.'/'.'0?categoryId=' . Session::get('category-active')}}" aria-label="Previous">
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
                                    <a class="page-link" href="{{url('shop-page/').'/'.$i.'/'.'1?categoryId=' . Session::get('category-active')}}" >
                                        @if(Request::segment(2) == $i)
                                            <strong>{{$i}}</strong>
                                        @else
                                            {{$i}}
                                        @endif
                                    </a>
                                @else
                                    <a class="page-link" href="{{url('shop-page/').'/'.$i.'/'.'0?categoryId=' . Session::get('category-active')}}" >
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
                                    <a class="page-link" href="{{url('shop-page/').'/'.$nextPage.'/'.'1?categoryId=' . Session::get('category-active')}}" aria-label="Previous">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                @else
                                    <a class="page-link" href="{{url('shop-page/').'/'.$nextPage.'/'.'0?categoryId=' . Session::get('category-active')}}" aria-label="Previous">
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

    </div>
@endsection

@section('js-add-on')
    <script>
        $(document).ready(function() {
            console.log({{Session::get('category-active')}});
            //$("#category-select option[value='{{Session::get('category-active')}}']").attr("selected", true);
            $('#category-select').val('{{Session::get("category-active")}}');
            $("#olshop-modal").on('hidden.bs.modal', function (e) {
                $("#tokopedia-url").attr("href", '#');
                $("#shopee-url").attr("href", '#');
            });

            $('#category-select').on('change', function (e) {
                var uri = $('option:selected', this).attr('uri');
                console.log( this.value );
                console.log(uri);
                location.href = uri;
            });
        })

        function openOlshopModal(tokopediaUrl, shopeeUrl) {
            console.log(tokopediaUrl);
            if(tokopediaUrl == '#') {
                $("#tokopedia-url").hide();
                $('#tokopedia-not-available').show();
            } else {
                $("#tokopedia-url").attr("href", tokopediaUrl);
            }

            if(shopeeUrl == '#') {
                $("#shopee-url").hide();
                $('#shopee-not-available').show();
            } else {
                $("#shopee-url").attr("href", shopeeUrl);
            }
        }
    </script>
@endsection
