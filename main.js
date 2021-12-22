//Slider - Slideshow 1
var imgArray = ["url(img/slider3.jpg)", "url(img/slider2.jpg)", "url(img/slider1.jpg)"];
var i = 0;
function ndrroImg() {
document.getElementById("slidee").style.backgroundImage = imgArray[i];
  if (i < imgArray.length - 1) {
    i++;
    document.getElementById("slidee").style.transition = "0.6s";
  }
  else {
     i = 0;
  }
   setTimeout("ndrroImg()", 2100);
}

ndrroImg();

//Toggle Button
var toggleButton = document.getElementsByClassName('toggle-button');

toggleButton.addEvenetListener('click', () -> {
  document.getElementsByClassName('nav-link').style.display: "block";
});

