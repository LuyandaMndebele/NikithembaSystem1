<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>

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
                        <h4>First&Last Name</h4>
                        <small>email@gmail.com</small>
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
                    <li>
                        <a href="sidebar_pages/applications.php">
                            <span class="las la-briefcase"></span>
                            <span>Pending Application</span>
                        </a>
                    </li>
                    <li>
                        <a href="sidebar_pages/app.php">
                            <span class="las la-user-graduate"></span>
                            <span>Application Aproved</span>
                        </a>
                    </li>

                    <li>
                        <a href="sidebar_pages/career.php">
                            <span class="las la-pencil-ruler"></span>
                            <span>Update News</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-card">
                <div class="side-card-icon">
                    <span class="las la-graduation-cap"></span>
                </div>
                
                
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
                    <h1>Admin</h1>
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
                            <h1>Online</h1>
                        </div>
                    </div>

                    <div class="board">
                        <div class="board-icon">
                            <span class="la la-eye"></span>
                        </div>
                        <div class="board-info">
                            <h4>Applications</h4>
                            <h1>0<small><span class="la la-arrow-down"></span></small> </h1>
                        </div>
                    </div>

                    <div class="board">
                        <div class="board-icon">
                            <span class="la la-eye"></span>
                        </div>
                        <div class="board-info">
                            <h4>Students</h4>
                            <h1>3<small></h1>
                        </div>
                    </div>

                    <div class="board">
                        <div class="board-icon">
                            <span class="la la-eye"></span>
                        </div>
                        <div class="board-info">
                            <h4>New Applicants</h4>
                            <h1>0<small><span class="la la-arrow-down"></span></small> </h1>
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
                                    <h3>First_Name Last_Name</h3>
                                    <h1> <small>NikiThemba Admin</small></h1>
                                </div>
                                <div class="rev-sum">
                                    <h4>Admin</h4>
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

        
    </script>
</body>
</html>
