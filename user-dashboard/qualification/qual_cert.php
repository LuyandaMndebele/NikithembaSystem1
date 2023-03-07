<?php
  session_start();
?>
<?php
  if(isset($_SESSION['id'])) {
    
    $aps = $_GET["aps"];

    include '../../include/dbh.inc.php';
    $subject_id = 0;
    $subject = "";
    $student_id = $_SESSION['id'];

    $sqli = "SELECT * FROM subject WHERE student_id = $student_id AND subject_name = 'Physical_Sciences'";
    $result2 = mysqli_query($conn,$sqli);
    $sub = mysqli_fetch_all($result2,MYSQLI_ASSOC);

?>
<?php foreach($sub as $data):?>
                        
        <?php 
            $subject = $data['subject_name'];
            if($subject == "Physical_Sciences"){
                $subject = "Physical_Sciences";
            }else{
                $subject = "";
            }                  
        ?>
                                                        
<?php endforeach ;?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
    <link rel="stylesheet" href="../../css/application.css">
</head>
<style>
    body{
        height: auto;
    width: auto;
    }
    .con{
        display:flex;
        justify-content:center;
        align-items:center;
        max-width: 1200px;
        flex-wrap:wrap;
        padding: 40px 0;
    }

    .con .card{
        position:relative;
        width: 280px;
        height: 250px;
        box-shadow: inset 5px 5px 5px rgba(0,0,0,0.05),
        inset -5px -5px 5px rgba(255,255,255,0.5),
        5px 5px 5px rgba(0,0,0,0.05),
        -5px -5px 5px rgba(255,255,255,0.5);
        border-radius: 15px;
        margin: 5px;
    }

    .con .card .box{
        position:absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        background: #ebf5fc;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s;
    }

    .con .card:hover .box{
        transform: translateY(-50px);
        box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        background: linear-gradient(45deg,#b95ce4,#4f29cd);
    }

    .con .card .box .content{
        padding: 20px;
        text-align: center;
    }

    .con .card .box .content h2{
        position: absolute;
        top: -10px;
        right: 30px;
        font-size: 8em;
        color: rgba(0,0,0,0.02);
        transition: 0.5s;
        pointer-events: none;
    } 

    .con .card:hover .box .content h2{
        color: rgba(0,0,0,0.05);
    }

    .con .card .box .content h3{
        font-size: 18px;
        color: #777;
        z-index: 1;
        transition: 0.5s;
    }

    .con .card .box .content input.radio {
        position: relative;
        display: inline-block;
        padding: 8px 20px;
        background: #03a9f4;
        margin-top: 15px;
        border-radius: 20px;
        color: #fff;
        text-decoration: none;
        font-weight: 400;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    
    .con .card:hover .box .content input.radio{
        background: #ff568f;
    }
    .con .card .box .content p{
        font-size: 15px;
        font-weight: 300;
        color: #777;
        z-index: 1;
        transition: 0.5s;
    }

    .con .card:hover .box .content h3,
    .con .card:hover .box .content p{
        color: #fff;
    }
</style>
<body>
    <?php
            include '../../popup/certificatepopup.php';
    ?> 
    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "quali") {
                echo '<script>alert("You forgot to select your qualification!")</script>';

            }
        }
                    
    ?>
    
    
    <div class="">
        
        <div class="title">Qualification: Higher Certificate</div>
        <?php
            if($subject == "Physical_Sciences") {       
        ?>
            <div class="sub-title">Qualification that you qualify for: Commerce and Science</div>
        <?php }else{?>
            <div class="sub-title">Qualification that you qualify for: Only Commerce</div>
        <?php } ?>
        <form action="../../include/applyf.inc.php" method="post">
            <div class="fields">
            <input type="hidden" name="student_id" value="<?php echo $_SESSION['id']?>">
            <input type="hidden" name="aps" value="<?php echo $aps?>">


                <div class="campus">
                    <div id="qualification" class="camp">
                        <select name="fal[]" id="eng" class="department">
                            <option value="">Select faculty to search for your qualification</option>
                            <?php
                                if($subject == "Physical_Sciences") {       
                            ?>
                                <option value="All">View All</option>
                                <option value="commerce">View All Commerce Faculty</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Finances">Finances</option>
                            <?php }else{?>
                                <option value="commerce">View All</option>
                                <option value="commerce">View All Faculty</option>
                                <option value="Finances">Finances</option>
    
                            <?php } ?>
                        </select> 
                    </div> 
                </div>

                <div class="quali">
                    <div id="Engineering" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Electrical_Engineering">Electrical Engineering</option>
                        </select> -->
                
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Electrical Engneering</h3>
                                        <h5>Tshwane University of Technology</h5>
                                        <p>Higher Certificate <br>12 Months</p>
                                            <!-- <a href="#">Apply</a> -->
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    

                    <div id="Finances" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Commerce_in_Law">Commerce in Law</option>
                        </select>  -->
                        
                        <div class="con">
                        <div class="card">
                                    <div class="box">
                                        <div class="content">
                                            <h2>02</h2>
                                            <h3>Finances</h3>
                                            <h5>University of South Africa</h5>
                                            <p>Higher Certificate <br>12 Months</p>
                                                <!-- <a href="#">Apply</a> -->
                                                
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>

                   

                    <div id="All" class="data">
                        <div class="con">

                                <div class="card">
                                    <div class="box">
                                        <div class="content">
                                            <h2>01</h2>
                                            <h3>Electrical Engneering</h3>
                                            <h5>Tshwane University of Technology</h5>
                                            <p>Higher Certificate <br>12 Months</p>
                                                <!-- <a href="#">Apply</a> -->
                                                
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="box">
                                        <div class="content">
                                            <h2>02</h2>
                                            <h3>Finances</h3>
                                            <h5>University of South Africa</h5>
                                            <p>Higher Certificate <br>12 Months</p>
                                                <!-- <a href="#">Apply</a> -->
                                                
                                        </div>
                                    </div>
                                </div>
  
                        </div>
                    </div>

                    <div id="commerce" class="data">
                        <div class="con">
                                <div class="card">
                                    <div class="box">
                                        <div class="content">
                                            <h2>02</h2>
                                            <h3>Finances</h3>
                                            <h5>University of South Africa</h5>
                                            <p>Higher Certificate <br>12 Months</p>
                                                <!-- <a href="#">Apply</a> -->
                                                
                                        </div>
                                    </div>
                                </div>

                                
                        </div>
                    </div>
                    

                    
                </div>
            </div>
        </form>
        <a href="../../include/aps.inc.php?id=<?php echo $student_id?>"><button type="submit" class="submit">Next</button></a>
    </div>

    <script src="../../js/jquery-1.12.0.min.js"></script>
    <script>

    $(document).ready(function(){
        $("#uni").on('change',function(){
            $(".camp").hide();
            $("#" + $(this).val()).fadeIn(700);
        }).change();
    });
    

    $(document).ready(function(){
        $("#eng").on('change',function(){
            $(".data").hide();
            $("#" + $(this).val()).fadeIn(700);
        }).change();
    });

    $(document).ready(function(){
        $("#fin").on('change',function(){
            $(".data").hide();
            $("#" + $(this).val()).fadeIn(700);
        }).change();
    });

    $(document).ready(function(){
        $("#wit").on('change',function(){
            $(".data").hide();
            $("#" + $(this).val()).fadeIn(700);
        }).change();
    });

    $(document).ready(function(){
        $("#up").on('change',function(){
            $(".data").hide();
            $("#" + $(this).val()).fadeIn(700);
        }).change();
    });

    $(document).ready(function(){
        $("#cp").on('change',function(){
            $(".data").hide();
            $("#" + $(this).val()).fadeIn(700);
        }).change();
    });
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
        header("Location: ../login/login.php?error=error");
    }
?>

