<?php
session_start();
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- molla/category-4cols.html  22 Nov 2019 10:02:52 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Advice</title>
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
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
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
        </header><!-- End .header -->

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">SHOPPING</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <br>
            <div class="page-content">
                <div class="container">
                	<div class="row">
                        <div class="col-lg-1">
                        </div>
                		<div class="col-lg-10">
  
                            <div class="products mb-3">
                                <div class="row justify-content-center">
                                        <?php  
                                            $sql = "SELECT Goods_ID, GoodsName, GoodsDetail, Price, Stock, GoodsType_ID, Goods_Image FROM goods";
                                            $result = $conn->query($sql);
                                            if(mysqli_num_rows($result) > 0)  
                                            {  
                                                while($row = mysqli_fetch_array($result))  
                                                {  
                                        ?> 
                                            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                                <div class="product product-7 text-center">   
                                                    <figure class="product-media">
                                                        <img src="<?php echo $row["Goods_Image"]; ?>" width="100" height="100" alt="Product image" class="product-image" name="">
                                                        <div class="product-action">
                                                            <a class="btn-product btn-cart" href="cart.php?Goods_ID=<?PHP echo $row['Goods_ID']?>&act=add"><span>add to cart</span></a>
                                                        </div><!-- End .product-action -->
                                                    </figure><!-- End .product-media --> 
                                                    <div class="product-body"> 
                                                        <h3 class="product-title"><a href="detailitem.php?Goods_ID=<?php echo $row['Goods_ID']; ?>"><?php echo $row["GoodsName"]; ?></a></h3>
                                                        <input type="hidden" name="hidden_name" value="<?php echo $row["GoodsName"]; ?>" />
                                                        <div class="product-price">
                                                            <?php echo number_format($row["Price"],2); ?>
                                                            <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                                                        </div><!-- End .product-price -->  
                                                    </div><!-- End .product-body -->
                                                </div><!-- End .product -->
                                            </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                                        <?php  
                                                }  
                                            }  
                                        ?>    
                                </div><!-- End .row -->
                            </div><!-- End .products -->
                            
	
                        </div><!-- End .col-lg-9 -->
                        <div class="col-lg-1">
                        </div>
                	</div><!-- End .row -->
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
            
            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
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
    <script src="assets/js/wNumb.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/category-4cols.html  22 Nov 2019 10:02:55 GMT -->
</html>
<?php
mysql_close();
?>