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
                    <h4 class="title">Thiết kế Catalogue chuyên nghiệp</h4>  
                    <p>Bạn đang quan tâm tới nhu cầu của khách hàng? Bạn đang có kế hoạch thiết kế một ấn phẩm chuyên nghiệp nhằm hỗ trợ hoạt động kinh doanh, giới thiệu sản phẩm, dịch vụ mới của mình sao cho đạt hiệu quả tối ưu nhất?</p>                  
                    <p><img src="{{ url('asset/frontend/img/quang_cao/catalogue/thiet_ke.png') }}" style="width: 70%"></p>
                    <p class="spacing">Catalogue chính là một ấn phẩm quảng cáo tập hợp đầy đủ những thông tin, chi tiết mà bạn mong muốn. Qua đó tác động trực tiếp lên quyết định của khách hàng về việc mua sản phẩm, dịch vụ thông qua việc so sánh giữa các chủng loại, mẫu mã sản phẩm của công ty bạn với những sản phẩm cùng loại mà các doanh nghiệp khác sản xuất. Không những thế, Catalogue còn là một phương tiện dùng để giới thiệu khá phổ biến và hiệu quả, được rất nhiều công ty và các tập đoàn đa quốc gia sử dụng để tung sản phẩm, dịch vụ của mình đến tận tay khách hàng.</p>
                    <p>Hãy để <strong>TRUNG THÀNH</strong> giúp bạn sở hữu một Catalogue thật ấn tượng và chất lượng, góp phần mang lại kết quả tuyệt vời cho chiến lược truyền thông, thể hiện mạnh mẽ những thông điệp mà công ty bạn muốn truyền tải trực tiếp đến khách hàng của mình.</p>
                    <p class="spacing"><strong>Quy cách thiết kế</strong></p>
                    <p>
                        <ul>
                            <li>Quy cách: theo yêu cầu của khách hàng.</li>
                            <li>Trang bìa Catalogue (4trang)</li>
                            <li>Trang nội dung Catalogue (từ 6 – 30 trang)</li>
                            <li>Sửa chữa thiết kế (03 lần)</li>
                            <li>Thời gian thực hiện: phụ thuộc vào số trang Catalogue</li>
                            <li>Yêu cầu: đáp ứng các chuẩn mực thiết kế hiện đại, sang trọng, ấn tượng … thỏa mãn các yêu cầu của khách hàng(hình ảnh và nội dung do khách hàng cung cấp)</li>
                        </ul>
                        <div>Tùy theo nhu cầu sử dụng, doanh nghiệp sẽ lựa chọn cho mình mẫu thiết kế đặc trưng phù hợp với từng chiến dịch quảng bá.</div>
                    </p>
                    <p class="spacing"><strong>Quy cách thành phẩm</strong></p>
                    <p>
                        <ul>
                            <li>Kích thước thành phẩm: theo yêu cầu của khách hàng.</li>
                            <li>Quy cách in: sử dụng công nghệ in Offset 4 màu 2 mặt</li>
                            <li>Gia công: cấn cắt, đóng thành quyển bấm 2 kim giữa hoặc dán keo gáy, cán màng bìa.</li>
                            <li>Chất liệu: giấy Couche hoặc Fort.</li>
                        </ul>
                    </p>
                    @include('frontends._shared.company', ['service' => 'in catalogue'])
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop