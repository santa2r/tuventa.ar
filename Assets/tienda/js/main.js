window.addEventListener('load', () => {
	loadLoader();
	loadSwiperSlider();
	loadMetismenu();
	loadTippy();
	loadIziToast();
	loadNiceSelect2();
	loadRaterJS();
	loadMixitup();
});

/* ----> See more <---- */

element = document.querySelectorAll('.btn-see-more');
element && element.forEach((element) => {
	element.addEventListener('click', (e) => {
		const father = e.currentTarget.closest('.see-more');
		const see_more_container = father.querySelector('.see-more-container');
		const see_more_content = father.querySelector('.see-more-content');
		const icon_rotate = father.querySelector('i');

		see_more_container.classList.toggle('gradient-bottom');
		icon_rotate.classList.toggle('rotate-180');

		see_more_container.style.transition = 'max-height 1s ease';
		see_more_container.style.maxHeight = see_more_content.offsetHeight + 'px';

		let duration = see_more_container.style.transitionDuration;

		if (duration.includes('ms')) {
			duration = parseInt(duration);
		} else if (duration.includes('s')) {
			duration = 1000 * parseFloat(duration);
		}

		if (icon_rotate.classList.contains('rotate-180')) {
			setTimeout(() => (see_more_container.style.maxHeight = 'max-content'), duration);
		} else {
			setTimeout(() => (see_more_container.style.maxHeight = ''), 10);
		}
	});
});

/* ----> Tabs Login <---- */

const buttons_tabs = document.querySelectorAll('.btn-tabs');
const blocks_tabs = document.querySelectorAll('.tabs-block');

//contains all tabs
buttons_tabs && buttons_tabs.forEach((element, i) => {
	//an event is added to each of the tabs
	element.addEventListener('click', (event) => {
		//remove the active state along with its transition
		buttons_tabs.forEach((button, i) => {
			blocks_tabs[i].style.cssText = '';
			blocks_tabs[i].classList.remove('active');
			button.classList.remove('active');
		});

		//we activate and add the transition to the clicked element
		blocks_tabs[i].style.cssText = 'transition : all .8s ease';
		blocks_tabs[i].classList.add('active');
		element.classList.add('active');
	});
});


/* ----> Open Modals <---- */

calculatePositionTab = (button) => {
	if (!button.hasAttribute('data-tab')) { return; }

	const position = button.getAttribute('data-tab');
	const tabs = document.querySelectorAll('.entry-modal .btn-tabs');
	tabs[position].click();
};

/* ---- Close Modals ---- */

/* All Modals */
element = document.querySelectorAll('.btn-close-modal');
element && element.forEach((element) => {
	element.addEventListener('click', (e) => {
		const modal = e.target.closest('.modal');
		const modal_content = modal.querySelector('.modal-content');
		const tab_block_active = modal.querySelector('.tabs-block.active');
		const body = document.querySelector('body');

		modal.classList.replace('opacity-100', 'opacity-0');
		modal.classList.replace('visible', 'invisible');
		body.classList.remove('overflow-hidden');

		if(modal_content.classList.contains('scale-100')){
			modal_content.classList.replace('scale-100', 'scale-0');
			modal_content.classList.replace('opacity-100', 'opacity-0');
		}

		if (modal_content.classList.contains('right-0')) {
			modal_content.classList.replace('right-0', 'right-[-999px]');
		}
		if (modal_content.classList.contains('left-0')) {
			modal_content.classList.replace('left-0', 'left-[-999px]');
		}
		if (tab_block_active) {
			setTimeout(() => tab_block_active.classList.remove('active'), 300);
		}
	});
});

/* ----> Increment / Decrement <---- */

element = document.querySelectorAll('.quantity');
element && element.forEach((element) => {
	const quantity_value = element.querySelector('.quantity-value');
	const quantity_buttons = element.querySelectorAll('.quantity-btn');

	quantity_buttons.forEach((btn) => {
		btn.addEventListener('click', (e) => {
			const element = e.currentTarget.classList;
			if (element.contains('increment')) {
				quantity_value.value++;
			}
			if (element.contains('decrement') && quantity_value.value > 0) {
				quantity_value.value--;
			}
		});
	});
});

/* ----> Input #number <---- */

element = document.querySelectorAll('.input-number');
element && element.forEach((element) => {
	element.addEventListener('onpaste', (e) => e.preventDefault());

	element.addEventListener('keydown', (e) => {
		if (isNaN(parseInt(e.key)) && e.keyCode != 8) {
			return e.preventDefault();
		}
	});
});

element = document.querySelector('.btn-gotop');
element && element.addEventListener('click', (e) => {
	window.scrollTo({
		top: 0,
		behavior: 'smooth',
	});
});

/* ----> Checked all checkbox <---- */

element = document.querySelector('#check-all');
element && element.addEventListener('click', (e) => {
	const checkbox = e.currentTarget;
	const check_product = document.querySelectorAll('.check-product');
	check_product.forEach((e) => {
		if (checkbox.checked) {
			e.checked = true;
		} else {
			e.checked = false;
		}
	}); 
}); 

window.addEventListener('click', (e) => {
    /* ----> Open Modals <---- */
    if (e.target.classList.contains('btn-open-modal')) {
        const button = e.target;
        const modal = document.querySelector(button.getAttribute('data-target'));
        const modal_content = modal.querySelector('.modal-content');
        const body = document.querySelector('body');
        body.classList.add('overflow-hidden');

        calculatePositionTab(button);

        modal.classList.replace('opacity-0', 'opacity-100');
        modal.classList.replace('invisible', 'visible');
        
        if (modal_content.classList.contains('scale-0')) {
            modal_content.classList.replace('scale-0', 'scale-100');
            modal_content.classList.replace('opacity-0', 'opacity-100');
            modal_content.classList.add('opacity-transform');
        }
        
        if (modal_content.classList.contains('right-[-999px]')) {
            modal_content.classList.replace('right-[-999px]', 'right-0');
        } else if (modal_content.classList.contains('left-[-999px]')) {
            modal_content.classList.replace('left-[-999px]', 'left-0');
        }
    }
    /* ----> Close Modals <---- */
    else if (e.target.classList.contains('btn-close-modal') || e.target.classList.contains('modal')) {
        const modal = e.target.closest('.modal');
        if (modal) {
            const modal_content = modal.querySelector('.modal-content');
            const body = document.querySelector('body');
            body.classList.remove('overflow-hidden');
            modal.classList.replace('opacity-100', 'opacity-0');
            modal.classList.replace('visible', 'invisible');

            if (modal_content.classList.contains('scale-100')) {
                modal_content.classList.replace('scale-100', 'scale-0');
                modal_content.classList.replace('opacity-100', 'opacity-0');
                modal_content.classList.remove('opacity-transform');
            }

            if (modal_content.classList.contains('right-0')) {
                modal_content.classList.replace('right-0', 'right-[-999px]');
            } else if (modal_content.classList.contains('left-0')) {
                modal_content.classList.replace('left-0', 'left-[-999px]');
            }
        }
    }

    /* ----> Heart Wishlist Animation <---- */
    else if (e.target.classList.contains('btn-wishlist')) {
        const heart_icon = e.target.children[0];

        if (heart_icon.classList.contains('bi-heart')) {
            heart_icon.classList.replace('bi-heart', 'bi-heart-fill');
            heart_icon.classList.add('text-red-400', 'heartscale');
        } else {
            heart_icon.classList.replace('bi-heart-fill', 'bi-heart');
            heart_icon.classList.remove('text-red-400', 'heartscale');
        }
    }
});

window.addEventListener('resize', (e) => {
	
	/* If the screen exceeds 1024px, the responsive menu will be hidden */

	if (e.target.innerWidth > 1023) {
		const button = document.querySelector('.menu-mob.visible .btn-close-modal');
		if (button) { button.click(); }
	}
});

window.addEventListener('scroll', (e) => {

	/* ----> Scroll to top Button <---- */
	
	if (window.scrollY > 500) {
		const btn_gotop = document.querySelector('.btn-gotop');
		btn_gotop.classList.replace('bottom-[-999px]', 'bottom-10');
		btn_gotop.classList.replace('opacity-0', 'opacity-100');
		btn_gotop.classList.replace('invisible', 'visible');
	} else {
		const btn_gotop = document.querySelector('.btn-gotop');
		//btn_gotop.classList.replace('bottom-10', 'bottom-[-999px]');
		//btn_gotop.classList.replace('opacity-100', 'opacity-0');
		//btn_gotop.classList.replace('visible', 'invisible');
	}
});

loadLoader = () => {
	setTimeout(() => {
		const loader_content = document.querySelector('.loader-content');
		loader_content.classList.add('transition-all', 'duration-500', 'opacity-0', 'invisible');
	}, 500);

	setTimeout(() => {
		const loader = document.querySelector('.loader');
		const body = document.querySelector('body');
		loader.classList.add('transition-all', 'duration-1000', 'opacity-0', 'invisible');
		body.classList.remove('overflow-hidden');
	}, 800);
}

/* ===============> Plugins <=============== */

/* ----> Swiper Slider <---- */

loadSwiperSlider = () => {
	element = document.querySelector('.swiper');

	/* Slider Banner */
	element && new Swiper('.swiper-banner', {
		spaceBetween: 30,
		centeredSlides: true,
		loop: true,
		effect: 'fade',
		fadeEffect: {
			crossFade: true,
		},
		autoplay: {
			delay: 3500,
			disableOnInteraction: false,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.button-next',
			prevEl: '.button-prev',
		},
	});

	/* Slider Categories */
	element && new Swiper('.swiper-default', {
		spaceBetween: 30,
		centeredSlides: true,
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});

	/* Slider Offers */
	element && new Swiper('.swiper-cards', {
		slidesPerView: 1,
		spaceBetween: 20,
		freeMode: true,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		breakpoints: {
			560: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			760: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			1280: {
				slidesPerView: 4,
				spaceBetween: 20,
			},
		},
		navigation: {
			nextEl: '.button-next',
			prevEl: '.button-prev',
		},
	});

	/* Slider Cards */
	element && new Swiper('.swiper-cards-2', {
		slidesPerView: 1,
		spaceBetween: 20,
		freeMode: true,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		breakpoints: {
			560: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			760: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
		},
		navigation: {
			nextEl: '.button-next',
			prevEl: '.button-prev',
		},
	});

	/* Slider Brands */
	element && new Swiper('.swiper-brands', {
		slidesPerView: 1,
		spaceBetween: 30,
		freeMode: true,
		loop: true,
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		breakpoints: {
			340: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			440: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			540: {
				slidesPerView: 4,
				spaceBetween: 20,
			},
			640: {
				slidesPerView: 5,
				spaceBetween: 20,
			},
			640: {
				slidesPerView: 7,
				spaceBetween: 20,
			},
		},
		navigation: {
			nextEl: '.button-next',
			prevEl: '.button-prev',
		},
	});

	/* Slider Products */
	element = document.querySelectorAll('.swiper-thumbs');
	swipper_top = document.querySelectorAll('.swiper-top');

	element && element.forEach((element, index) => {
		if (!element) { return; }
		const gallery = new Swiper(element, {
			spaceBetween: 10,
			slidesPerView: 4,
			freeMode: true,
			watchSlidesProgress: true,
		});

		const swiper = new Swiper(swipper_top[index], {
			spaceBetween: 10,
			effect: 'fade',
			allowTouchMove: false,
			zoom: {
				maxRatio: 2,
				toggle: true,
			},
			fadeEffect: {
				crossFade: true,
			},
			navigation: {
				nextEl: '.button-next',
				prevEl: '.button-prev',
			},
			thumbs: {
				swiper: gallery,
			},
		});

		swiper.slides.forEach((element) => {
			element.addEventListener('mouseover', function (e) {
				swiper.zoom.in();
			});

			element.addEventListener('mouseout', function (e) {
				swiper.zoom.out();
			});
		});
	});
};

/* ----> Metis Menu <---- */

loadMetismenu = () => {
	element = document.querySelectorAll('.metismenu');
	element && element.forEach((element) => {
		if (!element) { return; }
		new MetisMenu(element, {
			triggerElement: '.metismenu-btn',
			subMenu: '.metismenu-content',
		});
	});
};

/* ----> Tippy <---- */

loadTippy = () => {
	/* Modal - Button Wishlist */
	element = document.querySelector('.tippy');
	element && tippy('.tippy-wishlist', {
		content: 'Add to wishlist',
	});

	/* Icon Trash Remove */
	element && tippy('.tippy-remove', {
		content: 'Remove',
	});

	/* Card - Button Wishlist */
	element && tippy('.tippy-left-wishlist', {
		placement: 'left',
		content: 'Add to wishlist',
	});

	/* Card - Button Quick View */
	element && tippy('.tippy-left-card-view', {
		placement: 'left',
		content: 'Agregar al carrito',
		zIndex: 1,
	});

	/* Shop - Grid Icon */
	element = document.querySelector('.tippy');
	element && tippy('.tippy-grid', {
		content: 'Grid view',
	});

	/* Shop - List Icon */
	element = document.querySelector('.tippy');
	element && tippy('.tippy-list', {
		content: 'List view',
	});
};

/* ----> iziToast <---- */


loadIziToast = () => {
	element = document.querySelector('.form-leave-message');
	element && element.addEventListener('submit', (e) => {
		let request = (window.XMLHttpRequest) ? 
                    new XMLHttpRequest() : 
                    new ActiveXObject('Microsoft.XMLHTTP');
		let ajaxUrl = base_url+'/Tienda/contacto';
		let formData = new FormData(frmContacto);
	   	request.open("POST",ajaxUrl,true);
	    request.send(formData);
	    request.onreadystatechange = function(){
	    	if(request.readyState != 4) return;
	    	if(request.status == 200){
	    		let objData = JSON.parse(request.responseText);
	    		if(objData.status){	
                	document.querySelector("#frmContacto").reset();
	    		}
	    	}
			else{
					iziToast.success({
						title: 'Error',
						position: 'topRight',
						message: 'Error enviando Mensaje',
					});
	    		}
        	return false;
		}
		iziToast.success({
			title: 'OK',
			position: 'topRight',
			message: 'Enviando Mensaje',
		});
	});
};

/* ----> Nice Select2 <---- */

loadNiceSelect2 = () => {
	element = document.querySelectorAll('.nice-select');
	element && element.forEach((element) => {
		if (element.classList.contains('country')) {
			NiceSelect.bind(element, {
				placeholder: 'Tipo de Pago',
			});
		}
		if (element.classList.contains('order-by')) {
			NiceSelect.bind(element, {
				placeholder: 'Order by',
			});
		}
	});
};

/* ----> Rater Js <---- */

loadRaterJS = () => {
	element = document.querySelector('#rater');
	if (!element) { return; }

	let myRating = raterJs({
		element: element,
		rateCallback: function rateCallback(rating, done) {
			this.setRating(rating);
			done();
		},
		starSize: 32,
		step: 0.5,
	});

	/* Get the result */

	const form_review = document.querySelector('.form-review');
	form_review && form_review.addEventListener('submit', (e) => {
		document.querySelector('.rating-value').value = myRating.getRating();
	})
};

/* ----> Mixitup <---- */

loadMixitup = () => {
	element = document.querySelector('.products');
	if (!element) { return; }

	const params = {
		load: {
			filter: element.classList.contains('products-mixed') ? '.mix-grid' : 'all',
		}
	}

	mixitup(element, params);
}

//integro el viejo main

