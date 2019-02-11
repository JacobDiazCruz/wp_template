$(document).ready(function() {	
	let controller = new ScrollMagic.Controller();
	let ourScene = new ScrollMagic.Scene({
		triggerElement: '.client-works'
	})
	.setClassToggle('.client-works', 'fade-in')
	.addTo(controller);

	// img1 alvin
	let img1Scene = new ScrollMagic.Scene({
		triggerElement: '.alvin-bg'
	})
	.setClassToggle('.alvin-bg', 'fade-img1')
	.addTo(controller);

	// blue-box
	let blueBoxScene = new ScrollMagic.Scene({
		triggerElement: '.blue-box'
	})
	.setClassToggle('.blue-box', 'fade-blue')
	.addTo(controller);

	// alvin-p
	let alvinP = new ScrollMagic.Scene({
		triggerElement: '.alvin-p'
	})
	.setClassToggle('.left-content', 'fade-up')
	.addTo(controller);

	// img2 ajmm
	let img2Scene = new ScrollMagic.Scene({
		triggerElement: '.ajmm-bg'
	})
	.setClassToggle('.ajmm-bg', 'fade-ajmm')
	.addTo(controller);

	// redbox
	let redBoxScene = new ScrollMagic.Scene({
		triggerElement: '.red-box'
	})
	.setClassToggle('.red-box', 'fade-red')
	.addTo(controller);

	// ajmm-p
	let ajmmP = new ScrollMagic.Scene({
		triggerElement: '.right-content'
	})
	.setClassToggle('.right-content', 'fade-ajmm')
	.addTo(controller);

	// header
	let headerScene = new ScrollMagic.Scene({
		triggerElement: '.header-slide'
	})
	.setClassToggle('.header-slide', 'slide')
	.addTo(controller);

	// cards
	let cardScene = new ScrollMagic.Scene({
		triggerElement: '.card'
	})
	.setClassToggle('.card', 'zoom')
	.addTo(controller);

	// process
	let processScene = new ScrollMagic.Scene({
		triggerElement: '.process'
	})
	.setClassToggle('.process', 'appear')
	.addTo(controller);

	// about
	let aboutScene = new ScrollMagic.Scene({
		triggerElement: '.about'
	})
	.setClassToggle('.about', 'fade-purple')
	.addTo(controller);

	let aboutH4 = new ScrollMagic.Scene({
		triggerElement: '.about-h4'
	})
	.setClassToggle('.about-h4', 'color')
	.addTo(controller);

	let aboutP = new ScrollMagic.Scene({
		triggerElement: '.about-p'
	})
	.setClassToggle('.about-p', 'color')
	.addTo(controller);
	
	// gsap
	TweenMax.to(".intro-text", 0.2, {
		opacity: 1,
		y: "0px",
		delay: -1,
		ease: Expo.easeInOut
	});

	$('.click-hire').on('click', function() {
		$('.hire-me').css('width', '100%');
		$('#hire-p').css('opacity', 1);
	});
});