<?php
	session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fun Cases</title>
	<link rel="stylesheet" type="text/css" href="../style/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
        <p class="nav-link"><a href="#aboutus">About Us</a></p>
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
		<div class="slider" id="slidee">
			<h1>New Collection "Animal Prints"</h1>
			<h1 id="sliderheading">New Collection<br>"Animal Prints"</h1>

			<p> 6 New Designs,<br/>
				Coming with an assortment of colors and patterns.<br/>
			</p>
		
			<a href="animalprints.php"><button>SHOP NOW</button></a>
		</div>

		<h2 class="coll-h" id="collection">Shop By Collection</h2>

		<div class="collections">

			<?php
			 include_once '../repository/collectionBoxRepo.php';
             $collectionBoxRepository = new collectionBoxRepo();

             $collectionBoxes = $collectionBoxRepository->getAllBoxes();

             foreach($collectionBoxes as $collectionBox){
			 	echo "<div class='box'>
					<a href='$collectionBox[collectionName].php'>
						<img src='../img/$collectionBox[collectionName].jpg'>
						<button>$collectionBox[collectionText]</button></a>
					</div>";
		    	}
			?>
			</div>


		<div class="about" id="aboutus">
			<div class="about-text">
				<h1>About Us</h1>
				<q>Style is a way to say who you are without having to speak.</q>
            <pre class="pre1">
              ...and that is exactly what WE always try to offer. Nothing can
              represent our company better than these words, since our main
              goal, ever since our small begginings, has been to create
              something unique and out-of-the box, a small piece in the size of
              your pocket that you can use everyday, an accessory that inspires
              and forms a connection with you! The idea was first born in the
              summer of 2016, in an ordinnary coffee shop, where 2 friends
              suddenly had a vision: To spread Creativity and Happiness by
              turning a boring everyday essential into a chic and sophisticated
              product! It has definitely been a long way since that time and
              through dedication, those 2 friends were finally able to complete
              their dream and now we are here to present to the world the
              ULTIMATE PHONE CASES - a variety of specially designed and
              personalized and manifactured phone cases, where everyone can
              find a piece of themselves in the colorful and creative models
              here in our website :) Today FunCases is sold in more than 15
              countries and we couldn't be more grateful for every purchase that
              you do. Thank you for helping our bussines grow, for radiating
              happiness and sharing your memories and with us
              &hearts;&hearts;&hearts;
            </pre>

            <pre class="pre2">
 ...and that is exactly what WE always try to offer. Nothing can represent our company
better than these words, since our main goal, ever since our small begginings, has 
been to create something unique and out-of-the box, a small piece in the size of your
pocket that you can use everyday, an accessory that forms a connection with you!
The idea was first born in the summer of 2016 where 2 friends suddenly had a vision:
To spread Creativity and Happiness by turning a boring everyday essential into a chic
and sophisticated product! It has definitely been a long way since that time and
through dedication, those 2 friends were finally able to complete their dream and now
we are here to present to the world the ULTIMATE PHONE CASES - a variety of specially
designed and personalized and manifactured phone cases, where everyone can find one
piece of themselves in the colorful and creative models here in our website :)
Today FunCases is sold in more than 15 countries and we couldn't be more grateful for
every purchase that you do.
Thank you for helping our bussines grow, for radiating
happiness and sharing your memories and with us
&hearts;&hearts;&hearts;
            </pre>

            <pre class="pre3">
"Style is a way to say who you are
without having to speak", and that is
exactly what WE always try to offer.

Nothing can represent our company better than these 
words, since our main goal is to create something
unique and out-of-the box, a small piece in the size
of your pocket that you can use everyday,
an accessory that forms a connection with you! 
The idea was first born in the summer of 2016 when
two friendssuddenly had a vision:To spread Creativity
and Happiness by turning a boring everyday essential  
into a chic and sophisticated product!
With dedication, those two friends were finally  
able to complete their dream and now we present 
to the world the ULTIMATE PHONE CASES designed
and personalized and manifactured the way so everyone
can find one piece of themselves in the colorful and  
creative models here in our website :)

Today FunCases is sold in more than 15 countries
and we couldn't be more grateful for
every purchase that you do.
Thank you for helping our bussines grow,
for radiating happiness and sharing
your memories and with us
&hearts;&hearts;&hearts;
            </pre>
			</div>

			<div class="about-images">
				<img src="../img/aboutuspic.jpg" height="100%">
			</div>
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