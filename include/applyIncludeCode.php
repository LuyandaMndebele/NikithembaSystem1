<?php
if(isset($_POST['apply-submit'])) {
    include 'dbh.inc.php';
    $student_id = $_POST['student_id'];

    $date = "10/10/10";
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


    foreach($_POST['campus'] AS $key => $value){
        if($value == false){
            // unset($_POST[quali][$key]);
        }else{
            $campus = $value;
        }
    }

    
    $select = " SELECT * FROM application WHERE student_id = '$student_id'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'Application already exist!';
        header('location: ../user-dashboard/index.php');
    }elseif(empty($name)){
            header("Location: ../user-dashboard/apply.php?error=quali");
            exit();
    }else{
            $insert = "INSERT INTO application(student_id, university, campus, level, qualification, date,status)
            VALUES('$student_id','$uni','$campus','$level','$name','$date','$status')";
            mysqli_query($conn, $insert);
            header('location: ../user-dashboard/upload_marks.php');
    }


}else{
    header('location: ../user-dashboard/index.php');
    exit(); 
}

?>