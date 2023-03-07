<?php
  session_start();
?>
<?php
  if(isset($_SESSION['id'])) {
    $student_id = $_SESSION['id']; 
    $fname = $_SESSION['name'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Fee</title>
    <link rel="stylesheet" href="../css/application.css">
</head>
<body>
    <div class="app-div">
    
            
        
            <div class="title">Application Fee</div>
            <div class="sub-title">Make payment instructions!</div>
            <br>
            <p><?php echo $fname?> , you'll need to pay an application fee of R300</p>
            <br>

            <p>HOW TO MAKE PAYMENT:</p>
                
                <ul>
                    <li>You can either provide the proof of payment or pay online.</li>
                    <li>Click Make Payment on your Dashboard</li>
                    <li>If you wish to deposit the money:
                        <ul>
                            <li>Take a screenshot of the banking details below.</li>
                        </ul>
                    </li>
                </ul>
            
            <p>BANK DETAILS:</p>
                
                <ul>
                    <li>Account Name: Gitts(PTY)</li>
                    <li>Bank: FNB</li>
                    <li>Banch Code: 60531</li>
                    <li>Account Number: 9012386010</li>
                    <li>Reference: nikithemba-YOURNAMEANDSURNAME</li>
                </ul>
            
            <p>IMPORTANT NOTE:</p>
                
                <ul>
                    <li>Submit the proof of payment within 5 days from the day of your applications!</li>
                </ul>


        <a href="index.php"><button type="submit" class="submit">Done</button></a>
    </div>
 
</body>
</html>
<?php
    }else {
        header("Location: ../login/login.php?error=error");
    }
?>
