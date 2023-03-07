
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
            <h2>Application Fee </h2>
            <p><?php echo $fname?> , you'll need to pay an application fee of R300</p>
            <br>
            <p>IMPORTANT NOTE:</p>
            <br>
            <ul>
                <li>You can either provide a proof of payment or pay online.</li>
                <li>Submit the proof of payment within 5 days from the day of your applications!</li>
            </ul>
            <br>
            <p>BANK DETAILS:</p>
                <br>
                <ul>
                    <li>Account Name: Gitts(PTY)</li>
                    <li>Bank: FNB</li>
                    <li>Banch Code: 60531</li>
                    <li>Account Number: 9012386010</li>
                    <li>Reference: nikithemba-YOURNAMEANDSURNAME</li>
                </ul>
        </div>
    </div>
</body>
</html>

<?php
    }else {
        header("Location: ../../login/login.php?error=error");
    }
?>