$(function() {
  mentoringBubbleClick();
  setInterval(function(){articleTada()}, 4000);
  designBGStuff();
  smoothScroll(300);
  mobileNav();
});


function mobileNav() {
	$('.mobileNav').on('click', function () {
		var status = $(this).hasClass('.isOpen');
		if(status) {
			$('.mobileNav, .mobileNavBurger').removeClass('.isOpen');
		} else {
			$('.mobileNav, .mobileNavBurger').addClass('.isOpen');
		}
	});
}
