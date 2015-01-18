@extends('layouts.frontend')

@section('content')

<div class="row">

  <!-- Item #1 -->
  <div class="col-md-4 col-sm-6">
    <!-- Each item should be enclosed in "item" class -->
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('QuangcaoController@getToGap') }}"><img src="{{ url('asset/frontend/img/photos/in_danh_thiep.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <!-- Use the span tag with the class "ico" and icon link (hot, sale, deal, new) -->
        <h5><a href="{{ action('QuangcaoController@getToGap') }}">Tờ gấp</a><span class="ico"><img src="{{ url('asset/frontend/img/hot.png') }}" alt="" /></span></h5>
        <div class="clearfix"></div>
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

  <!-- Item #2 -->
  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('QuangcaoController@getToRoi') }}"><img src="{{ url('asset/frontend/img/photos/in_tieu_de_thu.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('QuangcaoController@getToRoi') }}">Tờ rơi</a></h5>
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
        <a href="{{ action('QuangcaoController@getPoster') }}"><img src="{{ url('asset/frontend/img/photos/in_phong_bi.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('QuangcaoController@getPoster') }}">Poster</a><span class="ico"><img src="{{ url('asset/frontend/img/new.png') }}" alt="" /></span></h5>
        <!-- Para. Note more than 2 lines. -->
        <p>Something about the product goes here. Not More than 2 lines.</p>
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button pull-right"><a href="{{ action('QuangcaoController@getPoster') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('QuangcaoController@getCatalogue') }}"><img src="{{ url('asset/frontend/img/photos/in_bia_dung_ho_so.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('QuangcaoController@getCatalogue') }}">Catalouge</a><span class="ico"><img src="{{ url('asset/frontend/img/deal.png') }}" alt="" /></span></h5>
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

@stop