@extends(Config::get('layout.frontend'))
@section('content')
    <style type="text/css">
        div {
            margin-bottom: 10px;
        }
        .left{
            float: left;
            width: 100px;
        }
        .sdleft{
            float: left;
            width: 200px;
        }
        .right{
            float: left;
            width: 200px;
            margin-right: 10px;
        }
        .right input[type=text] {
            width: 100%;
        }
        .clear {
            clear: both;
        }
        .bold {
            font-weight: bold;
        }
        .mandatory {
            color: red;
        }
        .error{
            background-color: lightyellow;
            color: red;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Đặt Hàng In Ấn</h4>
                    <!-- <p><img src="{{ asset('asset/frontend/img/dat_hang/dat_hang_in_an.png') }}" style="width: 100%; border: 1px black dotted;"></p>                     -->
                </div>    
                {{ Form::open() }}
                    <div class="bold">Vui lòng điền thông tin</div>

                    <div class="left">Họ tên <span class="mandatory">*</span></div>
                    <div class="right">{{ Form::text('name') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "name") }}</div>
                    <div class="left">Cơ quan/công ty</div>
                    <div class="right">{{ Form::text('company') }}</div>
                    <div class="clear"></div>

                    <div class="left">Số điện thoại <span class="mandatory">*</span></div>
                    <div class="right">{{ Form::text('phone') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "phone") }}</div>
                    <div class="left">Địa chỉ <span class="mandatory">*</span></div>
                    <div class="right">{{ Form::text('address') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "address") }}</div>
                    <div class="clear"></div>

                    <div class="bold">Thông tin đặt hàng cho dịch vụ in ấn</div>
                    <div>Mô tả công việc</div>
                    <div class="left">Ngày giao hàng <span class="mandatory">*</span></div>
                    <div class="right">{{ Form::text('delivery_date') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "delivery_date") }}</div>
                    <div class="left">Số lượng <span class="mandatory">*</span></div>
                    <div class="right">{{ Form::text('amount') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "amount") }}</div>
                    <div class="clear"></div>

                    <div>
                        Chất liệu / Loại giấy in ấn <span class="mandatory">*</span>
                        {{ Form::text('type') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "type") }}
                    </div>

                    <div class="sdleft">
                        Kích cỡ
                    </div>
                    <div class="right" style="width: 300px;">
                        {{ Form::radio('size', 'A4') }} A4
                        {{ Form::radio('size', 'A3') }} A3
                        {{ Form::radio('size', 'other') }} Khác mm
                        {{ Form::text('other_size', null, ['style' => 'width: 50px; display: none', 'id' => 'other_size'])}}                        
                    </div>
                    <div class="clear"></div>

                    <div class="sdleft">
                        Số màu in
                    </div>
                    <div style="float: left;">
                        {{ Form::text('front', null, ['style' => 'width: 30px;']) }} C X 
                        {{ Form::text('back', null, ['style' => 'width: 30px;']) }} C (Mặt trước x Mặt sau)
                    </div>
                    <div class="clear"></div>

                    <div class="bold">Bổ sung thêm các dịch vụ khác</div>
                    <div class="sdleft" style="height: 160px; padding-top: 80px;">
                        Lựa chọn dịch vụ bổ sung
                    </div>
                    <div style="float: left; width: 450px;">
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 30px;">Cán</td>
                                <td style="width: 50px;">Loại cán</td>
                                <td style="width: 70px;">{{ Form::radio('loai_can', 'can_mo') }} Cán mờ</td>
                                <td style="width: 70px;">{{ Form::radio('loai_can', 'can_bong') }} Cán bóng</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Mặt cán</td>
                                <td>{{ Form::radio('mat_can', 'mot_mat') }} 1 mặt</td>
                                <td>{{ Form::radio('mat_can', 'hai_mat') }} 2 mặt</td>
                            </tr>
                            <tr>
                                <td>Dập nổi</td>
                                <td>Kích thước</td>
                                <td colspan="2">
                                    {{ Form::text('dap_noi_size')}} mm
                                </td>
                            </tr>
                            <tr>
                                <td>Cắt</td>
                                <td>Kích thước</td>
                                <td colspan="2">
                                    {{ Form::text('cat_size')}} mm
                                </td>
                            </tr>
                            <tr>
                                <td>Dán</td>
                                <td>Kích thước</td>
                                <td colspan="2">
                                    {{ Form::text('dan_size')}} mm
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Màu</td>
                                <td colspan="2">
                                    {{ Form::text('dan_color')}}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="clear"></div>

                    <div class="left">Chú ý</div>
                    <div class="right">{{ Form::textarea('note', null, ['rows' => '3', 'cols' => '70']) }}</div>
                    <div class="clear"></div>

                    <div style="text-align: center">
                        {{ Form::submit('Đặt hàng')}}
                    </div>
                {{ Form::close() }}
        </div>
    </div>
<!-- Page content ends -->
@stop

@section("scripts")
<script>
    $(function(){
        $("input[name = size]").click(function(){
            if ($(this).val() == "other") {
                $("#other_size").show();
            } else {
                $("#other_size").hide();
            }
        });
    });
    </script>
@stop