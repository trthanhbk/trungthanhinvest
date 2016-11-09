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
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.portalbeanzvn.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.portalbeanzvn.com/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Pre-Youtube -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4201639618958202"
     data-ad-slot="9747523172"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</body>
</html>
