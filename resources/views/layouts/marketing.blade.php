@php
    $name=[
        "",
        "Google Adwords",
        "Quảng Cáo Facebook",
         ];
@endphp
@extends("layouts.client")
@section("content")
    <main id="main" class="site-main email-server-page">
        <div class="intro-page">
            <img src="{{"templates/skins/images/goigiaiphap.jpg"}}" alt=""/>

            <div class="container intro-ct">
                <div class="breadcrumb">
                    <!-- <h1 class="title-page">Marketing Online</h1> -->
                    <h1 class="title-page">
                        <li>{{$name[$current]}}</li>
                    </h1>

                    <ul>
                        <li><a href="{{route("index")}}">Trang chủ </a></li>
                        <li><a href="#">Marketing Online</a></li>
                        <li>{{$name[$current]}}</li>
                    </ul>
                </div>

                <div class="page-menu">
                    <div class="menu_4 owl-carousel">

                        <figure class="{{$current == 1?"current":""}}"><a href="{{route("marketing-google")}}"><i
                                        class="fa fa-google"></i> Google
                                Adwords</a></figure>


                        <figure class="{{$current == 2?"current":""}}"><a href="{{route("marketing-facebook")}}"><i
                                        class="fa fa-facebook"></i> Quảng Cáo Facebook</a>
                        </figure>

                    </div>
                </div>

            </div>
        </div>
        @yield("contents")
    </main>
@endsection