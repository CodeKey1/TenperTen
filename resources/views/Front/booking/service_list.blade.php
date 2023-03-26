<!DOCTYPE html>
<html lang="en">

<!-- cart43:21-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Boldman &#8211; Handyman &amp; Renovation Services HTML Template" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Boldman &#8211; Handyman &amp; Renovation Services</title>

  <!-- favicon icon -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

  <!-- animate -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" />

  <!-- owl-carousel -->
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

  <!-- fontawesome -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

  <!-- themify -->
  <link rel="stylesheet" type="text/css" href="css/themify-icons.css" />

  <!-- flaticon -->
  <link rel="stylesheet" type="text/css" href="css/flaticon.css" />

  <!-- prettyphoto -->
  <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

  <!-- shortcodes -->
  <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />

  <!-- main -->
  <link rel="stylesheet" type="text/css" href="css/main.css" />

  <!--Color Switcher Mockup-->
  <link rel="stylesheet" type="text/css" href="css/color-switcher.css">

  <!--Color Themes-->
  <link id="switcher-color" href="css/colors/default-color.css" rel="stylesheet">

  <!-- responsive -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" />

</head>

<body>

  <!--page start-->
  <div class="page">

    <!--header start-->
    <header id="masthead" class="header ttm-header-style-classic">
      <!-- ttm-topbar-wrapper -->
      @include('Layouts.top_menu')
      <!-- ttm-topbar-wrapper end -->
      <div class="ttm-header-wrap">
        <!-- ttm-stickable-header-w -->
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
          <div id="site-header-menu" class="site-header-menu">
            <div class="site-header-menu-inner ttm-stickable-header">
              <div class="container">
                <!-- site-branding -->
                <div class="site-branding">
                  <a class="home-link" href="index-2.html" title="Boldman" rel="home">
                    <img id="logo-img" class="img-center" src="images/logo-img.png" alt="logo-img">
                  </a>
                </div><!-- site-branding end -->
                <!--site-navigation -->
                @include('Layouts.nav')
                <!-- site-navigation end-->
              </div>
            </div>
          </div>
        </div><!-- ttm-stickable-header-w end-->
      </div>
      <!--ttm-header-wrap end -->
    </header>
    <!--header end-->


    <!-- page-title -->
    <div class="ttm-page-title-row">
      <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-box ttm-textcolor-white">
              <div class="page-title-heading">
                <h1 class="title">Cart</h1>
              </div><!-- /.page-title-captions -->
              <div class="breadcrumb-wrapper">
                <span>
                  <a title="Homepage" href="index-2.html"><i class="ti ti-home"></i></a>
                </span>
                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                <span><span>Cart</span></span>
              </div>
            </div>
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main single">

      <!-- cart-section -->
      <section class="ttm-row cart-section break-991-colum clearfix">
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-lg-12">
              <!-- ttm-cart-form -->
              <form class="ttm-cart-form" action="#" method="post" style="direction: rtl;">
                <table class="shop_table shop_table_responsive">
                  <thead style="text-align: center;">
                    <tr>
                      <th class="product-name">الخدمة</th>
                      <th class="product-price">السعر</th>
                      <th class="product-quantity">عدد الخدمة</th>
                      <th class="product-subtotal">اضافة</th>
                    </tr>
                  </thead>
                  <tbody style="text-align: center;">
                    <tr class="cart_item">
                      <td class="product-name" data-title="Product">
                        <a href="product-details.html">تركيب ابليك بدون تكسير</a>
                      </td>
                      <td class="product-price" data-title="Price">
                        <span class="Price-amount">
                          <span class="Price-currencySymbol">ج.م</span>40 - 45
                        </span>
                      </td>
                      <td class="product-quantity" data-title="Quantity">
                        <div class="quantity">
                          <input type="number" class="input-text" value="1" min="0" title="Qty">
                        </div>
                      </td>
                      <td class="product-subtotal" data-title="Total">
                        <div class="ttm-btn-box pr-20">
                          <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-round ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="#" title="">اضافة <i class="ti ti-arrow-right"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr class="cart_item">
                      <td class="product-name" data-title="Product">
                        <a href="product-details.html">تركيب ابليك بدون تكسير</a>
                      </td>
                      <td class="product-price" data-title="Price">
                        <span class="Price-amount">
                          <span class="Price-currencySymbol">ج.م</span>40 - 45
                        </span>
                      </td>
                      <td class="product-quantity" data-title="Quantity">
                        <div class="quantity">
                          <input type="number" class="input-text" value="1" min="0" title="Qty">
                        </div>
                      </td>
                      <td class="product-subtotal" data-title="Total">
                        <div class="ttm-btn-box pr-20">
                          <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-round ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="#" title="">اضافة <i class="ti ti-arrow-right"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr class="cart_item">
                      <td class="product-name" data-title="Product">
                        <a href="product-details.html">تركيب ابليك بدون تكسير</a>
                      </td>
                      <td class="product-price" data-title="Price">
                        <span class="Price-amount">
                          <span class="Price-currencySymbol">ج.م</span>40 - 45
                        </span>
                      </td>
                      <td class="product-quantity" data-title="Quantity">
                        <div class="quantity">
                          <input type="number" class="input-text" value="1" min="0" title="Qty">
                        </div>
                      </td>
                      <td class="product-subtotal" data-title="Total">
                        <div class="ttm-btn-box pr-20">
                          <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-round ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="#" title="">اضافة <i class="ti ti-arrow-right"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr class="cart_item">
                      <td class="product-name" data-title="Product">
                        <a href="product-details.html">تركيب ابليك بدون تكسير</a>
                      </td>
                      <td class="product-price" data-title="Price">
                        <span class="Price-amount">
                          <span class="Price-currencySymbol">ج.م</span>40 - 45
                        </span>
                      </td>
                      <td class="product-quantity" data-title="Quantity">
                        <div class="quantity">
                          <input type="number" class="input-text" value="1" min="0" title="Qty">
                        </div>
                      </td>
                      <td class="product-subtotal" data-title="Total">
                        <div class="ttm-btn-box pr-20">
                          <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-round ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="#" title="">اضافة <i class="ti ti-arrow-right"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr class="cart_item">
                      <td class="product-name" data-title="Product">
                        <a href="product-details.html">تركيب ابليك بدون تكسير</a>
                      </td>
                      <td class="product-price" data-title="Price">
                        <span class="Price-amount">
                          <span class="Price-currencySymbol">ج.م</span>40 - 45
                        </span>
                      </td>
                      <td class="product-quantity" data-title="Quantity">
                        <div class="quantity">
                          <input type="number" class="input-text" value="1" min="0" title="Qty">
                        </div>
                      </td>
                      <td class="product-subtotal" data-title="Total">
                        <div class="ttm-btn-box pr-20">
                          <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-round ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="#" title="">اضافة <i class="ti ti-arrow-right"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr class="cart_item">
                      <td class="product-name" data-title="Product">
                        <a href="product-details.html">تركيب ابليك بدون تكسير</a>
                      </td>
                      <td class="product-price" data-title="Price">
                        <span class="Price-amount">
                          <span class="Price-currencySymbol">ج.م</span>40 - 45
                        </span>
                      </td>
                      <td >
                        <div class="quantity">
                          <input type="number" class="input-text" >
                        </div>
                      </td>
                      <td class="product-subtotal" data-title="Total">
                        <div class="ttm-btn-box pr-20">
                          <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-round ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="#" title="">اضافة <i class="ti ti-arrow-right"></i></a>
                        </div>
                      </td>
                    </tr>
                    <td colspan="6" class="actions">
                      <button type="submit" class="button" name="update_cart" value="Update cart" disabled="disabled">Update cart</button>
                    </td>
                    </tr>
                  </tbody>
                </table>
              </form><!-- ttm-cart-form end -->
              <!-- cart-collaterals -->
              <div class="cart-collaterals">
                <div class="cart_totals ">
                  <h2>Cart totals</h2>
                  <table class="shop_table shop_table_responsive">
                    <tbody>
                      <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td data-title="Subtotal">
                          <span class="Price-amount">
                            <span class="Price-currencySymbol">$</span>128.00
                          </span>
                        </td>
                      </tr>
                      <tr class="order-total">
                        <th>Total</th>
                        <td data-title="Total">
                          <strong><span class="Price-amount">
                              <span class="Price-currencySymbol">$</span>128.00</span>
                          </strong>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="proceed-to-checkout">
                    <a href="#" class="checkout-button button">Proceed to checkout</a>
                  </div>
                </div>
              </div><!-- cart-collaterals end-->
            </div>
          </div>
        </div>
      </section><!-- cart-section end-->


    </div>
    <!--site-main end-->

    <!--footer start-->

    @include('Layouts.footer')

    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

    <!-- Color Palate / Color Switcher -->
    <div class="color-switcher">
      <div class="color-trigger">
        <i class="fa fa-gear"></i>
      </div>
      <div class="color-switcher-header">
        <h6>Switcher Colors</h6>
      </div>
      <div class="various-color clearfix">
        <div class="colors-list">
          <span class="theme-color default-color active" data-file="css/colors/default-color.css"></span>
          <span class="theme-color theme-color1" data-file="css/colors/theme-color1.css"></span>
          <span class="theme-color theme-color2" data-file="css/colors/theme-color2.css"></span>
          <span class="theme-color theme-color3" data-file="css/colors/theme-color3.css"></span>
          <span class="theme-color theme-color4" data-file="css/colors/theme-color4.css"></span>
          <span class="theme-color theme-color5" data-file="css/colors/theme-color5.css"></span>
        </div>
      </div>
    </div><!-- Color Palate / Color Switcher end-->

  </div><!-- page end -->


  <!-- Javascript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/color-switcher.js"></script>
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery-waypoints.js"></script>
  <script src="js/jquery-validate.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/numinate.min6959.js?ver=4.9.3"></script>
  <script src="js/main.js"></script>

  <!-- Javascript end-->

</body>

<!-- cart43:21-->

</html>