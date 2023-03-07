<?php
  session_start();
?>
<?php
  if(isset($_SESSION['id'])) {
    $student_id = $_SESSION['id'];
    
    include '../../include/dbh.inc.php';
    $subject_id = 0;

    $student_id = $_SESSION['id'];

    $sql = "SELECT student_id FROM subject WHERE student_id = $student_id";
    $result = mysqli_query($conn,$sql);
    $app = mysqli_fetch_all($result,MYSQLI_ASSOC);


?>
<?php foreach($app as $data):?>
                        
    <?php 
        $subject_id = $data['student_id'];
                                               
    ?>
                                        
<?php endforeach ;?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <link rel="stylesheet" href="">
</head>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }
    body{
        display:flex;
        justify-content: center;
        align-items: center;
        background: #ebf5fc;
    }

    .head{
        position:relative;
        justify-content:center;
        align-items:center;
        margin: 20px;
    }

    .con{
        justify-content:center;
        align-items:center;
    }

    .con .card{
        display:inline-block;
        position:relative;
        width: 280px;
        height: 200px;
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

    
    <div class="con">
        <div class="head">
            <h2>Tshwane University of Technology</h2>
        </div>
        <br>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3>Computer Science</h3>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>02</h2>
                    <h3>Information Technology</h3>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>03</h2>
                    <h3>Electrical Engneering</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                    <p>Higher Certificate: 12 Months</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>04</h2>
                    <h3>School of Education</h3>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>05</h2>
                    <h3>Marketing</h3>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>06</h2>
                    <h3>Management and Development</h3>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div> 



        <div class="head">
            <h2>University of The Witwatersrand</h2>
        </div>
        <br>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3>Actuarial Science</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>02</h2>
                    <h3>Environmental Science</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>03</h2>
                    <h3>Clinical Medicine</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>04</h2>
                    <h3>Social Sciences</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>05</h2>
                    <h3>Education</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>06</h2>
                    <h3>Arts</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>  
        
        

        <div class="head">
            <h2>University of South Africa</h2>
        </div>
        <br>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3>Civil Engineering</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>02</h2>
                    <h3>Commerce in Law</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>03</h2>
                    <h3>Accounting</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                    <p>Higher Certificate: 12 Months</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>04</h2>
                    <h3>Political Leadership</h3>
                    <p>National Diploma <br>3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>05</h2>
                    <h3>Politics and Economics</h3>
                    <p>National Diploma <br>3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>06</h2>
                    <h3>Chemical Engineering</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma <br>3 years</p>
                </div>
            </div>
        </div> 


        <div class="head">
            <h2>University of Pretoria</h2>
        </div>
        <br>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3>Doctor of Medicine</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>02</h2>
                    <h3>Doctor of Philosophy</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>03</h2>
                    <h3>Computer Engneering</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>04</h2>
                    <h3>Civil Engieering</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma <br>3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>05</h2>
                    <h3>Chemical Engineering</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div> 

        <div class="head">
            <h2>University of Cape Town</h2>
        </div>
        <br>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3>Actuarial Science</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>02</h2>
                    <h3>Environmental Science</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>03</h2>
                    <h3>Clinical Medicine</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>04</h2>
                    <h3>Social Sciences</h3>
                    <p>Bachelor's Degree: 4 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>05</h2>
                    <h3>Education</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>06</h2>
                    <h3>Arts</h3>
                    <p>Bachelor's Degree: 4 years</p>
                    <p>National Diploma: 3 years</p>
                </div>
            </div>
        </div> 


        <div class="head">
            <a href="../../include/aps.inc.php?id=<?php echo $student_id?>"><button type="submit" class="submit">Done</button></a>
        </div>
    </div>
 
    

   
</body>
</html>
<?php
    }else {
        header("Location: ../../login/login.php?error=error");
    }
?>