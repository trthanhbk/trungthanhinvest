@extends('layouts.frontend')
@section('content')
<style>
p {   
    margin-bottom: 10px;
}
.bold {
    font-weight: bold;
}
.blue {
    color: blue;
}
.red { 
    color: red;
}
.uppercase {
    text-transform: uppercase;
}
.center {
    text-align: center;
}
.oneFour {
    float: left;
    width: 23%;
}
</style>
<div class="row">
    <div class="col-md-12">
        <!-- Tabs -->
        <ul class="nav nav-tabs">
            <!-- Navigation tabs (Job titles ). Use unique value in anchor tags. -->
            <li class="active"><a href="#tab1" data-toggle="tab">Giới thiệu chung</a></li>
            <li><a href="#tab2" data-toggle="tab">Hệ thống sản phẩm dịch vụ</a></li>
            <li><a href="#tab3" data-toggle="tab">Năng lực sản xuất</a></li>
            <li><a href="#tab4" data-toggle="tab">Khách hàng thân thiết</a></li>
        </ul>
        <div class="tab-content" style="text-align: justify">
            
            <!-- In "id", use the value which you used in above anchor tags -->
            <div class="tab-pane active" id="tab1">
                <!-- Content -->
                <h4 class="title">Giới thiệu chung</h4>
                <p> Công ty Cổ phần In và Đầu tư Trung Thành tiền thân là xưởng sản xuất Trung Thành
                chuyên sản xuất giấy vở học sinh và hoàn thiện các sản phẩm sau in như: Phong bì, catalog, 
                poster, tờ rơi, vỏ hộp vv… từ năm 1999. Trải qua gần một thập kỷ sản xuất và phát triển, khi 
                Chính phủ cho phép tư nhân được thành lập, công ty kinh doanh ngành in và xuất bản phẩm, đến 
                ngày 15 tháng 12 năm 2006, Công ty Cổ phần In và Đầu tư Trung Thành chính thức được thành 
                lập và đi vào hoạt động sản xuất kinh doanh trong các lĩnh vực  <span class="bold blue uppercase">THƯƠNG MẠI, THIẾT KẾ, 
                IN OFFSET.</span> Với đội ngũ nhân viên giàu kinh nghiệm, năng động, sáng tạo, được đào tạo qua 
                các trường chuyên ngành về kinh tế, đồ họa, mỹ thuật công nghiệp, chúng tôi mang đến những 
                giá trị đích thực cho qúy khách thông qua việc cung cấp các sản phẩm <span class="bold red uppercase">Thiết kế sáng tạo – Chất 
                lượng in tốt nhất – Tiến độ nhanh nhất -  Giá thành rẻ nhất. </span></p>
                
                <p> Ngày nay, khoa học kỹ thuật phát triển không ngừng, môi trường kinh doanh ngày càng cạnh 
                tranh khốc liệt vì vậy Công ty chúng tôi luôn trăn trở với từng nhịp chuyển mình của Quý khách. 
                Để góp phần sức lực nhỏ bé của mình trong sự nghiệp xây dựng và phát triển thương hiệu cùng 
                Quý khách hàng, Công ty chúng tôi luôn trau dồi kỹ năng, đổi mới trang thiết bị để đáp ứng đầy 
                đủ nhu cầu của thị trường. Công ty Trung Thành luôn chịu trách nhiệm đến cùng với từng sản 
                phẩm và dịch vụ mà Công ty chúng tôi cung cấp. Uy tín và thương hiệu của Công ty Cổ Phần In 
                và Đầu Tư Trung Thành trong suốt những năm qua luôn được Quý khách hàng tin dùng và là 
                một trong những công ty đứng đầu về dịch vụ in ấn và thiết kế trên thị trường được người tiêu 
                dùng bình chọn.</p>
                
                <p><div>Đến với Công ty Cổ Phần In và Đầu tư Trung Thành chắc chắn Quý khách sẽ hài lòng! </div>
                
                <div>Để biết thêm thông tin vui lòng truy cập </div>
                
                <div class="bold blue">Website: <a href="trungthanhinvest.com.vn" style="color: blue">trungthanhinvest.com.vn</a></div></p>
                
                <div>Liên hệ trực tiếp để được tư vấn</div>
                
                <div style="color: #6600FF;" class="bold uppercase">Công ty Cổ phần In và Đầu tư Trung Thành </div>
                
                <div>74 Doãn Kế Thiện, P. Mai Dịch, Q. Cầu Giấy, Hà Nội </div>
                
                <div>Tel: (84-4) 37644789 – Mobile: Mr Liêm : 0912.153.572 </div>
                
                <div>Fax: (84-4) 37648083 </div>
                
                <div class="bold blue">Email: <a href="mailto:trungthanhinan@gmail.com" style="color: blue">trungthanhinan@gmail.com</a></div>
            </div>

            <div class="tab-pane" id="tab2">
                <h4 class="title">Hệ thống sản phẩm dịch vụ</h4>
                <p><span class="bold">1. Thương hiệu:</span>
                    <ul>
                        <li>Thiết kế logo  </li>
                        <li>Thiết kế nhận dạng thương hiệu</li>
                        <li>Làm thương hiệu: quảng cáo, quà tặng thương hiệu,...</li>
                    </ul>
                </p>

                <p><span class="bold">2. Ấn phẩm văn phòng:</span>
                    <ul>
                        <li>Cardvisit, danh thiếp</li>
                        <li>Tờ rơi, Tờ gấp</li>
                        <li>Catalogue</li>
                        <li>Profile</li>
                        <li>Sách, tạp chí</li>
                        <li>Kỷ yếu, báo cáo</li>
                    </ul>
                </p>

                <p><span class="bold">3. Ấn phẩm Marketing</span>
                    <ul>
                        <li>Bộ giấy mời + Phong bì</li>
                        <li>Poster, Banner, Áp phích, </li>
                    </ul>
                </p>

                <p><span class="bold">4. Nhãn mác, tem bảo hành</span>
                    <ul>
                        <li>Nhãn, hộp thuốc</li>
                        <li>Nhãn, hộp rượu, nhãn chai</li>
                        <li>Name card</li>
                        <li>Phong bì thư</li>
                        <li>Tiêu đề thư</li>
                        <li>Bìa file</li>
                    </ul>
                </p>

                <p><span class="bold">5. Lịch</span>
                    <ul>
                        <li>Lịch độc quyền</li>
                        <li>Lịch bàn</li>
                        <li>Lịch lò xo 7 tờ</li>
                        <li>Lịch nẹp thiếc</li>
                        <li>Thiếp chúc mừng năm mới</li>
                        <li>Túi chúc mừng năm mới</li>
                        <li>Lì xì năm</li>
                    </ul>
                </p>
            </div>

            <div class="tab-pane" id="tab3">
                <h4 class="title">Năng lực sản xuất</h4>
                <p>
                    <span class="bold">Về máy móc, thiết bị in ấn, công nghệ:</span> hiện nay chúng tôi đang không ngừng đầu tư, sở hữu những 
                    máy móc và thiết bị in ấn hiện đại với công nghệ hàng đầu trong ngành in.
                </p>
                
                <p><img src="{{ asset('asset/frontend/img/gioi_thieu/may_in_01.png') }}" style="width: 100%"></p>
                <p><img src="{{ asset('asset/frontend/img/gioi_thieu/may_in_02.png') }}" style="width: 100%"></p>
                <p class="center">Máy in offset  4  màu hiện đại, chuyên dùng in công nghiệp cho chất lượng tiêu chuẩn, ổn định…</p>

                <p><img src="{{ asset('asset/frontend/img/gioi_thieu/may_ra_kem.png') }}" style="width: 100%"></p>
                <p class="center">Máy ra kẽm</p>

                <p><img src="{{ asset('asset/frontend/img/gioi_thieu/may_cat_giay.png') }}" style="width: 100%"></p>
                <p class="center">Máy cắt giấy</p>
            </div>

            <div class="tab-pane" id="tab4">
                <h4 class="title">Khách hàng thân thiết</h4>
                <p>
                    <span class="bold">Một số khách hàng thân thiết của công ty:</span><br>
                    Ngân hàng  Nhà nước Việt Nam, Ngân hàng Techcombank, Đại học Mỏ Địa Chất, Đại 
                    học MDIS, Bệnh viện Việt Pháp Hà Nội, … và nhiều khách hàng thân thiết khác.
                </p>
                <hr>
                <p class="bold red uppercase">1. Ngân hàng nhà nước Việt Nam</p>
                <p><img src="{{ asset('asset/frontend/img/khach_hang/ngan_hang_nha_nuoc.gif') }}" style="width: 30%;"></p>
                <hr>
                <p class="bold red uppercase">2. Ngân hàng Techcombank</p>                
                <p><img src="{{ asset('asset/frontend/img/khach_hang/techcombank.png') }}" style="width: 30%; border: 1px solid black;"></p>
                <hr>
                <p class="bold red uppercase">3. Ngân hàng VIB</p>                
                <p><img src="{{ asset('asset/frontend/img/khach_hang/VIB.png') }}" style="width: 30%; border: 1px solid black;"></p>
                <hr>
                <p class="bold red uppercase">4. Đại học Mỏ Địa Chất</p>                
                <p><img src="{{ asset('asset/frontend/img/khach_hang/dai_hoc_mo.png') }}" style="width: 30%; border: 1px solid black;"></p>
                <hr>
                <p class="bold red uppercase">5. Học viện phát triển quản lý Singapore</p>                
                <p><img src="{{ asset('asset/frontend/img/khach_hang/mdis.png') }}" style="width: 30%; border: 1px solid black;"></p>
                <hr>
                <p class="bold red uppercase">6. Bệnh viện Việt Pháp Hà Nội</p>                
                <p><img src="{{ asset('asset/frontend/img/khach_hang/benh_vien_viet_phap.png') }}" style="width: 30%; border: 1px solid black;"></p>
                <hr>
                <p class="bold red uppercase">7. Đại học Giao Thông Vận Tải</p>                
                <p><img src="{{ asset('asset/frontend/img/khach_hang/dai_hoc_giao_thong_van_tai.png') }}" style="width: 30%; border: 1px solid black;"></p>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- Page content ends -->
@stop