@extends(Config::get('layout.frontend'))
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
            width: 10%;
            border: 1px solid black;
            padding-left: 5px;
            text-align: center;
        }
        th {
            background: #BDBDBD;
        }
        .table_title {
            text-align: center;
            color: blue;
        }        
    </style>
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Bảng giá in kẹp file với công nghệ in offset </h4>                    
                    <p><img src="{{ asset('asset/frontend/img/danh_muc_thiet_ke/mau_chon_thiet_ke.png') }}" style="width: 100%"></p>
                    
                    <div class="table_title">BẢNG GIÁ IN KẸP FILE IN 2 MẶT</div>
                    <table>
                        <tr>
                            <th style="width: 20%">Loại giấy / Số lượng</th>
                            <th>500 <br>cuốn</th>
                            <th>1.000 cuốn</th>
                            <th>2.000 cuốn</th>
                            <th>3.000 cuốn</th>
                            <th>4.000 cuốn</th>
                            <th>5.0000 cuốn</th>
                            <th>7.0000 cuốn</th>
                            <th>10.0000 cuốn</th>
                        </tr>
                        <tr>
                            <th>Giấy C250</th>
                            <td>7200</td>
                            <td>4950</td>
                            <td>4000</td>
                            <td>3650</td>
                            <td>3500</td>
                            <td>3400</td>
                            <td>3300</td>
                            <td>3200</td>
                        </tr>
                        <tr>
                            <th>Giấy C300</th>
                            <td>7500</td>
                            <td>5300</td>
                            <td>4200</td>
                            <td>3700</td>
                            <td>3650</td>
                            <td>3600</td>
                            <td>3500</td>
                            <td>3400</td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td colspan="8" style="text-align: left;">
                                Ghi chú:
                                <ul>
                                    <li>
                                        Đơn giá đã bao gồm phí thiết kế.
                                    </li>
                                    <li>
                                        Cán mờ mặt ngoài.
                                    </li>
                                    <li>
                                         Đơn giá chưa bao gồm 10% VAT, Thời gian giao hàng 4-6 ngày.
                                    </li>
                                    <li>
                                         In trên máy in công nghiệp Offset 4 màu.
                                    </li>
                                </ul>
                            </td>
                        </tr>                        
                    </table>

                    <div class="table_title">BẢNG GIÁ IN KẸP FILE IN 1 MẶT</div>
                    <table>
                        <tr>
                            <th style="width: 20%">Loại giấy / Số lượng</th>
                            <th>500 <br>cuốn</th>
                            <th>1.000 cuốn</th>
                            <th>2.000 cuốn</th>
                            <th>3.000 cuốn</th>
                            <th>4.000 cuốn</th>
                            <th>5.0000 cuốn</th>
                            <th>7.0000 cuốn</th>
                            <th>10.0000 cuốn</th>
                        </tr>
                        <tr>
                            <th>Giấy C250</th>
                            <td>5500</td>
                            <td>3900</td>
                            <td>3200</td>
                            <td>3000</td>
                            <td>2900</td>
                            <td>2850</td>
                            <td>2830</td>
                            <td>2800</td>
                        </tr>
                        <tr>
                            <th>Giấy C300</th>
                            <td>6100</td>
                            <td>4300</td>
                            <td>3400</td>
                            <td>3100</td>
                            <td>3000</td>
                            <td>2900</td>
                            <td>2850</td>
                            <td>2830</td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td colspan="8" style="text-align: left;">
                                Ghi chú:
                                <ul>
                                    <li>
                                        Đơn giá đã bao gồm phí thiết kế.
                                    </li>
                                    <li>
                                        Cán mờ mặt ngoài.
                                    </li>
                                    <li>
                                         Đơn giá chưa bao gồm 10% VAT, Thời gian giao hàng 4-6 ngày.
                                    </li>
                                    <li>
                                         In trên máy in công nghiệp Offset 4 màu.
                                    </li>
                                </ul>
                            </td>
                        </tr>                        
                    </table>                    

                    @include('frontends._shared.company', ['service' => 'in kẹp file'])
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop