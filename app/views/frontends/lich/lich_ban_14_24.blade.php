@extends(Config::get('layout.frontend'))
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Thiết kế lịch bàn 14x24,5 cm</h4>                    
                    @include('frontends._shared.slide')
                    @include('frontends._shared.company', ['service' => 'in lịch bàn'])

                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop
@section('scripts')
@include('frontends._shared.slide_script')
@stop