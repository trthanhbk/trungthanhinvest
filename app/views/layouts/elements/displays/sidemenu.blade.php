<div>
    <h4 class="title text-center">Danh mục thiết kế & in ấn</h4>
    <nav>
        <ul id="nav">
            <li class="has_sub"><a href="#" {{ $controller == "VanphongController" ? "class='open'" : "" }}>Ấn phẩm văn phòng</a>
                <ul {{ $controller == "VanphongController" ? "style='display:block;'" : "" }}>
                    <li><a href="{{ action('VanphongController@getInNameCardGiaRe') }}">Danh thiếp</a></li>
                    <li><a href="{{ action('VanphongController@getTieuDeThu') }}">Tiêu đề thư</a></li>
                    <li><a href="{{ action('VanphongController@getPhongBi') }}">Phong bì</a></li>
                    <li><a href="{{ action('VanphongController@getKepFile') }}">Kẹp file</a></li>
                </ul>
            </li>
            <li class="has_sub"><a href="#" {{ $controller == "QuangcaoController" ? "class='open'" : "" }}>Ấn phẩm quảng cáo</a>
                <ul {{ $controller == "QuangcaoController" ? "style='display:block;'" : "" }}>
                    <li><a href="{{ action('QuangcaoController@getToGap') }}">Tờ gấp</a></li>
                    <li><a href="{{ action('QuangcaoController@getToRoi') }}">Tờ rơi</a></li>
                    <li><a href="{{ action('QuangcaoController@getPoster') }}">Poster</a></li>
                    <li><a href="{{ action('QuangcaoController@getCatalogue') }}">Catalogue</a></li>
                </ul>
            </li>
            <li class="has_sub"><a href="#" {{ $controller == "LichController" ? "class='open'" : "" }}>Lịch</a>
                <ul {{ $controller == "LichController" ? "style='display:block;'" : "" }}>
                    <li><a href="{{ action('LichController@getLichDocQuyen') }}">Lịch độc quyền</a></li>
                    <li><a href="{{ action('LichController@getLichBan') }}">Lịch bàn</a></li>
                    <li><a href="{{ action('LichController@getLichLoXo7To') }}">Lịch lò xo 7 tờ</a></li>
                    <li><a href="{{ action('LichController@getLichLoXo12Thang') }}">Lịch lò xo 12 tháng</a></li>
                    <li><a href="{{ action('LichController@getLichNepThiec') }}">Lịch nẹp thiếc</a></li>
                    <li><a href="{{ action('LichController@getThiepChucMungNamMoi') }}">Thiếp chúc mừng năm mới</a></li>
                    <li><a href="{{ action('LichController@getTuiGiay') }}">Túi giấy</a></li>
                </ul>
            </li>
            <li class="has_sub"><a href="#" {{ $controller == "NhanController" ? "class='open'" : "" }}>Nhãn mác, tem bảo hành</a>
                <ul {{ $controller == "NhanController" ? "style='display:block;'" : "" }}>
                    <li><a href="{{ action('NhanController@getNhanMac') }}">Nhãn mác</a></li>
                    <li><a href="{{ action('NhanController@getTemBaoHanh') }}">Tem bảo hành</a></li>
                </ul>
            </li>
            <!-- <li class="has_sub"><a href="#" {{ $controller == "AnPhamKhacController" ? "class='open'" : "" }}>Ấn phẩm khác</a>
                <ul {{ $controller == "AnPhamKhacController" ? "style='display:block;'" : "" }}>
                    <li><a href="{{ action('AnPhamKhacController@getPhieuBaoHanh') }}">Phiếu bảo hành</a></li>
                    <li><a href="{{ action('AnPhamKhacController@getThucDon') }}">Thực đơn</a></li>
                    <li><a href="{{ action('AnPhamKhacController@getBieuMau') }}">Biểu mẫu</a></li>
                    <li><a href="{{ action('AnPhamKhacController@getTheNhua') }}">Thẻ nhựa</a></li>
                    <li><a href="{{ action('AnPhamKhacController@getVeGiuXe') }}">Vé giữ xe</a></li>
                </ul>
            </li> -->
        </ul>
    </nav>
    <hr>
    <div>Hotline: 0936000996</div>   
</div>