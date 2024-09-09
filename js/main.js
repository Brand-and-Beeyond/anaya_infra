$(function () {
    'use strict';
    /*
        - Variable declaration
        - Resize page
        - Page scroll
        - Event on the page scroll
        - Event on the page swipe
        - Preview animations
        - Custom cursor
        - Bottom panel contact form
        - Start appear animations
        - Toggle text slider
        - Search navigation
        - Navigation menu
        - Navigation sidebar
        - Tilt init
        - Product slideshow
        - AJAX contact form
        - About slideshow
        - Team grid
        - Video plyr
        - Grid section
        - Swiper init
        - Digital background canvas
        - Shop count button
        - Wishlist button
        - Google map init
        - Function calls
    */

    // Variable declaration
    let bottomPanel = $('.page-bottom-panel'),
        navigation = $('.navigation'),
        pageSocialList = $('.page-social-list').find('.social-list'),
        heroInteractiveMenu = $('.hero-interactive-menu'),
        heroProjectSlideshow = $('.project-slideshow'),
        heroDigitalBackground = $('.hero-digital-background'),
        heroGlitchLinks = $('.hero-glitch-links'),
        footer = $('footer'),
        preloader = $('.page-loader-wrapper'),
        preloaderWrapper = $('.page-loader-wrapper--background'),
        preloaderSpin = preloader.find('.page-loader-wrapper--loader'),
        general = {
            w: $(window).innerWidth(),
            h: $(window).innerHeight(),
            body: $('body'),
            doc: document,
            win: window,
            offsetY: window.pageYOffset,
            root: document.querySelector(':root'),
            pageLoad: false
        };

    // Resize page
    $(general.win).resize(() => {
        general.w = $(general.win).innerWidth();
        general.h = $(general.win).innerHeight();
    });

    // Page scroll
    $(general.win).scroll(() => {
        general.offsetY = general.win.pageYOffset;
    });

    // Event on the page scroll
    let pageScrollEvent = (scrollUpFunc, scrollDownFunc) => {
        $(general.win).on('mousewheel DOMMouseScroll', function (e) {
            if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
                scrollUpFunc();
            }
            else {
                scrollDownFunc();
            }
        });
    };

    // Event on the page swipe
    let pageSwipeEvent = (swipeElement, swipeUpFunc, swipeDownFunc, swipeLeftFunc, swipeRightFunc) => {
        if ($(swipeElement).length) {
            let swipeDet = new Object(),
                minX = 30,
                maxX = 30,
                minY = 50,
                maxY = 60,
                direc = "",
                ele = document.querySelector(swipeElement);
            swipeDet.sX = 0;
            swipeDet.sY = 0;
            swipeDet.eX = 0;
            swipeDet.eY = 0;
            ele.addEventListener('touchstart', function (e) {
                let t = e.touches[0];
                swipeDet.sX = t.screenX;
                swipeDet.sY = t.screenY;
            }, false);
            ele.addEventListener('touchmove', function (e) {
                e.preventDefault();
                let t = e.touches[0];
                swipeDet.eX = t.screenX;
                swipeDet.eY = t.screenY;
            }, false);
            ele.addEventListener('touchend', function (e) {
                if ((((swipeDet.eX - minX > swipeDet.sX)
                    || (swipeDet.eX + minX < swipeDet.sX))
                    && ((swipeDet.eY < swipeDet.sY + maxY)
                        && (swipeDet.sY > swipeDet.eY - maxY)
                        && (swipeDet.eX > 0)))) {
                    if (swipeDet.eX > swipeDet.sX) swipeRightFunc();
                    else swipeLeftFunc();
                }
                else if ((((swipeDet.eY - minY > swipeDet.sY)
                    || (swipeDet.eY + minY < swipeDet.sY))
                    && ((swipeDet.eX < swipeDet.sX + maxX)
                        && (swipeDet.sX > swipeDet.eX - maxX)
                        && (swipeDet.eY > 0)))) {
                    if (swipeDet.eY > swipeDet.sY) direc = swipeDownFunc();
                    else swipeUpFunc();
                }
                direc = "";
                swipeDet.sX = 0;
                swipeDet.sY = 0;
                swipeDet.eX = 0;
                swipeDet.eY = 0;
            }, false);
        }
    };

    // Preview animations
    let setPreviewAnimation = () => {
        let waypoints = $('.animation-element').waypoint(function (direction) {
            let obj = $(this);
            $(obj[0].element).addClass('animate-element');
        }, {
            offset: '25%'
        });
    };

    // Custom cursor
    let mouseBall = () => {
        let xmouse, ymouse;
        document.addEventListener('mousemove', function (e) {
            xmouse = e.clientX || e.pageX;
            ymouse = e.clientY || e.pageY;
        });
        let ball = document.querySelector('#ball-cursor'),
            x = void 0,
            y = void 0,
            dx = void 0,
            dy = void 0,
            tx = 0,
            ty = 0,
            key = -1,
            followMouse = function followMouse() {
                key = requestAnimationFrame(followMouse);
                if (!x || !y) {
                    x = xmouse;
                    y = ymouse;
                } else {
                    dx = (xmouse - x) * 0.125;
                    dy = (ymouse - y) * 0.125;
                    if (Math.abs(dx) + Math.abs(dy) < 0.1) {
                        x = xmouse;
                        y = ymouse;
                    } else {
                        x += dx;
                        y += dy;
                    }
                }
                ball.style.left = x + 'px';
                ball.style.top = y + 'px';
            };
        followMouse();
    };

    // Bottom panel contact form
    let bottomPanelContact = () => {
        if (bottomPanel.length) {
            let contactFormWrapper = bottomPanel.find('.contact-form-wrapper'),
                toggle = bottomPanel.find('.contact-toggle'),
                staggerItems = contactFormWrapper.children();

            let resetItems = () => {
                TweenMax.set(staggerItems, {
                    opacity: 0,
                    transform: 'translateX(0) translateY(50px)',
                });
            };

            let openPanel = () => {
                TweenMax.to(contactFormWrapper, 1, {
                    transform: 'translateY(0)',
                    ease: Expo.easeInOut
                }).play();
                TweenMax.staggerTo(staggerItems, 1, {
                    delay: 0.5,
                    opacity: 1,
                    transform: 'translateY(0)',
                    ease: Expo.easeInOut
                }, 0.15);
            }, hidePanel = () => {
                TweenMax.staggerTo(staggerItems, 1, {
                    opacity: 0,
                    transform: 'translateY(50px)',
                    ease: Power3.easeIn,
                }, 0.1);
                TweenMax.to(contactFormWrapper, 1, {
                    delay: 0.6,
                    transform: 'translateY(100%)',
                    ease: Expo.easeInOut,
                }).play();
            };

            let contactToggle = TweenMax.to(toggle, 1, {}).reverse();

            toggle.on('click', () => {
                if (contactToggle.reversed() && !toggle.hasClass('active-toggle')) {
                    contactToggle.play();
                    openPanel();
                }
                if (!contactToggle.reversed() && toggle.hasClass('active-toggle')) {
                    contactToggle.reverse();
                    hidePanel();
                }
            });

            resetItems();
        }
    };

    // Start appear animations
    let startAppear = () => {
        if (pageSocialList.length) {
            let items = pageSocialList.children();
            TweenMax.staggerTo(items, 0.6, {
                delay: 0.2,
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut
            }, 0.1);
        }

        if (bottomPanel.length) {
            let contactNav = bottomPanel.find('.contact-wrapper'),
                linksList = bottomPanel.find('.links-list'),
                langList = bottomPanel.find('.languages-list');
            if (contactNav.length) {
                TweenMax.to(contactNav, 1.5, {
                    delay: 0.4,
                    y: 0,
                    ease: Expo.easeInOut
                });
            }
            if (linksList.length) {
                TweenMax.staggerTo(linksList.children(), 1, {
                    delay: 0.8,
                    opacity: 1,
                    y: 0,
                    ease: Expo.easeInOut
                }, 0.1);
            }
            if (langList.length) {
                TweenMax.staggerTo(langList.children(), 1, {
                    delay: 1,
                    opacity: 1,
                    y: 0,
                    ease: Expo.easeInOut
                }, 0.1);
            }
        }

        if (navigation.length) {
            let rightSide = navigation.find('.right-side'),
                leftSide = navigation.find('.left-side'),
                logoWrapper = navigation.find('.logo-wrapper');

            TweenMax.staggerTo(leftSide.children(), 1, {
                delay: 0.6,
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut,
            }, 0.1);

            TweenMax.to(logoWrapper, 1, {
                delay: 0.8,
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut
            });

            TweenMax.staggerTo(rightSide.children(), 1, {
                delay: 1,
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut,
                onComplete: () => {
                    $(rightSide.children()).not(':first-child').addClass('animate-element');
                }
            }, 0.1);
        }

        if (heroInteractiveMenu.length) {
            let menuItems = heroInteractiveMenu.find('.menu__item');
            TweenMax.staggerTo(menuItems, 1, {
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut
            }, 0.15);
        }

        if (heroProjectSlideshow.length) {
            let slideshow = heroProjectSlideshow.find('.slideshow'),
                slidenav = heroProjectSlideshow.find('.slidenav');
            TweenMax.to(slideshow, 0.6, {
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut,
            });
            TweenMax.staggerTo(slidenav.children(), 1, {
                delay: 0.5,
                opacity: 1,
                ease: Expo.easeInOut
            }, 0.15);
        }

        if (heroDigitalBackground.length) {
            let textWrapper = heroDigitalBackground.find('.text-wrapper');
            TweenMax.staggerTo(textWrapper.children(), 1, {
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut
            }, 0.15);
        }

        if (heroGlitchLinks.length) {
            let glitchSlides = heroGlitchLinks.find('.glitch-slides'),
                glitchNav = heroGlitchLinks.find('.slide-nav');
            TweenMax.to(glitchSlides, 1, {
                opacity: 1,
                y: 1,
                ease: Expo.easeInOut
            });
            TweenMax.staggerTo(glitchNav.children(), 0.3, {
                delay: 0.5,
                scale: 1,
                y: 0,
                ease: Power3.ease,
            }, 0.15);
        }
    };

    // Toggle text slider
    let toggleTextSlider = () => {
        let toggleTextSlider = $('.toggle-text-slider');

        $(toggleTextSlider).each(function () {
            let toggleTrigger = true;
            $(this).on('click', function () {
                let $this = $(this),
                    textWrapper = $this.find('.text-slider-wrapper');
                if (!$this.hasClass('active-toggle') && toggleTrigger) {
                    toggleTrigger = false;
                    TweenMax.to(textWrapper.find(':first-child'), 1, {
                        transform: 'translateY(-100%)',
                        ease: Expo.easeInOut,
                        onComplete: () => {
                            $this.addClass('active-toggle');
                        }
                    });
                    TweenMax.to(textWrapper.find(':last-child'), 1, {
                        transform: 'translateY(0)',
                        ease: Expo.easeInOut,
                    });
                }
                if ($this.hasClass('active-toggle') && !toggleTrigger) {
                    toggleTrigger = true;
                    TweenMax.to(textWrapper.find(':first-child'), 1, {
                        transform: 'translateY(0)',
                        ease: Expo.easeInOut,
                        onComplete: () => {
                            $this.removeClass('active-toggle');
                        }
                    });
                    TweenMax.to(textWrapper.find(':last-child'), 1, {
                        transform: 'translateY(100%)',
                        ease: Expo.easeInOut,
                    });
                }
            });
        });
    };

    // Search navigation
    let searchNavigation = () => {
        let searchToggle = navigation.find('.search-toggle'),
            searchFormWrapper = navigation.find('.search-form-wrapper'),
            searchForm = navigation.find('.search-form'),
            sidebarWrapper = navigation.find('.sidebar-wrapper'),
            sidebarWrapperWidth,
            rightSide = navigation.find('.right-side'),
            searchFormToggle = TweenMax.to(searchToggle, 1, {}).reverse(),
            mobileSearchForm = navigation.find('.mobile-search-form'),
            mobileSearchFormExitToggle = mobileSearchForm.find('.exit-toggle'),
            showForm = () => {
                if (general.w > 768) {
                    TweenMax.staggerTo(rightSide.children().not(searchFormWrapper), 0.8, {
                        opacity: 0,
                        transform: 'translateY(25px)',
                        ease: Expo.easeInOut,
                        onComplete: () => {
                            sidebarWrapperWidth = sidebarWrapper.outerWidth(true);
                            TweenMax.to(sidebarWrapper, 0.8, {
                                width: 0,
                                ease: Expo.easeInOut,
                            });
                            if (general.w > 1024) {
                                TweenMax.to(searchForm, 0.8, {
                                    width: '300px',
                                    ease: Power3.easeInOut,
                                }).play();
                            } else {
                                TweenMax.to(searchForm, 0.8, {
                                    width: '200px',
                                    ease: Power3.easeInOut,
                                }).play();
                            }
                        }
                    }, 0.1);
                    rightSide.children().not(':first-child').addClass('animate-element-hide').removeClass('animate-element');
                } else {
                    TweenMax.to(mobileSearchForm, 1, {
                        transform: 'scale(1)',
                        opacity: 1,
                        pointerEvents: 'auto',
                        ease: Expo.easeInOut,
                        onComplete: () => {
                            searchToggle.addClass('active-toggle');
                        }
                    });
                }
            },
            hideForm = () => {
                if (general.w > 768) {
                    TweenMax.to(searchForm, 0.8, {
                        width: '0',
                        ease: Expo.easeInOut,
                        onComplete: () => {
                            TweenMax.staggerTo(rightSide.children().not(searchFormWrapper), 0.5, {
                                opacity: 1,
                                transform: 'translateY(0)',
                                ease: Expo.easeInOut,
                            }, 0.1);
                            rightSide.children().not(':first-child').removeClass('animate-element-hide').addClass('animate-element');
                        }
                    }).play();
                    TweenMax.to(sidebarWrapper, 0.8, {
                        width: sidebarWrapperWidth + 'px',
                        ease: Expo.easeInOut,
                    });
                } else {
                    TweenMax.to(mobileSearchForm, 1, {
                        transform: 'scale(0.9)',
                        opacity: 0,
                        pointerEvents: 'none',
                        ease: Expo.easeInOut,
                        onComplete: () => {
                            searchToggle.removeClass('active-toggle');
                        }
                    });
                }
            };

        searchToggle.on('click', function () {
            if (searchFormToggle.reversed() && !searchToggle.hasClass('active-toggle')) {
                showForm();
                searchFormToggle.play();
            }
            if (general.w > 768) {
                if (!searchFormToggle.reversed() && searchToggle.hasClass('active-toggle')) {
                    hideForm();
                    searchFormToggle.reverse();
                }
            }
        });
        mobileSearchFormExitToggle.on('click', function () {
            if (!searchFormToggle.reversed() && searchToggle.hasClass('active-toggle')) {
                hideForm();
                searchFormToggle.reverse();
            }
        });
    };


    let preloaderHide = () => {
        if (preloaderSpin.length) {
            TweenMax.to(preloaderSpin, 1, {
                opacity: 0,
                ease: Expo.easeInOut,
                pointerEvents: 'none',
            }).play();
            TweenMax.to(preloader, 1, {
                delay: 0.5,
                y: '-100%',
                ease: Expo.easeInOut,
                onComplete: () => {
                    TweenMax.to(preloader, 0, {
                        pointerEvents: 'none',
                    });
                }
            }).play();
        }
    };

    // Navigation menu
    let navigationMenu = () => {
        let toggle = navigation.find('.menu-toggle'),
            toggleClose = navigation.find('.menu-close'),
            menuWrapper = navigation.find('.navigation-menu-wrapper'),
            subMenus = menuWrapper.find('.sub-menu'),
            menuList = menuWrapper.find('.navigation-menu-list'),
            navigationOverlay = menuWrapper.find('.navigation-overlay'),
            menuToggle = gsap.timeline({ paused: true }).to(toggle, { duration: 1 }).reverse(),
            imageWrapper = menuWrapper.find('.navigation-image-side'),
            navigationAnimateElement = menuWrapper.find('.navigation-animate-element'),
            imageOverlay;
    
        let init = () => {
            $(subMenus).each(function () {
                $(this).prepend('<span class="menu-item back-link"><a href="#"><p><i class="fa fa-angle-left"></i></p> go back </a></span>');
            });
            menuList.children().children('a').addClass('menu-item-has-children-link');
            $(menuWrapper.find('ul')).each(function () {
                let i = 1;
                if ($(this).hasClass('sub-menu')) {
                    $($(this).children().not(':first-child').children('a')).each(function () {
                        $(this).prepend('<p>' + (i < 10 ? '0' : '') + i + '</p>');
                        i++;
                    });
                } else {
                    $($(this).children().children('a')).each(function () {
                        $(this).prepend('<p>' + (i < 10 ? '0' : '') + i + '</p>');
                        i++;
                    });
                }
            });
            $(menuList.children()).each(function () {
                imageWrapper.append('<div class="image-background" style="background-image: url(' + $(this).data('navigation-overlay-image') + ')"></div>');
                imageOverlay = imageWrapper.find('.image-background');
            });
            gsap.set(imageOverlay.first(), {
                opacity: 1,
                className: '+=image-active'
            });
        };
    
        $(menuList.children().children('a')).on('mouseenter', function () {
            gsap.to(imageWrapper.children('.image-active'), { duration: 0.2, opacity: 0, className: '-=image-active' });
            gsap.to(imageWrapper.children().eq($(this).parent().index()), { duration: 0.2, opacity: 1, className: '+=image-active' });
        });
    
        let showItems = (items, delay, onCompleteFunc) => {
                gsap.to(items, {
                    duration: 0.5,
                    delay: delay,
                    y: 0,
                    opacity: 1,
                    pointerEvents: 'auto',
                    ease: 'power3.out',
                    onComplete: onCompleteFunc,
                    stagger: 0.1
                });
            },
            hideItems = (items, onCompleteFunc) => {
                gsap.to(items, {
                    duration: 0.7,
                    y: 50,
                    opacity: 0,
                    pointerEvents: 'none',
                    ease: 'power3.in',
                    onComplete: onCompleteFunc,
                    stagger: 0.1
                });
            },
            showMenu = function () {
                gsap.to(navigationOverlay.children(), {
                    duration: 0.7,
                    width: '50%',
                    ease: 'expo.inOut',
                    onComplete: () => {
                        $(menuWrapper).css('pointer-events', 'auto');
                        toggle.addClass('active-toggle');
                        showItems(menuWrapper.find('.active-list').children().children('a'), 0.7);
                        menuWrapper.addClass('animate-element').removeClass('animate-element-hide');
                        gsap.to(toggleClose, {
                            duration: 1,
                            opacity: 1,
                            pointerEvents: 'auto',
                            ease: 'expo.inOut'
                        });
                        gsap.to(navigationAnimateElement, {
                            duration: 1,
                            opacity: 1,
                            ease: 'expo.inOut',
                            stagger: 0.15,
                            onComplete: () => {
                                menuToggle.play();
                            }
                        });
                        gsap.to(imageOverlay, {
                            duration: 0.5,
                            x: 0,
                            ease: 'expo.inOut'
                        });
                    }
                });
            },
            hideMenu = function () {
                let hideOverlay = () => {
                    gsap.to(navigationOverlay.children(), {
                        duration: 0.5,
                        width: 0,
                        ease: 'power3.in',
                        onComplete: () => {
                            menuToggle.reverse();
                            $(menuWrapper).css('pointer-events', 'none');
                        }
                    });
                };
                hideItems(menuWrapper.find('.active-list').children().children('a'), hideOverlay);
                gsap.to(navigationAnimateElement, {
                    duration: 1,
                    opacity: 0,
                    ease: 'power3.in',
                    stagger: 0.1
                });
                gsap.to(toggleClose, {
                    duration: 1,
                    opacity: 0,
                    pointerEvents: 'none',
                    ease: 'expo.inOut',
                    onComplete: () => {
                        toggle.removeClass('active-toggle');
                    }
                });
                if (general.w > 768) {
                    gsap.to(imageOverlay, {
                        duration: 0.5,
                        x: '-110%',
                        ease: 'power3.in'
                    });
                }
                menuWrapper.addClass('animate-element-hide').removeClass('animate-element');
            };
    
        toggle.on('click', function () {
            if (menuToggle.reversed() && !toggle.hasClass('active-toggle')) {
                showMenu();
            }
        });
    
        toggleClose.on('click', function () {
            if (!menuToggle.reversed() && toggle.hasClass('active-toggle')) {
                hideMenu();
            }
        });
    
        menuList.children('.menu-item-has-children').children('a').on('click', function () {
            let subMenu = $(this).parent().children('.sub-menu');
            let showItemsCallback = () => {
                $(this).parent().parent().removeClass('active-list');
                subMenu.addClass('active-list');
                showItems($(this).parent().children('.sub-menu').children().children('a'), 0.2);
            };
            hideItems($(this).parent().parent().children().children('a'), showItemsCallback);
        });
    
        init();
        subMenus.children('.back-link').on('click', function () {
            let showItemsCallback = () => {
                $(this).parent().removeClass('active-list');
                $(this).parent().parent().parent().addClass('active-list');
                showItems($(this).parent().parent().parent().children().children('a'), 0.2);
            };
            hideItems($(this).parent().children().children('a'), showItemsCallback);
        });
    };
    

    // Navigation sidebar
    let navigationSidebar = () => {
        let sidebar = $('.sidebar-side-panel'),
            sidebarClose = sidebar.find('.menu-close'),
            sidebarToggle = navigation.find('.sidebar-toggle');
        sidebarToggle.on('click', function () {
            TweenMax.to(sidebar, 1, {
                transform: 'translateX(0)',
                ease: Expo.easeInOut
            });
        });
        sidebarClose.on('click', function () {
            TweenMax.to(sidebar, 1, {
                transform: 'translateX(100%)',
                ease: Expo.easeInOut
            });
        });
    };

    // Tilt init
    let tiltInit = () => {
        let tiltWrapper = $('.tilt-wrapper');
        if ($(tiltWrapper).length) {
            $(tiltWrapper).each(function () {
                let $this = $(this);
                $this.tilt({
                    maxTilt: $this.data('tilt-value'),
                    perspective: $this.data('tilt-perspective'),
                    easing: "cubic-bezier(.03,.98,.52,.99)",
                    scale: $this.data('tilt-scale'),
                    speed: $this.data('tilt-speed'),
                    transition: true,
                    disableAxis: null,
                    reset: true,
                    glare: false,
                    maxGlare: 0.05
                });
            });
        }
    };

    // Product slideshow
    let heroSlideshow = () => {
        let heroSlideshow = $('.hero-slideshow'),
            slidesContainer = heroSlideshow.find('.slides-container'),
            slides = slidesContainer.find('.slides'),
            slide = slides.children(),
            slideshowNavigation = bottomPanel.find('.slideshow-navigation'),
            pagination = heroSlideshow.find('.pagination-line'),
            productInformation = heroSlideshow.find('.product-information'),
            exploreToggle = bottomPanel.find('.links-list .explore-btn'),
            purchaseToggle = bottomPanel.find('.links-list .purchase-btn'),
            finishedTrigger = true,
            bullets,
            bulletActive;

        let init = () => {
            TweenMax.set(slide.not('.slide-active').not(), {
                x: '-100%',
                scale: 0.6,
            });
            $(slide).each(function () {
                if ($(this).index() === 0) {
                    pagination.append('<div class="pagination-bullet pagination-bullet-active"></div>');
                } else {
                    pagination.append('<div class="pagination-bullet"></div>');
                }
            });
        };

        let goToNextSlide = (slideOut, slideIn) => {
                if (slide.length > 1 && slideOut.index() < slide.length - 1 && finishedTrigger) {
                    bulletActive = pagination.children('.pagination-bullet-active');
                    finishedTrigger = false;
                    TweenMax.to(slideOut, 1, {
                        opacity: 0,
                        x: '100%',
                        scale: 0.6,
                        className: '-=slide-active',
                        ease: Expo.easeInOut
                    });
                    TweenMax.to(slideIn, 1, {
                        opacity: 1,
                        x: '0%',
                        scale: 1,
                        className: '+=slide-active',
                        ease: Expo.easeInOut,
                        onComplete: () => {
                            finishedTrigger = true;
                        }
                    });
                    bulletActive.removeClass('pagination-bullet-active').next().addClass('pagination-bullet-active');
                }
            },
            goToPrevSlide = (slideOut, slideIn) => {
                if (slide.length > 1 && slideOut.index() > 0 && finishedTrigger) {
                    bulletActive = pagination.children('.pagination-bullet-active');
                    finishedTrigger = false;
                    TweenMax.to(slideOut, 1, {
                        opacity: 0,
                        x: '-100%',
                        scale: 0.6,
                        className: '-=slide-active',
                        ease: Expo.easeInOut
                    });
                    TweenMax.to(slideIn, 1, {
                        opacity: 1,
                        x: '0%',
                        scale: 1,
                        className: '+=slide-active',
                        ease: Expo.easeInOut,
                        onComplete: () => {
                            finishedTrigger = true;
                        }
                    });
                    bulletActive.removeClass('pagination-bullet-active').prev().addClass('pagination-bullet-active');
                }
            };

        let paginationSlideshow = () => {
            bullets = pagination.children();
            bulletActive = bullets.children('pagination-bullet-active');
            setInterval(function () {
                goToNextSlide(slides.children('.slide-active'), slides.children('.slide-active').next());
            }, 6000);
        };

        init();

        TweenMax.to(slides.children('.slide-active'), 1, {
            delay: 0.5,
            opacity: 1,
            y: 0,
            ease: Expo.easeInOut,
            onComplete: () => {
                paginationSlideshow();
                slideshowNavigation.children('.next-arrow').on('click', function () {
                    goToNextSlide(slides.children('.slide-active'), slides.children('.slide-active').next());
                });
                slideshowNavigation.children('.prev-arrow').on('click', function () {
                    goToPrevSlide(slides.children('.slide-active'), slides.children('.slide-active').prev());
                });
            }
        });
        TweenMax.staggerTo(pagination.children(), 1, {
            delay: 0.7,
            opacity: 1,
            y: 0,
            ease: Expo.easeInOut,
        }, 0.1);
    };

    // AJAX contact form
    let ajaxContact = () => {
        let form = $('#ajax-contact'),
            formMessages = $('#form-messages');
        $(form).on('submit', function (event) {
            event.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            }).done(function (response) {
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
                $(formMessages).text(response);
                $('#name').val('');
                $('#email').val('');
                $('#subject').val('');
                $('#message').val('');
            }).fail(function (data) {
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
        });
        let formFront = $('#ajax-contact-front');
        $(formFront).on('submit', function (event) {
            event.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: $(formFront).attr('action'),
                data: formData
            }).done(function (response) {
                $('#email').val('');
            }).fail(function (data) {

            });
        });
    };

    // About slideshow
    let heroAboutSlideshow = () => {
        let aboutSlideshow = $('.about-slideshow'),
            slidesContainer = aboutSlideshow.find('.slides-container'),
            slides = slidesContainer.find('.slides'),
            slide = slides.children(),
            activeSlide = slides.children('.slide-active'),
            pagination = slidesContainer.find('.pagination-steps'),
            finishedTrigger = true;

        let init = () => {
            $(slide).each(function () {
                if ($(this).index() === 0) {
                    pagination.append('<div class="pagination-bullet pagination-bullet-active"></div>');
                } else {
                    pagination.append('<div class="pagination-bullet"></div>');
                }
            });
            TweenMax.staggerTo(pagination.children(), 0.5, {
                delay: 0.5,
                opacity: 1,
                y: 0,
                ease: Power3.ease
            }, 0.1);
            TweenMax.staggerTo(slidesContainer, 0.5, {
                delay: 0.5,
                opacity: 1,
                y: 0,
                ease: Power3.ease
            }, 0.1);
        };

        let scrollUp = () => {
                if (finishedTrigger && slides.children('.slide-active').index() > 0) {
                    finishedTrigger = false;
                    pagination.children().eq(slides.children('.slide-active').index()).removeClass('pagination-bullet-active');
                    TweenMax.to(slides.children('.slide-active'), 1, {
                        transform: 'translateY(100%)',
                        ease: Expo.easeInOut,
                        className: '-=slide-active',
                    });
                    TweenMax.to(slides.children('.slide-active').prev(), 1, {
                        transform: 'translateY(0)',
                        ease: Expo.easeInOut,
                        className: '+=slide-active',
                        onComplete: () => {
                            finishedTrigger = true;
                        }
                    });
                }
            },
            scrollDown = () => {

                if (finishedTrigger && slides.children('.slide-active').index() < slide.length - 1) {
                    finishedTrigger = false;
                    pagination.children().eq(slides.children('.slide-active').index() + 1).addClass('pagination-bullet-active');
                    TweenMax.to(slides.children('.slide-active'), 1, {
                        transform: 'translateY(-100%)',
                        ease: Expo.easeInOut,
                        className: '-=slide-active',
                    });
                    TweenMax.to(slides.children('.slide-active').next(), 1, {
                        transform: 'translateY(0)',
                        ease: Expo.easeInOut,
                        className: '+=slide-active',
                        onComplete: () => {
                            finishedTrigger = true;
                        }
                    });
                }
            };

        pageScrollEvent(scrollUp, scrollDown);
        pageSwipeEvent('.about-slideshow', scrollDown, scrollUp, null, null);
        init();
    };

    // Team grid
    let teamGridInteractive = () => {
        let teamGridInteractive = $('.team-grid-interactive'),
            teamGridWrapper = teamGridInteractive.find('.team-grid-wrapper'),
            teamGrid = teamGridWrapper.find('.team-grid'),
            gridItem = teamGrid.find('.grid-item'),
            gridItemInformationWrapper = teamGridInteractive.find('.team-members-information');

        $(gridItem).on('click', function () {
            let index = $(this).index();
            console.log($(this),index);
            TweenMax.to(teamGridWrapper, 1, {
                transform: 'translateX(110%)',
                ease: Expo.easeInOut,
            });
            TweenMax.to(gridItemInformationWrapper.children().eq(index), 1, {
                transform: 'translateX(0)',
                ease: Expo.easeInOut,
            });
        });
        $(gridItemInformationWrapper.children()).each(function () {
            let backItem = $(this).find('.back-toggle');
            backItem.on('click', () => {
                TweenMax.to(teamGridWrapper, 1, {
                    transform: 'translateX(0)',
                    ease: Expo.easeInOut
                });
                TweenMax.to($(this), 1, {
                    transform: 'translateX(-110%)',
                    ease: Expo.easeInOut
                });
            });
        });
    };

    // Video plyr
    let videoPlyr = () => {
        let videoDefault = '.video-default',
            videoPost = '.video-post';
        const player = new Plyr(videoDefault);
        const postPlayer = new Plyr(videoPost, {
            controls: ['play-large', 'play', 'progress', 'current-time', 'settings', 'airplay', 'fullscreen']
        });
    };

    // Grid section
    let gridSectionSection = () => {
        let gridSection = $('.grid-section'),
            grid = gridSection.find('.grid'),
            buttonsGroup = gridSection.find('.grid-filtering-button-group'),
            waypointsGroup = buttonsGroup.waypoint(function () {
                TweenMax.staggerTo(buttonsGroup.children(), 0.5, {
                    opacity: 1,
                    transform: 'translateY(0)',
                    pointerEvents: true,
                    ease: Power3.ease
                }, 0.15);
            }, {
                offset: '100%'
            });

        let waypointsGrid = $(grid).waypoint(() => {
            TweenMax.to(grid, 0.5, {
                opacity: 1,
                y: 0,
                ease: Power3.ease
            });
        }, {
            offset: '100%'
        });

        let gridSectionGrid = () => {
            grid.isotope({
                itemSelector: '.grid-item',
                layoutMode: 'masonry'
            });
            buttonsGroup.on('click', '.button', function () {
                let filterValue = $(this).attr('data-filter');
                buttonsGroup.find('.button').removeClass('active-button');
                $(this).addClass('active-button');
                grid.isotope({filter: filterValue});
                if (filterValue !== '*') {
                    TweenMax.set($(filterValue).children(), {
                        opacity: 1,
                        y: 0
                    });
                }
            });
        };
        gridSectionGrid();
    };

    // Swiper init
    let swiperInit = () => {
        if ($('.swiper-post').length) {
            let swiperPost = new Swiper('.swiper-post', {
                speed: 1000,
                navigation: {
                    nextEl: '.swiper-post-button-next',
                    prevEl: '.swiper-post-button-prev',
                },
                autoplay: {
                    delay: 5000,
                },
                scrollbar: {
                    el: '.swiper-post-scrollbar',
                    draggable: true,
                },
            });
        }
        if ($('.swiper-default').length) {
            let defaultSlider = new Swiper('.swiper-default', {
                speed: 1000,
                loop: true,
                navigation: {
                    nextEl: '.swiper-default-button-next',
                    prevEl: '.swiper-default-button-prev',
                },
            });
        }
    };

    // Digital background canvas
    let digitalBackground = () => {
        let scenePhysics = '.physics-scene';
        if ($(scenePhysics).length) {
            let canvas = document.querySelector(scenePhysics);
            let width = canvas.offsetWidth,
                height = canvas.offsetHeight;
            let renderer = new THREE.WebGLRenderer({
                canvas: canvas,
                antialias: true,
                alpha: true
            });
            renderer.setPixelRatio(window.devicePixelRatio > 1 ? 2 : 1);
            renderer.setSize(width, height);
            renderer.setClearColor(0x000000, 0);
            let scene = new THREE.Scene();
            let camera = new THREE.PerspectiveCamera(40, width / height, 0.1, 1000);
            camera.position.set(0, 0, 350);
            let sphere = new THREE.Group();
            scene.add(sphere);
            let material = new THREE.LineBasicMaterial({
                color: $('.physics-scene--wrapper').data('animation-color')
            });
            let linesAmount = 18;
            let radius = 100;
            let verticesAmount = 50;
            for (let j = 0; j < linesAmount; j++) {
                let index = j;
                let geometry = new THREE.Geometry();
                geometry.y = (index / linesAmount) * radius * 2;
                for (let i = 0; i <= verticesAmount; i++) {
                    let vector = new THREE.Vector3();
                    vector.x = Math.cos(i / verticesAmount * Math.PI * 2);
                    vector.z = Math.sin(i / verticesAmount * Math.PI * 2);
                    vector._o = vector.clone();
                    geometry.vertices.push(vector);
                }
                let line = new THREE.Line(geometry, material);
                sphere.add(line);
            }

            function updateVertices(a) {
                for (let j = 0; j < sphere.children.length; j++) {
                    let line = sphere.children[j];
                    line.geometry.y += 0.3;
                    if (line.geometry.y > radius * 2) {
                        line.geometry.y = 0;
                    }
                    let radiusHeight = Math.sqrt(line.geometry.y * (2 * radius - line.geometry.y));
                    for (let i = 0; i <= verticesAmount; i++) {
                        let vector = line.geometry.vertices[i];
                        let ratio = noise.simplex3(vector.x * 0.009, vector.z * 0.009 + a * 0.0006, line.geometry.y * 0.009) * 15;
                        vector.copy(vector._o);
                        vector.multiplyScalar(radiusHeight + ratio);
                        vector.y = line.geometry.y - radius;
                    }
                    line.geometry.verticesNeedUpdate = true;
                }
            }

            function render(a) {
                requestAnimationFrame(render);
                updateVertices(a);
                renderer.render(scene, camera);
            }

            function onResize() {
                canvas.style.width = '';
                canvas.style.height = '';
                width = canvas.offsetWidth;
                height = canvas.offsetHeight;
                camera.aspect = width / height;
                camera.updateProjectionMatrix();
                renderer.setSize(width, height);
            }

            let mouse = new THREE.Vector2(0.8, 0.5);

            function onMouseMove(e) {
                mouse.y = e.clientY / window.innerHeight;
                TweenMax.to(sphere.rotation, 2, {
                    x: (mouse.y * 1),
                    ease: Power1.easeOut
                });
            }

            requestAnimationFrame(render);
            window.addEventListener("mousemove", onMouseMove);
            let resizeTm;
            window.addEventListener("resize", function () {
                resizeTm = clearTimeout(resizeTm);
                resizeTm = setTimeout(onResize, 200);
            });
        }
    };

    // Shop count button
    let shopCount = () => {
        $('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
        let spinner = $(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max'),
            newVal,
            oldValue;
        btnUp.on('click', function () {
            oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                newVal = oldValue;
            } else {
                newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
        btnDown.on('click', function () {
            let oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                newVal = oldValue;
            } else {
                newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
    };

    // Wishlist button
    let wishlistButton = () => {
        let wishlistButton = $('.wishlist-button').on('click', function () {
            $(this).toggleClass('active');
        });
    };

    // Google map init
    let googleMapInit = () => {
        if ($('#google-map').length) {
            let myLatLng = {
                    lat: -25.363,
                    lng: 131.044
                },
                map = new google.maps.Map(document.getElementById('google-map'), {
                    center: myLatLng,
                    zoom: 5,
                    styles: [
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 40
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        }
                    ]
                }),
                marker = new google.maps.Marker({
                    map: map,
                    position: myLatLng,
                    title: 'Hello World!'
                });
        }
    };

    // Function calls
    general.body.imagesLoaded({}, function () {
        preloaderHide();
        setTimeout(function () {
            setPreviewAnimation();
            mouseBall();
            bottomPanelContact();
            startAppear();
            toggleTextSlider();
            searchNavigation();
            navigationMenu();
            heroSlideshow();
            heroAboutSlideshow();
            tiltInit();
            teamGridInteractive();
            videoPlyr();
            gridSectionSection();
            swiperInit();
            googleMapInit();
            digitalBackground();
            navigationSidebar();
            wishlistButton();
            ajaxContact();
            shopCount();
            if ($('.slideshow').length) {
                const slideshow = new Slideshow(document.querySelector('.slideshow'));
            }
            if ($('.gallery-menu').length) {
                const controller = new NavController(document.querySelector('.gallery-menu'));
            }
            if ($('.glitch-slides').length) {
                const slideshow = new GlitchSlideshow(document.querySelector('.glitch-slides'));
                Array.from(document.querySelectorAll('.slide-nav > a')).forEach((link, pos) =>
                    link.addEventListener('click', (ev) => {
                        ev.preventDefault();
                        if (!slideshow.isReady(pos)) return;
                        slideshow.navigate(pos);
                        link.parentNode.querySelector('.slide-nav__text--current').classList.remove('slide-nav__text--current');
                        link.classList.add('slide-nav__text--current');
                    })
                );
            }
        }, 1000);
    });
});
