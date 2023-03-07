<?php
  session_start();
?>
<?php
  if(isset($_SESSION['id'])) {
    include '../../include/dbh.inc.php';
    $student_id = $_SESSION['id']; 
    $fname = $_SESSION['name'];
    $lname = $_SESSION['surname'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['contact'];
    $idnum = $_SESSION['idnumber'];
    $gender = $_SESSION['gender'];
    $street = $_SESSION['street'];
    $city = $_SESSION['city'];
    $zip = $_SESSION['zip'];


    $sql = "SELECT * FROM application WHERE student_id = $student_id";
    $result = mysqli_query($conn,$sql);
    $app = mysqli_fetch_all($result,MYSQLI_ASSOC);

    $app_id = 0;
    $sql = "SELECT * FROM application WHERE student_id = $student_id";
    $result = mysqli_query($conn,$sql);
    $app = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<?php foreach($app as $data):?>
                        
    <?php $app_id = $data['app_id']?>
                                        
<?php endforeach ;?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application and Profile</title>
    <link rel="stylesheet" href="../../css/application.css">
</head>
<body> 
        
    <div class="app-div">
        <a href="../index.php">
            <h1 class="cross">X</h1>
        </a>
        <div class="title">Application Information</div>
        <div class="sub-title">Your future is looking great!</div>
        <div class="profile">
            <h3 class="alias"><?php echo $fname.' '.$lname?></h3>
            <h4>Personal Information</h4>
            <div class="row">
                <table>
                    <thead>
                        
                        <th>ID</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Gender</th>
                    </thead>
                    <tbody>
                            
                        <tr>
                            <td><?php echo $idnum?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $phone?></td>
                            <td><?php echo $street.', '.$city.', '.$zip?></td>
                            <td><?php echo $gender?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <button class="btn">Update</button>
            <h4>Application</h4>
            <div class="row">
                <table>
                    <thead>
                        
                        <th>University</th>
                        <th>Campus</th>
                        <th>Qualification Level</th>
                        <th>Qualification</th>
                        <th>Application Status</th>
                    </thead>
                    <tbody>
                        <?php foreach($app as $data):?>
                            
                        <tr>
                            <td><?php echo $data['university'];?></td>
                            <td><?php echo $data['campus'];?></td>
                            <td><?php echo $data['level'];?></td>
                            <td><?php echo $data['qualification'];?></td>
                            <td><?php echo $data['status'];?></td>
                        </tr>

                        <?php endforeach ; ?>
                    </tbody>
                </table>
            </div>
            <?php if($app_id >= 1){ ?>
                <a href="../../popup/cancelpopup.php"><button class="btn-cancel">Cancel Application</button></a>
            <?php }else{ ?>
                <a href="../apply.php"><button class="btn">Apply</button></a>
            <?php } ?>
            
        </div>

    </div>
 

    
</body>
</html>
<?php
    }else {
        header("Location: ../../login/login.php?error=error");
    }
?>