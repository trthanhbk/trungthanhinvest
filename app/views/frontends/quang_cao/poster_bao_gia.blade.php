@extends('layouts.frontend')
@section('content')
    <style type="text/css">
        .spacing {
            margin-top: 10px;
            margin-bottom: 10px;
        }     
    </style>
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Thiết kế poster chuyên nghiệp</h4>                    
                    <p><img src="{{ url('asset/frontend/img/quang_cao/poster/thiet_ke.png') }}" style="width: 30%"></p>
                    <p>Poster là một tác phẩm nghệ thuật, được thiết kế mang tính thẩm mỹ cao nhằm mục đích truyền đạt đến người xem những thông tin về một sản phẩm, sự kiện ở những nơi công cộng, đông người. Ngoài ra, Poster còn là một công cụ đắc lực giúp các cửa hàng, đại lý tiêu thụ trong việc tác động đến quyết định “mua” của đối tượng khi so sánh các sản phẩm cùng loại. Với các ưu thế kể trên, khi thiết kế in ấn Poster cần phải được thiết kế bài bản từ khâu ý tưởng, chọn lọc hình ảnh, sắp xếp ngôn từ, bố cục, hình ảnh, câu chữ… thể hiện phong cách riêng độc đáo của Poster, cho tới khâu thi công thành phẩm. Tất cả phải được kết hợp nhuần nhuyễn, hài hòa đem đến cho đối tượng một sự bất ngờ thú vị, gây thiện cảm từ cái nhìn đầu tiên. </p>
                    <p class="spacing"><strong>Quy cách thiết kế</strong></p>
                    <p>
                        <div>Một số kích thước Poster thông dụng: 40 x 60 cm, 60 x 80 cm …</div>
                        <div>Tùy theo nhu cầu sử dụng, doanh nghiệp sẽ lựa chọn cho mình mẫu thiết kế đặc trưng phù hợp với từng chiến dịch quảng bá.</div>
                    </p>
                    <p class="spacing"><strong>Quy cách thành phẩm</strong></p>
                    <p>
                        <ul>
                            <li>Kích thước thành phẩm: theo yêu cầu của khách hàng.</li>
                            <li>Quy cách in: sử dụng công nghệ in Offset 4 màu, in Kỹ thuật số, in PP …</li>
                            <li>Gia công: cán màng bóng hoặc màng mờ.</li>
                            <li>Chất liệu: giấy Couche 150 – 300 gsm.</li>
                        </ul>
                    </p>
                    <p class="spacing">Quý khách vui lòng cung cấp cho chúng tôi: số lượng đặt hàng, kích thước yêu cầu, quy cách in, chất liệu</p>
                    @include('frontends._shared.company', ['service' => 'in poster'])
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop