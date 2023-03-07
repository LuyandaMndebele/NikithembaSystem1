<!DOCTYPE html>
<html lang="en">
<head>

    <title>NikiThemba</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS spreadsheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- font Awesome -->
    <script src="https://kit.fontawesome.com/95759b587d.js" crossorigin="anonymous"></script>


</head>
<body>
    <!-- Header Title start -->

  <div class="header" id="topHeader">

<nav class="navbar navbar-expand-lg fixed-top">

  <div class="container text-uppercase p-2">

    <a class="navbar-brand font-weight-bold text-white" href="#"> <img class="logoImg" src="images/logo/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="trigram">☰</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto text-uppercase">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tutors">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#testimonails">Testimonails</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="header-section">
  <div class="center-div">
    <h1 class="font-weight-bold">NikiThemba</h1>
    <p>Your future is in your hands</p>
    <div class="header-buttons">
      <a href="login/login.php">Login</a>
      <a href="login/signup.php">Register</a>
    </div>
  </div>
</section>
</div>

<!-- Header Title end -->


<!-- About Us start-->

<section id="about" class="header-extradiv">
    <div class="container">
      <h1>About Us</h1>
      <div class="row">
        <div class="extra-div col-lg-4 col-md-4 col-12">
          <a href="#"><i class="far fa-question-circle fa-3x headicon"></i></a>

          <h2>WHY</h2>
          <p> Effective way to reserve/book space at TUT</p>
        </div>
        <div class="extra-div col-lg-4 col-md-4 col-12">
          <a href="#"><i class="far fa-building fa-3x headicon"></i></a>

          <h2>WHO</h2>
          <p>GITTS (Given IT and telecommunications Services) saw the need to develop
             Nikithemba system, to be a solution for learners in matric to have easy access
             to when applying at TUT.</p>
        </div>
        <div class="extra-div col-lg-4 col-md-4 col-12">
          <a href="#"><i class="far fa-calendar-check fa-3x headicon"></i></a>

          <h2>WHEN</h2>
          <p> Whenever you need to advance your education</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us end-->

  <!-- Team Start -->

  <section id="tutors">
    <h1>Our Team</h1>
    <div class="swiper-container">
      <div class="swiper-wrapper">
         
        <div class="swiper-slide">
          <div class="imgBx">
            <img src="images/profile/tut5.jpeg" alt="No Picture">
          </div>
          <div class="details">
            <h3>Nhlapo SG<br><span>slindilenhlapo97@gmail.com</span>
              <br><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></i></h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="imgBx">
            <img src="images/profile/tut4.jpeg" alt="No Picture">
          </div>
          <div class="details">
            <h3>Mndebele L<br><span>Mndebeleluyanda99@gmail.com</span>
              <br><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></i></h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="imgBx">
            <img src="images/profile/tut7.jpeg" alt="No Picture">
          </div>
          <div class="details">
            <h3>Khumalo AR<br><span>AyandaKhumalo188@yahoo.com</span>
              <br><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></i></h3>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>

    <div id="yesTutor" class="beTutor">
      <h2>Do You Want To Be Part?</h2>
      <a href="#">Apply</a>
    </div>
  </section>


  <!-- Team End -->


  <!-- Testimonials Start -->
  <section id="testimonails">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-center m-auto">
          <h1>Testimonials</h1>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item carousel-item active">
                <div class="img-box">
                  <img src="images/profile/tut5.jpeg" alt="">
                </div>
                <p class="testimonailText"><i class="fas fa-quote-left"></i>It's the best learning system, they make sure every child
                  understands what they are doing and they make sure you
                  pass end of the term/ year.<i class="fas fa-quote-right"></i></p>
                <p class="overview"><strong>Erykah Badu</strong> Grade 12</p>
              </div>

              <div class="item carousel-item">
                <div class="img-box">
                  <img src="images/profile/tut7.jpeg" alt="">
                </div>
                <p class="testimonailText"><i class="fas fa-quote-left"></i>It's the best learning system, they make sure every child
                  understands what they are doing and they make sure you
                  pass end of the term/ year.<i class="fas fa-quote-right"></i></p>
                <p class="overview"><strong>Jill Scott</strong> Grade 12</p>
              </div>

              <div class="item carousel-item">
                <div class="img-box">
                  <img src="images/profile/tut4.jpeg" alt="">
                </div>
                <p class="testimonailText"><i class="fas fa-quote-left"></i>It's the best learning system, they make sure every child
                  understands what they are doing and they make sure you
                  pass end of the term/ year.<i class="fas fa-quote-right"></i></p>
                <p class="overview"><strong>Micheal Jordan</strong> Grade 12</p>
              </div>

            </div>


            <a class="carousel-control-prev carousel-control left" href="#myCarousel" role="button" data-slide="prev">
              <i class="fa fa-angle-left"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next carousel-control right" href="#myCarousel" role="button" data-slide="next">
              <i class="fa fa-angle-right"></i>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials End -->


  
  <!-- Footer Start -->

  <footer>
    <div class="footer-top">
      <div class="container">

        <div class="row">
          <div class="col-md-3 col-sm-6 col-xm-12 segment-one md-mb-30 sm-mb-30">
            <h3>Features</h3>

          </div>
          <div class="col-md-3 col-sm-6 col-xm-12 segment-two md-mb-30 sm-mb-30">
            <h2>Subjects</h2>
            <ul>
              <li>English</li>
              <li>Math</li>
              <li>Math Lit</li>
              <li>Life Sciences</li>
              <li>Physical Sciences</li>
              <li>Accounting</li>
              <li>Economics</li>
              <li>EMS</li>
              <li>Tertiary</li>
            </ul>
          </div>

          <div class="col-md-3 col-sm-6 col-xm-12 segment-three sm-mb-30">
            <h2>Follow Us</h2>
            <p>Please Following us on our social media profile in order to keep updated.</p>
            <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" title="email"><i class="fas fa-envelope"></i></a>
          </div>

          <div class="col-md-3 col-sm-6 col-xm-12 segment-four sm-mb-30">
            <h2>Our Contacts</h2>
            <p>Email: gitts@gmail.com</p>
            <p>Contacts: 0728383122</p>
            <p>Address: Emalahleni, Mpumalanga, SA</p>
          </div>


        </div>
      </div>

    </div>
    <p class="footer-bottom-text">All Right reserved by &copy;Gitts 2022;<br> Another one by Ciroc</p>
  </footer>

  <!-- Footer End -->
<!-- Swiper JS -->
<script type="text/javascript" src="js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 500,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>