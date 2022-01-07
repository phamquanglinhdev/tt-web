@extends("layouts.client")
@section("content")
    <main id="main" class="site-main">
        <div class="main-slider">

            <div class="slider owl-carousel">

                <div class="item">
                    <img src="{{asset("templates/pictures/galleries/86_cnv-index-4-new_03.png")}}"/>
                    <!--<div class="container">
    <div class="des-slider">
        <h2 class="title">
            <strong>thiết kế website</strong>
            <span>chuyên nghiệp - công nghệ vượt trội</span>
        </h2>
        <p>Html 5.0 - chuẩn website thế hệ mới - Đẹp hơn, chuyên nghiệp hơn với CSS3</p>
    </div>
</div>-->
                </div><!-- item -->

            </div><!-- .slider .owl-carousel -->

        </div><!-- .main-slider -->

        <section class="parking-membership">
            <div class="container">
                <div class="col-md-6 col-sm-6">
                    <a href="https://e-membership.vn/" id="parking-membership" target="_blank">
                        <img src="{{asset("templates/skins/images/banner_emembership.jpg")}}">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <a href="http://cnvparking.com/" id="parking-membership" target="_blank">
                        <img src="{{asset("templates/skins/images/banner_cnv_parking.jpg")}}">
                    </a>
                </div>
            </div>
        </section>

        <section class="hp-domain">
            <div class="container-fluid">
                <div class="row">
                    <div class="domain-info wow fadeInRightBig">
                        <h1 class="title">Bạn đang cần tên miền ?</h1>
                        <form name="form_search_domain" class="domain-form" method="post"
                              onsubmit="return validate_search_domain()">
                            <label for="domain-name"></label>
                            <input id="domain_name" name="domain_name" type="text" class="domain-field"
                                   placeholder="Nhập tên miền cần kiểm tra"/>
                            <button class="domain-check">kiểm tra</button>
                        </form>
                        <a href="https://cnv.vn/noi-dung/bang-gia-ten-mien-443" class="show-price-detail">Xem chi tiết
                            bảng giá tên miền</a>
                        <a href="http://hsnl.cnv.vn/" id="hosonanglucimg" target="_blank">
                            <img src="{{asset("templates/skins/images/hosonangluc.png")}}">
                        </a>
                    </div><!-- .domain-info -->
                </div>
            </div>
        </section>
        <div id="content" class="site-content">
            <div class="container">
                <section class="top-content clearfix wow fadeInRight" data-wow-delay="0.2s">


                    <div class="item col-md-4 col-sm-6">
                        <div class="thumb">
                            <img class="wow rollIn" data-wow-delay="0.2s"
                                 src="{{asset("templates/pictures/categories/1457323056_tkw.png")}}" alt=""/>
                        </div>
                        <h2 class="title-item">Thiết Kế Website</h2>
                        <div class="stroke"><span>Stroke</span></div>
                        <p>Thiết kế website chuyên nghiệp, công nghệ vượt trội. Chúng tôi thiết kế thương hiệu bạn trên
                            internet, website được tích hợp công cụ SEO và Social Network.</p>
                    </div>

                    <div class="item col-md-4 col-sm-6">
                        <div class="thumb">
                            <img class="wow rollIn" data-wow-delay="0.2s"
                                 src="{{asset("templates/pictures/categories/1457323080_tenmien.png")}}" alt=""/>
                        </div>
                        <h2 class="title-item">Tên Miền & SSL</h2>
                        <div class="stroke"><span>Stroke</span></div>
                        <p>Dịch vụ tên miền đáp ứng được tất cả mọi nhu cầu tên miền kèm theo đó là các chứng chỉ SSL
                            bảo mật tối ưu nhất theo chuẩn công nghệ mới nhất hiện tại.</p>
                    </div>

                    <div class="item col-md-4 col-sm-6">
                        <div class="thumb">
                            <img class="wow rollIn" data-wow-delay="0.2s"
                                 src="{{asset("templates/pictures/categories/1457323097_email.png")}}" alt=""/>
                        </div>
                        <h2 class="title-item">Email</h2>
                        <div class="stroke"><span>Stroke</span></div>
                        <p>Với các loại dịch vụ email đa dạng, đáp ứng tất cả các nhu cầu sử dụng email của khách hàng.
                            Đặc biệt Email Google Apps T&T Media cung cấp giá ưu đãi với chất lượng hàng đầu. </p>
                    </div>

                    <div class="item col-md-4 col-sm-6">
                        <div class="thumb">
                            <img class="wow rollIn" data-wow-delay="0.2s"
                                 src="{{asset("templates/pictures/categories/1457323112_hosting.png")}}" alt=""/>
                        </div>
                        <h2 class="title-item">Hosting</h2>
                        <div class="stroke"><span>Stroke</span></div>
                        <p>SSD hosting là dịch vụ web hosting chuyên nghiệp chất lượng cao dành cho website doanh nghiệp
                            và các website thương mại điện tử.&nbsp; </p>
                    </div>

                    <div class="item col-md-4 col-sm-6">
                        <div class="thumb">
                            <img class="wow rollIn" data-wow-delay="0.2s"
                                 src="{{asset("templates/pictures/categories/1457323130_maychu.png")}}" alt=""/>
                        </div>
                        <h2 class="title-item">Máy Chủ</h2>
                        <div class="stroke"><span>Stroke</span></div>
                        <p>Dịch vụ máy chủ với cấu hình tốt, bảo mật và độ ổn định cao, cùng bạn đồng hành trên con
                            đường phát triển doanh nghiệp và mang đến nhiều giá trị lợi nhuận hơn.</p>
                    </div>

                    <div class="item col-md-4 col-sm-6">
                        <div class="thumb">
                            <img class="wow rollIn" data-wow-delay="0.2s"
                                 src="{{asset("templates/pictures/categories/1457323148_mart.png")}}" alt=""/>
                        </div>
                        <h2 class="title-item">Marketing Online</h2>
                        <div class="stroke"><span>Stroke</span></div>
                        <p>Dịch vụ Marketing Online mang đến cho tất cả mọi người cơ hội tăng lượng khách hàng tiềm
                            năng, tăng doanh thu, quảng bá rộng thương hiệu đến người tiêu dùng. </p>
                    </div>


                </section><!-- top-content -->

            </div>


            <br>
            <!-- End check domain -->

            <section class="wow fadeInRightBig marketingoline">
                <div class="container">
                    <h1 class="title">Marketing Online</h1>
                    <p class="des-title">
                        Những dịch vụ quảng cáo chuyên nghiệp của chúng tôi được tạo bởi sự kết hợp của kinh nghiệm,
                        trình độ chuyên môn và tư duy sáng tạo
                    </p>
                    <div class="hp-marketing-ct">
                        <div class="row">

                            <div class="marketing-item col-md-4">
                                <div class="thumbs wow rollIn">
                                    <!-- https://cnvweb.vn/noi-dung/quang-cao-tren-facebook-1021.html -->
                                    <a href="#"><img
                                                src="templates/pictures/news/1459826127_1457326172_marketing-img2.jpg"
                                                alt=""/></a>
                                </div>
                                <div class="des-item">
                                    <h2 class="title"><a href="#">QUẢNG CÁO TRÊN FACEBOOK</a></h2>
                                    <p>(Facebook Ads) là hệ thống quảng cáo cho phép Nhà tài trợ quảng cáo sản phẩm,
                                        dịch vụ tới các thành viên sử dụng Facebook. </p>
                                </div>
                            </div><!-- marketing-item -->
                            <div class="marketing-item col-md-4">
                                <div class="thumbs wow rollIn">
                                    <!-- https://cnvweb.vn/noi-dung/search-engine-optimization-1020.html -->
                                    <a href="#"><img
                                                src="templates/pictures/news/1459826112_1457326151_marketing-img1.jpg"
                                                alt=""/></a>
                                </div>
                                <div class="des-item">
                                    <h2 class="title"><a href="#">SEARCH ENGINE OPTIMIZATION</a></h2>
                                    <p>Đầu tư SEO từ khóa Google thường tiết kiệm từ 30-60% kinh phí so với Quảng cáo từ
                                        khóa trên Google. </p>
                                </div>
                            </div><!-- marketing-item -->
                            <div class="marketing-item col-md-4">
                                <div class="thumbs wow rollIn">
                                    <!-- https://cnvweb.vn/noi-dung/quang-cao-google-adwords-1019.html -->
                                    <a href="#"><img
                                                src="templates/pictures/news/1459826049_google-adwords-certified-partner-logo1.jpg"
                                                alt=""/></a>
                                </div>
                                <div class="des-item">
                                    <h2 class="title"><a href="#">QUẢNG CÁO GOOGLE ADWORDS</a></h2>
                                    <p>Google Adwords là dịch vụ khai thác quảng cáo của Google thực hiện trên công cụ
                                        tìm kiếm và các website trong hệ thống liên kết. </p>
                                </div>
                            </div><!-- marketing-item -->
                        </div>
                    </div><!-- hp-marketing-ct -->
                </div>
            </section>
            <section class="hp-service wow fadeInLeftBig">
                <div class="container">
                    <h1 class="title">Tại sao chọn chúng tôi</h1>
                    <p class="des-title">
                        Những dịch vụ quảng cáo chuyên nghiệp của chúng tôi được tạo bởi sự kết hợp của kinh nghiệm,
                        trình độ chuyên môn và tư duy sáng tạo
                    </p>
                    <div class="service-ct">
                        <div class="service-ct-left col-md-4">
                            <div class="service-item clearfix">
                                <div class="thumbs">
                                    <i class="fa fa-leaf"></i>
                                </div>
                                <div class="meta">
                                    <h3 class="title">đa dạng các dịch vụ</h3>
                                    <p>Thiết kế website, hosting, domain, SEO,...</p>
                                </div>
                            </div>
                            <div class="service-item clearfix">
                                <div class="thumbs">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="meta">
                                    <h3 class="title">LƯU TRỮ CHUYÊN DỤNG</h3>
                                    <p>Giúp tăng hiệu năng và tốc độ xử lý vượt trội.</p>
                                </div>
                            </div>
                            <div class="service-item clearfix">
                                <div class="thumbs">
                                    <i class="fa fa-life-ring"></i>
                                </div>
                                <div class="meta">
                                    <h3 class="title">ĐẢM BẢO AN TOÀN DỮ LIỆU</h3>
                                    <p>Với chế độ tự động sao lưu dữ liệu hàng ngày.</p>
                                </div>
                            </div>
                        </div><!-- service-ct-left -->
                        <div class="service-ct-mid col-md-4">
                            <img src="{{asset("templates/skins/images/img-service.png")}}" alt=""/>
                        </div>
                        <div class="service-ct-right col-md-4">
                            <div class="service-item clearfix">
                                <div class="thumbs">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="meta">
                                    <h3 class="title">Giải thưởng trên di động</h3>
                                    <p>Đánh dấu khả năng cung cấp hệ thống server </p>
                                </div>
                            </div>
                            <div class="service-item clearfix">
                                <div class="thumbs">
                                    <i class="fa fa-google"></i>
                                </div>
                                <div class="meta">
                                    <h3 class="title">đối tác Google partner</h3>
                                    <p>Chính thức phân phối sản phẩm của Google Việt </p>
                                </div>
                            </div>
                            <div class="service-item clearfix">
                                <div class="thumbs">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="meta">
                                    <h3 class="title">HỖ TRỢ CHUYÊN NGHIỆP </h3>
                                    <p>Phản hồi qua điện thoại, email ở mọi thời điểm.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- service-ct -->
                </div>
            </section><!-- hp-service -->
            <section class="customer">
                <div class="container">
                    <h1 class="title">Khách hàng của chúng tôi</h1>
                    <p class="des-title des_an">
                        Chúng tôi tự hào được đồng hành cùng với sự phát triển lớn mạnh của các doanh nghiệp đến từ
                        nhiều ngành nghề với quy mô lớn nhỏ khác nhau.
                    </p>
                    <div class="customer-ct">
                        <div class="row">
                            <div class="customer-slider">

                                <div class="item">
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/42_logo-cumos_09.png")}}"
                                                 alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/50_11.png")}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/62_9.png")}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/25_8.png")}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/86_7.png")}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/35_6.png")}}" alt=""/>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="item">
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/16_5.png")}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/69_4.png")}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/69_2.png")}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/59_1.png")}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/38_0.png")}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="customer-item">
                                            <img src="{{asset("templates/pictures/galleries/50_logo-cumos_03.png")}}"
                                                 alt=""/>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- customer-slider -->


                        </div><!-- row -->
                    </div><!-- customer-ct -->
                </div><!-- container -->
            </section><!-- customer -->

            <section class="feed-back">
                <div class="container">
                    <div class="feed-back-slide">
                        <h1 class="title wow swing">ý kiến của khách hàng</h1>
                        <div class="owl-carousel wow fadeInLeftBig">

                            <div class="item">
                                <p class="comment-content"><span> T&T Media làm việc chuyên nghiệp. Thực hiện những yêu cầu của khách hàng một cách nhanh chóng. Việc bảo vệ website của khách hàng khỏi bị virus cũng rất tốt. Mình rất hài lòng với T&T Media  </span>
                                </p>
                                <p class="author">Nguyễn Thuỳ An</p>
                            </div>
                            <div class="item">
                                <p class="comment-content"><span> Trong thời gian T&T Media thiết kế web. Tôi đã đặt hết niềm tin vào công ty. Đáp lại niềm tin đó, T&T Media đã làm tôi rất hài lòng về sự nhiệt tình, chu đáo và hơn cả là trang web của tôi rất đẹp... Tôi rất vừa ý...  </span>
                                </p>
                                <p class="author">Nguyễn Đức Kiên</p>
                            </div>
                        </div>
                    </div><!-- feed-back-slide -->
                </div><!-- container -->
                <img src="templates/skins/images/bgr-feedback.png" alt=""/>
            </section><!-- feed-back -->
            <section class="bottom-content">
                <div class="container">
                    <div class="row">
                        <!-- <div class="bt-partner col-md-6 wow fadeInLeftBig">
                            <h1 class="title giua_didong">Đối tác</h1>
                            <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="partner-item">
                                        <img src="https://cnvweb.vn/templates/pictures/galleries/72_partner06.png" alt=""/>
                                    </div>
                                </div>

                                                                  <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="partner-item">
                                        <img src="https://cnvweb.vn/templates/pictures/galleries/7_partner05.png" alt=""/>
                                    </div>
                                </div>

                                                                  <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="partner-item">
                                        <img src="https://cnvweb.vn/templates/pictures/galleries/93_partner04.png" alt=""/>
                                    </div>
                                </div>

                                                                  <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="partner-item">
                                        <img src="https://cnvweb.vn/templates/pictures/galleries/80_partner03.png" alt=""/>
                                    </div>
                                </div>

                                                                  <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="partner-item">
                                        <img src="https://cnvweb.vn/templates/pictures/galleries/75_partner02.png" alt=""/>
                                    </div>
                                </div>

                                                                  <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="partner-item">
                                        <img src="https://cnvweb.vn/templates/pictures/galleries/99_partner01.png" alt=""/>
                                    </div>
                                </div>

                                                              </div>
                        </div -->
                        <!-- bt-partner -->
                        <!-- <div class="hp-new-featured col-md-6 wow fadeInRightBig">
                            <h1 class="title">Tin tức mới</h1>
                            <script>
                                var loading=false;
                                $(window).scroll(function()
                                {
                                    if($(this).scrollTop() > 5)
                                    {
                                        if(loading==false) {
                                        $("#loading").show();
                                        loading=true;

                                        $.post('rss.php', function(html){
                                             $("#show_rss").html(html); //append received data into the element
                                            $('#loading').hide(); //hide loading image once data is received
                                            })
                                        }
                                    }

                                });
                                </script>
                                <div id="show_rss">
                                    <div id="loading"><img src="https://cnvweb.vn/templates/skins/images/loading.gif"  alt="loading" width="500" /></div>

                                </div>
                            <a href="https://blog.cnv.vn/category/tin-cnv/tin-cnv-vn/" class="show-more">xem thêm</a>
                        </div> -->
                        <!-- new-featured -->
                    </div>
                </div>
            </section><!-- bottom-content -->
            <section class="supporthome col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="templates/skins/images/img.png">
                            <img src="templates/skins/images/hotline_37.png">
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <h5>Đến với T&T Media để được cung cấp chất lượng và hỗ trợ chuyên nghiệp</h5>
                                <div class="quote">Bằng cách lắng nghe và quan sát khách hàng mọi lúc mọi nơi, sự góp ý
                                    và chia sẽ của khách hàng đều trở thành những bài học kinh nghiệm vô cùng giá trị.
                                    Sự cam kết của mỗi cá nhân T&T Media trong một nỗ lực nhóm chính là điều tạo nên
                                    cách làm
                                    việc của một đội ngũ chuyên nghiệp
                                </div>
                                <ul>
                                    <li><a><i class="fa fa-fw fa-wechat"></i> LIVE CHAT</a></li>
                                    <li><a href=""><i class="fa fa-fw fa-envelope"></i> GỬI
                                            MAIL</a></li>
                                    <li><a href="tel:1900636400"><i class="fa fa-fw fa-phone"></i> GỌI ĐIỆN THOẠI</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- .site-content -->
    </main><!-- .site-main -->
@endsection
