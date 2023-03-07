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
            include '../../popup/degreepopup.php';
    ?> 

    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "quali") {
                echo '<script>alert("You forgot to select your qualification!")</script>';

            }
        }
                    
    ?>
    
    <div class="">
        
        <div class="title">Application</div>
        <div class="sub-title">Made easy! Choose your Degree!</div>
        <form action="../../include/applyf.inc.php" method="post">
            <div class="fields">
            <input type="hidden" name="student_id" value="<?php echo $_SESSION['id']?>">
            <input type="hidden" name="aps" value="<?php echo $aps?>">

                <div class="level">
                    <select name="level" class="department" required>
                        <option value="degree">Bachelor's Degree</option>
                    </select>    
                </div>
                <div class="university">
                    <select name="university" id="uni" class="department" required>
                        <option value="">Choose the university of your choice</option>
                        
                        <?php
                                if($subject == "Physical_Sciences") {       
                        ?>
                            <option value="Tshwane_University_of_Technology">Tshwane University of Technology - eMalahleni</option>
                            <option value="University_of_Pretoria">University of Pretoria</option>
                        <?php }?>
                        <option value="University_of_South_Africa">University of South Africa - Pretoria</option>
                        <option value="University_of_The_Witwatersrand">University of The Witwatersrand</option>
                        <option value="University_of_Cape_Town">University of Cape Town</option>
                    </select>    
                </div>

                <div class="campus">
                    <div id="Tshwane_University_of_Technology" class="camp">
                        <select name="fal[]" id="eng" class="department">
                            <option value="">Select Faculty</option>
                            <option value="Engineering">Engineering</option>
                        </select> 
                    </div>
                    
                    <div id="University_of_South_Africa" class="camp">
                        <select name="fal[]" id="fin" class="department">
                            <option value="">Select Faculty</option>
                            <?php
                                if($subject == "Physical_Sciences") {       
                            ?>
                                <option value="Human_Sciences">Human Sciences</option>
                                <option value="Law">Law</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Science_and_Technology">Science and Technology</option>
                            <?php }else{?>
                                <option value="Human_Sciences">Human Sciences</option>
                                <option value="Law">Law</option>
                            <?php } ?>
                        </select> 
                    </div>

                    <div id="University_of_The_Witwatersrand" class="camp">
                        <select name="fal[]" id="wit" class="department">
                            <option value="">Select Faculty</option>
                            <?php
                                if($subject == "Physical_Sciences") {       
                            ?>
                                <option value="WScience">Science</option>
                                <option value="WHealth_Sciences">Health Sciences</option>
                                <option value="WHumanities">Humanities</option>
                            <?php }else{?>
                                <option value="WHumanities">Humanities</option>  
                            <?php } ?>
                        </select> 
                    </div>

                    <div id="University_of_Pretoria" class="camp">
                        <select name="fal[]" id="up" class="department">
                            <option value="">Select Faculty</option>
                            <option value="UPEngineering">Engineering</option>
                            <option value="Medicine">Medicine</option>
                        </select> 
                    </div>

                    <div id="University_of_Cape_Town" class="camp">
                        <select name="fal[]" id="cp" class="department">
                            <?php
                                if($subject == "Physical_Sciences") {       
                            ?>
                                <option value="WScience">Science</option>
                                <option value="WHealth_Sciences">Health Sciences</option>
                                <option value="WHumanities">Humanities</option>
                            <?php }else{?>
                                <option value="WHumanities">Humanities</option>  
                            <?php } ?>       
                        </select> 
                    </div>  
                    
                </div>

                <div class="quali">

                    <div id="WScience" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Computer_Science">Computer Science</option>
                            <option value="Physics">Physics</option>
                            <option value="Actuarial_Science">Actuarial Science</option>
                            <option value="Environmental_Science">Environmental Science</option>
                        </select>  -->

                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Computer_Science</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Computer_Science"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>Actuarial_Science</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Actuarial_Science"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>03</h2>
                                        <h3>Environmental_Science</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Environmental_Science"> Select
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="WHealth_Sciences" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Clinical_Medicine">Clinical Medicine</option>
                            <option value="Pathology">Pathology</option>
                            <option value="Physiology">Physiology</option>
                            <option value="Therapeautic_Sciences">Therapeautic Sciences</option>
                            <option value="Anatomical_Science">Anatomical Science</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Clinical_Medicine</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Clinical_Medicine"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>Physiology</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Physiology"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>03</h2>
                                        <h3>Anatomical_Science</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Anatomical_Science"> Select
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Engineering" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Electrical_Engineering">Electrical Engineering</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Electrical Engneering</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Electrical_Engineering"> Select
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="ICT" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Computer_Science">Computer Science</option>
                            <option value="Information_Technology">Information Technology</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Computer Science</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Computer_Science"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>Information Technology</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Information_Technology"> Select
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="Humanities" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="School_of_Education">School of Education</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>School of Education</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="School_of_Education"> Select
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                    <div id="Management_Science" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Business_and_Information_Management_Services">Business and Information Management Services</option>
                            <option value="Management_and_Intrepreneurship">Management and Intrepreneurship</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Supply_Chain_and_Sport_Management">Supply Chain and Sport Management</option>
                            <option value="People_Management_and_Development">People Management and Development</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Management_and_Intrepreneurship</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Management_and_Intrepreneurship"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>Marketing</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Marketing"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>03</h2>
                                        <h3>Management_and_Development</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Management_and_Development"> Select
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="Human_Sciences" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Creative_Writing">Creative Writing</option>
                            <option value="International_Relations">International Relations</option>
                            <option value="Political_Leadership">Political Leadership</option>
                            <option value="Politics_and_Economics">Politics and Economics</option>
                            <option value="Music">Music</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Creative_Writing</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Creative_Writing"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>International_Relations</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="International_Relations"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>03</h2>
                                        <h3>Politics_and_Economi</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Politics_and_Economi"> Select
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Law" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Commerce_in_Law">Commerce in Law</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Commerce_in_law</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Commerce_in_Law"> Select
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                    <div id="Agriculture" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Environmental_Science">Environmental Science</option>
                            <option value="Biochemistry_and_Zoology">Biochemistry and Zoology</option>
                            <option value="Science_Food">Science Food</option>
                            <option value="Science_Fashion">Science Fashion</option>
                            <option value="Hospitality_Management">Hospitality Management</option>
                            <option value="Ornamental_Herticulture">Ornamental Herticulture</option>
                        </select>  -->

                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Environmental Science</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Environmental_Science"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>Biochemistry and Zoology</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Biochemistry_and_Zoology"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>03</h2>
                                        <h3>Science Food</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Science_Food"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>04</h2>
                                        <h3>Science Fashion</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Science_Fashion"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>05</h2>
                                        <h3>Hospitality Management</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Hospitality_Management"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>06</h2>
                                        <h3>Ornamental Herticulture</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Ornamental_Herticulture"> Select
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Science_and_Technology" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Civil_Engineering">Civil Engineering</option>
                            <option value="Chemical_Engineering">Chemical Engineering</option>
                            <option value="Industrial_Engineering">Industrial Engineering</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Civil Engineering</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Civil_Engineering"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>Chemical Engineering</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Chemical_Engineering"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>03</h2>
                                        <h3>Industrial Engineering</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Industrial_Engineering"> Select
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="WHumanities" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Arts">Arts</option>
                            <option value="Education">Education</option>
                            <option value="Social_Sciences">Social Sciences</option>
                            <option value="Human_and_Community_Development">Human and Community Development</option>
                            <option value="Literature_Language_and_Media">Literature, Language and Media</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Education</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Education"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>Social Sciences</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Social_Sciences"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>03</h2>
                                        <h3>Arts</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Arts"> Select
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="UPEngineering" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Computer_Engineering">Computer Engineering</option>
                            <option value="Chemical_Engineering">Chemical Engineering</option>
                            <option value="Industrail_Engineering">Industrail Engineering</option>
                            <option value="Mining_Engineering">Mining Engineering</option>
                            <option value="Aeromautical_Engineering">Aeromautical Engineering</option>
                            <option value="Civil_Engineering">Civil Engineering</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Civil Engineering</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Civil_Engineering"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>Chemical Engineering</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Chemical_Engineering"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>03</h2>
                                        <h3>Computer Engineering</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Computer_Engineering"> Select
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Medicine" class="data">
                        <!-- <select name="quali[]" id="" class="department">
                            <option value="">Choose qualification</option>
                            <option value="Doctor_of_Medicine">Doctor of Medicine</option>
                            <option value="MParm_Med">MParm Med</option>
                            <option value="Doctor_of_Philosophy">Doctor of Philosophy</option>
                            <option value="MPhil">MPhil(Pain Management)</option>
                            <option value="BSport_Science">BSport Science</option>
                        </select>  -->
                        <p>Select Your qualification</p>
                        <div class="con">
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>01</h2>
                                        <h3>Doctor_of_Medicine</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Doctor_of_Medicine"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>02</h2>
                                        <h3>Doctor_of_Philosophy</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="Doctor_of_Philosophy"> Select
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <div class="content">
                                        <h2>03</h2>
                                        <h3>BSport_Science</h3>
                                        <p>Bachelor's Degree <br>4 years</p>
                                            <!-- <a href="#">Apply</a> -->
                                            <input class="radio" type="radio" name="quali[]" value="BSport_Science"> Select
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <button type="submit" class="submit" name="apply-submit">Submit</button>
            </div>
        </form>
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

