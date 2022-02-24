<?php
  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Fruits</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
	<div class="banner">
		<p>NOW OFFERING FREE SHIPPING WORLDWIDE!</p>
	</div>

	<header>
		<div class="logo">
			<a href="index.php"><img src="img/funcases_logo.png" alt="our_logo" height="100%"></a>
		</div>

    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>

		<div class="navigation">
        <p class="nav-link"><a href="index.html#aboutus">About Us</a></p>
        <p class="nav-link"><a href="shopall.php">Shop All</a></p>
        <div class="dropdown">
          <p class="nav-link"><a href="#">Collections</a></p>
          <div class="dropdown-content">
            <p><a href="animalprints.php">Animal Prints</a></p>
            <p><a href="sailormoon.php">Sailor Moon</a></p>
            <p><a id="active" href="fruits.php">Fruits</a></p>
          </div>
        </div>

			<img id="bag" src="img/bag.png" alt="bag-icon" height="24px">

			<div class="account">
				<img class="nav-link" src="img/avatar.png" alt="avatar-icon" height="24px">


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

	      <div class="container">
            <?php 
             include_once 'productsRepo.php';
             $productsRepository = new productsRepo();

             $collection = "fruits";

             $products = $productsRepository->getProductsByCollection($collection);

             foreach($products as $product){
                echo 
                "<div class='product-box'>
                <a href='#'><img src='img/$product[ProductName].jpg'>
                <div class='product-text'>
                <p>$product[ProductText]</p>
                <p class='price'>$$product[Price]</p>
                </div></a>
                <button>ADD TO BAG</button>
                </div>";
             }?>
    </div>  
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
    
  </footer>

  <script type="text/javascript" src="main2.js"></script>
</body>
</html>