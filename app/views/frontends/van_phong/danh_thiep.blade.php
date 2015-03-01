@extends('layouts.frontend')
@section('content')
    <style type="text/css">
        .centerColumn {
            padding-left: 20%;
        }
        table {
            border-collapse: collapse;
            border: 1px solid black;
            width: 100%;
            font-size: 13px;
            margin: 10px 0;              
        }        
        .centerColumn table {            
            width: 70%;   
        }
        .noBorder table th,td {
            width: 50%;
            border: 1px solid black;
            padding-left: 5px;
        }
        .active a {
            color: blue;
        }
        th {
            color: blue;
            text-align: center;
        }
        th,td {
            vertical-align: top;
            width: 33%;
            border: 1px solid black;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Danh Thiếp</h4>
                    <p>Tạo phong cách riêng với những tùy chọn linh động</p>
                    <p>In 5 hộp với giá là 45.000 /hộp</p>
                    <p><img src="{{ asset('asset/frontend/img/danh_muc_thiet_ke/mau_chon_thiet_ke.png') }}" style="width: 100%"></p>
                    <div class="centerColumn">
                        <div>Kiểm tra thông tin chi tiết về số lượng và mức giá <a href="{{ action('VanphongController@getDanhThiepBaoGia') }}">tại đây</a>, trước khi bạn lựa chọn.</div>
                        <div>Name cards ( 5.50 cm X 9.00 cm)</div>
                        <table>
                            <tr>
                                <th>Số lượng</th>
                                <th>Giá</th>
                            </tr>
                            <tr>
                                <td>5 hộp</td>
                                <td>VND 45.000/ hộp</td>
                            </tr>
                            <tr>
                                <td>10 hộp</td>
                                <td>VND 40.000/ hộp</td>
                            </tr>
                            <tr>
                                <td>20 hộp</td>
                                <td>VND 35.000/ hộp</td>
                            </tr>
                        </table>
                        <div class="text-right"><a href="{{ action('VanphongController@getDanhThiepBaoGia') }}">Nhiều thông tin hơn nữa về chất lượng và giá cả</a></div>
                    </div>
                    <div style="margin-top: 20px;" class="text-center"> Sau khi  bạn thiết kế thành công mẫu danh thiếp, hãy làm nó có hiệu quả ảnh hưởng hơn với việc nâng cao chất lượng sản phẩm dưới đây</div>                    
                    <table class="noBorder">
                        <tr>
                            <th>Chất liệu giấy</th>
                            <th>Hoàn thiện</th>
                            <th>Mặt sau danh thiếp</th>
                        </tr>
                        <tr>
                            <td>Lựa chọn chất liệu giấy  nặng,  mờ, bóng</td>
                            <td>Làm cho danh thiếp của bạn đáng nhớ hơn bằng việc tăng độ màu in, tăng độ bóng,  hoặc  thêm chất liệu kim loại.</td>
                            <td>Thêm vào mặt sau danh thiếp bằng việc sử dụng một cuộc hẹn, phiếu thưởng hoặc là một câu tuyên bố đơn giản</td>
                        </tr>
                    </table>
                    <div class="text-center" style="margin-top: 30px;">
                        <div style="font-size: 16px; font-weight: bold; color: red">Tại sao cần danh thiếp?</div>
                        <div>Bí quyết sáng tạo cho danh thiếp của bạn</div>
                    </div>
                    <table class="noBorder">
                        <tr>
                            <th>Thiết kế giới thiệu: Màu sắc rực rỡ</th>
                            <th>Ba yếu tố cần có cho danh thiếp của bạn</th>
                            <th>Để có 1 danh thiếp thành công thì cần có một biểu tượng logo đặc sắc</th>
                        </tr>
                        <tr>
                            <td>Sự nhấn mạnh về màu sắc trên danh thiếp sẽ không chỉ bổ sung thêm sự tinh tế mà còn tăng thêm tính ý nghĩa. Lựa chọn màu sắc sẽ giúp mô tả tính năng của công</td>
                            <td><div>Ở đây có một vài yếu tố cần thiết mà bạn cần làm cho danh thiếp có tính hiệu quả cao:</div>
                                <div>1. Chức danh công việc.:  Phải chỉ  cho mọi người biết bạn là ai và bạn đang làm gì</div>
                                <div>2. Thông tin liên lạc bao gồm : số điện thoại, địa chỉ email. website và thông tin truyền thông xã hội</div>
                                <div>3. Cho phép không gian màu trắng trong thiết kế. Nó sẽ đem lại sự phù hợp trong danh thiếp</div>
                            </td>
                            <td>Lựa chọn mẫu logo chế tác  thông minh là đơn giản  và hiệu quả nhất cho hoạt động quảng cáo. Và nó là bước đầu tiên cho việc thiết kế một danh thiếp.  Bạn có thể lấy cảm hứng từ màu logo, sau đó bạn có thể tự thiết kế danh thiếp cho riêng bạn </td>
                        </tr>
                    </table>
                </div>                            
        </div>
    </div>
<!-- Page content ends -->
@stop