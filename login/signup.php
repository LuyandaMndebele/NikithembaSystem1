<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>


<div class="container">
    <div class="title">REGISTRATION</div>
    <form action="../include/signup.inc.php" method="post">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" name="name" required placeholder="Full Name">
            </div>
            <div class="input-box">
                <span class="details">Last Name</span>
                <input type="text" name="surname" required placeholder="Last Name">
            </div>
            <div class="input-box">
                <span class="details">Identity Number</span>
                <input type="text" name="idnumber" required placeholder="Identity Number">
            </div>
            
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="email" required placeholder="Email">
            </div>
            <div class="input-box">
                <span class="details">Phone</span>
                <input type="text" name="contact" required placeholder="Phone">
            </div>
            <div class="input-box">
                <span class="details">Street</span>
                <input type="text" name="street" required placeholder="Street">
            </div>
            <div class="input-box">
                <span class="details">City</span>
                <input type="text" name="city" required placeholder="City">
            </div>
            <div class="input-box">
                <span class="details">Zip</span>
                <input type="text" name="zip" required placeholder="Zip">
            </div>
                
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <div class="input-box">
                    <span class="details">Repeat Password</span>
                    <input type="password" name="cpassword" required placeholder="Repeat Password">
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" value="male" name="gender" id="dot-1">
                <input type="radio" value="female" name="gender" id="dot-2">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                </div>
            <button class="button" name="signup-submit" type="submit">REGISTER</button>
        </div>
    </form>
    <p class="ss">Registered ? <a href="login.php">LOGIN</a></p>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../js/bootstrap.js" ></script>
    <script src="../js/main.js" ></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>