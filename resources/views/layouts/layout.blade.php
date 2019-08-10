<!DOCTYPE html>
<!--[if IE 8 ]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title></title>
    <meta content="Bootsrap based theme" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="javascripts/PIE.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('/img/favicon.ico') }}" rel="shortcut icon">
    <link href="{{ asset('/img/apple-touch-icon-144x144-precomposed.png') }}" rel="apple-touch-icon-precomposed"
          sizes="144x144">
    <link href="{{ asset('/img/apple-touch-icon-114x114-precomposed.png') }}" rel="apple-touch-icon-precomposed"
          sizes="114x114">
    <link href="{{ asset('/img/apple-touch-icon-72x72-precomposed.png') }}" rel="apple-touch-icon-precomposed"
          sizes="72x72">
    <link href="{{ asset('/img/apple-touch-icon-57x57-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('/css/bootstrap.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/responsive.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/font-awesome-all.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/fancybox.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/theme.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/fonts.css') }}" media="screen" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="wrapper">

    @include('partials.nav')

    <div id="content" role="main">
        <!-- Promo Section -->
        <section class="section section-alt">
            <div class="row-fluid">
                <div class="super-hero-unit">
                    <figure class="dark-background">
                        <img alt="river meandering through a shallow valley"
                             src="{{ asset('/img/assets/feow/landscape-1024x434.jpeg') }}" class="half-opacity">
                        <figcaption class="flex-caption caption-margin-bottom">
                            <h1 class="main-banner-text">
                                Freshwater Ecoregions of the World
                            </h1>
                            <h1 class="middle-banner-text">
                                A global biogeographical regionalization of the Earth's freshwater biodiversity
                            </h1>
                            <div class="text-center">
                                <div class="btn btn-large btn-primary banner-button">
                                    Explore Map
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <!-- Our Services -->
        <section class="section section-padded">
            <div class="container-fluid">
                <p class="lead text-left">
                    <strong>Freshwater Ecoregions of the World, (FEOW)</strong> provides a new global biogeographic
                    regionalization of
                    the Earth’s freshwater biodiversity. Covering virtually all freshwater habitats on Earth, this
                    first-ever ecoregion map, together with associated species data, is a useful tool for underpinning
                    global and regional conservation planning efforts, particularly to identify outstanding and
                    imperiled freshwater systems; for serving as a logical framework for large-scale conservation
                    strategies; and for providing a global-scale knowledge base for increasing freshwater biogeographic
                    literacy.
                </p>
            </div>
        </section>
    </div>

</div>

@include('partials.footer')

<script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.tweet.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.fancybox-media.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/script.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    if (typeof gaJsHost == 'undefined') {
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    }
</script>
<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("#########");
        pageTracker._trackPageview();
    } catch (err) {
    }</script>
</body>