<?php
  session_start();
?>
<?php
  if(isset($_SESSION['id'])) {

    include '../include/dbh.inc.php';
    $app_id = 0;
    $aps = 0;
    $quali = "Qualification";
    $status = "none";
    $campus = "none";
    $level = "none";
    $uni = "University";
    $student_id = $_SESSION['id'];
    $sql = "SELECT * FROM application WHERE student_id = $student_id";
    $result = mysqli_query($conn,$sql);
    $app = mysqli_fetch_all($result,MYSQLI_ASSOC);
   

    $student_id = $_SESSION['id']; 
    $fname = $_SESSION['name'];
    $lname = $_SESSION['surname'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['contact'];
    $idnum = $_SESSION['idnumber'];
    $gender = $_SESSION['gender'];

?>
<?php foreach($app as $data):?>
                        
<?php $app_id = $data['app_id'];
      $level = $data['level'];
      $quali = $data['qualification'];
      $status = $data['status'];
      $campus = $data['campus'];
      $aps = $data['aps'];
      $uni = $data['university'];
 
?>
                
<?php endforeach ;?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
<?php if($app_id >= 1){ ?>
            <!--  -->
<?php }else{ ?>
    <?php
            include '../popup/dbpopup.php';
        ?>
<?php } ?>

<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == "exist") {
            echo '<script>alert("Application already exist or cancel to start over!");</script>';
        }elseif($_GET['error'] == "low"){
            echo '<script>alert("Your APS score is very low... Try Upgrading or College! Sorry!");</script>';
        }
    }elseif(isset($_GET['success'])){
        if($_GET['success'] == "application") {
            echo '<script>alert("To complete your application. View the link sent in your email!");</script>';
        }
    }
                    
?>
    <input type="checkbox" name="" id="menu-toggle">
    <div class="overlay">
        <label for="menu-toggle"></label>
    </div>

    <div class="sidebar">
        <div class="sidebar-container">
            <div class="brand">
                <h3>
                    <span class="las la-school"></span>
                    NiKiTHEMBA
                </h3>
            </div>

            <div class="sidebar-avartar">
                <div>
                    <img src="../images/icon.png" alt="">
                </div>
                <div class="avartar-info">
                    <div class="avartar-text">
                        <h4><?php echo $fname.' '.$lname?></h4>
                        <small><?php echo $phone?></small>
                    </div>
                    <span class="las la-angle-double-down"></span>
                </div>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="" class="active">
                            <span class="las la-chalkboard-teacher"></span>
                            <span>DashBoard</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="sidebar_pages/document.php">
                            <span class="las la-briefcase"></span>
                            <span>Documents</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="sidebar_pages/app.php">
                            <span class="las la-user-graduate"></span>
                            <span>Application</span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="sidebar_pages/paymentmethod.php">
                            <span class="las la-hand-holding-heart"></span>
                            <span>Make Payment</span>
                        </a>
                    </li> -->

                    <!-- <li>
                        <a href="sidebar_pages/career.php">
                            <span class="las la-pencil-ruler"></span>
                            <span>Careers</span>
                        </a>
                    </li> -->
                </ul>
            </div>

            <div class="sidebar-card">
                <div class="side-card-icon">
                    <span class="las la-graduation-cap"></span>
                </div>
                <!-- <img src="../images/logo/logo.png" alt=""> -->
                <?php if($app_id >= 1){ ?>
                    <h4>Cancel application?</h4>
                    <p>Click the below button</p>
                    <a href="../popup/cancelpopup.php"><button class="btn btn-main-cancel btn-block">Cancel</button></a>
                <?php }else{ ?>
                <div>
                    <h4>Apply Now!</h4>
                    <p>Apply soon as possible</p>
                    <a href="upload_marks.php"><button class="btn btn-main btn-block">Apply</button></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-title-wrapper">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                <div class="header-title">
                    <h1>Student</h1>
                    <p>Dashboard information <span class="las-chart-line"></span></p>
                </div>
            </div>
            <div class="header-action">
                <form action="../include/logout.inc.php" method="post">
                    <button class="btn btn-main">
                        <span class="las la-power-off"></span>
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <main>

            <section>
                <h3 class="section-head">Overview</h3>
                <div class="dashboard">
                    <div class="board">
                        <div class="board-icon">
                            <span class="la la-eye"></span>
                        </div>
                        <div class="board-info">
                            <h4>Status</h4>
                            <h1><?php echo $status?></h1>
                        </div>
                    </div>

                    <div class="board">
                        <div class="board-icon">
                            <span class="la la-eye"></span>
                        </div>
                        <div class="board-info">
                            <h4>APS Score</h4>
                            <h1><?php echo $aps?><small><span class="la la-arrow-down"></span></small> </h1>
                        </div>
                    </div>

                    <div class="board">
                        <div class="board-icon">
                            <span class="la la-eye"></span>
                        </div>
                        <div class="board-info">
                            <h4>Q Level</h4>
                            <h1><?php echo $level?><small></h1>
                        </div>
                    </div>

                    <div class="board">
                        <div class="board-icon">
                            <span class="la la-eye"></span>
                        </div>
                        <div class="board-info">
                            <h4>Campus</h4>
                            <h1><?php echo $campus?><small><span class="la la-arrow-down"></span></small> </h1>
                        </div>
                    </div>

                </div>
            </section>

            <section>
                <div class="block-grid">

                    <div class="revenue-card">
                        <h3 class="section-head">Profile</h3>
                        <div class="rev-content">
                            <img src="../images/icon.png" alt="">
                                <div class="rev-info">
                                    <h3><?php echo $fname.' '.$lname?></h3>
                                    <h1> <small><?php echo $quali?></small></h1>
                                </div>
                                <div class="rev-sum">
                                    <h4><?php echo $uni?></h4>
                                    <h2></h2>
                                </div>
                        </div>
                    </div>

                    <div class="graph-card">
                        <h3 class="section-head">Application Graph</h3>
                        <div class="graph-content">
                            <div class="graph-head">
                                <div class="icons-wrapper">
                                    <div class="icon">
                                        <span class="las la-eye text-main"></span>
                                    </div>
                                    <div class="icon">
                                        <span class="las la-clock text-success"></span>
                                    </div>
                                </div>
                                <div class="graph-select">
                                    <select name="" id="">
                                        <option value="">January</option>
                                    </select>
                                </div>
                            </div>
                            <div class="graph-board">
                                <canvas id="revenueChart" width="100%" height="51px"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
                
        </main>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
    <script>
        let ctx = document.querySelector("#revenueChart");


        let revChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: ["Sept 1", "Sept 1", "Sept 1", "Sept 1", "Sept 1", "Sept 1",
                "Sept 1", "Sept 1", "Sept 1", "Sept 1", "Sept 1"],
                datasets: [
                    {
                        label: "Application Successful",
                        borderColor: "green",
                        borderWidth: "3",
                        backgroundColor: "rgba(235, 247, 245, 0.7)",
                        data: [0,30,60,25,60,25,50,10,50,90,120]
                    },
                    {
                        label: "Application Unsuccessful",
                        borderColor: "red",
                        borderWidth: "3",
                        backgroundColor: "rgba(235, 247, 245, 0.7)",
                        data: [0,60,25,100,20,75,30,55,20,60,20]
                    }
                ]
            },
            options: {
                responsive:true,
                tooltips: {
                    intersect: false,
                    node: "index",
                }
            }
        });

        var numOfLog = -1;

        if(numOfLog >= 1){

        }else{
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
        }
    </script>
</body>
</html>
<?php
    }else {
        header("Location: ../login/login.php?error=error");
    }
?>