@extends("layouts.client")
@section("content")
    <main id="main" class="site-main email-server-page">
        <div class="intro-page">
            <img src="{{asset("templates/skins/images/goigiaiphap.jpg")}}" alt=""/>

            <div class="container intro-ct">
                <div class="breadcrumb">
                    <!-- <h1 class="title-page">Email</h1> -->
                    <h1 class="title-page"><li>Hỏi Đáp Email</li></h1>

                    <ul>
                        <li><a href="{{route("index")}}">Trang chủ </a></li>
                        <li><a href="#">Email</a></li>
                        <li>Hỏi Đáp Email</li>
                    </ul>
                </div>

                <div class="page-menu">
                    <div class="menu_2 owl-carousel">

                        <figure class="{{$current == 1?"current":""}}"><a href="{{route("email-question")}}"><i class="fa fa-info-circle"></i> Hỏi đáp về Mail</a></figure>


                        <figure class="{{$current == 2?"current":""}} "><a href="{{route("email-app")}}"><i class="fa fa-money"></i> Email Google Apps</a></figure>

                    </div>
                </div>


            </div>
        </div>
        @yield("contents")
    </main>
@endsection