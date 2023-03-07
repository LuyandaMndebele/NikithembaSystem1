<?php
    

if(isset($_POST['cancel-submit'])){
    include 'dbh.inc.php';

    $answer = $_POST["answer"];
    $student_id = $_POST['student_id'];

    if($answer == "yes"){
        
        $app_id = 0;
        $sql = "SELECT * FROM application WHERE student_id = $student_id";
        $result = mysqli_query($conn,$sql);
        $app = mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($app as $data):
                        
            $app_id = $data['app_id'];
                            
        endforeach ;
        
        
        $sql = "DELETE FROM application WHERE app_id=$app_id";
        $conn->query($sql);
        $conn->close();
        header("location: ../user-dashboard");

    }elseif($answer == "no"){

        header("location: ../user-dashboard");

    }

}else{
    header("Location: ../login/login.php?error=unknown");
    exit();
}