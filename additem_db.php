<?php 
    session_start();
    include('server.php');
    $msg = "";
    $css_class = "";

    $errors = array();

    if (isset($_POST['additem'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $detail = mysqli_real_escape_string($conn, $_POST['detail']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $stock = mysqli_real_escape_string($conn, $_POST['stock']);
        $dir = "upload/";
        $fileImage = $dir.basename($_FILES["file"]["name"]);

        $sql = "INSERT INTO goods (GoodsName, GoodsDetail, Price, Stock, GoodsType_ID,Goods_Image) VALUES ('$name', '$detail','$price', '$stock', '$type','$fileImage')";
        mysqli_query($conn, $sql);

        if(move_uploaded_file($_FILES["file"]["tmp_name"],$fileImage)){
            $msg = "Image Upload";
            $css_class = "alert-success";
        }else{
            $msg = "Failed to upload";
            $css_class = "alert-danger";
        }    
    }
    header('location: managegoods.php');

?>