(function ($, root, undefined) {

	$(function () {

		'use strict';
		$(document).ready(function(){

			var OSName="Unknown OS";
			if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
			else if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
			else if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
			else if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";

			if (OSName=="Linux" || OSName=="UNIX" || OSName=="Windows") {
				$("body").addClass("afterline");
			}


			$(".button-menu").click(function(){
		        $(".menu").addClass("open-menu");
				$(".menu").removeClass("fermeture-menu");
				$(".link-menu").addClass("active");
				$(".close-menu").show();
		    });

			$(".close-menu").click(function(){
				$(".button-menu").show();
		        $(".menu").removeClass("open-menu");
				$(".menu").addClass("fermeture-menu");
				$(".link-menu").removeClass("active");
				$(".close-menu").hide();
		    });




			if (screen && screen.width > 992) {
					// SCROLL
					$('#fullpage').fullpage({
						//Navigation
						menu: '#menu',
						lockAnchors: false,
						anchors:['1', '2', '3','4'],
						navigation: true,
						navigationPosition: 'right',
						navigationTooltips: ['firstSlide', 'secondSlide'],
						showActiveTooltip: false,
						slidesNavigation: false,
						slidesNavPosition: 'bottom',

						//Scrolling
						css3: true,
						scrollingSpeed: 900,
						autoScrolling: true,
						fitToSection: true,
						fitToSectionDelay: 1000,
						scrollBar: true,
						easing: 'easeInOutCubic',
						easingcss3: 'ease',
						loopBottom: true,
						loopTop: false,
						loopHorizontal: true,
						continuousVertical: false,
						continuousHorizontal: false,
						scrollHorizontally: false,
						interlockedSlides: false,
						dragAndMove: false,
						offsetSections: false,
						resetSliders: false,
						fadingEffect: false,
						normalScrollElements: '#element1, .element2',
						scrollOverflow: false,
						scrollOverflowReset: false,
						scrollOverflowOptions: null,
						touchSensitivity: 15,
						normalScrollElementTouchThreshold: 5,
						bigSectionsDestination: null,

						//Accessibility
						keyboardScrolling: true,
						animateAnchor: true,
						recordHistory: true,

						//Design
						controlArrows: true,
						verticalCentered: true,
						sectionsColor : ['#fff', '#fff'],
						paddingTop: '3em',
						paddingBottom: '10px',
						fixedElements: '#header, .footer',
						responsiveWidth: 0,
						responsiveHeight: 0,
						responsiveSlides: false,
						parallax: false,
						parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

						//Custom selectors
						sectionSelector: '.section',
						slideSelector: '.slide',

						lazyLoading: true,

						//events
						onLeave: function(index, nextIndex, direction){},
						afterLoad: function(anchorLink, index){},
						afterRender: function(){},
						afterResize: function(){},
						afterResponsive: function(isResponsive){},
						afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
						onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
					});
				}


				//Compétences
				$(".skills").addClass("active")
					$(".skills .skill .skill-bar span").each(function() {
					   $(this).animate({
					      "width": $(this).parent().attr("data-bar") + "%"
					   }, 1000);
					});
					setTimeout(function() {
					   $(".skills .skill .skill-bar span b").animate({"opacity":"1"},1000);
					}, 2000);



					//WOW JS
					new WOW().init();
					
					//ENLEVE LEFFET EN MOBILE
					if ($(window).width() < 992) {
						$(".visuel").removeClass("animated");
						$(".ensemble-infos-projet").removeClass("animated");
						$(".mobile-img").removeClass("wow fadeInLeft fadeInRight");
					}
					else {
						$(".visuel").addClass("animated");
						$(".ensemble-infos-projet").addClass("animated");
						$(".mob-1").addClass("wow fadeInLeft");
						$(".mob-2").addClass("wow fadeInRight");
					}

					//$(window).resize(resize);
					//resize();
		});
	});

})(jQuery, this);
