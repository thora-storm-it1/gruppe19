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

var doc_test_1 = true;

function checkDoc_1() {
  if(doc_test_1) {
    document.getElementById("documents_1").style.backgroundColor = "#EDEDED";
    showDoc_1();
  } else {
    document.getElementById("documents_1").style.backgroundColor = "#F7F7F7";
    hideDoc_1();
  }
}

function showDoc_1() {
  doc_test_1 = false;
  document.getElementById("documents_content_1").style.maxHeight = "300px";
  document.getElementById("arrow_1").style.transform = "rotate(90deg)";
}

function hideDoc_1() {
  doc_test_1 = true;
  document.getElementById("documents_content_1").style.maxHeight = "0px";
  document.getElementById("arrow_1").style.transform = "rotate(0deg)";
}

var doc_test_2 = true;

function checkDoc_2() {
  if(doc_test_2) {
    document.getElementById("documents_2").style.backgroundColor = "#EDEDED";
    showDoc_2();
  } else {
    document.getElementById("documents_2").style.backgroundColor = "#F7F7F7";
    hideDoc_2();
  }
}

function showDoc_2() {
  doc_test_2 = false;
  document.getElementById("documents_content_2").style.maxHeight = "300px";
  document.getElementById("arrow_2").style.transform = "rotate(90deg)";
}

function hideDoc_2() {
  doc_test_2 = true;
  document.getElementById("documents_content_2").style.maxHeight = "0px";
  document.getElementById("arrow_2").style.transform = "rotate(0deg)";
}

var doc_test_3 = true;

function checkDoc_3() {
  if(doc_test_3) {
    document.getElementById("documents_3").style.backgroundColor = "#EDEDED";
    showDoc_3();
  } else {
    document.getElementById("documents_3").style.backgroundColor = "#F7F7F7";
    hideDoc_3();
  }
}

function showDoc_3() {
  doc_test_3 = false;
  document.getElementById("documents_content_3").style.maxHeight = "300px";
  document.getElementById("arrow_3").style.transform = "rotate(90deg)";
}

function hideDoc_3() {
  doc_test_3 = true;
  document.getElementById("documents_content_3").style.maxHeight = "0px";
  document.getElementById("arrow_3").style.transform = "rotate(0deg)";
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
