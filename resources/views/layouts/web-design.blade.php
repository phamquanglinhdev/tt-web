@extends("layouts.client")
@section("content")
    <main id="main" class="site-main email-server-page">
        <div class="intro-page">
            <img src="{{asset("templates/skins/images/goigiaiphap.jpg")}}" alt=""/>

            <div class="container intro-ct">
                <div class="breadcrumb">
                    <!-- <h1 class="title-page">Thiết Kế Website</h1> -->
                    <h1 class="title-page"><li>Bộ Công Thương</li></h1>

                    <ul>
                        <li><a href="{{route("index")}}">Trang chủ </a></li>
                        <li><a href="#">Thiết Kế Website</a></li>
                        <li>Bộ Công Thương</li>
                    </ul>
                </div>

                <div class="page-menu">
                    <div class=" owl-carousel">

                        <figure class="{{$current == "bct"?"current":""}}"><a href={{route("bct")}}><i class="fa fa-money"></i> Bộ Công Thương</a></figure>


                        <figure class="{{$current == "amp"?"current":""}}"><a href="{{route("amp")}}"><i class="fa fa-money"></i> AMP</a></figure>


                        <figure  class="{{$current == "ggp"?"current":""}}"><a href="{{route("ggp")}}"><i class="fa fa-money"></i> Gói giải pháp</a></figure>


                        <figure class="{{$current == "mgd"?"current":""}}" ><a href="{{route("mgd")}}"><i class="fa fa-object-ungroup"></i> Mẫu giao diện</a></figure>


                        <figure  class="{{$current == "qtw"?"current":""}}"><a href="{{route("qtw")}}"><i class="fa fa-gears"></i> Quản trị website</a></figure>

                    </div>
                </div>


            </div>
        </div>
        @yield("contents")
    </main>
@endsection