@php
    $features = \App\Models\Config::where("type","=","feature")->get();
    $main_url =\App\Models\Config::where("type","=","main_url")->first()->value;
@endphp
<!DOCTYPE HTML>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Thiết Kế Web chuẩn SEO Công Nghệ Việt</title>
    <meta name="keywords" content="thiet ke website chuan seo, share hosting, thiet ke website chuyen nghiep"/>
    <meta name="description" content="Công ty thiết kế website chuẩn SEO, đối tác của google tại Việt Nam"/>
    <meta property="og:image" content=""/>
    {{--    <meta name="google-site-verification" content="pIOVQ4YD24BTzVnsBiUt0NYM56-r74pZrLy1m1WiaA8"/>--}}


    <meta name="keywords" content="T&T Media">
    <meta name="robots" content="index,follow,noodp">
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Công ty thiết kế website chuẩn SEO, đối tác của google tại Việt Nam"/>
    <meta property="og:image" content="templates/pictures/share_T&T Media_web.png"/>
    <meta property="og:url" content="{{route("index")}}"/>
    <meta property="og:site_name" content="{{route("index")}}"/>


    <link rel="icon" type="image/gif" href="{{asset("templates/pictures/favicon-cnv.png")}}">
    <!-- <link rel="manifest" href="/manifest.json">
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
      <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(["init", {
          appId: "b678ae50-b149-4215-9364-7115748ab5ee",
          autoRegister: false,
          notifyButton: {
            enable: true /* Set to false to hide */
          }
        }]);
      </script>
        <script src="/OneSignalSDKUpdaterWorker.js"></script>
            <script src="/OneSignalSDKWorker.js"></script>
    -->

    <!-- YAHOO  -->
    <meta name="y_key" content="">
    <!-- ALEXA -->
    <meta content="" name="alexaVerifyID">
    <!-- GOOGLE -->


    <link href='{{asset("templates/skins/css/bootstrap-theme.css")}}' rel='stylesheet' type='text/css' media='all'/>
    <link href='{{asset("templates/skins/css/bootstrap.min.css")}}' rel='stylesheet' type='text/css' media='all'/>
    <script src='{{asset("templates/skins/js/jquery-1.11.0.min.js")}}' type='text/javascript'></script>
    <script src="{{asset("templates/skins/js/detect.js")}}" type="text/javascript"></script>
    <script src="{{asset("templates/skins/js/effect.js")}}" type="text/javascript"></script>
    <script src='{{asset("templates/skins/js/bootstrap.js")}}' type='text/javascript'></script>

    <script src='{{asset("templates/skins/js/jquery.nicescroll.min.js")}}' type='text/javascript'></script>


    <script type="text/javascript" src="{{asset("templates/skins/extra/parallax/parallax.min.js")}}"></script>
    <script src='{{asset("templates/skins/js/jquery.sticky.js")}}' type='text/javascript'></script>
    <script src='{{asset("templates/skins/js/main.js")}}' type='text/javascript'></script>
    <script src="{{asset("templates/skins/js/sweetalert2.min.js")}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset("templates/skins/css/sweetalert2.css")}}"/>
    <script src="{{asset("templates/skins/js/circles.js")}}"></script>


    <!-- module	 -->

    <script src='{{asset("js/owlcarousel/owl.carousel.min.js")}}' type='text/javascript'></script>
    <link href="{{asset("js/owlcarousel/owl.carousel.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("css/font-awesome.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("css/social-likes_birman.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("js/wow/animate.css")}}" rel="stylesheet" type="text/css"/>
    <script src='{{asset("js/wow/wow.min.js")}}' type='text/javascript'></script>
    <link href="{{asset("css/custom.css")}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset("js/fancybox/jquery.fancybox.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("css/module.css")}}" rel="stylesheet" type="text/css"/>
    <script src='{{asset("js/fancybox/jquery.mousewheel-3.0.6.pack.js")}}' type='text/javascript'></script>
    <script src='{{asset("js/fancybox/jquery.fancybox.js")}}' type='text/javascript'></script>
    <script src='{{asset("js/jquery.validate.min.js")}}' type='text/javascript'></script>
    <script src='{{asset("js/social-likes.js")}}' type='text/javascript'></script>
    <script src="{{asset("js/script.js")}}"></script>

    <script src='{{asset("js/module.js")}}' type='text/javascript'></script>
    <!-- module	end-->
    <link href='{{asset("templates/skins/css/style.css")}}' rel='stylesheet' type='text/css' media='all'/>
    <link rel="stylesheet" type="text/css" href="{{asset("templates/skins/css/responsive.css")}}"/>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61cda7c2c82c976b71c41e3a/1fo5leku4';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->



</head>

<body>


<div id="menu-mobile-wrapper">
    <span class="close-menu"><i class="fa fa-close"></i></span>
    <ul id="menu-list" style="display:none;" class="menu">
        <li class="titleMenu">
            <a href="noi-dung/goi-giai-phap-423.html">Thiết Kế Website</a>
        </li>

        <li>
            <a href="noi-dung/bo-cong-thuong-493.html">Bộ Công Thương</a>
        </li>
        <li>
            <a href="noi-dung/amp-494.html">AMP</a>
        </li>
        <li>
            <a href="noi-dung/goi-giai-phap-423.html">Gói giải pháp</a>
        </li>
        <li>
            <a href="mau-giao-dien/mau-giao-dien-420.html">Mẫu giao diện</a>
        </li>
        <li>
            <a href="noi-dung/quan-tri-website-425.html">Quản trị website</a>
        </li>


        <li class="titleMenu">
            <a href="noi-dung/bang-gia-ten-mien-443.html">Tên Miền & SSL</a>
        </li>

        <li>
            <a href="noi-dung/bang-gia-ten-mien-443.html">Bảng Giá Tên Miền</a>
        </li>
        <li>
            <a href="noi-dung/chuyen-doi-nha-cung-cap-444.html">Chuyển Đổi Nhà Cung Cấp</a>
        </li>
        <li>
            <a href="noi-dung/chung-thuc-so-ssl-471.html">Chứng thực số SSL</a>
        </li>


        <li class="titleMenu">
            <a href="noi-dung/email-415.html">Email</a>
        </li>

        <li>
            <a href="noi-dung/hoi-dap-ve-mail-442.html">Hỏi đáp về Mail</a>
        </li>
        <li>
            <a href="noi-dung/email-google-apps-469.html">Email Google Apps</a>
        </li>


        <li class="titleMenu">
            <a href="noi-dung/hosting-doanh-nghiep-436.html">Hosting</a>
        </li>

        <li>
            <a href="noi-dung/hosting-doanh-nghiep-436.html">Hosting Doanh Nghiệp</a>
        </li>
        <li>
            <a href="noi-dung/ssd-hosting-433.html">SSD Hosting</a>
        </li>
        <li>
            <a href="noi-dung/super-hosting-437.html">Super Hosting</a>
        </li>
        <li>
            <a href="noi-dung/reseller-hosting-439.html">Reseller Hosting</a>
        </li>


        <li class="titleMenu">
            <a href="#">Máy Chủ</a>
        </li>

        <li>
            <a href="noi-dung/thue-may-chu-rieng-455.html">Thuê Máy Chủ Riêng</a>
        </li>
        <li>
            <a href="noi-dung/thue-dat-cho-may-chu-456.html">Thuê Đặt Chổ Máy Chủ</a>
        </li>


        <li class="titleMenu">
            <a href="#">Marketing Online</a>
        </li>

        <li>
            <a href="noi-dung/google-adwords-458.html">Google Adwords</a>
        </li>
        <li>
            <a href="noi-dung/quang-cao-facebook-461.html">Quảng Cáo Facebook</a>
        </li>


        <li class="titleMenu">
            <a href="http://T&T Mediaapp.com/">Thiết kế APP</a>
        </li>


        <li class="titleMenu">
            <a href="ban-tin/blog-497.html">Blog</a>
        </li>


    </ul>
