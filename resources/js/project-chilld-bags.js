$(function(){	
/*

    $(".project-devices--navigation").sticky({topSpacing: 12});

	$("#sticky-wrapper").click(function(){
	    var tabs_offset = $("#project-content").offset();
		$('html, body').animate({
			scrollTop: tabs_offset.top
		}, 1000);
		console.log("clicked");
	});
*/

	var $owlMobileDevice = $('.mobile-device-carousel.default');

    $("#project-mobile-tab").click(function(){ 
        initSwiper();
        initiOwl();
    });
    
    function initiOwl(){
	    $owlMobileDevice.owlCarousel({
			autoWidth: true,
			center: true,
		    loop: true,
		    lazyLoadEager: 3,
		    lazyLoad: true,
		    nav: false,
		    dots: false,
		    pagi: false,
		    slideBy: 1,
		    smartSpeed: 1000,
		    autoplay: true,
		    autoplayTimeout: 3500,
		    responsive:{
		        0:{
		            items:3,
					margin: 0
		        },
		        767:{
		            items:5,
					margin: 50
		        },
		        991:{
					margin: 60
		        }		        
		    }		    
		});
	}

	function initSwiper(){
	    var wireframeTitle = new Swiper('.wireframe-title', {
			spaceBetween: 1,
			centeredSlides: true,
			slidesPerView: 'auto',
			touchRatio: 1,
			slideToClickedSlide: true,
			observer: true,
			observeParents: true			
	    });
	    var wireframeContent = new Swiper('.wireframe-content', {
			direction: 'horizontal',
			effect: 'slide',
			observer: true,
			observeParents: true,
			preloadImages: false,
		    lazy: {
			    loadPrevNext: true,
			    loadPreNextAmount: 1
			}
	    });
		wireframeTitle.controller.control = wireframeContent;
		wireframeContent.controller.control = wireframeTitle;		  	
	}
	
	var waveHero1 = $('#wave-hero-1').wavify({
	  height: 40,
	  bones: 3,
	  amplitude: 40,
	  color: '#1D08FE',
	  speed: .10
	});	
	

	var waveHero2 = $('#wave-hero-2').wavify({
	  height: 30,
	  bones: 4,
	  amplitude: 40,
	  color: 'rgba(29,8,254,.4)',
	  speed: .35
	});	

	
	var waveHero3 = $('#wave-hero-3').wavify({
	  height: 20,
	  bones: 2,
	  amplitude: 50,
	  color: 'rgba(29,8,254,.25)',
	  speed: .4
	});	
				
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		return false;
	} else {

	particlesJS.load('particles-js', '/resources/js/particles/config.json');			
	
	var waveHero4 = $('#wave-hero-4').wavify({
	  height: 30,
	  bones: 4,
	  amplitude: 40,
	  color: 'rgba(163,45,184,.4)',
	  speed: .10
	});
	
	var waveHero5 = $('#wave-hero-5').wavify({
	  height: 20,
	  bones: 2,
	  amplitude: 50,
	  color: 'rgba(163,45,184,.25)',
	  speed: .35
	});
	
	var waveHero6 = $('#wave-hero-6').wavify({
	  height: 40,
	  bones: 3,
	  amplitude: 40,
	  color: '#A32DB8',
	  speed: .4
	});	
	
	
	var waveHero7 = $('#wave-hero-7').wavify({
	  height: 30,
	  bones: 4,
	  amplitude: 40,
	  color: 'rgba(163,45,184,.4)',
	  speed: .10
	});
	
	var waveHero8 = $('#wave-hero-8').wavify({
	  height: 40,
	  bones: 3,
	  amplitude: 40,	  
	  color: 'rgba(163,45,184,.25)',
	  speed: .10
	});
	
	var waveHero9 = $('#wave-hero-9').wavify({
	  height: 20,
	  bones: 2,
	  amplitude: 50,
	  color: '#A32DB8',
	  speed: .10
	});	
	
	
	var waveHero10 = $('#wave-hero-10').wavify({
	  height: 30,
	  bones: 3,
	  amplitude: 40,
	  color: 'rgba(29,8,254,.25)',
	  speed: .3
	});
	
	var waveHero11 = $('#wave-hero-11').wavify({
	  height: 20,
	  bones: 4,
	  amplitude: 40,	  
	  color: 'rgba(29,8,254,.4)',
	  speed: .2
	});
	
	var waveHero12 = $('#wave-hero-12').wavify({
	  height: 20,
	  bones: 5,
	  amplitude: 40,
	  color: '#1D08FE',
	  speed: .10
	});	
	
	
	var waveMobileUserflows1 = $('#wave-mobile-userflows-1').wavify({
	  height: 30,
	  bones: 4,
	  amplitude: 40,
	  color: 'rgba(29,8,254,.4)',
	  speed: .10
	});
	
	var waveMobileUserflows2 = $('#wave-mobile-userflows-2').wavify({
	  height: 20,
	  bones: 2,
	  amplitude: 50,
	  color: 'rgba(29,8,254,.25)',
	  speed: .35
	});
	
	var waveMobileUserflows3 = $('#wave-mobile-userflows-3').wavify({
	  height: 40,
	  bones: 3,
	  amplitude: 40,
	  color: '#1D08FE',
	  speed: .4
	});	
	var waveMobileUserflows4 = $('#wave-mobile-userflows-4').wavify({
	  height: 60,
	  bones: 4,
	  amplitude: 60,
	  color: 'rgba(29,8,254,.4)',
	  speed: .40
	});
	
	var waveMobileUserflows5 = $('#wave-mobile-userflows-5').wavify({
	  height: 50,
	  bones: 3,
	  amplitude: 55,
	  color: 'rgba(29,8,254,.25)',
	  speed: .35
	});
	
	var waveMobileUserflows6 = $('#wave-mobile-userflows-6').wavify({
	  height: 30,
	  bones: 2,
	  amplitude: 50,
	  color: '#1D08FE',
	  speed: .1
	});
	
	
	var waveWatchUserflows1 = $('#wave-watch-userflows-1').wavify({
	  height: 30,
	  bones: 4,
	  amplitude: 40,
	  color: 'rgba(52,58,64,.4)',
	  speed: .10
	});
	
	var waveWatchUserflows2 = $('#wave-watch-userflows-2').wavify({
	  height: 20,
	  bones: 2,
	  amplitude: 50,
	  color: 'rgba(52,58,64,.25)',
	  speed: .35
	});
	
	var waveWatchUserflows3 = $('#wave-watch-userflows-3').wavify({
	  height: 40,
	  bones: 3,
	  amplitude: 40,
	  color: '#343a40',
	  speed: .5
	});	
	var waveWatchUserflows4 = $('#wave-watch-userflows-4').wavify({
	  height: 30,
	  bones: 4,
	  amplitude: 30,
	  color: 'rgba(52,58,64,.4)',
	  speed: .40
	});
	
	var waveWatchUserflows5 = $('#wave-watch-userflows-5').wavify({
	  height: 40,
	  bones: 3,
	  amplitude: 55,
	  color: 'rgba(52,58,64,.25)',
	  speed: .35
	});
	
	var waveWatchUserflows6 = $('#wave-watch-userflows-6').wavify({
	  height: 60,
	  bones: 2,
	  amplitude: 30,
	  color: '#343a40',
	  speed: .5
	});						
}	
				
});
