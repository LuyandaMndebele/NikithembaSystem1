<?php
if(isset($_POST['apply-submit'])) {

    $student_id = $_POST['student_id'];
    $method = $_POST['payment'];
    $status = "Pending";

    include 'dbh.inc.php';
    $insert = "INSERT INTO payment(student_id, method, pay_status)
    VALUES('$student_id','$method','$status')";
    mysqli_query($conn, $insert);

    if($method == "online"){
        header('location: ../user-dashboard/payment.php');
    }else{
        header('location: ../user-dashboard/payproof.php');
    }


}else{
    header('location: ../user-dashboard/index.php');
    exit(); 
}

?>