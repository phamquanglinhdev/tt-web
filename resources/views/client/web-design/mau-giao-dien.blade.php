@php
    $current = "mgd";
@endphp
@extends("layouts.web-design")
@section("contents")
    <div id="content" class="site-content">
        <section id="search_form_dd">
            <!-- <div class="container p0">
                <div class="search col-md-3 col-sm-5">
				<div class="input-group">
					<input type="text" class="form-control" id="keyword" placeholder="Điền từ khóa và enter">
					<div class="input-group-addon" id="searchSubmit"><i class="fa fa-search"></i></div>
				</div>
                </div>

                <div class="list_linh_vuc col-md-3 col-sm-5">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Tất Cả Lĩnh Vực
          <span class="caret"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        		          <li><a href="https://cnvweb.vn/mau-giao-dien/cong-nghiep-445">Công nghiệp</a></li>
		          		          <li><a href="https://cnvweb.vn/mau-giao-dien/cong-nghe-446">Công nghệ</a></li>
		          		          <li><a href="https://cnvweb.vn/mau-giao-dien/am-thuc-447">Ẩm thực</a></li>
		          		          <li><a href="https://cnvweb.vn/mau-giao-dien/lam-dep-479">Làm đẹp</a></li>
		          		          <li><a href="https://cnvweb.vn/mau-giao-dien/du-lich-489">Du lịch</a></li>
		          		          <li><a href="https://cnvweb.vn/mau-giao-dien/doanh-nghiep-481">Doanh nghiệp</a></li>
		          		          <li><a href="https://cnvweb.vn/mau-giao-dien/noi-that-482">Nội thất</a></li>
		          		          <li><a href="https://cnvweb.vn/mau-giao-dien/thuong-mai-dien-tu-490">Thương mại điện tử</a></li>
		          		          <li><a href="https://cnvweb.vn/mau-giao-dien/bat-dong-san-484">Bất động sản</a></li>

                  </ul>
                </div>

            </div> -->
            <div class="container p0">
                {{--<ul class="title-tab" role="tablist">--}}
                {{--<li >--}}
                {{--<a href="mau-giao-dien-420.html">--}}
                {{--<div class="img" style="background-image: url('../templates/skins/images/all.png')">--}}
                {{--</div>--}}
                {{--<p>Tất cả</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li >--}}
                {{--<a href="cong-nghiep-445.html">--}}

                {{--<div class="img img_1" style="background-image: url('{{route("/templates/pictures/categories/1474432510_khoan.png")}}')">--}}

                {{--</div>--}}
                {{--<p>Công nghiệp</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li >--}}
                {{--<a href="cong-nghe-446.html">--}}

                {{--<div class="img img_2" style="background-image: url('../templates/pictures/categories/1474432520_cokhi.png')">--}}

                {{--</div>--}}
                {{--<p>Công nghệ</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li >--}}
                {{--<a href="am-thuc-447.html">--}}

                {{--<div class="img img_3" style="background-image: url('../templates/pictures/categories/1474432529_Untitled-2.png')">--}}

                {{--</div>--}}
                {{--<p>Ẩm thực</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li >--}}
                {{--<a href="lam-dep-479.html">--}}

                {{--<div class="img img_4" style="background-image: url('../templates/pictures/categories/1475289591_thoi-trang.png')">--}}

                {{--</div>--}}
                {{--<p>Làm đẹp</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li >--}}
                {{--<a href="du-lich-489.html">--}}

                {{--<div class="img img_5" style="background-image: url('../templates/pictures/categories/1481167705_travel.png')">--}}

                {{--</div>--}}
                {{--<p>Du lịch</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li >--}}
                {{--<a href="doanh-nghiep-481.html">--}}

                {{--<div class="img img_6" style="background-image: url('../templates/pictures/categories/1475289621_doanh-nghiep.png')">--}}

                {{--</div>--}}
                {{--<p>Doanh nghiệp</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li >--}}
                {{--<a href="noi-that-482.html">--}}

                {{--<div class="img img_7" style="background-image: url('../templates/pictures/categories/1475289629_noi-that.png')">--}}

                {{--</div>--}}
                {{--<p>Nội thất</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li >--}}
                {{--<a href="thuong-mai-dien-tu-490.html">--}}

                {{--<div class="img img_8" style="background-image: url('../templates/pictures/categories/1481167732_tmdt.png')">--}}

                {{--</div>--}}
                {{--<p>Thương mại điện tử</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li >--}}
                {{--<a href="bat-dong-san-484.html">--}}

                {{--<div class="img img_9" style="background-image: url('../templates/pictures/categories/1475289647_bat-dong-san.png')">--}}

                {{--</div>--}}
                {{--<p>Bất động sản</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
            </div>
        </section>

        <section id="mau_giao_dien">
            <div class="container p0">
                @for($i=1;$i<=15;$i++)
                    <div class="box-hnews col-md-4 col-sm-6">
                        <div class="border_all">
                            <div class="img">
                                <!-- <a href="http://nbcluxe.cnv.vn/" target="_bank" title="NBCLuxe"> -->
                                <a href="https://dl-devs.com" target="_blank" class="a1">
                                    <span><img class="giu_nguyen" src="{{asset("templates/skins/images/plus_ico.png")}}"/></span>
                                    <img src="{{asset("templates/pictures/products/1544409180_nbcluxe_thumb_360x482.png")}}"
                                         alt="NBCLuxe"/>
                                </a>
                            </div>

                            <div class="info">
                                &nbsp;
                            </div>
                        </div>
                        <div class="title_theme">
                            <h4>NBCLuxe</h4>
                            <span hidden>1328</span>
                            <span class="star">
                                <p><img src="{{asset("templates/skins/images/star.png")}}"/></p>
                            </span>
                            <p>Lĩnh Vực : Làm đẹp</p>
                        </div>
                    </div>
                @endfor
            </div>
        </section>

        <style type="text/css">
            .star {
                display: block;
                text-align: center;
                height: 25px;
            }

            .star p {
                display: inline-block;
                margin: 0;
            }

            .star img {
                float: left;
            }
        </style>

        <div class="clearfix"></div>

        <div class="col-sm-12 text-center">
            <ul class='pagination pagination-sm'>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </div>

    </div><!-- .site-content -->
@endsection