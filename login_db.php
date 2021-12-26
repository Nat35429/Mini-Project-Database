<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (count($errors) == 0) {
            $query = "SELECT * FROM member WHERE MEmail = '$email' AND MPassword = '$password' ";  
            $result = mysqli_query($conn, $query);
            $objresult = mysqli_fetch_array($result);
           
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['MEmail'] = $objresult["MEmail"];
                $_SESSION['MStatus'] = $objresult["MStatus"];
                session_write_close();
                if($objresult["MStatus"]=="Admin"){
                    header("location: managegoods.php");
                }
                else{
                    $_SESSION['success'] = "Your are now logged in";
                    header("location: home.php");
                }
                
            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: login.php");
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: login.php");
        }
    }

?>