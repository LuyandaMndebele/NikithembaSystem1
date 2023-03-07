<?php
if(isset($_POST['apply-submit'])) {
    include 'dbh.inc.php';
    $student_id = $_POST['student_id'];
    $uni = $_POST['university'];
    $campus = "";
    $level = "";
    $name = "";
    $date = "10/10/10";
    $status = "";
    
    if($uni == "Tshwane_University_of_Technology"){
        $campus = "eMalahleni";
    }else{
        $campus = "default";
    }
    
    $select = " SELECT * FROM application WHERE student_id = '$student_id'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'Application already exist!';
        header('location: ../user-dashboard/index.php?error=exist');
    }else{
            
            header('location: ../user-dashboard/upload_marks.php?uni='.$uni);
    }


}else{
    header('location: ../user-dashboard/index.php');
    exit(); 
}

?>