@extends(Config::get('layout.frontend'))
@section('content')
    <style type="text/css">
        p {
            margin-bottom: 10px;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Khuyến Mại</h4>
                    <p>
                        <img src="{{ asset('asset/frontend/img/khuyen_mai/khuyenmai3.png') }}" width="100%">
                    </p>
                    <p>
                        Vui lòng liên lạc với chúng tôi nếu Quý khách cần thêm các công đoạn khác như bế, khoan lỗ,… hoặc kích thước khác để có sản phẩm theo ý.
                    </p>
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop