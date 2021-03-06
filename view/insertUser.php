<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>LogIn/SignUp</title>
    <link rel="stylesheet" type="text/css" href="../style/main.css" />
 
  </head>
  <body>

    <!--Banner-->

    <div class="banner">
      <p>NOW OFFERING FREE SHIPPING WORLDWIDE!</p>
    </div>

    <header>
      <div class="logo">
        <a href="index.php"><img src="../img/funcases_logo.png" alt="our Logo" height="100%" /></a>
      </div>

    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
      <!--Nav Bar-->

      <div class="navigation">
        <p class="nav-link"><a href="index.php#aboutus">About Us</a></p>
        <p class="nav-link"><a href="shopall.php">Shop All</a></p>
        <div class="dropdown">
          <p class="nav-link"><a href="#">Collections</a></p>
          <div class="dropdown-content">
            <p><a href="animalprints.php">Animal Prints</a></p>
            <p><a href="sailormoon.php">Sailor Moon</a></p>
            <p><a id="active" href="fruits.php">Fruits</a></p>
          </div>
        </div>

        <img id="bag" src="../img/bag.png" alt="bag-icon" height="24px" />

      <div class="account">
        <img class="nav-link" src="../img/avatar.png" alt="avatar-icon" height="24px">

        <?php if(isset($_SESSION['username'])){
          echo "<p class='nav-link'><a href='profile.php'>".$_SESSION['username']." Profile</a></p>";
        }
        else{
          echo "<p class='nav-link'><a href='login.php' target='_blank'>Account</a></p>";
        }
          ?>    
      </div>
      </div>
    </header>


    <main>
      <div class="signupcontainer">
        <form class="signupform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

          <h2>INSERT USER: </h2>

          <h5>First Name:</h5>
          <input type="text" id="fname" name="fname"> <br>
          <label id="fnameMsg" for="fname"></label><br>
          <h5>Last Name:</h5>
          <input type="text" id="lname" name="lname"><br>
          <label id="lnameMsg" for="lname"></label><br>
          <h5>Username:</h5>
          <input type="text" id="username" name="username"><br>
          <label id="usernameMsg" for="username"></label><br>
          <h5>E-mail:</h5>
          <input type="text" id="email" name="email"><br>
          <label id="emailMsg" for="email"></label><br>
          <h5>Password:</h5>
          <input type="password" id="password" name="password"><br>
          <label id="passwordMsg" for="password"></label><br>

          <input type="submit" class="lbtn" id="register" name="registerButton" value="INSERT">

        </form>
        <?php include_once '../controllers/userController.php';?>

      </div>

    </main>

    <footer>
      <div class="footer-top">  
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <h2>Contact Us</h3>
        <textarea rows="5" cols="50" name="message">Type your message here</textarea>
        <label>E-mail:</label>
        <div class="contact-submit">
          <input type="email" name="contactEmail">
          <input class="contactButton" type="submit" name="contactButton" value="SEND">
        </div>
      </form>
      
      <?php include_once '../controllers/contactController.php';?>
      
      <div class="socialmedia">
         <a target="_blank" href="https://www.facebook.com/"><img src="../img/facebook.png" alt="fb-logo"></a>
         <a  target="_blank" href="https://www.instagram.com/"><img src="../img/instagram.png" alt="ig-logo"></a>
         <a target="_blank" href="https://www.twitter.com/"><img src="../img/twitter.png" alt="twitter-logo"></a>
         <a target="_blank" href="https://www.pinterest.com/"><img src="../img/pinterest.png" alt="pinterest-logo"></a>
      </div>
      </div>
  
      <div class="footer-bottom"> 
        <p>&copy; 2021, Fun Cases. All rights reserved.</p>
        <p><a href="#">Privacy Policy</a> &bull;
          <a href="#">Terms & Conditions</a> &bull;
          <a href="#">FAQs</a>
        </p>
      </div>
    </main>
      
    </footer>
    <script type="text/javascript">
        var fnameRegex = /^[A-Z][a-z]{1,}/;
        var lnameRegex = /^[A-Z][a-z]{1,}/;
        var usernameRegex = /\w{5,14}/;
        var emailRegex = /[a-z]\w+@[a-z]+[-]?[a-z]\.[a-z]{2,3}/;
        var passwordRegex =/^[A-Z]\w+[a-z]\d{3}/;



        var registerButton = document.getElementById("register");
        var fnameMsg = document.getElementById("fnameMsg");
        var lnameMsg = document.getElementById("lnameMsg");
        var usernameMsg = document.getElementById("usernameMsg");
        var emailMsg = document.getElementById("emailMsg");
        var passwordMsg = document.getElementById("passwordMsg");


        registerButton.addEventListener("click",function(event){

            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;


            if (fname == ""){
                fnameMsg.innerText = "Fill First Name!"
                    event.preventDefault();
             }

             else {
                 if(fnameRegex.test(fname)){
                      
                     fnameMsg.innerText= "";

                 }
                 else {
                    fnameMsg.innerText = "Name should start with a capital!"
                    event.preventDefault();
                 }
             }

             if (lname == ""){
                lnameMsg.innerText = "Fill Last Name!"
                    event.preventDefault();
             }

             else {
                 if(lnameRegex.test(lname)){
                     lnameMsg.innerText= "";

                 }
                 else {
                    lnameMsg.innerText = "Last Name should start with a capital! "
                    event.preventDefault();
                 }
             }

             if (username == ""){
                usernameMsg.innerText = "Fill Username!"
                    event.preventDefault();
             }

             else {
                 if(usernameRegex.test(username)){
                    usernameMsg.innerText= "";
                 }
                 else {
                    usernameMsg.innerText = "Username must be between 5-15 characters!"
                    event.preventDefault();
                 }
             }
             if (email == ""){
                emailMsg.innerText = "Fill E-mail!"
                    event.preventDefault();
             }

             else {
                 if(emailRegex.test(email)){
                     emailMsg.innerText= "";

                 }
                 else {
                    emailMsg.innerText = "Email must be standard!"
                    event.preventDefault();
                 }
             }

             if (password == ""){
                passwordMsg.innerText = "Fill Password!"
                    event.preventDefault();
             }

             else {
                 if(passwordRegex.test(password)){
                      
                     passwordMsg.innerText= "";

                 }
                 else {
                    passwordMsg.innerText = "Password should start with a capital and end with 3 numbers!"
                    event.preventDefault();
                 }
             }

        });
    </script>  

    <script type="text/javascript" src="../style/main2.js"></script>
  </body>
</html>
