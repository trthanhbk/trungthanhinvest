@extends('layouts.frontend')
@section('content')
<style type="text/css">
    .bold {
        font-weight: bold;
    }
    .left{
        float: left;
        width: 150px;
    }
    .right{
        float: left;
        width: 300px;
        margin-right: 10px;
    }
    .right input[type=text] {
        width: 100%;
    }
    .clear {
        clear: both;
    }
    .mandatory {
        color: red;
    }
    a {
        color: blue;
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
                <h4 class="title">Phản Hồi</h4>
                <div>Công ty CP In và Đầu tư Trung Thành trân trọng cảm ơn quý khách đã sử dụng dịch vụ của chúng tôi trong thời gian qua. Với mong muốn cải tiến chất lượng dịch vụ và mang đến khách hàng sự thỏa mãn tối ưu, chúng tôi đã thiết kế bảng khảo sát đánh giá dịch vụ, rất mong nhận được ý kiến đóng góp thiết thực của quý khách.</div>
                {{ Form::open() }}
                    <div class="bold">I. Thông tin cá nhân</div>

                    <div class="left">Họ tên <span class="mandatory">*</span></div>
                    <div class="right">{{ Form::text('name') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "name") }}</div>
                    <div class="clear"></div>

                    <div class="left">Email <span class="mandatory">*</span></div>
                    <div class="right">{{ Form::text('email') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "email") }}</div>
                    <div class="clear"></div>

                    <div class="left">Số điện thoại <span class="mandatory">*</span></div>
                    <div class="right">{{ Form::text('phone') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "phone") }}</div>
                    <div class="clear"></div>

                    <div class="left">Cơ quan/công ty</div>
                    <div class="right">{{ Form::text('company') }}</div>
                    <div class="clear"></div>

                    <div class="left">Địa chỉ</div>
                    <div class="right">{{ Form::text('address') }}{{ ErrorDisplay::getInstance()->DisplayIndividual($errors, "address") }}</div>
                    <div class="clear"></div>

                    <div class="bold">II. Đánh giá của bạn</div>
                    {{ getFeedbackQuestionsForm() }}

                    <div>(<span class="mandatory">*</span>) Thông tin bắt buộc</div>
                    <div style="text-align: center;">
                        {{ Form::submit('Phản hồi') }}
                    </div>
                    <div style="margin-top: 20px;">
                        Ngoài ra, bạn cũng có thể gửi cho chúng tôi thông tin phản hồi của bạn đến địa chỉ <a href="mailto:trungthanhinan@gmail.com">trungthanhinan@gmail.com</a> hoặc fax đến số (84-4) 37648083
                    </div>
                {{ Form::close() }}
            </div>            
    </div>
</div>
<!-- Page content ends -->
@stop