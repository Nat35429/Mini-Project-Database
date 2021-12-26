<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
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
</head>

<body>
    <div class="page-wrapper">
        <main class="main">
            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/logo.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="" role="tab" aria-controls="register-2" aria-selected="true">REGISTER</a>
							    </li>
							</ul>
							<div class="tab-content">
							    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
							    <form action="register_db.php" method="post">
							    		<div class="form-group">
							    			<label for="register-email-2">Name</label>
                                            <input type="text" class="form-control" id="register-email-2" name="name" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="register-password-2">Lastname</label>
							    			<input type="text" class="form-control" id="register-password-2" name="lastname" required>
                                        </div><!-- End .form-group -->
                                        
                                        <div class="form-group">
							    			<label for="register-password-2">Telephone</label>
							    			<input type="text" class="form-control" id="register-password-2" name="telephone" required>
                                        </div><!-- End .form-group -->
                                        
                                        <div class="form-group">
							    			<label for="register-password-2">House No.</label>
							    			<input type="text" class="form-control" id="register-password-2" name="houseno" required>
                                        </div><!-- End .form-group -->
                                        
                                        <div class="form-group">
							    			<label for="register-password-2">Subdistrict</label>
							    			<input type="text" class="form-control" id="register-password-2" name="subdistrict" required>
                                        </div><!-- End .form-group -->
                                        
                                        <div class="form-group">
							    			<label for="register-password-2">District</label>
							    			<input type="text" class="form-control" id="register-password-2" name="district" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
							    			<label for="register-password-2">Province</label>
							    			<input type="text" class="form-control" id="register-password-2" name="province"  required>
                                        </div><!-- End .form-group -->
                                        
                                        <div class="form-group">
							    			<label for="register-password-2">Postal Code</label>
							    			<input type="text" class="form-control" id="register-password-2" name="postalcode" required>
                                        </div><!-- End .form-group -->
                                        
                                        <div class="form-group">
							    			<label for="register-password-2">Email</label>
							    			<input type="email" class="form-control" id="register-password-2" name="email" required>
                                        </div><!-- End .form-group -->
                                        
                                        <div class="form-group">
							    			<label for="register-password-2">Password</label>
							    			<input type="password" class="form-control"  name="password" required>
							    		</div><!-- End .form-group --><br>
                                
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                            &emsp;&ensp;
							    			<button type="submit" class="btn btn-outline-primary-2" value="Register" name="reg_user">
			                					<span>REGISTER</span>
			            						<i class="icon-long-arrow-right"></i>
                                            </button><br><br>
                                            <div class="text-center">
                                                <p class="mb-0 text-muted">Allready have an account? <a href="login.php"> Log In</a></p>
                                            </div>
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


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>