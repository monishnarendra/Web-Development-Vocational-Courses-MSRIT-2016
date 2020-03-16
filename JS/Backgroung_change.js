$(document).ready(function(){
var header = $('body');

var backgrounds = new Array(
    'url(../../Registration Page/Login/Main/Images/black-and-white-city-skyline-buildings.jpg)'
  , 'url(../../Registration Page/Login/Main/Images/landscape-mountains-nature-clouds.jpg)'
  , 'url(../../Registration Page/Login/Main/Images/pexels-photo.jpg)'
  , 'url(http://placekitten.com/400)'
);

var current = 0;

function nextBackground() {
    current++;
    current = current % backgrounds.length;
    header.css('background-image', backgrounds[current]);
}
setInterval(nextBackground, 1000);

header.css('background-image', backgrounds[0]);
});