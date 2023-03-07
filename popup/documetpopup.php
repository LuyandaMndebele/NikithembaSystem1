
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
            <h2>Required Documents </h2>
            <p><?php echo $fname?> , Please make sure you upload the correct documents(Name them correctly with your name on it. Example: matric_statement_YOURFULLNAME_SURNAME)</p>
            <br>
            <ul>
                <p> You'll need to upload</p>
                <li>Matric Statement</li>
                <li>ID Copy</li>
                <li>Proof of Resident</li>
                <li>Motivational Letter(Optional)</li>
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