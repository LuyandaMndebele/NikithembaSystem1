
<?php
  if(isset($_SESSION['id'])) {

    include '../include/dbh.inc.php';

    $student_id = $_SESSION['id']; 
    $fname = $_SESSION['name'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
    <link rel="stylesheet" href="../css/popup.css">
</head>
<body>
    <div class="popup">
        <div class="popup-content">
            <h1>X</h1>
            <h2>Upload Marks </h2>
            <p><?php echo $fname?> , note the following before your uload marks!</p>
            <br>
            <p>IMPORTANT NOTE:</p>
                
                <ul>
                    <li>Upload all your subject marks!</li>
                    <li>Write the subject name full, same as in your statement!</li>
                    <li>The spelling should be exact!</li>
                    <li>Do not write it in capital letters or small letters!</li>
                    <li>Correct Example: Physical Sciences</li>
                    <li>Incorrect Example: PHYSICAL SCIENCES / physical sciences</li>
                    <li>Validate your marks before you proceed!</li>
                </ul>
            <br>
            <p>If not, then your application won't be process successfully! </p>
            
        </div>
    </div>
</body>
</html>

<?php
    }else {
        header("Location: ../login/login.php?error=error");
    }
?>