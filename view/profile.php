<?php
	$hide="";
	session_start();
	if(!isset($_SESSION['username'])){
	  header("location:login.php");
	}else{
		if($_SESSION["role"] == "admin"){
	    	 $hide = "";
	    }else{
	    $hide = "hide";
		}
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../style/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .hide{
            display:none;
        }

    </style>
</head>
<body>
	<div class="banner">
		<p>NOW OFFERING FREE SHIPPING WORLDWIDE!</p>
	</div>

	<header>
		<div class="logo">
			<a href="index.php">
				<img src="../img/funcases_logo.png" alt="logo" height="100%">
			</a>
		</div>

		<a href="#" class="toggle-button">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</a>


	  <div class="navigation">
        <p class="nav-link"><a href="index.php#aboutus">About Us</a></p>
        <p class="nav-link"><a href="shopall.php">Shop All</a></p>
        <div class="dropdown">
          <p class="nav-link"><a id="coll" href="#collection">Collections</a></p>
          <div class="dropdown-content">
            <p><a href="animalprints.php">Animal Prints</a></p>
            <p><a href="sailormoon.php">Sailor Moon</a></p>
            <p><a href="fruits.php">Fruits</a></p>
          </div>
        </div>
			<img id="bag" src="../img/bag.png" alt="bag-icon" height="24px">

			<div class="account">
				<img class="nav-link" src="../img/avatar.png" alt="avatar-icon" height="24px">

				<p class="nav-link"><a href="profile.php"><?php echo $_SESSION['username'];?> Profile</a></p>				
			</div>

		</div>
	</header>

	<main>
		<h1 class='profileText'>Welcome back, <?php echo $_SESSION['username'];?>!</h1>
		<?php 

			include_once '../repository/usersRepo.php';
		    $userRepository = new usersRepo();

		    $user = $userRepository->getUserByUsername($_SESSION['username']);

			echo "<h4 class='profileText'>Emri: $user[Emri]</h4>
				  <h4 class='profileText'>Mbiemri: $user[Mbiemri]</h4>
				  <h4 class='profileText'>Email: $user[Email]</h4>";
		?>
		
		<div>
		<a href="manageUsers.php" class="<?php echo $hide ?>" style="text-decoration: none;">
			<input class="profileButton" type="button" name="logoutButton" value="Manage Users">
		</a> <br> <br>
		<a href="readMessages.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="profileButton" type="button" name="logoutButton" value="Read Messages">
		</a> <br> <br>
		<a href="manageProducts.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="profileButton" type="button" name="logoutButton" value="Manage Products">
		</a> <br> <br>
		<a href="activityLog.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="profileButton" type="button" name="logoutButton" value="Activity Log">
		</a> <br> <br>
		<a href="logout.php" style="text-decoration: none;">
			<input class="profileButton" type="button" name="logoutButton" value="LOG OUT">
		</a>
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
		
	</footer>
	<script type="text/javascript" src="../style/main2.js"></script>
</body>
</html>

