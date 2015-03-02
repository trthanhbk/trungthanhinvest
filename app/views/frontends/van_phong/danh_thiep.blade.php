@extends('layouts.frontend')
@section('content')
    <style type="text/css">
        table {
            border-collapse: collapse;
            border: 1px solid black;
            width: 100%;
            font-size: 13px;
            margin: 10px 0;           
        }
        th,td {
            vertical-align: top;
            width: 20%;
            border: 1px solid black;
            padding-left: 5px;
        }
        th {
            background: #BDBDBD;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Danh Thiếp</h4>                    
                    <p><img src="{{ asset('asset/frontend/img/danh_muc_thiet_ke/mau_chon_thiet_ke.png') }}" style="width: 100%"></p>
                    <p><strong>Bảng giá in card visit với công nghệ in offset </strong></p>
                    <p>Ưu điểm: Chất lượng cao, hình ảnh đẹp sắc nét, in ấn trên nhiều chất liệu giấy (Couche 300g,  kích thước 90 x 55 mm, cán màng mờ). Giá làm card visit rẻ khi đặt in số lượng nhiều.</p>
                    <table>
                        <tr>
                            <th>Số lượng</th>
                            <th>In 1 mặt/ 2 mặt</th>
                            <th>Thành tiền</th>
                            <th>Loại giấy</th>
                            <th>Thời gian</th>
                        </tr>
                        <tr>
                            <td>1 hộp</td>
                            <td>90.000 VND</td>
                            <td>90.000 VND</td>
                            <td>Couches 300g</td>
                            <td>4 - 5 ngày</td>
                        </tr>
                        <tr>
                            <td>2 hộp</td>
                            <td>75.000 VND</td>
                            <td>150.000 VND</td>
                            <td>Couches 300g</td>
                            <td>4 - 5 ngày</td>
                        </tr>
                        <tr>
                            <td>3 hộp</td>
                            <td>60.000 VND</td>
                            <td>180.000 VND</td>
                            <td>Couches 300g</td>
                            <td>4 - 5 ngày</td>
                        </tr>
                        <tr>
                            <td>5 hộp</td>
                            <td>45.000 VND</td>
                            <td>225.000 VND</td>
                            <td>Couches 300g</td>
                            <td>4 - 5 ngày</td>
                        </tr>
                        <tr>
                            <td>10 hộp</td>
                            <td>40.000 VND</td>
                            <td>400.000 VND</td>
                            <td>Couches 300g</td>
                            <td>4 - 5 ngày</td>
                        </tr>
                        <tr>
                            <td>20 hộp</td>
                            <td>35.000 VND</td>
                            <td>700.000 VND</td>
                            <td>Couches 300g</td>
                            <td>4 - 5 ngày</td>
                        </tr>
                        <tr>
                            <td>40 hộp trở lên</td>
                            <td>30.000 VND</td>
                            <td>1.200.000 VND</td>
                            <td>Couches 300g</td>
                            <td>4 - 5 ngày</td>
                        </tr>
                    </table>

                    <div class="text-right"><small><i>Số lượng 100 chiếc / hộp</i></small></div>
                    <div class="text-right"><small><i>Vỏ hộp nhựa trong.</i></small></div>
                    <div><i>Ghi chú:</i></div>
                    <div><i>- Quý khách hàng lưu ý giá trên đã bao gồm chi phí thiết kế, chưa bao gồm phí vận chuyển,giá áp dụng khi in card cùng 1 nội dung</i></div>
                    <div><i>- Các loại card bo góc tròn tính thêm phí gia công 20-30.000đ/1hộp </i></div>
                    <div class="text-right"><a href="{{ action('VanphongController@getTaiSaoCanDanhThiep') }}" style="font-size: 16px;"><strong>Nhiều thông tin hơn nữa về chất lượng</strong></a></div>
                    @include('frontends._shared.company', ['service' => 'in card'])
                    
                </div>                            
        </div>
    </div>
<!-- Page content ends -->
@stop