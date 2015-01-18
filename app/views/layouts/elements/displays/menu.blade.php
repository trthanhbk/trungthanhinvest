<div class="navbar bs-docs-nav" role="banner">

  <div class="container">
    <div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>

    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><i class="icon-home"></i></a></li>
        <li><a href="{{ action('FrontendController@getIntro') }}">Giới thiệu</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm & dịch vụ <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ action('VanphongController@getIndex') }}">Ấn phẩm văn phòng</a></li>
            <li><a href="{{ action('QuangcaoController@getIndex') }}">Ấn phẩm quảng cáo</a></li>
            <li><a href="{{ action('LichController@getIndex') }}">Lịch</a></li>
            <li><a href="{{ action('NhanController@getIndex') }}">Nhãn mác, tem bảo hành</a></li>
            <li><a href="{{ action('AnPhamKhacController@getIndex') }}">Ấn phẩm khác</a></li>
          </ul>
        </li>
        <li><a href="{{ action('FrontendController@getKhuyenMai') }}">Khuyến mãi</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Đặt hàng <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ action('FrontendController@getQuyTrinhDatHang') }}">Quy Trình Đặt Hàng</a></li>
            <li><a href="{{ action('FrontendController@getDatHangInAn') }}">Đặt Hàng In Ấn</a></li>            
          </ul>
        </li>
        <li><a href="{{ action('FrontendController@getPhanHoi') }}">Phản hồi</a></li>
        <li><a href="{{ action('FrontendController@getLienHe') }}">Liên hệ</a></li>
      </ul>
    </nav>
  </div>
</div>