(function ($) {
    "use strict";

    /*[ Load page ]
    ===========================================================*/
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        loading: true,
        loadingParentElement: 'html',
        loadingClass: 'animsition-loading-1',
        loadingInner: '<div class="loader05"></div>',
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'html',
        transition: function(url){ window.location.href = url; }
    });
    
    /*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display','flex');
        } else {
            $("#myBtn").css('display','none');
        }
    });

    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });


    /*==================================================================
    [ Fixed Header ]*/
    var headerDesktop = $('.container-menu-desktop');
    var wrapMenu = $('.wrap-menu-desktop');

    if($('.top-bar').length > 0) {
        var posWrapHeader = $('.top-bar').height();
    }
    else {
        var posWrapHeader = 0;
    }
    

    if($(window).scrollTop() > posWrapHeader) {
        $(headerDesktop).addClass('fix-menu-desktop');
        $(wrapMenu).css('top',0); 
    }  
    else {
        $(headerDesktop).removeClass('fix-menu-desktop');
        $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
    }

    $(window).on('scroll',function(){
        if($(this).scrollTop() > posWrapHeader) {
            $(headerDesktop).addClass('fix-menu-desktop');
            $(wrapMenu).css('top',0); 
        }  
        else {
            $(headerDesktop).removeClass('fix-menu-desktop');
            $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
        } 
    });


    /*==================================================================
    [ Menu mobile ]*/
    $('.btn-show-menu-mobile').on('click', function(){
        $(this).toggleClass('is-active');
        $('.menu-mobile').slideToggle();
    });

    var arrowMainMenu = $('.arrow-main-menu-m');

    for(var i=0; i<arrowMainMenu.length; i++){
        $(arrowMainMenu[i]).on('click', function(){
            $(this).parent().find('.sub-menu-m').slideToggle();
            $(this).toggleClass('turn-arrow-main-menu-m');
        })
    }

    $(window).resize(function(){
        if($(window).width() >= 992){
            if($('.menu-mobile').css('display') == 'block') {
                $('.menu-mobile').css('display','none');
                $('.btn-show-menu-mobile').toggleClass('is-active');
            }

            $('.sub-menu-m').each(function(){
                if($(this).css('display') == 'block') { console.log('hello');
                    $(this).css('display','none');
                    $(arrowMainMenu).removeClass('turn-arrow-main-menu-m');
                }
            });
                
        }
    });


    /*==================================================================
    [ Show / hide modal search ]*/
    $('.js-show-modal-search').on('click', function(){
        $('.modal-search-header').addClass('show-modal-search');
        $(this).css('opacity','0');
    });

    $('.js-hide-modal-search').on('click', function(){
        $('.modal-search-header').removeClass('show-modal-search');
        $('.js-show-modal-search').css('opacity','1');
    });

    $('.container-search-header').on('click', function(e){
        e.stopPropagation();
    });


    /*==================================================================
    [ Isotope ]*/
    var $topeContainer = $('.isotope-grid');
    var $filter = $('.filter-tope-group');

    // filter items on button click
    $filter.each(function () {
        $filter.on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $topeContainer.isotope({filter: filterValue});
        });
        
    });

    // init Isotope
    $(window).on('load', function () {
        var $grid = $topeContainer.each(function () {
            $(this).isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows',
                percentPosition: true,
                animationEngine : 'best-available',
                masonry: {
                    columnWidth: '.isotope-item'
                }
            });
        });
    });

    var isotopeButton = $('.filter-tope-group button');

    $(isotopeButton).each(function(){
        $(this).on('click', function(){
            for(var i=0; i<isotopeButton.length; i++) {
                $(isotopeButton[i]).removeClass('how-active1');
            }

            $(this).addClass('how-active1');
        });
    });

    /*==================================================================
    [ Filter / Search product ]*/
    $('.js-show-filter').on('click',function(){
        $(this).toggleClass('show-filter');
        $('.panel-filter').slideToggle(400);

        if($('.js-show-search').hasClass('show-search')) {
            $('.js-show-search').removeClass('show-search');
            $('.panel-search').slideUp(400);
        }    
    });

    $('.js-show-search').on('click',function(){
        $(this).toggleClass('show-search');
        $('.panel-search').slideToggle(400);

        if($('.js-show-filter').hasClass('show-filter')) {
            $('.js-show-filter').removeClass('show-filter');
            $('.panel-filter').slideUp(400);
        }    
    });




    /*==================================================================
    [ Cart ]*/
    $('.js-show-cart').on('click',function(){
        $('.js-panel-cart').addClass('show-header-cart');
    });

    $('.js-hide-cart').on('click',function(){
        $('.js-panel-cart').removeClass('show-header-cart');
    });

    /*==================================================================
    [ Cart ]*/
    $('.js-show-sidebar').on('click',function(){
        $('.js-sidebar').addClass('show-sidebar');
    });

    $('.js-hide-sidebar').on('click',function(){
        $('.js-sidebar').removeClass('show-sidebar');
    });

    /*==================================================================
    [ Rating ]*/
    $('.wrap-rating').each(function(){
        var item = $(this).find('.item-rating');
        var rated = -1;
        var input = $(this).find('input');
        $(input).val(0);

        $(item).on('mouseenter', function(){
            var index = item.index(this);
            var i = 0;
            for(i=0; i<=index; i++) {
                $(item[i]).removeClass('zmdi-star-outline');
                $(item[i]).addClass('zmdi-star');
            }

            for(var j=i; j<item.length; j++) {
                $(item[j]).addClass('zmdi-star-outline');
                $(item[j]).removeClass('zmdi-star');
            }
        });

        $(item).on('click', function(){
            var index = item.index(this);
            rated = index;
            $(input).val(index+1);
        });

        $(this).on('mouseleave', function(){
            var i = 0;
            for(i=0; i<=rated; i++) {
                $(item[i]).removeClass('zmdi-star-outline');
                $(item[i]).addClass('zmdi-star');
            }

            for(var j=i; j<item.length; j++) {
                $(item[j]).addClass('zmdi-star-outline');
                $(item[j]).removeClass('zmdi-star');
            }
        });
    });
    
    /*==================================================================
    [ Show modal1 ]*/
    $('.js-show-modal1').on('click',function(e){
        e.preventDefault();
        $('.js-modal1').addClass('show-modal1');
    });

    $('.js-hide-modal1').on('click',function(){
        $('.js-modal1').removeClass('show-modal1');
    });



})(jQuery);