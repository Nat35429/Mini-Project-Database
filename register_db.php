<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
        $houseno = mysqli_real_escape_string($conn, $_POST['houseno']);
        $subdistrict = mysqli_real_escape_string($conn, $_POST['subdistrict']);
        $district = mysqli_real_escape_string($conn, $_POST['district']);
        $province = mysqli_real_escape_string($conn, $_POST['province']);
        $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "INSERT INTO member (Mname, MLastname, MTelephone, MHouseNo, MSubDistrict, MDistrict, MProvince, MPostalCode, MEmail, MPassword) VALUES ('$name', '$lastname', '$telephone','$houseno', '$subdistrict', '$district','$province', '$postalcode', '$email','$password')";
        mysqli_query($conn, $sql);

        
    }
    header('location: register.php');

?>