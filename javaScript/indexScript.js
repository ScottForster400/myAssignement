let imageScrollerImages=["images/cantor-4.webp","images/cantor-atrium-3.webp","images/cantor-atrium-4.webp","images/cantor-gallery.webp",
"images/cantor-lecture-theatre-3.webp","images/cantor-lecture-theatre-5.webp","images/cantor-outside.webp","images/students.webp"];
let counter = 0;
(function(){
    setInterval(imageScroller,4000);
})();
function imageScroller(){
    document.getElementById("slider-img").setAttribute("src",imageScrollerImages[counter]);
    counter=counter+1
    let max = imageScrollerImages.length
    if(counter >= max){
        counter=0
    }
}