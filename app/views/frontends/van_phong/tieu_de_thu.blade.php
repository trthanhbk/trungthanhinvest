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
        .centerColumn table th,td {
            width: 50%;
            border: 1px solid black;
            padding-left: 5px;        
        }
        .active a {
            color: blue;
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
                    <h4 class="title">Tiêu Đề Thư</h4>
                    @include('frontends._shared.one_third_products')
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop