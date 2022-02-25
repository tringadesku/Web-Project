<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>LogIn/SignUp</title>
    <link rel="stylesheet" type="text/css" href="style/main.css" />
    

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
 
  </head>
  <body>

    <!--Banner-->

    <div class="banner">
      <p>NOW OFFERING FREE SHIPPING WORLDWIDE!</p>
    </div>

    <header>
      <div class="logo">
        <a href="index.php"><img src="img/funcases_logo.png" alt="our Logo" height="100%" /></a>
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

        <img id="bag" src="img/bag.png" alt="bag-icon" height="24px" />
        <div class="account">
          <img class="nav-link" src="img/avatar.png" alt="avatar-icon" height="24px"/>

          <p class="nav-link"><a id="active" href="login.php">Account</a></p>
        </div>
      </div>
    </header>

<main>
  <div class="logcontainer">
    <div class="img">
      <img src="img/loginpic.svg" height="400px"/>
    </div>

    <div class="login-content" id="log_in">
      <form class="form-login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <img src="img/girl.svg"/>
        <h2 class="title">Welcome!</h2>

        <!--Username/Password-->

        <div class="input-div">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Username</h5>
            <input type="text" id="username" name="username"class="input"/>
          </div>
        </div>
        <label for="username" id="usernameMsg"></label>

        <div class="input-div">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input type="password" id="password" class="input" name="password"/>
          </div>
        </div>
        <label for="password" id="passwordMsg"></label>

        <input type="submit" id="loginButton" class="lbtn" value="LOG IN" name="loginButton"/>
        
        <div class="signup-link">
          <b>Not a member yet? <a href="signup.php">Sign-Up now!</a></b>
        </div>

      </form>
      <?php include_once 'userController.php';?>
    </div>
  </div>
        <!--Register-->

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
    
        <?php include_once 'contactController.php';?>
        
        <div class="socialmedia">
         <a target="_blank" href="https://www.facebook.com/"><img src="img/facebook.png" alt="fb-logo"></a>
         <a  target="_blank" href="https://www.instagram.com/"><img src="img/instagram.png" alt="ig-logo"></a>
         <a target="_blank" href="https://www.twitter.com/"><img src="img/twitter.png" alt="twitter-logo"></a>
         <a target="_blank" href="https://www.pinterest.com/"><img src="img/pinterest.png" alt="pinterest-logo"></a>
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
    <script>
var loginButton = document.getElementById("loginButton");

var usernameMsg = document.getElementById("usernameMsg");
var passwordMsg = document.getElementById("passwordMsg");

var usernameRegex = /\w{5,14}/;
var passwordRegex = /^[A-Z]\w+[a-z]\d{3}/;

loginButton.addEventListener("click", function (event) {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (username == "" || username == null) {
    usernameMsg.innerText = "Please fill the username field!";
    event.preventDefault();
  } else {
    if (usernameRegex.test(username)) {
      usernameMsg.innerText = "";
    } else {
      usernameMsg.innerText =
        "Username must be between 5-15 characters!";
      event.preventDefault();
    }
  }

  if (password == "" || password == null) {
    passwordMsg.innerText = "Please fill the password field!";
    event.preventDefault();
  } else {
    if (passwordRegex.test(password)) {
      passwordMsg.innerText = "";
    } else {
      passwordMsg.innerText =
        "Password should start with a capital and end with 3 numbers!";
      event.preventDefault();
    }
  }
});
    </script>
    <script type="text/javascript" src="main2.js"></script>
  </body>
</html>