</div>
<div id="wrapper">

    <div class="bannertop text-center">

        <!--<a href="https://www.google.com/partners/#a_profile;idtf=9659201692" target="blank">-->
        <a href="{{$main_url}}//noi-dung/google-adwords-458" target="blank">
            <img id="pc-ad" src="{{asset("templates/skins/images/banner-adwords.png")}}">
            <img id="mobile-ad" src="{{asset("templates/skins/images/banner-AW.png")}}">
        </a>
    </div>
    <div class="sub-header" id="subHeader">
        <div class="container">
            <div class="row align-items-center col-mar-0 xs-pad-5">
                <div class="col-lg-2 col-md-2 col-xs-4 md-center">
                    <a class="logo" href="{{$main_url}}//" title="">
                        <img src="{{asset("cnv.vn/images/logo.png")}}" alt="" title="">
                    </a>
                </div>
                <div class="col-lg-10 col-md-10 col-xs-8 text-right static">
                    <div class="position-relative d-flex align-items-center">
                        <nav class="main-nav">
                            <ul>
                                <li><a class="smooth" target="_blank" href="{{$main_url}}//#trang-chu">Trang
                                        chủ</a>
                                </li>
                                <li><a class="smooth" target="_blank" href="{{$main_url}}//#gioi-thieu">Giới
                                        thiệu</a>
                                </li>
                                <li><a class="smooth" target="_blank" href="{{$main_url}}//#dich-vu" title="">Giải
                                        pháp</a>
                                    <ul>

                                        @foreach($features as $feature)
                                            <li><a class="smooth" href="{{$feature->value}}" title=""
                                                   target="_blank">
                                                    <div class="img"><img
                                                            src="{{$feature->media}}"
                                                            alt="" title=""/></div>
                                                    <span><strong>{{$feature->name}} </strong>{{$feature->optional}}</span>
                                                </a></li>
                                        @endforeach


                                    </ul>
                                </li>
                                <li><a class="smooth" target="_blank" href="{{$main_url}}//#khach-hang" title="">Khách
                                        hàng</a></li>
                                <li>
                                    <a class="smooth" href="https://hotro.cnv.vn/" target="_blank" title="">Trung
                                        tâm hỗ
                                        trợ</a>
                                    <ul class="v2">
                                        <li><a class="smooth" href="#" title="">Khuyến mãi</a></li>
                                        <li><a class="smooth" href="#" title="">Hình thức thanh toán</a></li>
                                        <li><a class="smooth" href="#" title="">Kết nối đối tác</a></li>
                                        <li><a class="smooth" href="#" title="">Tài liệu API</a></li>
                                        <li><a class="smooth" href="http://tuyendung.cnv.vn/" target="_blank"
                                               title="">Tuyển
                                                dụng</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <a class="smooth scrollToFormContact trial-btn" target="_blank"
                           href="{{$main_url}}/contact"
                           title="" rel="nofollow,noindex">Liên hệ</a>
                        <button class="menu-btn v2 m-nav-open" type="button"><i></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-mobile text-center ">
        <a href="{{route("index")}}"><img alt="" src="{{asset("templates/pictures/content/1506480842_logo_fix_final.png")}}"
                                  style=" width: 150px;"/></a>
    </div>


    <header id="header" class="site-header clearfix">

        <div class="container clearfix">
            <div class="logo">
                <a href="{{route("index")}}"><img alt=""
                                          src="{{asset("templates/pictures/content/1506480842_logo_fix_final.png")}}"
                                          style=" width: 150px;"/></a>
            </div>

            <div class="header-right">

                <nav class="main-menu">
                    <span class="mobile-menu"><i class="fa fa-bars"></i></span>
                    <ul>
                        <li>
                            <a href="{{route("bct")}}">Thiết Kế Website</a>
                            <ul class="sub-menu ">
                                <li>
                                    <a href="{{route("bct")}}"><span class="icon"><i
                                                class="fa fa-money"></i></span><span class="title-a"><strong>Bộ Công Thương</strong>Bộ Công Thương </span></a>
                                </li>
                                <li>
                                    <a href="{{route("bct")}}"><span class="icon"><i
                                                class="fa fa-money"></i></span><span
                                            class="title-a"><strong>AMP</strong>AMP </span></a>
                                </li>
                                <li>
                                    <a href="{{route("ggp")}}"><span class="icon"><i
                                                class="fa fa-money"></i></span><span class="title-a"><strong>Gói giải pháp</strong>Cung cấp những gói giải pháp với chi phí tốt nhất </span></a>
                                </li>
                                <li>
                                    <a href="{{route("mgd")}}"><span class="icon"><i
                                                class="fa fa-object-ungroup"></i></span><span class="title-a"><strong>Mẫu giao diện</strong>Thay đổi dễ dàng để thiết kế theo phong cách riêng của bạn. </span></a>
                                </li>
                                <li>
                                    <a href="{{route("qtw")}}"><span class="icon"><i
                                                class="fa fa-gears"></i></span><span class="title-a"><strong>Quản trị website</strong>Cập nhật nội dung mới &amp; hình ảnh đẹp mỗi ngày. </span></a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="{{route("bang-gia")}}">Tên Miền & SSL</a>
                            <ul class="sub-menu menu_nho">
                                <li>
                                    <a href="{{route("bang-gia")}}"><span class="icon"><i
                                                class="fa fa-list-alt"></i></span><span class="title-a"><strong>Bảng Giá Tên Miền</strong>Đăng ký thương hiệu của bạn trên internet. </span></a>
                                </li>
                                <li>
                                    <a href="{{route("chuyen-doi")}}"><span class="icon"><i
                                                class="fa fa-users"></i></span><span class="title-a"><strong>Chuyển Đổi Nhà Cung Cấp</strong>Chuyển đổi và quản lý tên miền về T&T Media </span></a>
                                </li>
                                <li>
                                    <a href="{{route("ssl")}}"><span class="icon"><i
                                                class="fa fa-money"></i></span><span class="title-a"><strong>Chứng thực số SSL</strong>Chứng chỉ bảo mật SSL nhằm bảo mật thông tin cá nhân khách hàng </span></a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="{{route("email-question")}}">Email</a>
                            <ul class="sub-menu menu_nho">
                                <li>
                                    <a href="{{route("email-question")}}"><span class="icon"><i
                                                class="fa fa-info-circle"></i></span><span class="title-a"><strong>Hỏi đáp về Mail</strong>Hỏi đáp thông tin về email </span></a>
                                </li>
                                <li>
                                    <a href="{{route("email-app")}}"><span class="icon"><i
                                                class="fa fa-money"></i></span><span class="title-a"><strong>Email Google Apps</strong>Dịch vụ email mạnh mẻ đến từ tập đoàn số một thế giới </span></a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="noi-dung/hosting-doanh-nghiep-436.html">Hosting</a>
                            <ul class="sub-menu ">
                                <li>
                                    <a href="noi-dung/hosting-doanh-nghiep-436.html"><span class="icon"><i
                                                class="fa fa-h-square"></i></span><span class="title-a"><strong>Hosting Doanh Nghiệp</strong>Dành riêng cho các doanh nghiệp với hệ thống máy chủ mạnh mẻ. </span></a>
                                </li>
                                <li>
                                    <a href="noi-dung/ssd-hosting-433.html"><span class="icon"><i
                                                class="fa fa-money"></i></span><span
                                            class="title-a"><strong>SSD Hosting</strong>Sử dụng SSD với tốc độ nhanh gấp 10 lần hosting thông thường </span></a>
                                </li>
                                <li>
                                    <a href="noi-dung/super-hosting-437.html"><span class="icon"><i
                                                class="fa fa-tasks"></i></span><span class="title-a"><strong>Super Hosting</strong>Hosting dung lượng lớn dành cho các website có truy cập cao. </span></a>
                                </li>
                                <li>
                                    <a href="noi-dung/reseller-hosting-439.html"><span class="icon"><i
                                                class="fa fa-sellsy"></i></span><span class="title-a"><strong>Reseller Hosting</strong>Chủ động định giá bán và khởi tạo dịch vụ cho khách hàng của mình dễ dàng. </span></a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="#">Máy Chủ</a>
                            <ul class="sub-menu menu_nho">
                                <li>
                                    <a href="noi-dung/thue-may-chu-rieng-455.html"><span class="icon"><i
                                                class="fa fa-tasks"></i></span><span class="title-a"><strong>Thuê Máy Chủ Riêng</strong>Cung cấp cho bạn những máy chủ với chi phí tốt nhất </span></a>
                                </li>
                                <li>
                                    <a href="noi-dung/thue-dat-cho-may-chu-456.html"><span class="icon"><i
                                                class="fa fa-tasks"></i></span><span class="title-a"><strong>Thuê Đặt Chổ Máy Chủ</strong>Cung cấp cho bạn website mễn phí với tính năng vượt trội - dể sử dụng </span></a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="#">Marketing Online</a>
                            <ul class="sub-menu menu_nho">
                                <li>
                                    <a href="noi-dung/google-adwords-458.html"><span class="icon"><i
                                                class="fa fa-google"></i></span><span class="title-a"><strong>Google Adwords</strong>Đưa từ khoá lên Google một cách nhanh chóng sau 05 phút. </span></a>
                                </li>
                                <li>
                                    <a href="noi-dung/quang-cao-facebook-461.html"><span class="icon"><i
                                                class="fa fa-facebook"></i></span><span class="title-a"><strong>Quảng Cáo Facebook</strong>Quảng cáo trên mạng xã hội facebook </span></a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="http://T&T Mediaapp.com/">Thiết kế APP</a>
                        </li>
                        <li>
                            <a href="ban-tin/blog-497.html">Blog</a>
                        </li>
                    </ul>
                    <div class="logomobile">
                        <a href="{{route("index")}}"><img alt=""
                                                  src="{{asset("templates/pictures/content/1506480842_logo_fix_final.png")}}"
                                                  style="height: 54px; width: 150px;"/></a>
                    </div>
                </nav>

                <div class="mobile-hotline" style="display:none;">
                    <a href="tel:0902244586"><img src="{{asset("templates/skins/images/hotline.png")}}"> </a>
                </div>
            </div>
        </div>
    </header>


    @yield("content")


    <footer id="footer" class="site-footer">
        <!--<div class="over-footer clearfix wow fadeInRightBig">
            <div class="container">
                <div class="ft-hotline">
                    <p><i class="fa fa-phone"></i>Hotline tư vấn  <strong>1900 636 400</strong></p>
                </div>
                <div class="new-letter">
                <form method="post" action="">
                    <span>đăng ký nhận bản tin</span>
                    <label for="n"></label>

                    <input id="n" type="text" class="field_name" placeholder="Họ và tên"/>
                    <label for="email"></label>
                    <input id="email" type="email" name="emaildk"  class="field_email" placeholder="Địa chỉ email" required />
                    <label for="submit"><i class="fa fa-paper-plane"></i></label>
                    <input id="submit" type="submit" value="submit"/>
                    </form>
                </div>
            </div>
        </div>-->
        <div class="container">
            <div class="footer-widget clearfix wow fadeInRightBig">
                {{--                <div class="about-us-ft col-md-4 col-sm-4 d-none">--}}
                <h3 class="widget-title">CÔNG TY TNHH GIẢI PHÁP TRUYỀN THÔNG T&T VIỆT NAM</h3>
                {{--                    <div class="text-widget">--}}
                {{--                        <h4 class="office-name">--}}
                {{--                            Trung tâm kinh doanh Hồ Chí Minh</h4>--}}
                {{--                        <p>--}}
                {{--                            Tầng 4 - Toà nhà Mhome, 102 Nguyễn Đình Chính<br/>--}}
                {{--                            Phường 15, Q. Phú Nhuận TP.HCM</p>--}}
                {{--                        <p>--}}
                {{--                            Tel: 028-73000 118 - Hotline: 1900 63 64 00</p>--}}
                {{--                        <p>--}}
                {{--                            Số điện thoại tiếp nhận phàn nàn, khiếu nại: 0936.10.13.15<br/>--}}
                {{--                            &nbsp;</p>--}}

                {{--                    </div>--}}
                {{--                    <div class="social">--}}
                {{--                        <ul class="socials">--}}
                {{--                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                {{--                        </ul>--}}

                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="contact-ft col-md-4 col-sm-4">
                    <h3 class="widget-title des_an">&thinsp;</h3>
                    <div class="text-widget">
                        <h4 class="office-name">
                            Văn phòng Hà Nội</h4>
                        <p>
                            Số 15/88, phố Thái Thịnh 2, Phường Thịnh Quang, Quận Đống Đa, Thành phố Hà Nội, Việt Nam</p>
                        <p>
                            <span>Kỹ thuật: 0902.289.115, Hotline: 0902244586</span></p>
                        <p>
                            <span>Số điện thoại tiếp nhận phàn nàn, khiếu nại: </span> 0902244586</p>

                        <a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=5802" target="_blank"><img
                                src="{{asset("templates/skins/images/dathongbao.png")}}" width="220"/></a>
                    </div>
                </div>
                {{--                <div class="agentcy-ft col-md-4 col-sm-4 d-none">--}}
                {{--                    <h3 class="widget-title">&thinsp;</h3>--}}
                {{--                    <div class="text-widget">--}}
                {{--                        <h4 class="office-name">--}}
                {{--                            Văn phòng Canada</h4>--}}
                {{--                        <p>--}}
                {{--                            <span>22 Linthurst Avenue Toronto Ontario M3M 2R9</span></p>--}}
                {{--                        <p>--}}
                {{--                            <span>Phone: 416-915-0126 ( Mr Chính Trần )</span></p>--}}
                {{--                        <p>--}}
                {{--                            <span>Fax: 416-850-0263</span><br/>--}}
                {{--                            &nbsp;</p>--}}

                {{--                    </div>--}}
                {{--                </div>--}}
            </div><!-- footer-widget -->

        </div><!-- .container -->
        <div class="copyright wow fadeInLeftBig">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
    </footer><!-- site-footer -->
    <div class="back-top-div">
        <div class="container">
            <div class="row">
                <a href="#" class="back-to-top"><span><i class="fa fa-angle-double-up"></i></span></a>
            </div>
        </div>
    </div>
    <div style="left: -20px; bottom: 20px;" id="coccoc-alo-phoneIcon"
         class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show">
        <div class="coccoc-alo-ph-circle"></div>
        <div class="coccoc-alo-ph-circle-fill"></div>
        <div class="coccoc-alo-ph-img-circle"><a
                onclick="ga('send', 'event', { eventCategory: 'Phone Ring', eventAction: 'Click-Phone Ring', eventLabel: 'Clicked'});"
                href="tel:0902244586"><img alt="" src="{{asset("templates/skins/images/phone-ring.png")}}"></a></div>
    </div>
    <script type="text/javascript">
        /*  [ Step Slider ]
         - - - - - - - - - - - - - - - - - - - - */
        var stepFirstContent = $('.step-slider .step li.active a').attr('href');
        $(stepFirstContent).show();
        var pos = $('.step-slider .step li.active a');
        $('.step-handle').css('left', pos);
        $('.step-range').css('left', pos + 3);
        $('.step-slider .step li a').on('click', function (e) {
            e.preventDefault();
            $(this).parents('ul').find('li').removeClass('active');
            $(this).parent().addClass('active').prevAll().addClass('active');
            var pos = $(this);
            var posFirst = $(this).parents('ul').find('li:first-child a');
            $('.step-handle').css('left', pos);
            $('.step-range').css('width', pos - posFirst);
            var stepContent = $(this).attr('href');
            $('.step-slider .step-content').hide();
            $(stepContent).show();
        });
    </script>
</div><!-- #wrapper -->


<script>
    $(function () {

        $("#form_partnership").validate({
            rules: {
                title: "required",
                name: "required",
                phone: "required",
                address: "required",
                email: {
                    required: true,
                    email: true
                },
                code: "required",
                message: "required",

            },
            messages: {
                title: "Nhập Tiêu đề!",
                name: "Nhập Họ tên!",
                phone: "Nhập Điện thoại!",
                address: "Nhập Địa chỉ!",
                email: "Nhập Email!",
                code: "Nhập Mã xác nhận!",
                message: "Nhập Nội dung!",
            }
        });


        $("#form_contact").validate({
            rules: {
                title: "required",
                name: "required",
                phone: "required",
                address: "required",
                email: {
                    required: true,
                    email: true
                },
                code: "required",
                message: "required",

            },
            messages: {
                title: "Nhập Tiêu đề!",
                name: "Nhập Họ tên!",
                phone: "Nhập Điện thoại!",
                address: "Nhập Địa chỉ!",
                email: "Nhập Email!",
                code: "Nhập Mã xác nhận!",
                message: "Nhập Nội dung!",
            }
        });


        $("#form_tuvan").validate({
            rules: {
                title: "required",
                name: "required",
                phone: {
                    required: true,
                    number: true
                },
                address: "required",
                email: {
                    required: true,
                    email: true
                },
                code: "required",
                message: "required",
                website: "required",

            },
            messages: {
                title: "Nhập Tiêu đề!",
                name: "Nhập Họ tên!",
                phone: "Nhập Điện thoại!",
                address: "Nhập Địa chỉ!",
                email: "Nhập Email!",
                code: "Nhập Mã xác nhận!",
                message: "Nhập Nội dung!",
                website: "Nhập Tên Miền Website",
            }
        });


        $("#form_login").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: "required",

            },
            messages: {
                email: "Nhập Email!",
                password: "Nhập mật khẩu!",
            }
        });


        $("#form_register").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: "required",
                re_password: "required",

                name: "required",
                company: "required",
                phone: "required",
                address: "required",
                code: "required",

            },
            messages: {
                email: "Nhập Email!",
                password: "Nhập Mật khẩu!",
                re_password: "Nhập Nhập lại mật khẩu!",

                name: "Nhập Họ tên!",
                company: "Nhập Công ty!",
                phone: "Nhập Điện thoại!",
                address: "Nhập Địa chỉ!",
                code: "Nhập Mã xác nhận!",
            }
        });

    });
