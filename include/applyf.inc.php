<?php
if(isset($_POST['apply-submit'])) {
    include 'dbh.inc.php';

    $student_id = $_POST['student_id'];
    $aps = $_POST["aps"];
    $date = date('Y/m/d H:i:s');
    $status = "Pending";
    $name = ""; 
    $campus = "default";
    $level = $_POST['level'];
    $uni =$_POST['university'];



    foreach($_POST['quali'] AS $key => $value){
        if($value == false){
            // unset($_POST[quali][$key]);
        }else{
            $name = $value;
        }
    }
    

    
    $select = " SELECT * FROM application WHERE student_id = '$student_id'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'Application already exist!';
        header('location: ../user-dashboard/index.php?error=exist');
    }elseif(empty($name)){
            if($level == "degree"){
                header("Location: ../user-dashboard/qualification/degree.php?error=quali&aps=$aps");
                exit();
            }elseif($level == "diploma"){
                header("Location: ../user-dashboard/qualification/diploma.php?error=quali&aps=$aps");
                exit();
            }elseif($level == "Higher_Certificate"){
                header("Location: ../user-dashboard/qualification/certificate.php?error=quali&aps=$aps");
                exit();
            }else{
                header("Location: ../user-dashboard/index.php?error=error");
                exit();
            } 
    }else{
        $insert = "INSERT INTO application(student_id, university, campus, level, qualification, date,status,aps)
        VALUES('$student_id','$uni','$campus','$level','$name','$date','$status','$aps')";
        mysqli_query($conn, $insert);
        
        header('location: ../user-dashboard/index.php?success=application');
    }


}else{
    header('location: ../user-dashboard/index.php');
    exit(); 
}

?>