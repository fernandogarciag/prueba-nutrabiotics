<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="apple-touch-icon.png" rel="apple-touch-icon" />
    <meta name="author" content="Nghia Minh Luong" />
    <meta name="keywords" content="Default Description" />
    <meta name="description" content="Default keyword" />
    <title>Productos</title>
    <!-- Fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="plugins/font-awesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="plugins/ps-icon/style.css" />
    <!-- CSS Library-->
    <link
      rel="stylesheet"
      href="plugins/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="plugins/owl-carousel/assets/owl.carousel.css"
    />
    <link
      rel="stylesheet"
      href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css"
    />
    <link rel="stylesheet" href="plugins/slick/slick/slick.css" />
    <link
      rel="stylesheet"
      href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css"
    />
    <link
      rel="stylesheet"
      href="plugins/Magnific-Popup/dist/magnific-popup.css"
    />
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="plugins/revolution/css/settings.css" />
    <link rel="stylesheet" href="plugins/revolution/css/layers.css" />
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css" />
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css" />
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
      <div class="ps-products-wrap pt-0 pb-0">
        <div class="ps-products" data-mh="product-listing">
          <div class="ps-product-action">
            <div class="ps-pagination">
              <ul class="pagination">
                @if (($actualPage - 1) >= 1)
                  <li>
                    <a href="{{ $url['page'].'&pagina='. ($actualPage - 1) }}"><i class="fa fa-angle-left"></i></a>
                  </li>
                @endif
                @if (($actualPage - 3) >= 1)
                  <li><a href="{{ $url['page'].'&pagina='. ($actualPage - 3) }}">...</a></li>
                @endif
                @if (($actualPage - 2) >= 1)
                  <li><a href="{{ $url['page'].'&pagina='. ($actualPage - 2) }}">{{ $actualPage - 2 }}</a></li>
                @endif
                @if (($actualPage - 1) >= 1)
                  <li><a href="{{ $url['page'].'&pagina='. ($actualPage - 1) }}">{{ $actualPage - 1 }}</a></li>
                @endif
                <li class="active"><a href="#">{{ $actualPage }}</a></li>
                @if (($actualPage + 1) <= $totalPages)
                  <li><a href="{{ $url['page'].'&pagina='. ($actualPage + 1) }}">{{ $actualPage + 1 }}</a></li>
                @endif
                @if (($actualPage + 2) <= $totalPages)
                  <li><a href="{{ $url['page'].'&pagina='. ($actualPage + 2) }}">{{ $actualPage + 2 }}</a></li>
                @endif
                @if (($actualPage + 3) <= $totalPages)
                  <li><a href="{{ $url['page'].'&pagina='. ($actualPage + 3) }}">...</a></li>
                @endif
                @if (($actualPage + 1) <= $totalPages)
                  <li>
                    <a href="{{ $url['page'].'&pagina='. ($actualPage + 1) }}"><i class="fa fa-angle-right"></i></a>
                  </li>
                @endif
              </ul>
            </div>
          </div>
          <div class="ps-product__columns">
            @foreach ($products as $product)
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  @if ($product['discount'] != 0)
                  <div class="ps-badge ps-badge--sale ps-badge--2nd">
                    <span>-{{ $product['discount'] }}%</span>
                  </div>
                  @endif
                  <img src="{{ $product['image'] }}" alt="" />
                  <a class="ps-shoe__overlay" href="{{ url()->current() . '/' . $product['productId'] }}"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__detail">
                    <a class="ps-shoe__name" href="">{{ $product['name'] }}</a>
                    <p class="ps-shoe__categories"><a href="{{ $url['category'] . '&categoria=' . $product['url'] }}">{{ $product['category'] }}</a></p>
                    <span class="ps-shoe__price">
                      @if ($product['discount'] != 0)
                        <del>£{{ $product['price'] }}</del> 
                      @endif
                      £{{ floor($product['discountPrice']) }} </span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="ps-product-action">
            <div class="ps-pagination">
              <ul class="pagination">
                <li>
                  <a href="#"><i class="fa fa-angle-left"></i></a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="ps-sidebar" data-mh="product-listing">
            <aside class="ps-widget--sidebar ps-widget--category">
              <div class="ps-widget__header">
                <h3>Elementos por página:</h3>
              </div>
              <div class="ps-widget__content">
                <ul class="ps-list--checked">
                  @if ($quantity === '10')
                  <li class="current"><a href="#">10</a></li>
                  @else
                    <li><a href="{{ $url['quantity'].'&cantidad=10'}}">10</a></li>
                  @endif
                  @if ($quantity === '50')
                  <li class="current"><a href="#">50</a></li>
                  @else
                    <li><a href="{{ $url['quantity'].'&cantidad=50'}}">50</a></li>
                  @endif
                  @if ($quantity === '100')
                  <li class="current"><a href="#">100</a></li>
                  @else
                    <li><a href="{{ $url['quantity'].'&cantidad=100'}}">100</a></li>
                  @endif
                </ul>
              </div>
            </aside>
            <aside class="ps-widget--sidebar ps-widget--category">
              <div class="ps-widget__header">
                <h3>Filtrar por:</h3>
              </div>
              <div class="ps-widget__content">
                <ul class="ps-list--checked">
                  @if ($orderNumber === '1')
                    <li class="current"><a href="#">Novedad</a></li>
                  @else
                    <li><a href="{{ $url['order'].'&orden=1'}}">Novedad</a></li>
                  @endif
                  @if ($orderNumber === '2')
                    <li class="current"><a href="#">Nombre: A a la Z</a></li>
                  @else
                    <li><a href="{{ $url['order'].'&orden=2'}}">Nombre: A a la Z</a></li>
                  @endif
                  @if ($orderNumber === '3')
                    <li class="current"><a href="#">Nombre: Z a la A</a></li>
                  @else
                    <li><a href="{{ $url['order'].'&orden=3'}}">Nombre: Z a la A</a></li>
                  @endif
                  @if ($orderNumber === '4')
                    <li class="current"><a href="#">Precio: menor a mayor</a></li>
                  @else
                    <li><a href="{{ $url['order'].'&orden=4'}}">Precio: menor a mayor</a></li>
                  @endif
                  @if ($orderNumber === '5')
                    <li class="current"><a href="#">Precio: mayor a menor</a></li>
                  @else
                    <li><a href="{{ $url['order'].'&orden=5'}}">Precio: mayor a menor</a></li>
                  @endif
                </ul>
              </div>
            </aside>
            <aside class="ps-widget--sidebar ps-widget--category">
              <div class="ps-widget__header">
                <h3>Categoría:</h3>
              </div>
              <div class="ps-widget__content">
                <ul class="ps-list--checked">
                  @if ($actualCategory === '')
                    <li class="current"><a href="{{ $url['category'] }}">Todas</a></li>
                  @else
                    <li><a href="{{ $url['category'] }}">Todas</a></li>
                  @endif
                  @foreach ($categories as $category)
                    @if ($actualCategory === $category['url'])
                      <li class="current"><a href="{{ $url['category'].'&categoria='.$category['url'] }}">{{ $category['name'] }}</a></li>
                    @else
                      <li><a href="{{ $url['category'].'&categoria='.$category['url'] }}">{{ $category['name'] }}</a></li>
                    @endif
                  @endforeach
                </ul>
              </div>
            </aside>
        </div>
      </div>
    </main>
    <!-- JS Library-->
    <script
      type="text/javascript"
      src="plugins/jquery/dist/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/bootstrap/dist/js/bootstrap.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/owl-carousel/owl.carousel.min.js"
    ></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
    <script
      type="text/javascript"
      src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/jquery.matchHeight-min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/slick/slick/slick.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/elevatezoom/jquery.elevatezoom.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/jquery-ui/jquery-ui.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"
    ></script>
    <script
      type="text/javascript"
      src="plugins/revolution/js/jquery.themepunch.tools.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/revolution/js/jquery.themepunch.revolution.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/revolution/js/extensions/revolution.extension.video.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"
    ></script>
    <script
      type="text/javascript"
      src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"
    ></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