</script>

<!-- include -->
<div class="back-top"><i class="fa fa-angle-double-up"></i></div>


<script>
    function validate_search_domain() {
        var domain_name_ = $("#domain_name").val();
        var dtm = 'Tất cả';

        if (domain_name_ == '') {
            sweetAlert(
                'Thông Báo!',
                'Vui Lòng Nhập Tên Miền Cần Kiểm Tra!',
                'error'
            );

            return false;

        } else {
            $(".search_success").css({'overflow': 'auto', 'height': '100px'});
            view_info_search_domain();
            $(".search_success").html('<div class="title_loading">Đang xử lý. Xin chờ trong giây lát.</div><img class="img_loading" src="templates/skins/images/icon_loading5.gif" />');
            var str_form = $(".form_search_domain").serialize();

            //check 1 domain
            if (dtm != 'Tất cả') {
                $.ajax({
                    url: "https://T&T Mediaweb.vn/modules/home/ajax_checkdomain.php",
                    data: str_form,
                    type: "POST",
                    success: function (result) {
                        var get_data = $.parseJSON(result);
                        var domain_n = (get_data.domain_name);
                        var check_n = (get_data.check);
                        $(".search_success_domainname").html(domain_n);
                        if (check_n == "True")
                            //if(check_n=="1")
                        {
                            $(".search_success").html('<table><tr><td style="width:300px" class="search_success_domainname">' + domain_n + '</td><td class="search_success_check" style="background: url(https://T&T Mediaweb.vn/templates/skins/images/x.gif) 0px no-repeat; padding-left:20px;text-align:left">Tên miền đã được đăng ký</td></tr><tr><td>&nbsp;</td><td><a href="javascript:;" onclick=view_whois("' + domain_n + '")>Xem thông tin tên miền</a></td></tr></table>');

                        } else {
                            $(".search_success").html('<table><tr><td style="width:300px" class="search_success_domainname">' + domain_n + '</td><td class="search_success_check" style="background: url(https://T&T Mediaweb.vn/templates/skins/images/available.png) 0px no-repeat; padding-left:20px;"> Tên miền chưa đăng ký</td></tr></table>');
                        }
                    }
                })
            }
            //CHECK TAT CA DOMAIN
            else {
                $(".search_success").css({'overflow': 'auto', 'height': '400px'});
                $("#view_info_search_domain").css('top', '5%');

                var arr_ = new Array();
                var count_array;
                arr_ = ['.vn', '.com', '.net', '.org', '.info', '.biz', '.co', '.edu', '.xxx', '.biz.vn', '.org.vn', '.com.vn', '.info.vn', '.net.vn'];
                count_array = arr_.length;


                for (var i = 0; i < count_array; i++) {
                    //alert(arr_[i]);
                    $.ajax({
                        url: "https://T&T Mediaweb.vn/modules/home/ajax_checkdomain.php",
                        data: "domain_name=" + domain_name_ + "&weather=" + arr_[i],
                        type: "POST",
                        success: function (result) {
                            var get_data = $.parseJSON(result);
                            //alert(get_data);
                            var domain_n = (get_data.domain_name);
                            var check_n = (get_data.check);

                            if (check_n == "True") {
                                $(".search_success").append('<table width="100%" style="border-bottom:1px dotted #CCC; padding:10px 0px"><tr><td style="width:250px" class="search_success_domainname">' + domain_n + '</td><td class="search_success_check" style="background: url(https://T&T Mediaweb.vn/templates/skins/images/x.gif) 0px no-repeat; padding-left:20px; width:250px; text-align:left;">Tên miền đã được đăng ký</td></tr><tr><td>&nbsp;</td><td style="padding-bottom:15px;text-align:left;"><a href="javascript:;" onclick=view_whois("' + domain_n + '")>Xem thông tin tên miền</a></td></tr></table>');
                            } else {
                                $(".search_success").append('<table width="100%" style="border-bottom:1px dotted #CCC; padding:10px 0px"><tr><td style="width:250px" class="search_success_domainname">' + domain_n + '</td><td class="search_success_check" style="background: url(https://T&T Mediaweb.vn/templates/skins/images/available.png) 0px no-repeat; padding-left:20px; width:250px; text-align:left;" > Tên miền chưa đăng ký</td></tr></table>');
                            }
                            if (domain_n == domain_name_ + ".net.vn" && i <= count_array) {
                                $(".img_loading").hide();
                                $(".title_loading").hide();
                            }
                        }
                    })
                }

            }
            return false;
        }
    }

