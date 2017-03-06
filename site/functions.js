//mobile navbar functions

var burger = document.getElementById('mobileNavBurger');
var nav = document.getElementById('mobileNav');
var portfolio = document.getElementById('mobilePortfolioLink');
var about = document.getElementById('mobileAboutLink');
var contact = document.getElementById('mobileContactLink');

burger.onclick = burgerOpen;
portfolio.onclick = navClose;
about.onclick = navClose;
contact.onclick = navClose;

function burgerOpen() {
	if (burger.className !== "mobileNavBurger isOpen" && nav.className !== "mobileNav isOpen") {
		burger.className += " isOpen";
		nav.className += " isOpen";
	} else {
		burger.classList.remove('isOpen');
		nav.classList.remove('isOpen');
	}
}

function navClose() {
	if (burger.className == "mobileNavBurger isOpen" && nav.className == "mobileNav isOpen") {
		burger.classList.remove("isOpen");
		nav.classList.remove("isOpen");
	} else {
		return false;
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
