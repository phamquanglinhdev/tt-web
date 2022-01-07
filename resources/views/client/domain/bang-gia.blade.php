@php
    $current="1";
@endphp
@extends("layouts.domain")
@section("contents")
    <div id="content" class="site-content">
        <section class="hp-domain page_content">
            <div class="container">
                <div class="row">
                    <div class="domain-image">
                        <div class="domain-thumb">
                            <img alt="" src="../templates/skins/images/tenmien.png"/></div>
                        <!-- .domain-thumb --></div>
                    <!-- .domain-image -->
                    <div class="domain-info">
                        <form class="domain-form" method="post" name="form_search_domain"
                              onsubmit="return validate_search_domain()">
                            <input class="domain-field" id="domain_name" name="domain_name"
                                   placeholder="Nhập tên miền cần kiểm tra" type="text"/>
                            <button class="domain-check">Tìm Kiếm</button>
                        </form>
                    </div>
                    <!-- .domain-info --></div>
                <div class="row">
                    <div class="domain_price">
                        <p>
                            <span class="title_price">.vn</span></p>
                        <p>
                            <span class="price_dm">770.000</span><span class="dm_nam">/năm</span></p>
                    </div>
                    <div class="domain_price">
                        <p>
                            <span class="title_price">.com.vn</span></p>
                        <p>
                            <span class="price_dm">670.000</span><span class="dm_nam">/năm</span></p>
                    </div>
                    <div class="domain_price">
                        <p>
                            <span class="title_price">.com</span></p>
                        <p>
                            <span class="price_dm">329.000</span><span class="dm_nam">/năm</span></p>
                    </div>
                    <div class="domain_price">
                        <p>
                            <span class="title_price">.net</span></p>
                        <p>
                            <span class="price_dm">349.000</span><span class="dm_nam">/năm</span></p>
                    </div>
                    <div class="domain_price">
                        <p>
                            <span class="title_price">.org</span></p>
                        <p>
                            <span class="price_dm">379.000</span><span class="dm_nam">/năm</span></p>
                    </div>
                    <div class="domain_price mobile_tt">
                        <p>
                            <span class="title_price">.info</span></p>
                        <p>
                            <span class="price_dm">409.000</span><span class="dm_nam">/năm</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="content_dm_img col-md-4">
                        <img src="../templates/skins/images/iphone.png"/></div>
                    <div class="content_dm_text col-md-8">
                        <p>
                            <span class="dai_ly_cc" style="font-size:28px; font-weight:bold;"><span
                                        style="color:#097ab4;">Công Nghệ Việt</span> là đại lý chính thức của</span></p>
                        <p>
                            <span style="font-size:18px;color:#b5b5b5;line-height:45px;">eNom (www.enom.com) và OnlineNic (www.onlinenic.com)</span>
                        </p>
                        <hr style="width:250px;float:left;"/>
                        <ul class="list_dd">
                            <li>
                                Được tổ chức quản lý tên miền quốc tế ICANN (www.icann.org) công nhận
                            </li>
                            <li>
                                Khi đăng ký tên miền quốc tế tại CNV Soft, tên miền của bạn sẽ được quản lý bởi CNV Soft
                                hay bởi eNom hay bởi Onlinenic. Bạn cũng có thể đăng ký tên miền Quốc gia Việt Nam tại
                                CNV Soft, giá cả rất cạnh tranh với thủ tục nhanh gọn có đầy đủ tính xác thực về mặt
                                pháp lý do Trung tâm Internet Việt Nam VNNIC thuộc Bộ thông tin và truyền thông quy định
                            </li>
                            <li>
                                Tất cả tên miền Việt Nam (được tô đỏ, có phần mở rộng .vn) khi đăng ký cần có bản khai
                                đăng ký và bản photo chứng minh thư
                            </li>
                            <li>
                                Đối với tên miền Quốc Tế sau khi đăng ký khách hàng phải có trách nhiệm thông báo vấn đề
                                sử dụng tên miền quốc tế cho VNNIC tại địa chỉ website http://www.thongbaotenmien.vn
                            </li>
                            <li>
                                Quy định đối với tên miền quốc tế:
                                <ul>
                                    <li>
                                        * Nghị định số 28/2009/NĐ-CP ngày 20/3/2009 quy định xử phạt vi phạm hành chính
                                        trong quản lý, cung cấp, sử dụng dịch vụ internet và thông tin điện tử trên
                                        Internet.
                                    </li>
                                    <li>
                                        * Thông tin 09/2008/TT-BTTT ngày 24/12/2008 của Bộ Thông Tin và Truyền Thông
                                        hướng dẫn về quản lý và sử dụng tài nguyên Internet.
                                    </li>
                                    <li>
                                        * Điều 23, luật Công nghệ thông tin số 67/2006/QH 11 ngày 29/6/2009.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- hp-domain -->
        <section id="bang_gia_dm">
            <div class="container">
                <div class="row">
                    <div class="bang_gia">
                        <h4>
                            Bảng giá tên miền Việt Nam và quốc tế</h4>
                        <h5 style="margin-top:10px;">
                            (CNV hỗ trợ xử lý hoàn tất hồ sơ tên miền Việt Nam dứt điểm nhanh chóng chỉ với 50.000đ/tên
                            miền)</h5>
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="pill" href="#home">tên miền quốc tế</a></li>
                            <li>
                                <a data-toggle="pill" href="#menu1">tên miền việt nam</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="name_title">
                                            domain name
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="name_title">
                                            khởi tạo
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="name_title tar">
                                            gia hạn
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .com
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            Free
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title tar">
                                            <span class="gia_tien">329.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .net
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            Free
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title tar">
                                            <span class="gia_tien">349.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .org
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            Free
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title tar">
                                            <span class="gia_tien">379.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .biz
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            Free
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title tar">
                                            <span class="gia_tien">399.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .info
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            Free
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title tar">
                                            <span class="gia_tien">409.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .me
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            Free
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title tar">
                                            <span class="gia_tien">689.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="menu1">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="name_title">
                                            domain name
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="name_title">
                                            khởi tạo
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="name_title tar">
                                            gia hạn
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .vn
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            310.000 vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title" style="text-align: right;">
                                            <span class="gia_tien">460.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .com.vn
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            310.000 vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title" style="text-align: right;">
                                            <span class="gia_tien">360.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .net.vn/.biz.vn
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            310.000 vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title" style="text-align: right;">
                                            <span class="gia_tien">360.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .name.vn
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            50.000 &nbsp; vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title" style="text-align: right;">
                                            <span class="gia_tien">52.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .vn 1 ký tự
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            300.000 vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title" style="text-align: right;">
                                            <span class="gia_tien">40.000.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            .vn 2 ký tự
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            300.000 vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title" style="text-align: right;">
                                            <span class="gia_tien">10.000.000</span> vnd
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title ">
                                            DNS Changing
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title">
                                            Miễn phí
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                        <td class="td_title  tar">
                                            Miễn phí
                                        </td>
                                        <td class="clear_table">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br/>


    </div>
@endsection