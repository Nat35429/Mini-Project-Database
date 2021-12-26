<?php 
    include('server.php');
    $get_id = (isset($_GET['id'])) ? $_GET['id'] : '';

    $sql = "UPDATE goods SET Statusgoods = '1' WHERE Goods_ID = $get_id;";

    // $sql = "DELETE FROM goods WHERE Goods_ID = $get_id"; 

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header('Location: managegoods.php');
        exit;
    } else {
        echo "Error deleting record";
    }
?>