var thumbnails = document.getElementsByClassName("galleryThumbnail");
var pictures = document.getElementsByClassName("galleryPicture");
var container = document.getElementById("galleryContainer");
var cover = document.getElementById("pageCover");
var close = document.getElementById("closeX");
var next = document.getElementsByClassName("galleryNext")[0];
var prev = document.getElementsByClassName("galleryPrev")[0];
var imageContainer = document.getElementById("imageContainer");
var posts = document.getElementById("postNum");
var galleryIndex;

posts.innerHTML = "<b>" + thumbnails.length + "</b>";

cover.onclick = closeGallery;
close.onclick = closeGallery;
next.onclick = function(){showGallery(galleryIndex+1)};
prev.onclick = function(){showGallery(galleryIndex-1)};
for(let i=0;i<thumbnails.length; i++){
  thumbnails[i].onclick = function(){showGallery(i)};
}

function showGallery(id){
  galleryIndex=id;
  close.classList.remove("dots");
  close.style.opacity = "0";
  next.style.display = "none";
  prev.style.display = "none";
  setTimeout(function(){
    close.classList.add("dots");
    close.style.opacity = "1";
    next.style.display = "flex";
    prev.style.display = "flex";
  }, 750);
  if(galleryIndex>=pictures.length){
    galleryIndex=0;
  }
  if(galleryIndex<0){
    galleryIndex=pictures.length-1;
  }
  container.style.display = "flex";
  for(let i=0; i<pictures.length; i++){
    pictures[i].style.transform = "scale(0)";
    pictures[i].style.position = "absolute";
    pictures[i].style.zIndex = "11";
  }
  pictures[galleryIndex].style.transform = "scale(1)";
  pictures[galleryIndex].style.position = "relative";
  pictures[galleryIndex].style.zIndex = "12";
}

function closeGallery(){
  container.style.display = "none";
}
