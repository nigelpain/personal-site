// Retrieve ID of the element that will display the slideshow
var recentPhoto = document.getElementById("recentPhotos");
// Set an array that contains all the images to go in the slideshow
var recentPhotoList = ["images/recent photos/Heavens Ridge (website).jpg",
                        "images/recent photos/First to Fall (website).jpg",
                        "images/recent photos/Forgotten Love (website).jpg",
                        "images/recent photos/Little Nipper (website).jpg"];
// Set looping variable to zero
var currentPhoto = 0;
// Set the image source to the nth element of the array and then loop through,
// the array untill the end and then reset the looping variable
function changePhoto() {
  recentPhoto.setAttribute("src", recentPhotoList[currentPhoto]);
  currentPhoto++;
  if(currentPhoto >= recentPhotoList.length){
    currentPhoto = 0;
  }
}
// Change the photo with the function every so many milliseconds
var changePhoto = setInterval(changePhoto, 10000);
