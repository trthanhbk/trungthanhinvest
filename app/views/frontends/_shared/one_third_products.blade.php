<?php $i = 0; ?>

@foreach($products as $product)
    @if($i % 3 == 0)
        <div class="row">
    @endif
        
    <div class="col-md-4 col-sm-6">
        <!-- Each item should be enclosed in "item" class -->
        <div>
            <!-- Item image -->
            <div class="item-image">
                <a href="{{ action($product['action']) }}"><img src="{{ url($product['image']) }}" alt="" class="img-responsive" /></a>
            </div>
            <!-- Item details -->
            <div class="item-details">
                <!-- Name -->
                <!-- Use the span tag with the class "ico" and icon link (hot, sale, deal, new) -->
                <h5>
                    <a href="{{ action($product['action']) }}">{{ $product['title'] }}</a>
                    @if(isset($product['hot']))
                        <span class="ico"><img src="{{ url('asset/frontend/img/hot.png') }}" alt="" /></span>
                    @endif
                </h5>
            <div class="clearfix"></div>
            <!-- Para. Note more than 2 lines. -->
            <hr />
            <!-- Price -->
            <div class=" pull-left"></div>
            <!-- Xem tiếp -->
          
            <div class="clearfix"></div>
            </div>
        </div>
    </div>

    @if($i % 3 == 2)
        </div>
    @endif

    <?php $i++; ?>
@endforeach

@if($i % 3 != 2)
    </div>
@endif