</script>


<script type="text/javascript" src="{{asset("templates/skins/js/jquery.uilock.js")}}"></script>
<script>
    function view_info_search_domain() {

        $("#view_info_search_domain").fadeIn(); //countdown
        $('<div></div>').attr('id', 'uiLockId').css({
            'position': 'fixed',
            'top': 0,
            'left': 0,
            'z-index': 1000,
            'opacity': 0.6,
            'width': '100%',
            'height': '100%',
            'color': 'white',
            'background-color': 'black'
        }).appendTo('body');
    }

    function view_whois(dm) {

        $("#view_info_search_domain").hide(); //countdown
        $("#view_info_whois").fadeIn(); //countdown
        $(".view_info_whois_success").html('<div style="padding-top:180px; text-align:center" class="title_loading">Đang xử lý. Xin chờ trong giây lát.<br><img style="text-align:center" src="templates/skins/images/icon_loading5.gif" /></div>');
        $.ajax({

            url: "https://T&T Mediaweb.vn/modules/home/ajax_whois.php",
            data: "domain_name=" + dm,
            type: "POST",
            success: function (result) {
                //alert(result);
                $(".view_info_whois_success").html(result);

            }
        })
    }

    function unlock(div_show) {
        $(div_show).fadeOut();
        $('#uiLockId').remove();

    }
