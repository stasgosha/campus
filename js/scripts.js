$(document).ready(function(){
    var player;
	function createVideo(videoBlockId, videoId) {
		player = new YT.Player(videoBlockId, {
			videoId: videoId,
			playerVars: {
				'autohide': 1,
				'showinfo' : 0,
				'rel': 0,
				'loop': 1,
				'playsinline': 1,
				'fs': 0,
				'allowsInlineMediaPlayback': true
			},
			events: {
				'onReady': function (e) {
					// e.target.mute();
					// if ($(window).width() > 991) {
						setTimeout(function(){
							e.target.playVideo();
						}, 200);
					// }
				}
			}
		});
	}
    
// Video
$('.video-block:not([data-video-modal])').on('click', function () {
    $(this).addClass('playing');
    $(this).find('.block-overlay').fadeOut(300);

    let videoId = $(this).find('.play-btn').data('video-id');

    if (!videoId) {
        videoId = $(this).data('video-id');
    }

    if (videoId == undefined) {
        $(this).find('video')[0].play();
    } else{
        let videoType = $(this).data('video-type') ? $(this).data('video-type').toLowerCase() : 'youtube';

        if (videoType == 'youtube') {
            $(this).find('.block-video-container').append('<div class="video-iframe" id="'+videoId+'"></div>');
            createVideo(videoId, videoId);
        } else if(videoType == 'vimeo'){
            $(this).find('.block-video-container').append('<div class="video-iframe" id="'+videoId+'"><iframe allow="autoplay" class="video-iframe" src="https://player.vimeo.com/video/'+videoId+'?playsinline=1&autoplay=1&transparent=0&app_id=122963"></div>');
        }
    }
});
})

