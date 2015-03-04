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
                    <h4 class="title">Thiết kế tem bảo hành chuyên nghiệp</h4>  
                    <p>Ngoài Bao bì, các nghiên cứu thị trường cho thấy 85% khách hàng quyết định mua sản phẩm, hàng hóa là do bị tác động của Nhãn mác.</p>
                    <p class="text-center"><img src="{{ url('asset/frontend/img/nhan/tem_bao_hanh/thiet_ke_01.png') }}" style="width: 70%"></p>
                    <p class="spacing">Nhãn mác đẹp, ấn tượng sẽ gây tác động mạnh đến ý thức của người tiêu dùng về chất lượng bên trong của sản phẩm (tuy chưa sử dụng nó) và tạo nên những liên tưởng tuyệt vời về sản phẩm, thu hút thị giác của khách hàng tới sản phẩm của bạn trong hàng trăm, hàng ngàn sản phẩm cùng loại khác..</p>
                    <p>Với dịch vụ thiết kế in ấn của <strong>TRUNG THÀNH</strong> chúng tôi sẽ giúp bạn tạo ra những mẫu thiết kế Nhãn mác độc đáo, mang đặc trưng phù hợp nhất cho từng loại sản phẩm.</p>
                    <p class="spacing"><strong>Thiết kế Tem decal các loại</strong></p>
                    <p class="text-center"><img src="{{ url('asset/frontend/img/nhan/tem_bao_hanh/thiet_ke_02.png') }}" style="width: 30%"></p>
                    <p><strong>TRUNG THÀNH</strong> nhận thiết kế &amp; in ấn Tem các loại:</p>
                    <p>
                        <ul>
                            <li>Tem decal hàng hóa: là loại decal dán lên hành lý ký gởi, thùng  hàng hóa …</li>
                            <li>Tem decal nhựa: là loại decal có độ bền cao, dẻo dai, tuổi thọ sử dụng lâu bền, chịu được va quệt khi vận chuyển, thường dùng cho decal dán xe, logo nón…</li>
                            <li>Tem bảo hành, tem niêm phong: là tem chỉ sử dụng được 1 lần, độ dính cao, không thể bóc ra dán lại, không thể tái sử dụng lại được, do đó sản phẩm bên trong khi được dán tem bảo hành hay tem niêm phong là bất khả xâm phạm.</li>
                            <li>Tem chống giả Halogram: là loại tem sản xuất bằng công nghệ tích hợp ánh sáng Laser, tem khi bóc sẽ bị rách ngay nếu đã được dán lên sản phẩm.</li>
                        </ul>
                    </p>
                    <p class="spacing"><strong>Quy cách thiết kế</strong></p>
                    <p class="text-center"><img src="{{ url('asset/frontend/img/nhan/tem_bao_hanh/thiet_ke_03.png') }}" style="width: 70%"></p>
                    <p>
                        <ul>
                            <li>Kích thước, kiểu dáng tùy theo nhu cầu sử dụng, khách hàng sẽ lựa chọn cho mình mẫu thiết kế đặc trưng phù hợp với từng sản phẩm.</li>
                            <li>Thời gian thực hiện: từ 5 – 7 ngày (không bao gồm thời gian chờ thông tin của khách hàng)</li>
                            <li>Yêu cầu: đáp ứng các chuẩn mực thiết kế hiện đại, sang trọng, ấn tượng … thỏa mãn các yêu cầu của khách hàng(hình ảnh và nội dung do khách hàng cung cấp)</li>
                        </ul>
                    </p>
                    <p class="spacing"><strong>Quy cách thành phẩm</strong></p>
                    <p>
                        <ul>
                            <li>Kích thước thành phẩm: theo yêu cầu của khách hàng.</li>
                            <li>Quy cách in: sử dụng công nghệ in Offset 4 màu 1 mặt, in Kỹ thuật số, in Microtext …</li>
                            <li>Gia công: bế, dán và gia công thành phẩm.</li>
                            <li>Chất liệu: Decal giấy, decal nhôm, decal vỡ, decal 7màu, PP có keo … tùy theo yêu cầu.</li>
                        </ul>
                    </p>
                    <p class="spacing">Quý khách vui lòng cung cấp cho chúng tôi: số lượng đặt hàng, kích thước yêu cầu, quy cách in, chất liệu …</p>
                    @include('frontends._shared.company', ['service' => 'in tem bảo hành'])
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop