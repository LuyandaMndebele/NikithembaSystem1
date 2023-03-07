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
    <title>Upload Marks</title>
    <link rel="stylesheet" href="../css/application.css">
</head>
<body>
<div class="app-div">
    <!-- <div>
        <p>After you have cancel your application you won't be refunded back your application fee.</p>
        <p>But, however you won't pay the application fee if you apply again whiles the application window is open.</p>
    </div> -->
    <br>
    <form action="../include/cancelapp.inc.php" method="post">
        <label>Do you want to cancel the application?</label>
        <select name="answer">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <input type="hidden" name="student_id" value="<?php echo $student_id?>">
        <button class="btn-cancel" type="submit" name="cancel-submit">Submit</button>
    </form>
</div>
 
</body>
</html>
<?php
    }else {
        header("Location: ../login/login.php?error=error");
    }
?>

