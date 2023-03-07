<?php

if(isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['idemail'];
    $password = $_POST['pwd'];

    if(empty($username) || empty($password)){
        header("Location: ../login/login.php?error=empty");
        exit();

    }else{
        $sql = "SELECT * FROM student WHERE email=? OR idnumber=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../login/login.php?error=sqlerror");
            exit();

        }else {

            mysqli_stmt_bind_param($stmt,"ss",$username,$username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck =  $row['password'];
                if($pwdCheck == false){
                    header("Location: ../login/login.php?error=wrongpwd");
                    exit();
                }else if($pwdCheck == true){
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['idnumber'] = $row['idnumber'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['surname'] = $row['surname'];
                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['contact'] = $row['contact'];
                    $_SESSION['street'] = $row['street'];
                    $_SESSION['city'] = $row['city'];
                    $_SESSION['zip'] = $row['zip'];
    
                    
                    
                    header("Location: ../user-dashboard/index.php?login=success");
                    exit();

                }else{
                    header("Location: ../login/login.php?error=wrongpwd");
                    exit();
                }

            }else{
                header("Location: ../login/login.php?error=nouser");
            }

        }
    }


















}else{
    header("Location: ../login/login.php?error=unknown");
    exit();
}