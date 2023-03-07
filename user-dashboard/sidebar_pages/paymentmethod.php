<?php
  session_start();
?>
<?php
  if(isset($_SESSION['id'])) {
    include '../../include/dbh.inc.php';
   

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <link rel="stylesheet" href="../../css/application.css">
</head>
<body> 
        <?php
            include '../../popup/paymentmethodpopup.php';
        ?>
    <div class="app-div">
        <a href="../index.php">
            <h1 class="cross">X</h1>
        </a>
        <div class="title">Payment</div>
        <div class="sub-title">Made easy! Choose your payment method!</div>
        <div class="fields">
            <form action="../../include/paymentmethod.inc.php" method="post">
                <input type="radio" value="online" name="payment" id="dot-1" >
                <span class="gender-title">Online</span>
                <input type="radio" value="deposit" name="payment" id="dot-2">
                <span class="gender-title">Deposit</span>
                <input type="hidden" name="student_id" value="<?php echo $_SESSION['id']?>">

                <button type="submit" class="btn" name="pay">Proceed</button>
            </form>
        </div>
        
    </div>
 

    <script>
            
            const popup = document.querySelector('.popup');
            const x = document.querySelector('.popup-content h1');

            window.addEventListener('load', () => {
                popup.classList.add('showPopup');
                popup.childNodes[1].classList.add('showPopup');
            })

            x.addEventListener('click', () =>{
                popup.classList.remove('showPopup');
                popup.childNodes[1].classList.remove('showPopup');
            })
    </script>
</body>
</html>
<?php
    }else {
        header("Location: ../../login/login.php?error=error");
    }
?>