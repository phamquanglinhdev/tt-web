@php
    $name=[
        "",
        "Hosting doanh nghiệp",
        "SSD Hosting",
        "Super Hosting",
        "Reseller Hosting",
    ];
@endphp
@extends("layouts.client")
@section("content")
    <main id="main" class="site-main email-server-page">
        <div class="intro-page">
            <img src="{{asset("templates/skins/images/goigiaiphap.jpg")}}" alt=""/>

            <div class="container intro-ct">
                <div class="breadcrumb">
                    <!-- <h1 class="title-page">Hosting</h1> -->
                    <h1 class="title-page"><li>{{$name[$current]}}</li></h1>

                    <ul>
                        <li><a href="{{route("index")}}">Trang chủ </a></li>
                        <li><a href="#">Hosting</a></li>
                        <li>{{$name[$current]}}</li>
                    </ul>
                </div>

                <div class="page-menu">
                    <div class="menu_4 owl-carousel">

                        <figure class="{{$current == 1?"current":""}}"><a href="{{route("hosting-doanh-nghiep")}}"><i class="fa fa-h-square"></i> Hosting Doanh Nghiệp</a></figure>


                        <figure class="{{$current == 2?"current":""}}"><a href="{{route("ssd-hosting")}}"><i class="fa fa-money"></i> SSD Hosting</a></figure>


                        <figure class="{{$current == 3?"current":""}}"><a href="{{route("super-hosting")}}"><i class="fa fa-tasks"></i> Super Hosting</a></figure>


                        <figure class="{{$current == 4?"current":""}}"><a href="{{route("reseller-hosting")}}"><i class="fa fa-sellsy"></i> Reseller Hosting</a></figure>

                    </div>
                </div>


            </div>
        </div>
        @yield("contents")
    </main>
@endsection