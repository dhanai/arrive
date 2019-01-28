jQuery(function ($) {
  var allPanels = $('.accordion > .accordion-content').hide();
  $('.accordion > dt > a').click(function() {
      if( jQuery(this).hasClass("acc-current") ){
          $('.accordion > dt > a').removeClass("acc-current");
          allPanels.slideUp();
      }
      else {
        $('.accordion > dt > a').removeClass("acc-current");
        allPanels.slideUp();
        $(this).parent().next().slideDown();
        $(this).addClass("acc-current");
      }
    return false;
  });
});
jQuery(document).ready(function($) {
    $('.mfp-iframe').magnificPopup({
        type:'iframe',
        midClick: true
    });
});

jQuery(document).ready(function($) {
	$("#example-one").organicTabs();
  
    
$('.banner-bottom-link').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
  
});

var owl = jQuery('.about-slider');

jQuery(document).ready(function($) {
   owl.owlCarousel({
      center: false,
      items:3,
  	nav: true,
  	navText:["", ""],
  	dots: true,
      loop: true,
      margin:10,
      responsive: {
  	  0: {
          items: 1,
          stagePadding:36,
  	  },
  	  480: {
          items: 1,
          stagePadding:38,
  	  },
  	  600: {
          items: 1,
          stagePadding:40,
  	  },
      768: {
          items: 1,
          stagePadding:40,
  	  },
      1024: {
          items: 1,
          stagePadding:60,
  	  },
  	  1280: {
          items: 2,
          stagePadding:70,
  	  },
      1366: {
          items: 2,
          stagePadding:80,
  	  },
      1440: {
          items: 2,
          stagePadding:85,
  	  },
      1600: {
          items: 2,
          stagePadding:195,
  	  },
      1680: {
          items: 2,
          stagePadding:290,
  	  },
  	  1920: {
          items: 2,
          stagePadding:150,
  	  },
      2500: {
          items: 2,
          stagePadding:290,
  	  }
  	}
  });

  // function setCounter(event){
  //   var currentSlide = event.item.index - 2;
  //   var totalSlides     = event.item.count;
  //   jQuery('.about-slider .owl-dots').append('<div class="owl-counter">' + currentSlide + ' - ' + totalSlides + '</div>');
  // };

  //  owl.on('changed.owl.carousel', function(event) {
  //       var currentSlide = event.item.index - 2;
  //       var totalSlides     = event.item.count;
  //       jQuery('.about-slider .owl-dots').append('<div class="owl-counter">' + currentSlide + ' - ' + totalSlides + '</div>');
  //   });
});

//jQuery('#about-page-slider').bind('slid', function() {
//    currentIndex = jQuery('div.active').index() + 1;
//   jQuery('').html(''+currentIndex+'/'+totalItems+'');
//    alert("value changed");
//    console.log("Slider changed");
//});

jQuery(document).ready(function($) {
    $('a.button-fill, li.our-feature a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 700);
        event.preventDefault();
    });
});

// var slideCounter = function(){
//   setTimeout(function(){
//     var currentSlide = jQuery('.owl-dot.active').index() + 1;
//     var totalSlides = jQuery('.owl-dot').length;
//     jQuery('.about-slider .owl-dots').append('<div class="owl-counter">' + currentSlide + ' - ' + totalSlides + '</div>');
//   })
// }


//animate logo on opening
jQuery(document).ready(function($) {
    setTimeout(function(){
      $('.logo-mark').removeClass('hide');
    }, 0);
    setTimeout(function(){
      $('.logo-type').removeClass('hide');
    }, 500)
});

/* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */
jQuery(window).scroll(function($){

    //slide in logo type
    // if (jQuery(window).scrollTop() >= 1) {
    //   jQuery('.logo-type').addClass('hide');
    // }
    // else {
    //   jQuery('.logo-type').removeClass('hide');
    // }

    //add fixed header
    if (jQuery(window).scrollTop() >= 200) {
        jQuery('header').addClass('fixed-header');
    }
    else {
        jQuery('header').removeClass('fixed-header');
    }

    //fade in fixed header based on scroll position
    var fadeStart = 200;
    var fadeUntil = 300;
    var fading = jQuery('header');
    var logo = document.getElementById('logo-mark');
    var offset = jQuery(document).scrollTop();
    var opacity;
    var translate;

    if( offset <= fadeStart-1 ){
      opacity = 1;
    }else if( offset >= fadeStart && offset <= fadeUntil ){
      opacity = 0 + (offset - fadeStart) / (fadeUntil - fadeStart);
    }else if( offset > fadeUntil){
      opacity = 1;
    }
    fading.css('opacity',opacity);

    // var translateStart = 0;
    // var translateUntil = 200;

    // if( offset <= translateStart ){
    //   translate = 0;
    // }else if( offset>= translateStart && offset <= translateUntil ){
    //   translate = (0 + (offset - translateStart) / (translateUntil - translateStart)) * 20;
    // }
    //logo.style.transform = "translateY(-"+translate+"px)";

});

