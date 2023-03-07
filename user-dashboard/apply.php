<?php
  session_start();
?>
<?php
  if(isset($_SESSION['id'])) {
 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
    <link rel="stylesheet" href="../css/application.css">
</head>
<body>
    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "quali") {
                echo '<script>alert("You forgot to select your qualification!")</script>';

            }
        }
                    
    ?>
    <div class="app-div">
        
        <div class="title">Application</div>
        <div class="sub-title">Made easy! Choose your Campus!</div>
        <form action="../include/apply.inc.php" method="post">
            <div class="fields">
            <input type="hidden" name="student_id" value="<?php echo $_SESSION['id']?>">
                <div class="university">
                    <select name="university" id="uni" class="department" required>
                        <option value="">Choose the university of your choice</option>
                        <option value="Tshwane_University_of_Technology">Tshwane University of Technology - eMalahleni</option>
                        <option value="University_of_South_Africa">University of South Africa</option>
                        <option value="University_of_The_Witwatersrand">University of The Witwatersrand</option>
                        <option value="University_of_Pretoria">University of Pretoria</option>
                        <option value="University_of_Cape_Town">University of Cape Town</option>
                    </select>    
                </div>

                



                


                <button type="submit" class="submit" name="apply-submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="../js/jquery-1.12.0.min.js"></script>


</body>
</html>
<?php
    }else {
        header("Location: ../login/login.php?error=error");
    }
?>

