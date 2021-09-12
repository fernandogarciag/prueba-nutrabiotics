<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="apple-touch-icon.png" rel="apple-touch-icon" />
    <meta name="author" content="Nghia Minh Luong" />
    <meta name="keywords" content="Default Description" />
    <meta name="description" content="Default keyword" />
    <title>{{ $product->name }}</title>
    <!-- Fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="/plugins/font-awesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="/plugins/ps-icon/style.css" />
    <!-- CSS Library-->
    <link
      rel="stylesheet"
      href="/plugins/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="/plugins/owl-carousel/assets/owl.carousel.css"
    />
    <link
      rel="stylesheet"
      href="/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css"
    />
    <link rel="stylesheet" href="/plugins/slick/slick/slick.css" />
    <link
      rel="stylesheet"
      href="/plugins/bootstrap-select/dist/css/bootstrap-select.min.css"
    />
    <link
      rel="stylesheet"
      href="/plugins/Magnific-Popup/dist/magnific-popup.css"
    />
    <link rel="stylesheet" href="/plugins/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="/plugins/revolution/css/settings.css" />
    <link rel="stylesheet" href="/plugins/revolution/css/layers.css" />
    <link rel="stylesheet" href="/plugins/revolution/css/navigation.css" />
    <!-- Custom-->
    <link rel="stylesheet" href="/css/style.css" />
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9
      ]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script
    ><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top"></div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo">
              <a class="ps-logo" href="/"
                ><img
                  src="https://nutrabiotics.info/wp-content/uploads/logo-rt3.png"
                  alt=""
              /></a>
            </div>
          </div>
          <div class="navigation__column left">
            <ul class="main-menu menu">
              <li class="menu-item"><a href="/">Productos</a></li>
              <li class="menu-item"><a href="/crud">CRUD</a></li>
            </ul>
          </div>
          <div class="navigation__column right">
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <main class="ps-main">
      <div class="test">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
          </div>
        </div>
      </div>
      <div class="ps-product--detail pt-0">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-10 col-md-12 col-lg-offset-1">
              <div class="ps-product__thumbnail">
                <div class="ps-product__preview">
                  <div class="ps-product__variants"></div>
                </div>
                <div class="ps-product__image">
                  <div class="item">
                    <img
                      class="zoom"
                      src="{{ $product->image }}"
                      alt=""
                      data-zoom-image="{{ $product->image }}"
                    />
                  </div>
                </div>
              </div>
              <div class="ps-product__thumbnail--mobile">
                <div class="ps-product__main-img">
                  <img src="{{ $product->image }}" alt="" />
                </div>
                <div
                  class="ps-product__preview owl-slider"
                  data-owl-auto="true"
                  data-owl-loop="true"
                  data-owl-speed="5000"
                  data-owl-gap="20"
                  data-owl-nav="true"
                  data-owl-dots="false"
                  data-owl-item="3"
                  data-owl-item-xs="3"
                  data-owl-item-sm="3"
                  data-owl-item-md="3"
                  data-owl-item-lg="3"
                  data-owl-duration="1000"
                  data-owl-mousedrag="on"
                >
                  <img src="{{ $product->image }}" alt="" />
                </div>
              </div>
              <div class="ps-product__info">
                <h1>{{ $product->name }}</h1>
                <p class="ps-product__category"><a href="http://localhost/productos?categoria={{ $category->url }}">{{ $category->name }}</a></p>
                <h3 class="ps-product__price">£ {{ $product->price * ((100 - $product->discount)/100) }}
                  @if ($product->discount !== 0)
                  <del>£ {{ $product->price }}</del>
                  @endif
                </h3>
                <div class="ps-product__block ps-product__quickview">
                  <h4>Descripción corta</h4>
                  <p>{{ $product->short_description }}</p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="ps-product__content mt-50">
                <ul class="tab-list" role="tablist">
                  <li class="active">
                    <a
                      href="#tab_01"
                      aria-controls="tab_01"
                      role="tab"
                      data-toggle="tab"
                      >Descripción</a
                    >
                  </li>
                  <li>
                    <a
                      href="#tab_02"
                      aria-controls="tab_02"
                      role="tab"
                      data-toggle="tab"
                      >Componentes</a
                    >
                  </li>
                </ul>
              </div>
              <div class="tab-content mb-60">
                <div class="tab-pane active" role="tabpanel" id="tab_01">
                  <p>{{ $product->description }}</p>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_02">
                  <p>{{ $product->components }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- JS Library-->
    <script
      type="text/javascript"
      src="/plugins/jquery/dist/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/bootstrap/dist/js/bootstrap.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/owl-carousel/owl.carousel.min.js"
    ></script>
    <script type="text/javascript" src="/plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="/plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="/plugins/isotope.pkgd.min.js"></script>
    <script
      type="text/javascript"
      src="/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/jquery.matchHeight-min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/slick/slick/slick.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/elevatezoom/jquery.elevatezoom.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/jquery-ui/jquery-ui.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/revolution/js/jquery.themepunch.tools.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"
    ></script>
    <script
      type="text/javascript"
      src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"
    ></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="/js/main.js"></script>
  </body>
</html>
