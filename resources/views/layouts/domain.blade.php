@php
    $name=[
        "",
        "Bảng giá tên miền",
        "Chuyển đổi nhà cung cấp",
        "Chứng thực số SSL",

    ];
@endphp
@extends("layouts.client")
@section("content")
    <main id="main" class="site-main email-server-page">
        <div class="intro-page">
            <img src="{{asset("templates/skins/images/goigiaiphap.jpg")}}" alt=""/>

            <div class="container intro-ct">
                <div class="breadcrumb">
                    <!-- <h1 class="title-page">Tên Miền & SSL</h1> -->
                    <h1 class="title-page"><li>{{$name[$current]}}</li></h1>

                    <ul>
                        <li><a href="{{route("index")}}">Trang chủ </a></li>
                        <li><a href="#">Tên Miền & SSL</a></li>
                        <li>{{$name[$current]}}</li>
                    </ul>
                </div>

                <div class="page-menu">
                    <div class="menu_3 owl-carousel">

                        <figure class="{{$current==1?"current":""}}"><a href="{{route("bang-gia")}}"><i class="fa fa-list-alt"></i> Bảng Giá Tên Miền</a></figure>


                        <figure class="{{$current==2?"current":""}}"><a href="{{route("chuyen-doi")}}"><i class="fa fa-users"></i> Chuyển Đổi Nhà Cung Cấp</a></figure>


                        <figure class="{{$current==3?"current":""}}"><a href="{{route("ssl")}}"><i class="fa fa-money"></i> Chứng thực số SSL</a></figure>

                    </div>
                </div>


            </div>
        </div>
        @yield("contents")
    </main>
@endsection