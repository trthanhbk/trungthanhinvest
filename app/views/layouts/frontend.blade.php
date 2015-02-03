@include("layouts.elements.displays.header")

@include("layouts.elements.displays.menu")
<div class="items">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 hidden-xs">
                @include("layouts.elements.displays.sidemenu")
            </div>
            <div class="col-md-9 col-sm-9">
                @if(Session::has('message'))
                    <div class="error">
                        {{ Session::get('message') }}
                    </div>
                @endif
                @yield('content')

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- @include("layouts.elements.displays.newsletter") -->

@include("layouts.elements.displays.footer")

<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

<!-- JS -->
{{ HTML::script('asset/frontend/js/jquery.js') }}
{{ HTML::script('asset/frontend/js/bootstrap.js') }}
{{ HTML::script('asset/frontend/js/jquery.prettyPhoto.js') }}
{{ HTML::script('asset/frontend/js/filter.js') }}
{{ HTML::script('asset/frontend/js/jquery.flexslider-min.js') }}
{{ HTML::script('asset/frontend/js/jquery.carouFredSel-6.1.0-packed.js') }}
{{ HTML::script('asset/frontend/js/nav.js') }}
{{ HTML::script('asset/frontend/js/custom.js') }}

@yield('scripts')

</body>
</html>