</script>
<!-- LOCK REGISTER SUCCESS -->

<style>
    .footer_btn input {
        border-radius: 5px;
        width: 80%;
        padding: 10px 20px;
        font-size: 16px;
        text-transform: uppercase;
        color: #fff;
        background: #ffa800;
        cursor: pointer;
        transition: all 0.3s;
        border: none;
        display: inline-block;
        margin-bottom: 15px;
    }

    .footer_btn input:hover {
        background: #0095da
    }

    #formPopupGiaiphap {
        max-width: 480px;
        padding: 15px;
    }

    #formPopupGiaiphap select {
        width: 100%;
        padding: 15px 15px;
        margin: 7px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    #formPopupGiaiphap input {
        width: 100%;
        padding: 15px 15px;
        margin: 7px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    #formPopupGiaiphap h3 {
        color: #0095da;
        text-transform: uppercase;
        text-align: center;
        padding-bottom: 15px;
        margin-bottom: 15px;
        border-bottom: 1px solid #ddd;
    }

    .btn_submit {
        font-size: 16px;
        border-radius: 5px;
        display: inline-block;
        margin: auto;
        width: 70%;
        padding: 10px;
        text-transform: uppercase;
        color: #fff;
        background: #0095da;
        transition: all 0.3s;
        margin-top: 15px;
        border: none;
    }

    .btn_submit:hover {
        background: #ffa800;
    }
</style>
<script>
    function openPopup(title) {
        $("#goiweb").val(title).change();
        $.fancybox('#formPopupGiaiphap');
    }
</script>


<!--<div class="overlay-body"></div>-->


<!-- Google Code dành cho Thẻ tiếp thị lại -->
<!--
Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
-->
<!--
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="g-partnersbadge" data-agency-id="9659201692"></div> -->
<!-- Add the code snippet above to the sites listed to display your badge:
    {{$main_url}}/ -->

</body>
</html>
