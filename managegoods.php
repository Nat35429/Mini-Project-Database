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
                                    <a href="#" class="sf-with-ul">Manage Goods</a>
                                    <ul>
                                    <li><a href="additem.php" class="text-center">Add Item</a></li>
                                    </ul>
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
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <br><br>
                    <a href="additem.php"><button  class="btn btn-outline-dark btn-minwidth-sm float-right"" style='font-size:12px'>Add Item<i class='fas fa-plus-square'></i></button></a>
                    <br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                    <table class="table table-bordered"><br>
                        <thead>
                            <tr>
                            <td scope="col" align="center" style="width:5%">No.</td>
                            <td scope="col" align="center" style="width:15%">Name</td>
                            <td scope="col" align="center" style="width:30%">Detial</td>
                            <td scope="col" align="center" style="width:10%">Price</td>
                            <td scope="col" align="center" style="width:5%">Stock</td>
                            <td scope="col" align="center" style="width:5%">Type</td>
                            <td scope="col" align="center" style="width:15%">Image</td>
                            <td scope="col" align="center" style="width:10%">Option</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                                $sql = "SELECT Goods_ID, GoodsName, GoodsDetail, Price, Stock, GoodsType_ID, Goods_Image, Statusgoods FROM goods";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        if($row["Statusgoods"] != '1') {
                                            echo "
                                            <tr>
                                            <td align=center>" . $i. "</td>
                                            <td align=center>" . $row["GoodsName"]. "</td>
                                            <td align=center>" . $row["GoodsDetail"]. "</td>
                                            <td align=center>" . number_format($row["Price"],2). "</td>
                                            <td align=center>" . $row["Stock"]. "</td>
                                            <td align=center>" . $row["GoodsType_ID"]. "</td>
                                            <td align=center>" . '<img src = "'.$row["Goods_Image"].'"width="100" height="100">'. "</td>
                                            <td>
                                            
                                            <a href='editgoods.php?id=".$row['Goods_ID']."'><center><button type='button' class='btn btn-warning btn-minwidth-sm'>Edit</button></a>
                                            <a href='deletegoods.php?id=".$row['Goods_ID']."'><button type='button' class='btn btn-danger btn-minwidth-sm'>Remove</button></center></a>
                                            </td>
                                            </tr>
                                            ";
                                        $i++;
                                        }
                                    }
                                } else {
                                    echo "0 results";
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
            <div class="col-lg-1"></div>
            </div>
        
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