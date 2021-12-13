const toTop = () => window.scrollTo({top: 0, behavior: 'smooth'});


function feedbackyes(){
  document.getElementById('feedback')
  .src="img/happy.png";
}

function feedbackno(){
  document.getElementById('feedback')
  .src="img/sad.png";
}


function hide() {
  var text = document.getElementById("textascuns");
  if (text.style.display === "none") {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

var slideIndex = 1;
showImg(slideIndex);


function arrow(n) {
  showImg(slideIndex += n);
}


function showImg(n) {
  var photo;
  var slides = document.getElementsByClassName("Photoslide");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (photo = 0; photo < slides.length; photo++) {
      slides[photo].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
  
}