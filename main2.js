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
   setTimeout("ndrroImg()", 3000);
}

ndrroImg();

console.log("test");

