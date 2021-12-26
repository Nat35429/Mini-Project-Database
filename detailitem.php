<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">


<!-- molla/product.html  22 Nov 2019 09:54:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
</head>

<body>
    <div class="page-wrapper">
    <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-right">
                        <ul class="top-menu">
                            <li><br>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="login.php">Log OUT</a></li>
                                </ul>
                            <br></li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="home.php" class="logo">
                            <img src="assets/images/Advice.png" alt="Molla Logo" width="105" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="active">
                                    <a href="home.php">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">PRODUCT</a>
                                    <ul>
                                    <li><a href="product.html">Notebook</a></li>
                                    <li><a href="product.html">CPU</a></li>
                                    <li><a href="product-centered.html">Mainboard</a></li>
                                    <li><a href="product-centered.html">Graphic Card</a></li>
                                    <li><a href="product-centered.html">Ram for PC</a></li>
                                    <li><a href="product-centered.html">Ram for NoteBook</a></li>
                                    <li><a href="product-centered.html">Sound Card</a></li>
                                    <li><a href="product-centered.html">Case</a></li>
                                    <li><a href="product-centered.html">Power Supply</a></li>
                                    <li><a href="product-centered.html">Cooling System</a></li>
                                    <li><a href="product-centered.html">Optical Disk Drive (ODD)</a></li>
                                    <li><a href="product-centered.html">Monitor</a></li>
                                    <li><a href="product-centered.html">Hard Disk/Storage</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">&emsp;&emsp;COMPARE</a>
                                </li>  
                                <li>
                                    <a href="#">COMPUTER DIY</a>
                                </li>
                                <li>
                                    <a href="#">SHOPPING ONLINE</a>
                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <ul>
                                                        <li><a href="product.html">Payment Status</a></li>
                                                        <li><a href="product-centered.html">Delivery Status</a></li>
                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="assets/images/menu/banner-2.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li> 
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        
                        <div class="dropdown cart-dropdown">
                            <a href="cart.php" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                              
                            </a>
                        </div>

                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav  border-0 mb-0">
                <div class="container d-flex align-items-center">
                
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                    
                                        <figure class="product-media">
                                        <?php 
                                                $Goods_ID  = $_GET['Goods_ID'] ;
                                                $sql = "SELECT * FROM goods as g WHERE g.Goods_ID=$Goods_ID" ;
                                                $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
                                                $row = mysqli_fetch_array($result);
                                                extract($row);

                                        ?>
                                                
                                                <img src="<?php echo $row["Goods_Image"]; ?>">
                                              
                    
                                                   
                                        </figure><!-- End .product-media --> 
                                      
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title"><?php echo $row["GoodsName"]; ?></h1><!-- End .product-title -->

                                    <div class="product-price">
                                        <?php echo $row["Price"]; ?>
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        <p><?php echo $row["GoodsDetail"]; ?></p>
                                    </div><!-- End .product-content -->


                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Quality:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                        <a href="cart.php?Goods_ID=<?PHP echo $row['Goods_ID']?>&act=add" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-details-action -->


                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                    
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/product.html  22 Nov 2019 09:55:05 GMT -->
</html>