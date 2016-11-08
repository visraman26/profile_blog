/**
 * Created by Vishal Raman on 07-Nov-16.
 */

$(document).ready(function(){
    // Add scrollspy to <body>
    $('body').scrollspy({target: ".navbar", offset: 50});

    // Add smooth scrolling on all links inside the navbar
    $("#myNavbar a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        }  // End if
    });
});


function myMap1() {
    var mapCanvas = document.getElementById("map1");
    var myCenter = new google.maps.LatLng(26.4148245,80.2321313);
    var mapOptions = {center: myCenter, zoom: 5};
    var map = new google.maps.Map(mapCanvas,mapOptions);
    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE
    });
    marker.setMap(map);
    myMap2();
    myMap3();
}
function myMap2() {
    var mapCanvas = document.getElementById("map2");
    var myCenter = new google.maps.LatLng(22.3003506,73.2318564);
    var mapOptions = {center: myCenter, zoom: 5};
    var map = new google.maps.Map(mapCanvas,mapOptions);
    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE
    });
    marker.setMap(map);
}
function myMap3() {
    var mapCanvas = document.getElementById("map3");
    var myCenter = new google.maps.LatLng(51.508742,-0.120850);
    var mapOptions = {center: myCenter, zoom: 5};
    var map = new google.maps.Map(mapCanvas,mapOptions);
    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE
    });
    marker.setMap(map);
}
