@extends(Config::get('layout.frontend'))
@section('content')
    <style type="text/css">
        a {
            color: blue;
        }        
    </style>
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Liên Hệ</h4>
                    <div class="social" style="font-weight: bold; color: red;">
                    CÔNG TY CỔ PHẦN IN VÀ THƯƠNG MẠI TRUNG THÀNH
                    </div>
                    <hr />
                    <i class="icon-home"></i> &nbsp; 74 Doãn Kế Thiện, Mai Dịch, Cầu Giấy, Hà Nội.
                    <hr />
                    <i class="icon-phone"></i> &nbsp; Phone: +(84) 437649789 <span style="padding-left: 10px;">Fax: +(84) 437648083</span>
                    <hr />
                    <img src=" {{ url('asset/frontend/img/hotline.jpg')  }}" height="15px"> &nbsp; Hotline: Mrs Hoa - 0936.000.996
                    <hr />
                    <i class="icon-envelope-alt"></i> &nbsp; <a href="mailto:trungthanhinan@gmail.com">trungthanhinan@gmail.com</a>
                    <hr />
                    <img src=" {{ url('asset/frontend/img/website.png')  }}" height="15px"> &nbsp; <a href="http://trungthanhinvest.com.vn" style="color: blue;">trungthanhinvest.com.vn</a>
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop