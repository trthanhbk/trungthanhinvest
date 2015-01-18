@extends('layouts.frontend')

@section('content')

<div class="row">

  <!-- Item #1 -->
  <div class="col-md-4 col-sm-6">
    <!-- Each item should be enclosed in "item" class -->
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('VanphongController@getDanhThiep') }}"><img src="{{ url('asset/frontend/img/photos/in_danh_thiep.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <!-- Use the span tag with the class "ico" and icon link (hot, sale, deal, new) -->
        <h5><a href="{{ action('VanphongController@getDanhThiep') }}">In danh thiếp</a><span class="ico"><img src="{{ url('asset/frontend/img/hot.png') }}" alt="" /></span></h5>
        <div class="clearfix"></div>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="{{ action('VanphongController@getDanhThiep') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <!-- Item #2 -->
  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('VanphongController@getTieuDeThu') }}"><img src="{{ url('asset/frontend/img/photos/in_tieu_de_thu.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('VanphongController@getTieuDeThu') }}">In tiêu đề thư</a></h5>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="{{ action('VanphongController@getTieuDeThu') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('VanphongController@getPhongBi') }}"><img src="{{ url('asset/frontend/img/photos/in_phong_bi.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('VanphongController@getPhongBi') }}">In phong bì</a><span class="ico"><img src="{{ url('asset/frontend/img/new.png') }}" alt="" /></span></h5>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="{{ action('VanphongController@getPhongBi') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('VanphongController@getBiaDungHoSo') }}"><img src="{{ url('asset/frontend/img/photos/in_bia_dung_ho_so.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('VanphongController@getBiaDungHoSo') }}">In bìa đựng hô sơ</a><span class="ico"><img src="{{ url('asset/frontend/img/deal.png') }}" alt="" /></span></h5>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="{{ action('VanphongController@getBiaDungHoSo') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('QuangcaoController@getToGap') }}"><img src="{{ url('asset/frontend/img/photos/in_to_gap.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('QuangcaoController@getToGap') }}">In tờ gấp</a></h5>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="{{ action('QuangcaoController@getToGap') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('QuangcaoController@getToRoi') }}"><img src="{{ url('asset/frontend/img/photos/in_to_roi.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('QuangcaoController@getToRoi') }}">In tơ rơi</a><span class="ico"><img src="{{ url('asset/frontend/img/sale.png') }}" alt="" /></span></h5>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="{{ action('QuangcaoController@getToRoi') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('QuangcaoController@getCatalogue') }}"><img src="{{ url('asset/frontend/img/photos/in_catalogue.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('QuangcaoController@getCatalogue') }}">In catalogue</a></h5>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="{{ action('QuangcaoController@getCatalogue') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('LichController@getLichDocQuyen') }}"><img src="{{ url('asset/frontend/img/photos/in_lich.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('LichController@getLichDocQuyen') }}">In lịch</a></h5>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="{{ action('LichController@getLichDocQuyen') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href=""><img src="{{ url('asset/frontend/img/photos/10.png') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="">Huawai One V</a></h5>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class="pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>  

@stop