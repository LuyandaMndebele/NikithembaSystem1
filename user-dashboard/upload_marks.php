<?php
  session_start();
?>
<?php
  if(isset($_SESSION['id'])) {
    $student_id = $_SESSION['id'];
    
    include '../include/dbh.inc.php';
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
    <title>Upload Marks</title>
    <link rel="stylesheet" href="../css/application.css">
</head>
<body>
    <?php
    if($subject_id == 0){
        include '../popup/uploadmarkspopup.php';
    };
    ?>
    <div class="app-div">
    
            
        
        <div class="title">Matric result</div>
        <div class="sub-title">Upload your results!</div>

        <?php
            if(isset($_GET['error'])){
                    if($_GET['error'] == "subject") {
                        echo '<script>alert("Upload all 7 subjects");</script>';
                    }elseif($_GET['error'] == "more") {
                        echo '<script>alert("Not more than 7 subjects");</script>';
                    }
            }
                    
        ?>
        <form action="../include/upload_mark.inc.php" method="post">
        <div class="fields">
            <div class="add-subject">
                <input type="hidden" name="uni" value="<?php echo $university; ?>">
                <input type="hidden" name="id" value="<?php echo $student_id; ?>">
                <!-- <input type="text" class="form-control m-2" id="subject" name="name" placeholder="Enter Subject Full Name"> -->
                <select name="name" id="subject">
                <option value="English_Home_Language">English_Home_Language</option>
                    <option value="Afrikaans_Home_Language">Afrikaans_Home_Language</option>
                    <option value="English_First_Additional_Language">English_First_Additional_Language</option>
                    <option value="Afrikaans_First_Additional_Language">Afrikaans_First_Additional_Language</option>
                    <option value="IsiZulu">IsiZulu</option>
                    <option value="Siswati">Siswati</option>
                    <option value="IsiXhosa">IsiXhosa</option>
                    <option value="Sesotho">Sesotho</option>
                    <option value="Setswana">Setswana</option>
                    <option value="South_Africa_Sign_Language">South_Africa_Sign_Language</option>
                    <option value="Agricultural_Management_Practices">Agricultural_Management_Practices</option>
                    <option value="Agricultural_Sciences">Agricultural_Sciences</option>
                    <option value="Agricultural_Technology">Agricultural_Technology</option>
                    <option value="Dance_Studies">Dance_Studies</option>
                    <option value="Design">Design</option>
                    <option value="Dramatic_Arts">Dramatic_Arts</option>
                    <option value="Music">Music</option>
                    <option value="Visual_Arts">Visual_Arts</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Mathematical_Literacy">Mathematical_Literacy</option>
                    <option value="Physical_Sciences">Physical_Sciences</option>
                    <option value="Life_Sciences">Life_Sciences</option>
                    <option value="Technical_Mathematics">Technical_Mathematics</option>
                    <option value="Technical_Sciences">Technical_Sciences</option>
                    <option value="Accounting">Accounting</option>
                    <option value="Business_Studies">Business_Studies</option>
                    <option value="Economics">Economics</option>
                    <option value="Geography">Geography</option>
                    <option value="History">History</option>
                    <option value="Tourism">Tourism</option>
                    <option value="Life_Orientations">Life_Orientations</option>
                    <option value="Religion_Studies">Religion_Studies</option>
                    <option value="Hospitality_Studies">Hospitality_Studies</option>
                    <option value="Consumer_Studies">Consumer_Studies</option>
                    <option value="Engineering_Graphics_Design">Engineering_Graphics_Design</option>
                    <option value="Computer_Application_Technology">Computer_Application_Technology</option>
                    <option value="Information_Technology">Information_Technology</option>
                    <option value="Civil_Technology">Civil_Technology</option>
                    <option value="Electrical_Technology">Electrical_Technology</option>
                    <option value="Mechanical_Technology">Mechanical_Technology</option>

                </select>
                <!-- <input type="number" class="form-control m-2" id="mark" name="mark" placeholder="Enter Mark"> -->
                <select name="mark" id="mark">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
                <button type="submit" class="btn">Add</button>
            </div>
        </div>

        </form>

        <table class="table">
            <thead>
                    <th>Num</th>
                    <th>Subject</th>
                    <th>Level</th>
                    <th>Action</th>
            </thead>
            <tbody>
                <?php include '../include/marktable.inc.php'?>
            </tbody>
        </table>
        


        <a href="../include/aps2.inc.php?id=<?php echo $student_id?>"><button type="submit" class="submit">Done</button></a>
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
        header("Location: ../login/login.php?error=error");
    }
?>