var mapOn = false;
//var bounceOn = false;

function elementInViewport(el) {
  //special bonus for those using jQuery
  if (typeof jQuery === "function" && el instanceof jQuery) {
      el = el[0];
  }

  var rect = el.getBoundingClientRect();

  return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom - 500 <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
      rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
  );
}

jQuery(window).scroll(function($){
  if(jQuery('.map-container').length > 0){
    var inView = elementInViewport( jQuery('.map-container') );
    console.log(inView)

    if (!mapOn && inView){
        jQuery('.map-area').append('<iframe src="'+templateUrl+'/assets/map/v2/demo.html" width="100%" height="400"></iframe');
        mapOn = true;
    }
  }

  //shipper page bounce ball animation

  //jQuery('.shipper-page-animation-svg svg').pauseAnimation();

  // if(jQuery('.video-area').length > 0){
  //   var inView = elementInViewport( jQuery('.video-area') );

  //   if (!bounceOn && inView){
  //       jQuery('.shipper-page-animation-svg').addClass('show-svg-class');
  //       bounceOn = true;
  //   }
  // }
});






jQuery(document).ready(function($){   
    $('.first-hover').hover(function(){     
        $('.banner-area').addClass('first-header-bg');
    },     
    function(){    
        $('.banner-area').removeClass('first-header-bg');      
    });
 
    $('.second-hover').hover(function(){    
        $('.banner-area').addClass('second-header-bg');    
    },     
    function(){        
        $('.banner-area').removeClass('second-header-bg');     
    });
});   


jQuery(document).ready(function($) {

  var $container = $('#container');
	transitionDuration: '0.8s',
  // only opacity for reveal/hide transition
  $container.isotope({})

  $('#filter-select').change( function() {
    $container.isotope({
      filter: this.value
    });
  });
});



jQuery(document).ready(function($) {

  var opLocations = [];
  var opDepartments = [];

  function displayOptions(elem, array) {
    var x = document.getElementById(elem);
    var i;

    for (i = 0; i < x.length; i++) {
        //txt = txt + "\n" + x.options[i].text;
        //array.push(x.options[i].text);
        array.push( $(x.options[i]).attr('data-filter-value') )
    }
    array.shift();
  }

  if($('.page-template-template-careers').length >= 1){
    displayOptions('option-locations', opLocations);
    displayOptions('option-departments', opDepartments);
  }

  //filter careers  
  var $container = $('#container'),
      filters = {};

  var $grid = $container.isotope({
    itemSelector : '.vecant-position'
  });

  var iso = $grid.data('isotope');
  var $filterCount = $('.filter-count');

  // filter buttons
  $('select').change(function(){
    var $this = $(this);

    // store filter value in object
    // i.e. filters.color = 'red'
    var group = $this.attr('data-filter-group');
    
    filters[ group ] = $this.find(':selected').attr('data-filter-value');
    // console.log( $this.find(':selected') )
    // convert object into array
    var isoFilters = [];
    for ( var prop in filters ) {
      isoFilters.push( filters[ prop ] )
    }
    //console.log(filters);
    var selector = isoFilters.join('');
    $container.isotope({ filter: selector });

    //update filter count
    $filterCount.text(iso.filteredItems.length);

    //hide options
    var matches = [];
    var i;

    for (i = 0; i < opDepartments.length; i++) {
      var needle = opDepartments[i].replace('.', '');

      (iso.filteredItems).forEach(function(e) {
        if( (e.element.className).includes(needle) ){
          matches.push(needle);
        }
      });
    }

    function onlyUnique(value, index, self) { 
      return self.indexOf(value) === index;
    }
    var unique = matches.filter( onlyUnique );

    // if(group == 'leuchtenart'){
    //   $('.opts-dep').show();
    //   $('#option-departments option:eq(0)').prop('selected', true);
    //   if(filters[ group ] == ''){
    //     $('.opts-dep').show();
    //   }else{
    //     $('.opts-dep').hide();
    //     unique.forEach(function(e){
    //       $('.op-'+e).show();
    //     })
    //   }
    // }

    return false;
  });
      

});


jQuery(document).ready(function($) {
    $('a.banner-bottom-link').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 700);
        event.preventDefault();
    });
  
});


//jQuery(document).ready(function($) {
//    $('input[type=text]').each(
//    function(){
//        var val = $(this).val().trim();
//        if (val.length){
//            $(this).parent().parent().children(':first-child').addClass("out");
//        }
//    });
//});

jQuery(document).ready(function($){
  function updateText(event){
    var input=$(this);
    setTimeout(function(){
      var val=input.val();
      if(val!="")
        input.parent().addClass("lable-style");
      else
        input.parent().removeClass("lable-style");
    },1)
  }
  $("#search-top input").keydown(updateText);
  $("#search-top input").change(updateText);
  $("#search-top input").keydown(updateText);
  if ( $("#search-top input").val()) {
   $("#search-top input").parent().addClass("lable-style");
  }
});


