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
                    <h4 class="title">Bảng giá in tờ gấp với công nghệ in offset </h4>                    
                    <p><img src="{{ asset('asset/frontend/img/danh_muc_thiet_ke/mau_chon_thiet_ke.png') }}" style="width: 100%"></p>
                    
                    @include('frontends._shared.price_table')

                    @include('frontends._shared.company', ['service' => 'in tờ gấp'])
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop