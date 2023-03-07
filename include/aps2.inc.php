<?php
include 'dbh.inc.php';

$student_id = $_GET["id"];
$university = $_GET["uni"];

$sq = "SELECT count(subject_mark) FROM subject WHERE student_id=$student_id";
$q = $conn->query($sq);
$ro = mysqli_fetch_all($q,MYSQLI_ASSOC);

$count = implode(" ",$ro[0]);


if($count == 7){

$sq = "SELECT sum(subject_mark) FROM subject WHERE student_id=$student_id AND subject_name <> 'Life_Orientations'";
$q = $conn->query($sq);
$row = mysqli_fetch_all($q,MYSQLI_ASSOC);

$aps = implode(" ",$row[0]);

echo '  Sum: ' . $aps;

    if($aps >=19 && $aps < 21)
    {
        header("location: ../user-dashboard/qualification/qual_cert.php?uni=$university&aps=$aps");

    }elseif($aps >=21 && $aps < 30){
        header("location: ../user-dashboard/qualification/qual_dip.php?uni=$university&aps=$aps");

    }elseif($aps >=30 && $aps <= 42) {
        header("location: ../user-dashboard/qualification/qual_deg.php?uni=$university&aps=$aps");
        
    }else{
        header('location: ../user-dashboard/index.php?error=low');
    }

}elseif($count > 7){

    header("location: ../user-dashboard/upload_marks.php?error=more&uni=$university");

}else{
    header("location: ../user-dashboard/upload_marks.php?error=subject&uni=$university");
}