const swiper = new Swiper('.trusted-section__slider', {
    speed: 18000,
    spaceBetween: 40,
    slidesPerView: 1.9,
    loop: true,
    autoplay: {
        enabled: true,
        delay: 0,
    },
    centeredSlides: true,
    breakpoints: {
        // when window width is >= 1300px
        1200: {
          slidesPerView: 7.5
        }
    }
  });

  const swiperPhone = new Swiper('.how-help-sect__phone-pics', {
    speed: 500,
    spaceBetween: 0,
    slidesPerView: 1,
    loop: true,
    navigation: {
        nextEl: '.how-help-sect__phone-next',
        prevEl: '.how-help-sect__phone-prev',
      },
    autoplay: {
        enabled: false,
        delay: 500,
    },
    centeredSlides: false,
  });

  const swiperOnSearch = new Swiper('.big-search-sect__item-hidden-bottom-slider, .modal-slider', {
    speed: 500,
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: '.big-search-sect__item-hidden-bottom-slider-pagination, .modal-slider-slider-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return `<span class="swiper-pagination-bullet">${index+1}</span>`;
        },
      },
      navigation: {
        nextEl: '.big-search-sect__item-hidden-bottom-slider-next, .modal-slider-slider-next',
        prevEl: '.big-search-sect__item-hidden-bottom-slider-prev, .modal-slider-slider-prev',
      },
  })

  const swiperReviews = new Swiper('.sliderSwiper', {
    speed: 500,
    spaceBetween: 35,
    slidesPerView: 1.3,
    loop: true,
    navigation: {
        nextEl: '.how-help-sect__phone-next',
        prevEl: '.how-help-sect__phone-prev',
      },
    autoplay: {
        enabled: false,
        delay: 500,
    },
    centeredSlides: true,
    breakpoints: {
        // when window width is >= 1300px
        320: {
            slidesPerView: 1.41,
            spaceBetween: 35,
            centeredSlides: false,
        },
        768: {
            centeredSlides: false,
            slidesPerView: 1.5,
            spaceBetween: 35,
        },
        992: {
            centeredSlides: true,
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1440: {
            centeredSlides: true,
            slidesPerView: 2.7,
            spaceBetween: 70,
        }
    }
  });

  $(document).ready(() => {
    setInterval(function() {
        $('.your-campus__phone-gif').toggleClass('changed')
    }, 800);
    if ($(window).width() < 1200){
        $('.steps-section .step03 .steps-section__pic').attr('data-translatey', '100');
        $('.video-section__right.animateme').attr('data-translatey', '130');
        $('.attendance-big-sect__top-wrapper').attr({
            "data-translatey": "50",
        });
        $('.attendance-big-sect__bottom-pic').attr({
            "data-translatey": "25",
        });
        $('.steps-section__step_dop .steps-section__pic').attr({
            "data-translatey": "90",
        });
        $('.attendance-big-sect__top-item').attr({
            "data-translatey": "0",
            "data-translatex": "-80"
        });
        $('.step02 .steps-section__arrow, .steps-section .step02 .steps-section__popup').addClass('animateme').attr({
            "data-when":"view", 
            "data-easing":"linear", 
            "data-from":"0", 
            "data-to":"1", 
            "data-translatey":"190",
        });
        $('.steps-section .step04 .steps-section__text, .steps-section .step06 .steps-section__text').removeClass('animateme');
        $('.steps-section .step03 .blue-btn, .steps-section .step04 .blue-btn, .steps-section .step06 .blue-btn, .steps-section__step_dop .blue-btn').addClass('animateme').attr({
            "data-when":"view", 
            "data-easing":"linear", 
            "data-from":"0", 
            "data-to":"1", 
            "data-translatey":"100",
        });
    }
    if ($(window).width() > 991){
        const movementStrength = 25;
        let height = movementStrength / $(window).height();
        let width = movementStrength / $(window).width();
        $('.your-campus__phone').mousemove( e => {
            let pageX = e.pageX - ($(window).width() / 2);
            let pageY = e.pageY - ($(window).height() / 2);
            let newvalueX = width * pageX * -1 - 25;
            let newvalueY = height * pageY * -1 - 50;
            $('.your-campus__phone').css('transform', 'translate('+newvalueX+'px, '+newvalueY+'px)');
            
        })  
}})


  $('.big-search-sect__item-arrow').click(function(){


    if($(this).parent('.big-search-sect__item-header').parent('.big-search-sect__item').hasClass('opened')){
        $(this).parent('.big-search-sect__item-header').parent('.big-search-sect__item').removeClass('opened')
    }else{
        $('.big-search-sect__item').removeClass('opened')
        $(this).parent('.big-search-sect__item-header').parent('.big-search-sect__item').removeClass('opened')
    }
    
})


  $('.faq-section__question').click(function(){
    if ($(this).hasClass('opened')) {
        $('.faq-section__question').removeClass('opened')
        .find('.faq-section__answer')
        .slideUp()
      }
      else{
        $('.faq-section__question .faq-section__answer').slideUp()
        $('.faq-section__question').removeClass('opened')
        $(this).addClass('opened')
        .find('.faq-section__answer')
        .slideToggle();
      }
  })

$(function($){
	$(document).mouseup(function (e){ 
		var div = $(".lang-list, .lang-selector"); 
		if (!div.is(e.target)
		    && div.has(e.target).length === 0) { 
            $('.lang-list').slideUp(300);
		}
	});
});

$(function($){
    $(document).mouseup(function (e){ 
        var div = $(".header__search-btn, .search-form"); 
        if (!div.is(e.target)
            && div.has(e.target).length === 0) { 
            $('.search-form').slideUp(300);
        }
    });
});

$('.lang-selector').click(function(){
    $(this).toggleClass('opened');
    $('.lang-list').slideToggle(300);
    return false;
})

$('.header__search-btn').click(function(){
    $(this).toggleClass('opened');
    $('.search-form').slideToggle(300);
    return false;
})

$(".help-you__btn").mouseenter(function(){       
    $(this).addClass("hovered")
    .find('.help-you__btn-gif img').attr("src", function(index, attr){
    return attr.replace("svg", "gif");   
    })
})  

$(".help-you__btn").mouseleave(function(){       
    $(this).removeClass("hovered")
    .find('.help-you__btn-gif img').attr("src", function(index, attr){
    return attr.replace("gif", "svg");   
    })
})
    
$('.header__menu-btn').click(function(){
    $('body').toggleClass('menu-opened');
    return false;
})



$('.top-input').on('keyup', function(){
    if($(this).val().length > 1){
        $(this).parent().addClass('opened');
    }
    else{
        $(this).parent().removeClass('opened');
    }
})

$(document).mouseup(function (e){ 
    var div = $('.big-search-sect__forms-wrapper'); 
    if (!div.is(e.target)
        && div.has(e.target).length === 0) { 
        div.removeClass('opened');
    }
});

$('.big-search-sect__forms-wrapper.filter svg').click(function(){
    $(this).parent().removeClass('opened')
})

$('.modal .close').click(function(){
    $('.modal').fadeOut();
    $('body').removeClass('modal-opened')
})

$('.big-search-sect__item-hidden-bottom-slide-pic .wrapper').click(function(){
    $('.modal').fadeIn();
    $('body').addClass('modal-opened')
})

$(document).mouseup(function (e){ 
    var div = $('.modal-content'); 
    if (!div.is(e.target)
        && div.has(e.target).length === 0) { 
            $('.modal').fadeOut();
            $('body').removeClass('modal-opened')
    }
});