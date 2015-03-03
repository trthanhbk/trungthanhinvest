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
            width: 12%;
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
                    <h4 class="title">Bảng giá in phong bì với công nghệ in offset </h4>                    
                    <p><img src="{{ asset('asset/frontend/img/danh_muc_thiet_ke/mau_chon_thiet_ke.png') }}" style="width: 100%"></p>
                    
                    <div class="table_title">BẢNG GIÁ IN PHONG BÌ (12x22cm)</div>
                    <table>
                        <tr>
                            <th style="width: 20%">Loại giấy</th>
                            <th>1.000 chiếc</th>
                            <th>2.000 chiếc</th>
                            <th>3.000 chiếc</th>
                            <th>4.000 chiếc</th>
                            <th>5.000 chiếc</th>
                            <th>10.000 chiếc</th>
                        </tr>
                        <tr>
                            <th>Off 80</th>
                            <td>1300</td>
                            <td>770</td>
                            <td>650</td>
                            <td>580</td>
                            <td>540</td>
                            <td>455</td>
                        </tr>
                        <tr>
                            <th>Off 100</th>
                            <td>1350</td>
                            <td>820</td>
                            <td>710</td>
                            <td>650</td>
                            <td>620</td>
                            <td>570</td>
                        </tr>
                        <tr>
                            <th>Off 120</th>
                            <td>1400</td>
                            <td>850</td>
                            <td>740</td>
                            <td>700</td>
                            <td>670</td>
                            <td>600</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="6" style="text-align: left;">
                                Ghi chú:
                                <ul>
                                    <li>
                                        Đơn giá chưa bao gồm 10% VAT.
                                    </li>
                                    <li>
                                        Gia công hoàn thiện thành phẩm nắp dán băng keo.
                                    </li>
                                    <li>
                                        Thời gian giao hàng 2-3 ngày.
                                    </li>
                                    <li>
                                         In trên máy in công nghiệp Offset 4 màu.
                                    </li>
                                </ul>
                            </td>
                        </tr>                        
                    </table>

                    <div class="table_title">BẢNG GIÁ IN PHONG BÌ A5 (17x24cm)</div>
                    <table>
                        <tr>
                            <th style="width: 20%">Loại giấy</th>
                            <th>1.000 chiếc</th>
                            <th>2.000 chiếc</th>
                            <th>3.000 chiếc</th>
                            <th>4.000 chiếc</th>
                            <th>5.000 chiếc</th>
                            <th>10.000 chiếc</th>
                        </tr>
                        <tr>
                            <th>Off 80</th>
                            <td>1850</td>
                            <td>950</td>
                            <td>820</td>
                            <td>750</td>
                            <td>720</td>
                            <td>650</td>
                        </tr>
                        <tr>
                            <th>Off 100</th>
                            <td>1900</td>
                            <td>1150</td>
                            <td>890</td>
                            <td>830</td>
                            <td>780</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <th>Off 120</th>
                            <td>1950</td>
                            <td>1200</td>
                            <td>950</td>
                            <td>900</td>
                            <td>850</td>
                            <td>800</td>
                        </tr>
                        <tr>
                            <th>Off 140</th>
                            <td>2020</td>
                            <td>1300</td>
                            <td>1020</td>
                            <td>950</td>
                            <td>920</td>
                            <td>850</td>
                        </tr>
                        <tr>
                            <th>Off 150</th>
                            <td>2030</td>
                            <td>1340</td>
                            <td>1250</td>
                            <td>1100</td>
                            <td>1000</td>
                            <td>900</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="6" style="text-align: left;">
                                Ghi chú:
                                <ul>
                                    <li>
                                        Đơn giá chưa bao gồm 10% VAT.
                                    </li>
                                    <li>
                                        Gia công hoàn thiện thành phẩm nắp dán băng keo.
                                    </li>
                                    <li>
                                        Thời gian giao hàng 2-3 ngày.
                                    </li>
                                    <li>
                                         In trên máy in công nghiệp Offset 4 màu.
                                    </li>
                                </ul>
                            </td>
                        </tr>                        
                    </table>

                    <div class="table_title">BẢNG GIÁ IN PHONG BÌ A4 (25x34cm)</div>
                    <table>
                        <tr>
                            <th style="width: 20%">Loại giấy</th>
                            <th>500 chiếc</th>
                            <th>1.000 chiếc</th>
                            <th>2.000 chiếc</th>
                            <th>3.000 chiếc</th>
                            <th>4.000 chiếc</th>
                            <th>5.000 chiếc</th>
                            <th>10.000 chiếc</th>
                        </tr>
                        <tr>
                            <th>Off 100</th>
                            <td>3950</td>
                            <td>2200</td>
                            <td>1500</td>
                            <td>1450</td>
                            <td>1400</td>
                            <td>1350</td>
                            <td>1100</td>
                        </tr>
                        <tr>
                            <th>Off 120</th>
                            <td>4000</td>
                            <td>2310</td>
                            <td>1650</td>
                            <td>1500</td>
                            <td>1450</td>
                            <td>1390</td>
                            <td>1250</td>
                        </tr>
                        <tr>
                            <th>Off 140</th>
                            <td>4050</td>
                            <td>2440</td>
                            <td>1880</td>
                            <td>1600</td>
                            <td>1500</td>
                            <td>1450</td>
                            <td>1300</td>
                        </tr>
                        <tr>
                            <th>Off 150</th>
                            <td>4350</td>
                            <td>2800</td>
                            <td>2150</td>
                            <td>2000</td>
                            <td>1750</td>
                            <td>1550</td>
                            <td>1350</td>
                        </tr>
                        <tr>
                            <th>Off 200</th>
                            <td>4650</td>
                            <td>2850</td>
                            <td>2250</td>
                            <td>2050</td>
                            <td>1950</td>
                            <td>1900</td>
                            <td>1750</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="7" style="text-align: left;">
                                Ghi chú:
                                <ul>
                                    <li>
                                        Đơn giá chưa bao gồm 10% VAT.
                                    </li>
                                    <li>
                                        Gia công hoàn thiện thành phẩm nắp dán băng keo.
                                    </li>
                                    <li>
                                        Thời gian giao hàng 2-3 ngày.
                                    </li>
                                    <li>
                                         In trên máy in công nghiệp Offset 4 màu.
                                    </li>
                                </ul>
                            </td>
                        </tr>                        
                    </table>

                    @include('frontends._shared.company', ['service' => 'in phong bì'])
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop