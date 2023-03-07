<?php
if(isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $idnumber = $_POST['idnumber'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $user_type = 'student';

    $select = " SELECT * FROM student WHERE idnumber = '$idnumber' && password = '$password'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exist!';
        header('location: ../login/registration.php');
    }else{
        if($password != $cpassword){
            $error[] = 'Password not matched!';
            header('location: ../login/registration.php');
        }else{
            $insert = "INSERT INTO student(name, surname, idnumber, contact, email, street,city,zip, gender, user_type, password)
            VALUES('$name','$surname','$idnumber','$contact','$email','$street','$city','$zip','$gender','$user_type','$password')";
            mysqli_query($conn, $insert);
            header('location: ../login/login.php');
        }
    }




    





}else{
    header("Location: ../signup.php");
    exit(); 
}

?>