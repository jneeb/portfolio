var burger = document.getElementById('mobileNavBurger');
var nav = document.getElementById('mobileNav');

console.log(burger.className, nav.className);

burger.onclick = navFunction;

function navFunction() {
	if (burger.className !== "mobileNavBurger isOpen" && nav.className !== "mobileNav isOpen") {
		burger.className += " isOpen";
		nav.className += " isOpen";
	} else {
		burger.classList.remove('isOpen');
		nav.classList.remove('isOpen');
	}
}

// google maps function

function initMap() {
        var uluru = {lat: 43.652881, lng: -79.379339};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
