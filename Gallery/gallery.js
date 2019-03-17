var thumbnails = document.getElementsByClassName("galleryThumbnail");
var pictures = document.getElementsByClassName("galleryPicture");
var container = document.getElementById("galleryContainer");
var cover = document.getElementById("pageCover");
var close = document.getElementById("closeX");
var imageContainer = document.getElementById("imageContainer");
var galleryIndex;

cover.onclick = closeGallery;
close.onclick = closeGallery;
for(let i=0;i<thumbnails.length; i++){
  thumbnails[i].onclick = function(){showGallery(i)};
}

function showGallery(id){
  galleryIndex=id;
  if(galleryIndex>=pictures.length){
    galleryIndex=0;
  }
  if(galleryIndex<0){
    galleryIndex=pictures.length-1;
  }
  container.style.display = "flex";
  for(let i=0; i<pictures.length; i++){
    pictures[i].style.display = "none";
  }
  pictures[galleryIndex].style.display = "flex";
}

function closeGallery(){
  container.style.display = "none";
}
