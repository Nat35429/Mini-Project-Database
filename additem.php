<?php include('server.php') ?>
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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
                                <li>
                                    <a href="managegoods.php" class="sf-with-ul">Manage Goods</a>
                                    <ul>
                                    <li><a href="additem.php" class="text-center">Add Item</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">&emsp;&emsp;Manage Type Goods</a>
                                </li>  
                                <li>
                                    <a href="#">&emsp;&emsp;Manage Type Payment</a>
                                </li>
                                <li>
                                    <a href="#">&emsp;&emsp;Manage Type Delivery</a>
                                </li> 
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
        <body>
    <div class="page-wrapper"><br><br>
        <main class="main">
            <div class="login-page">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="" role="tab" aria-controls="register-2" aria-selected="true">ADD ITEM</a>
							    </li>
							</ul>
							<div class="tab-content">
							    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
							    <form action="additem_db.php" method="post" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
							    			<label for="register-email-2">Name Item</label>
                                            <input type="text" class="form-control" id="register-email-2" name="name" required>
							    		</div><!-- End .form-group -->
                        
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Detail Item</label>
                                            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail"></textarea>
                                        </div>

                                        <?php 
                                            $query = "SELECT * FROM goodstype ORDER BY GoodsType_ID asc";
                                            $result = mysqli_query($conn, $query);
                                        ?>
                                        <div class="form-group">
                                            <label for="inputState">Type Item</label>
                                            <select id="inputState" class="form-control" name="type">
                                                <?php foreach($result as $results){?>
                                                <option value="<?php echo $results["GoodsType_ID"];?>">
                                                    <?php echo $results["GoodsTypeName"]; ?>
                                                </option>    
                                                <?php } ?>
                                            </select>
                                        </div>

							    		<div class="form-group">
							    			<label for="register-password-2">Price</label>
                                            <!-- <input type="text" name="price" step="0.01" min="0" max="10" required> -->
                                            
							    			<input  pattern="[0-9]+([\.,][0-9]+)?" step="0.01" type="text" class="form-control" id="register-password-2"   name="price" required>
                                        </div><!-- End .form-group -->
                                        
                                        <div class="form-group">
							    			<label for="register-password-2">Stock</label>
							    			<input pattern="[0-9]{1,}" type="text" class="form-control" id="register-password-2" name="stock" required>
                                        </div><!-- End .form-group -->

                                        <br>
                                        <!-- <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input">
                                            <label class="custom-file-label" for="validatedCustomFile"></label>
                                        </div> -->
                                        <div class="form-group">
							    			<label for="register-password-2">Upload Image</label><br>
							    			<input type="file" name="file"><br/>
                                        </div><!-- End .form-group -->
                                        
                                        <?php if(!empty($msg)):?>
                                            <div class="alert <?php echo $css_class; ?>">
                                                <?php echo $msg; ?>
                                            </div>
                                        <?php endif; ?>

                                    
							    	<br><br><center><button type="submit" class="btn btn-outline-primary-2" value="Register" name="additem">
			                		<span>ADD ITEM</span>
			            			<i class="icon-long-arrow-right"></i>
                                    </button></center><br><br>
                                    <!-- <div class="text-center">
                                         <p class="mb-0 text-muted">Allready have an account? <a href="login.php"> Log In</a></p>
                                    </div>                        	        							                -->
							    </form>
							    </div><!-- .End .tab-pane -->
							</div><!-- End .tab-content -->
						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    

    

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
        
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
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