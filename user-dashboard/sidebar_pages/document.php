<?php
  session_start();
?>
<?php
  if(isset($_SESSION['id'])) {
    include '../../include/dbh.inc.php';
    $student_id = $_SESSION['id'];
    $sql = "SELECT * FROM documents WHERE student_id = $student_id";
    $result = mysqli_query($conn,$sql);
    $files = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <link rel="stylesheet" href="../../css/application.css">
</head>
<body>
    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "format") {
                                echo "<script>alert('Your file must a .png, .pdf or .jpeg')</script>";
                            }else if($_GET['error'] == "size"){

                                echo "<script>alert('File is too large')</script>";

                            }else if($_GET['error'] == "file"){

                                echo "<script>alert('failed to upload file')</script>";

                            }
                        }
                    
    ?>
    <div class="app-div">
        <a href="../index.php">
            <h1 class="cross">X</h1>
        </a>
        <div class="title">Documents</div>
        <div class="sub-title">Upload Certified Copies! Must not be 3 Months old!</div>
        <form action="../../documents-upload/document.inc.php" method="post" enctype="multipart/form-data">
            <div class="fields">
                <div class="document">
                    <div class="doc">
                        <label>Matric Certificate And ID Copy/Other Documents:</label>
                        <input type="file" name="myfile">
                        <input type="hidden" name="student_id" value="<?php echo $_SESSION['id']?>">
                    </div>
                    <div class="doc">
                        <button type="submit" name="submit">Upload</button>
                    </div>
                
                </div>

            </div>
        </form>

        <div class="row">
            <table>
                <thead>
                    
                    <th>FileName</th>
                    <th>Size (in mb)</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php foreach($files as $file):?>
                        
                    <tr>
                        <td><?php echo $file['name'];?></td>
                        <td><?php echo $file['size'];?></td>
                        <td><a class="btn" href="../../include/deletefile.inc.php?file_id=<?php echo $file['id']?>">Delete</a></td>
                    </tr>

                    <?php endforeach ; ?>
                </tbody>
            </table>
        </div>


        
    </div>
 
</body>
</html>
<?php
    }else {
        header("Location: ../../login/login.php?error=error");
    }
?>