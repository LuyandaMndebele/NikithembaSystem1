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
                echo '<script>alert("You forgot to choose your qualification!")</script>';

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
                        <option value="Tshwane_University_of_Technology">Tshwane University of Technology</option>
                        <option value="Unisa">University of South Africa</option>
                        <option value="Wits">Wits</option>
                        <option value="University_of_Pretoria">University of Pretoria</option>
                        <option value="University_of_Cape Town">University of Cape Town</option>
                    </select>    
                </div>

                <div class="campus">
                    <div id="Tshwane_University_of_Technology" class="camp">
                        <select name="campus[]" id="" class="department">
                            <option value="">Select Campus</option>
                            <option value="Pretoria">Pretoria</option>
                            <option value="Arcadia">Arcadia</option>
                            <option value="Emalahleni">eMalahleni</option>
                            <option value="Mbombela">Mbombela</option>
                            <option value="Ga-Rankuwa">Ga-Rankuwa</option>
                            <option value="North_Soshanguve">North Soshanguve</option>
                            <option value="South_Soshanguve">South Soshanguve</option>
                            <option value="Polokwane">Polokwane</option>
                        </select> 
                    </div>
                    
                    <div id="Unisa" class="camp">
                        <select name="campus[]" id="" class="department">
                            <option value="">Select Campus</option>
                            <option value="Pretoria">Pretoria</option>
                            <option value="Rustenburg">Rustenburg</option>
                            <option value="Polokwane">Polokwane</option>
                            <option value="Cape_Town">Cape Town</option>
                            <option value="East_London">East London</option>
                            <option value="Durban">Durban</option>
                        </select> 
                    </div>
                </div>



                <div class="level">
                    <select name="level" id="level" class="department" required>
                        <option value="">Choose qualification level</option>
                        <option value="Degree">Bachelor Degree</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Higher">Higher Certificate</option>
                    </select>    
                </div>


                <div class="quali">
                    <div id="Degree" class="data">
                        <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Computer_Science">Computer science</option>
                            <option value="Information_Technology">Information Technology</option>
                            <option value="Systems_Networking">Systems Networking</option>
                        </select> 
                    </div>
                    <div id="Diploma" class="data">
                        <select name="quali[]" id="" class="department">
                            <option value="">Choose your qualification</option>
                            <option value="Mechatronics_Engineer">Mechatronics Engineer</option>
                            <option value="Electrical_Engineer">Electrical Engineer</option>
                            <option value="Mechanical_Engineer">Mechanical Engineer</option>
                        </select> 
                    </div>  
                    <div id="Higher" class="data">
                        <select name="quali[]" id="" class="department">
                            <option value="">Choose your qualification</option>
                            <option value="Human_Reource">Human Resource</option>
                            <option value="Adminstration_Office">Adminstration office</option>
                        </select> 
                    </div>    
                </div>
                <button type="submit" class="submit" name="apply-submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="../js/jquery-1.12.0.min.js"></script>
<script>


    $(document).ready(function(){
        $("#uni").on('change',function(){
            $(".camp").hide();
            $("#" + $(this).val()).fadeIn(700);
        }).change();
    });
    

    $(document).ready(function(){
        $("#level").on('change',function(){
            $(".data").hide();
            $("#" + $(this).val()).fadeIn(700);
        }).change();
    });

   
</script>

</body>
</html>
<?php
    }else {
        header("Location: ../login/login.php?error=error");
    }
?>

