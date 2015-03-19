@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Thiết kế lịch lò xo 12 tháng</h4>                    
                    @include('frontends._shared.slide')
                    @include('frontends._shared.company', ['service' => 'in lịch lò xo 12 tháng'])

                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop
@section('scripts')
@include('frontends._shared.slide_script')
@stop