
var myIndex = 0;
var slideIndex = 1;
autoSlider();

function autoSlider() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}  
  x[myIndex-1].style.display = "block";  
  if(myIndex == 1){
	document.getElementsByClassName("slider-title")[0].children[1].innerText = "Biriyani Festival";
	document.getElementsByClassName("slider-title")[0].children[0].innerText = "UPTO 60% OFF | USE CODE: EATBIRIYANI";
  }else if(myIndex == 2){
	document.getElementsByClassName("slider-title")[0].children[1].innerText = "ONESTA"
	document.getElementsByClassName("slider-title")[0].children[0].innerText = "GET 60% OFF | USE CODE: CRIK60";
  }else if(myIndex == 3){
	document.getElementsByClassName("slider-title")[0].children[1].innerText = "KFC"
	document.getElementsByClassName("slider-title")[0].children[0].innerText = "CLASSIC MEALS @ FLAT 40% OFF";
  }else if(myIndex == 4){
	document.getElementsByClassName("slider-title")[0].children[1].innerText = "LEON GRILL"
	document.getElementsByClassName("slider-title")[0].children[0].innerText = "GET 60% OFF | USE CODE: CRIK60";
  }
  setTimeout(autoSlider, 3000); // Change image every 2 seconds
}

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";
  if(slideIndex == 1){
	document.getElementsByClassName("slider-title")[0].children[1].innerText = "Biriyani Festival"
	document.getElementsByClassName("slider-title")[0].children[0].innerText = "UPTO 60% OFF | USE CODE: EATBIRIYANI";
  }else if(slideIndex == 2){
	document.getElementsByClassName("slider-title")[0].children[1].innerText = "ONESTA"
	document.getElementsByClassName("slider-title")[0].children[0].innerText = "GET 60% OFF | USE CODE: CRIK60";
  }else if(slideIndex == 3){
	document.getElementsByClassName("slider-title")[0].children[1].innerText = "KFC"
	document.getElementsByClassName("slider-title")[0].children[0].innerText = "CLASSIC MEALS @  FLAT 40% OFF";
  }else if(slideIndex == 4){
	document.getElementsByClassName("slider-title")[0].children[1].innerText = "LEON GRILLS"
	document.getElementsByClassName("slider-title")[0].children[0].innerText = "GET 60% OFF | USE CODE: CRIK60";
  }
}

function focusSignUp(){
  document.getElementById("signup").focus();
}

function focusLoginIn(){
  document.getElementById("login").focus();
}



function categoryPop(desc, img, margin){
  document.getElementById("categoryPop").style.display = "block";
  document.getElementById('categoryPop-desc').innerHTML = desc;
  document.getElementById("categoryPop").style.marginLeft = margin;
  var image = document.getElementById('categoryPop-img');
  image.src = img;
  image.style.width="350px";
}

function categoryPopClose(){
  document.getElementById("categoryPop").style.display = "none";
}

window.onclick = function(event) {
  if (event.target == document.getElementById("categoryPop")) {
    document.getElementById("categoryPop").style.display = "none";
  }
}

function addtoCart(){
  var count = parseInt(document.getElementById('cart-btn-count').innerHTML);
  document.getElementById('cart-btn-count').innerHTML = count + 1;
}




/*function timeFrameChanges(){
  var today = new Date();
  var time = today.getHours();
  if(time>6 && time<24){
    document.getElementById("col1").innerHTML = "Under ₹99 | Free Delivery";
  }
}*/




