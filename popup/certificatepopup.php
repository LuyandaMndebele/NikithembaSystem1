
<?php
  if(isset($_SESSION['id'])) {

    include '../../include/dbh.inc.php';

    $student_id = $_SESSION['id']; 
    $fname = $_SESSION['name'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
    <link rel="stylesheet" href="../../css/popup.css">
</head>
<body>
    <div class="popup">
        <div class="popup-content">
            <h1>X</h1>
            <h2>APS</h2>
            <p><?php echo $fname?> , According to our automation APS Calculator</p>
            <br>
            <ul>
                <p> Your total APS is <?php echo $aps?></p>
                <li>You qualify for a certificate</li>
            </ul>
            <br>
            
        </div>
    </div>
</body>
</html>

<?php
    }else {
        header("Location: ../../login/login.php?error=error");
    }
?>