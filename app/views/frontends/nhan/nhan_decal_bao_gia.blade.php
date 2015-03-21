@extends(Config::get('layout.frontend'))
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
                    <h4 class="title">Thiết kế nhãn mác chuyên nghiệp</h4>  
                    <p>Khi chuyển dữ liệu cho đối tác hay khách hàng, bạn thường copy dữ liệu vào CD/DVD. Vì vậy, một bộ Nhãn, bìa đĩa CD/DVD (nhãn đĩa + vỏ đĩa) có chứa các yếu tố thiết kế nhận diện thương hiệu sẽ tạo nên sự chuyên nghiệp, ấn tượng, nâng cao giá trị cho hình ảnh thương hiệu cho doanh nghiệp bạn trong mắt khách hàng.</p>
                    <p><img src="{{ url('asset/frontend/img/nhan/nhan_decal/thiet_ke.png') }}" style="width: 70%"></p>
                    <p class="spacing">Với dịch vụ thiết kế , in ấn của <strong>TRUNG THÀNH</strong> đầy kinh nghiệm và sáng tạo, chúng tôi sẽ giúp bạn sở hữu một bộ Nhãn, bìa đĩa CD/DVD thật ấn tượng, sang trọng.</p>
                    <p class="spacing"><strong>Quy cách thiết kế</strong></p>
                    <p>
                        <ul>
                            <li>Kích thước nhãn đĩa: 11.6 x 11.6 cm</li>
                            <li>Kích thước vỏ đĩa: 13.5 x 13.5 cm</li>
                            <li>Sửa chữa thiết kế (03 lần)</li>
                            <li>Thời gian thực hiện: từ 5 – 7 ngày</li>
                            <li>Yêu cầu: đáp ứng các chuẩn mực thiết kế hiện đại, sang trọng, ấn tượng … thỏa mãn các yêu cầu của khách hàng(hình ảnh và nội dung do khách hàng cung cấp)</li>
                        </ul>
                    </p>
                    <p class="spacing"><strong>Quy cách thành phẩm</strong></p>
                    <p>
                        <ul>
                            <li>Kích thước thành phẩm: theo yêu cầu của khách hàng.</li>
                            <li>Quy cách in: sử dụng công nghệ in Offset 4 màu 1 mặt.</li>
                            <li>Gia công: cắt bế, thành phẩm.</li>
                            <li>Chất liệu: giấy Couche, decal giấy.</li>
                        </ul>
                    </p>
                    <p class="spacing">Quý khách vui lòng cung cấp cho chúng tôi: số lượng đặt hàng, kích thước yêu cầu, quy cách in, chất liệu …</p>
                    @include('frontends._shared.company', ['service' => 'in nhãn mác'])
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop