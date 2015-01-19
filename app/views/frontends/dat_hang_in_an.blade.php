@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Đặt Hàng In Ấn</h4>
                    <p>Mẫu form đặt hàng (bạn có thể download về ở đây: <a href="{{ asset('asset/frontend/img/dat_hang/dat_hang_in_an.docx') }}" style="color: blue;">form đặt hàng</a>)</p>
                    <p><img src="{{ asset('asset/frontend/img/dat_hang/dat_hang_in_an.png') }}" style="width: 100%; border: 1px black dotted;"></p>                    
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop