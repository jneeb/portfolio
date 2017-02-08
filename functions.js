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



// function mobileNav() {
// 	$('.mobileNav').on('click', function () {
// 		var status = $(this).hasClass('.isOpen');
// 		if(status) {
// 			$('.mobileNav, .mobileNavBurger').removeClass('.isOpen');
// 		} else {
// 			$('.mobileNav, .mobileNavBurger').addClass('.isOpen');
// 		}
// 	});
// }
