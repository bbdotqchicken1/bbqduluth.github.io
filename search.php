<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    <title>Search Results</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Libre+Baskerville:400,700%7CMontserrat:700">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      <header class="page-head header-bordered">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-sidebar" data-lg-layout="rd-navbar-sidebar" class="rd-navbar">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Brand--><a href="index.html" class="rd-navbar-brand"><span class="brand-name">Your tavern</span><span class="brand-slogan">family restaurant</span></a>
              </div>
              <div class="rd-navbar-aside">
                <div data-rd-navbar-toggle=".rd-navbar-aside" class="rd-navbar-aside-toggle"><span></span></div>
                <div class="rd-navbar-aside-content">
                  <address class="rd-navbar-aside-contact-info rd-navbar-aside-contact-info-variant-1"><span class="icon icon-sm icon-default fa-map-marker"></span>
                    <p><a href="#">4578 Marmora Road,<br>Glasgow D04 89 GR</a></p>
                  </address>
                  <address class="rd-navbar-aside-contact-info rd-navbar-aside-contact-info-variant-2"><span class="icon icon-sm icon-default fa-mobile-phone"></span>
                    <p><a href="callto:#">1-800-1234-567</a></p>
                  </address>
                </div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li><a href="./">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="food-and-drinks.html">Food & Drinks</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-navbar-dropdown">
                      <li><a href="#">Italian Cuisine</a></li>
                      <li><a href="#">Japanese Food</a></li>
                      <li><a href="#">Chinese Cuisine</a></li>
                      <li><a href="#">Ukrainian Food</a></li>
                      <li><a href="#">Drinks</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-navbar-dropdown">
                          <li><a href="#">Wine</a></li>
                          <li><a href="#">Beer</a></li>
                          <li><a href="#">Cognac</a></li>
                          <li><a href="#">Whiskey</a></li>
                          <li><a href="#">Juices</a></li>
                          <li><a href="./404.html">404 page</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="contacts.html">Contacts </a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Page Content-->
      <main class="page-content">
        <!-- Search Results-->
        <section class="section-60 section-md-81">
          <div class="shell">
            <div class="range range-xs-middle">
              <div class="cell-xs-12">
                <div class="rd-navbar-search rd-navbar-search-inline">
                  <form action="search.php" method="GET" class="rd-navbar-search-form">
                    <label class="rd-navbar-search-form-input">
                      <input type="text" name="s" placeholder="Search.." autocomplete="off">
                    </label>
                    <button type="submit" class="link">Search</button>
                  </form><span class="rd-navbar-live-search-results"></span>
                </div>
              </div>
            </div>
            <div class="range">
              <div class="col-xs-12 text-center">
                <h2>Search Results</h2>
                <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="rd-navbar-search-results"></div>
              </div>
            </div>
          </div>
        </section>

      </main>
      <!-- Page Footer-->
      <footer class="page-foot footer-bordered">
        <div class="container text-center text-sm-left">
          <p class="small text-gray-light">Copyright &copy;&nbsp;<span id="copyright-year" class="text-gray-light"></span>&nbsp;
<br class="hidden-sm hidden-md hidden-lg"><a href="./" class="text-gray-light nohover">Your Tavern.</a>
<a href="privacy.html" class="text-gray-light">Privacy Policy</a>

          </p>
        </div>
      </footer>
    </div>

    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>