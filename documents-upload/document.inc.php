<?php


if(isset($_POST["submit"])){
    
    include '../include/dbh.inc.php';

    $student_id = $_POST['student_id'];

    $filename = $_FILES['myfile']['name'];

    $destination =  $filename;

    $extension = pathinfo($filename,PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    
    $size = $_FILES['myfile']['size'];

    if(!in_array($extension,['png','pdf', 'jpeg']))
    {
        header("location: ../user-dashboard/document.php?error=format");

    }elseif($_FILES['myfile']['size'] > 5000000){
        header("location: ../user-dashboard/document.php?error=size");
        
    }else{
        if(move_uploaded_file($file,$destination)){
            $sql = "INSERT INTO documents (student_id,name,size) VALUES 
            ('$student_id', '$filename','$size')";

            if(mysqli_query($conn,$sql)){
                header("location: ../user-dashboard/document.php");
            }else{
                
                header("location: ../user-dashboard/document.php?error=file");
            }
        }
    }

}else{
    header("Location: ../login/login.php?error=unknown");
    exit();
}