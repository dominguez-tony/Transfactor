// Changement de brackground avec interval et fondu

$(document).ready(function(){
    var header = $('html');
    
    var backgrounds = new Array(
        'url(img/polka-dots.png)'
      , 'url(img/spiration-dark.png)'
      , 'url(img/curls.png)'
      , 'url(img/dark-triangles.png)'
    );
    
    var current = 0;
    
    function nextBackground() {
        current++;
        current = current % backgrounds.length;
        header.css('background-image', backgrounds[current]);
    }
    setInterval(nextBackground, 5000);
    
    header.css('background-image', backgrounds[0]);
    });