(function() {
	var pushingNavTrigger = document.getElementsByClassName('nav-fullscreen--trigger');
	
	if(pushingNavTrigger.length > 0) {
		var mainContent = document.getElementsByClassName('nav-fullscreen__content')[0],
			navAnimating = false;
		
		pushingNavTrigger[0].addEventListener('click', function(event) {
			event.preventDefault();
			if(navAnimating) return; // already animating -> do not toggle
			navAnimating = true;
			Util.toggleClass(document.body, 'nav-is-open', !Util.hasClass(document.body, 'nav-is-open'));
		});

		mainContent.addEventListener('transitionend', function(){
			navAnimating = false; // wait for the end of animation to reset the variable
		});
	}
}());