const navtest = document.getElementsByClassName('nav-link');
const butoni = document.getElementsByClassName('toggle-button');
var hapur = true;

for (var i = 0 ; i < butoni.length; i++) {
   butoni[i].addEventListener('click', show); 
}

function show() {
  if(hapur){
    hapur = false;
    for (var j = 0; j < navtest.length; j++){
      navtest[j].style.display = 'flex';
    }
  }
  else{
    hapur = true;
    for (var n = 0; n < navtest.length; n++){
      navtest[n].style.display = 'none'; 
    }
  }
}



//e kontrollon max width te dokumentit edhe e vendos arrayn e fotove varesisht prej widthit
let newSliderBgs = window.matchMedia("(max-width: 321px)");
let newSliderBgs2 = window.matchMedia("(max-width: 590px)");

    if(newSliderBgs.matches){
		imgArray = ["url(img/slider33.jpg)", "url(img/slider22.jpg)", "url(img/slider11.jpg)"];
			
	}
	else if(newSliderBgs2.matches){
		imgArray = ["url(img/slider33.jpg)", "url(img/slider22.jpg)", "url(img/slider11.jpg)"];
	}

	else {
		imgArray = ["url(img/slider3.jpg)", "url(img/slider2.jpg)", "url(img/slider1.jpg)"];
	}

//var per ndrroImg()
var i = 0;

function ndrroImg() {
document.getElementById("slidee").style.backgroundImage = imgArray[i];
  if (i < imgArray.length - 1) {
    i++;
    document.getElementById("slidee").style.transition = "0.6s";
    console.log(imgArray);
  }
  else {
     i = 0;
  }
   setTimeout("ndrroImg()", 3000);
}

ndrroImg();

    var width = document.getElementsByTagName("BODY")[0].offsetWidth;

    if (window.addEventListener) {  // all browsers except IE before version 9
      window.addEventListener ("resize", onResizeEvent, true);
    } else {
      if (window.attachEvent) {   // IE before version 9
        window.attachEvent("onresize", onResizeEvent);
      }
    }

    function onResizeEvent() {
      newWidth = document.getElementsByTagName("BODY")[0].offsetWidth;
      if(newWidth != width){
        width = newWidth;

        let newSliderBgs = window.matchMedia("(max-width: 321px)");
		let newSliderBgs2 = window.matchMedia("(max-width: 590px)");

    if(newSliderBgs.matches){
		imgArray = ["url(img/slider33.jpg)", "url(img/slider22.jpg)", "url(img/slider11.jpg)"];
			
	}
	else if(newSliderBgs2.matches){
		imgArray = ["url(img/slider33.jpg)", "url(img/slider22.jpg)", "url(img/slider11.jpg)"];
	}
	else{
		imgArray = ["url(img/slider3.jpg)", "url(img/slider2.jpg)", "url(img/slider1.jpg)"];
	}

      }
    }
    






