//Puts the html objects into arrays
var dropDownMenuContainers = document.getElementsByClassName("dropdown_container");
var dropDownArrows = document.getElementsByClassName("drop_arrow");
var dropDownMenus = document.getElementsByClassName("dropMenu");
var optionContainers = document.getElementsByClassName("optionContainer");

//Gives all the menu containers the show function
for(let i=0; i<dropDownMenus.length; i++){
  dropDownMenuContainers[i].onclick = function(){show(i)};
}

//Function to display the menu
function show(e){
  //If the menu isnt already showing then it will be opened
  if(dropDownMenus[e].style.maxHeight == "0px"){
    for(x=0;x<dropDownMenus.length;x++){
      dropDownMenus[x].style.maxHeight = "0px";
      dropDownArrows[x].style.transform = "rotate(0deg)";
    }
    dropDownMenus[e].style.maxHeight = optionContainers[e].childElementCount*100+"px";
    dropDownArrows[e].style.transform = "rotate(90deg)";
  }
  //If it is already showing then it will be closed
  else{
    dropDownMenus[e].style.maxHeight = "0px";
    dropDownArrows[e].style.transform = "rotate(0deg)";
  }
}

var side_test_1 = true;

function checkSide_1() {
  if(side_test_1) {
    showSide_1();
  } else {
    hideSide_1();
  }
}

function showSide_1() {
  side_test_1 = false;
  hideSide_2();
  document.getElementById("side_dropdown_container_1").style.maxHeight = "400px";
}

function hideSide_1() {
  side_test_1 = true;
  document.getElementById("side_dropdown_container_1").style.maxHeight = "0px";
}

var side_test_2 = true;

function checkSide_2() {
  if(side_test_2) {
    showSide_2();
  } else {
    hideSide_2();
  }
}

function showSide_2() {
  side_test_2 = false;
  hideSide_1();
  document.getElementById("side_dropdown_container_2").style.maxHeight = "800px";
}

function hideSide_2() {
  side_test_2 = true;
  document.getElementById("side_dropdown_container_2").style.maxHeight = "0px";
}


//Start of slideshow
var slideIndex = 1;
//Define the interval

var interval;
//Sets a length of the interval
var intervalLength = 7000;
//Starts the interval
intervalPause();

//Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
  intervalPause();
}

//Dot controls
function currentSlide(n) {
  showSlides(slideIndex = n);
  intervalPause();
}

//Displays the current slide, and hides others
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dot");
  //Makes sure slides dont go past the last slide or before the first
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  //Hides all the slides
  for (i = 0; i < slides.length; i++) {
      slides[i].style.opacity = "0";
  }
  //Turns off all dots
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  //Turn on selected slide and dot
  slides[slideIndex-1].style.opacity = "1";
  dots[slideIndex-1].className += " active";
}

//Resets the interval upon interraction from client
function intervalPause(){
  clearInterval(interval);
  interval = setInterval(function(){plusSlides(1)}, intervalLength);
}


function showSideMenu() {
  document.getElementById("side_menu").style.width = "65vw";
}

function hideSideMenu() {
  document.getElementById("side_menu").style.width = "0vw";
}

function hideSide_all() {
  hideSide_1();
  hideSide_2();
}
