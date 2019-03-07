var test_1 = true;
var test_2 = true;

function checkDropdown_1() {
  if(test_1) {
    showDropdown_1();
  } else {
    hideDropdown_1();
  }
}

function showDropdown_1() {
    test_1 = false;
    hideDropdown_2();
    document.getElementById("drop_arrow_1").style.transform = "rotate(90deg)";
    var elem = document.getElementById("menu_1");
    elem.style.maxHeight = "200px";
}


function hideDropdown_1() {
    test_1 = true;
    document.getElementById("drop_arrow_1").style.transform = "rotate(0deg)";
    var elem = document.getElementById("menu_1");
    elem.style.maxHeight = "0px";
}

function checkDropdown_2() {
  if(test_2) {
    showDropdown_2();
  } else {
    hideDropdown_2();
  }
}

function showDropdown_2() {
    test_2 = false;
    hideDropdown_1();
    document.getElementById("drop_arrow_2").style.transform = "rotate(90deg)";
    var elem = document.getElementById("menu_2");
    elem.style.maxHeight = "400px";
}


function hideDropdown_2() {
    test_2 = true;
    document.getElementById("drop_arrow_2").style.transform = "rotate(0deg)";
    var elem = document.getElementById("menu_2");
    elem.style.maxHeight = "0px";
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