// jQuery(document).on('scroll', function($) {
//    if(jQuery(this).scrollTop() + jQuery('#shippers-page-benefits').innerHeight() >=jQuery('#shippers-page-benefits').position().top){
//        jQuery(".shipper-page-animation-svg svg").addClass( "show-svg-class" );
//        console.log("Scroll triggered");
//    } 
   
// });

//    jQuery(document).on('scroll', function($) {
//        if(jQuery(this).scrollTop()>=jQuery('#shippers-page-benefits').position().top){
//            jQuery(".shipper-page-animation-svg svg").addClass( "show-svg-class" );
//        } 
//    });

// jQuery(document).on('scroll', function($) {
//jQuery(window).scroll(function() {
//   var hT = jQuery('#shippers-page-benefits').offset().top,
//       hH = jQuery('#shippers-page-benefits').outerHeight(),
//       wH = jQuery(window).height(),
//       wS = jQuery(this).scrollTop();
//   if (wS > (hT+hH-wH)){
//       console.log('H1 on the view!');
//   }
//});
// });

//var wrapper = document.querySelector('.shipper-page-animation-svg');
//
//window.onscroll = function (event) {
//  if (wrapper.getBoundingClientRect().top < 0) {
//    wrapper.className = "svg-animation onScreen";
//    window.onscroll = null;
//  }
//}


var countPlayed = false
//carriers page
jQuery(document).ready(function ($) {

  if(jQuery('.page-template-template-carriers').length > 0){

    var animateCounter = function(){
      if(jQuery('.technology-services').length > 0){
        var inView = elementInViewport( jQuery('.technology-services') );

        if (!countPlayed && inView){
            jQuery('.metrics-count span').each(function ($) {
                jQuery(this).prop('Counter',0).animate({
                    Counter: jQuery(this).text()
                    }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        jQuery(this).text(Math.ceil(now));
                    }
                });
            });
            countPlayed = true;
        }
      }
    }

    jQuery(window).scroll(function($){
      animateCounter();
    });

    animateCounter();

  }

});


jQuery(document).ready(function($){
     // JavaScript
        window.sr = ScrollReveal();
      var slide_up_animation_delay = {
            distance: '100px',
            origin: 'bottom',
            duration : 1500,
        		 scale    : 1,
        		move: 0 ,
            delay    : 1000
        };
     	var header_anim = {
            origin   : "top",
            distance : "40px",
            duration : 1000,
            scale    : 1,
          }
     	var slide_down_animation = {
            origin   : "top",
            distance : "40px",
            duration : 1000,
            scale    : 1,
          }
     	var slide_down_animation_delay = {
            origin   : "top",
            distance : "40px",
            duration : 1000,
            scale    : 1,
            delay    : 500
          }
        
         var slide_left_animation = {
            origin   : "left",
            distance : "40px",
            duration : 1000,
            scale    : 1,
           	delay	 : 500
          }
        
         var slide_left_animation_delay = {
            origin   : "left",
            distance : "40px",
            duration : 1000,
            scale    : 1,
           	delay	 : 500
          }
        
         var slide_right_animation = {
            origin   : "right",
            distance : "40px",
            duration : 1000,
            scale    : 1,
           	delay		 : 800,
          }
         
         var slide_right_animation_delay = {
            origin   : "right",
            distance : "40px",
            duration : 1000,
            scale    : 1,
           	delay		 : 800,
          }
          
         var fade_in_animation = {
           move: 0 ,
            duration : 1000,
           	delay		 : 0
          }
         var fade_in_animation_delay = {
           move: 0 ,
            duration : 1000,
           	delay		 : 1000,
          }
		  var right_animation = {
			duration: 1500,
			delay: 1000,
			origin: 'right'
          }
         
          //sr.reveal('.slide-up-animation-delay',       slide_up_animation_delay);
  				sr.reveal('.header-animation',                 header_anim);
          sr.reveal('.slide-left-animation',             slide_left_animation);
          sr.reveal('.slide-left-animation-delay',       slide_left_animation_delay);
	      sr.reveal('.slide-right-animation',            slide_right_animation);
	      sr.reveal('.slide-right-animation-delay',      slide_right_animation_delay);
	      sr.reveal('.fade-in-animation',                fade_in_animation);
		  sr.reveal('.fade-in-animation-delay',          fade_in_animation_delay);
		  sr.reveal('.slide-down-animation',             slide_down_animation);
		  sr.reveal('.slide-down-animation-delay',       slide_down_animation_delay);
		  sr.reveal('.right-animation',   				 right_animation);
          sr.reveal('.fade-in-single-ani',        {  duration: 500, delay: 200, origin: 'right' }, 300);
          sr.reveal('.another-one-with-delay',  {  duration: 500, origin: 'right' }, 300);
          sr.reveal('.fading-one-item', {  duration: 500, delay: 200, origin: 'right' }, 300);
          sr.reveal('.fading-single-item', {  duration: 500, delay: 200, origin: 'right' }, 300);
  sr.reveal('.slideup-two', {  duration: 1500, delay: 1500, origin: 'bottom',distance: '100px',scale    : 1 }, 80);

 });
