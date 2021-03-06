// Make jQuery available if needed
//const $j = jQuery.noConflict();

//// Site functions ////

// Hide me show me header
function headerHideShow() {
	let didScroll;
	let lastScrollTop = 0;

	const delta = 5;
	const navbar = document.querySelector( '#site-header' );
	const navbarHeight = navbar.offsetHeight;

	window.addEventListener( 'scroll', () => {
		didScroll = true;
	});

	setInterval( function() {
		if ( didScroll ) {
			hasScrolled();
			didScroll = false;
		}
	}, 250 );

	function hasScrolled() {
		let st = window.pageYOffset;

		if ( Math.abs( lastScrollTop - st ) <= delta ) {
			return;
		}

		if ( st > lastScrollTop && st > navbarHeight * 2 ) {

			// Scroll Down
			navbar.classList.remove( 'nav-down' );
			navbar.classList.add( 'nav-up' );
		} else {

			// Scroll Up
			if ( st + window.innerHeight < document.body.clientHeight ) {
				navbar.classList.remove( 'nav-up' );
				navbar.classList.add( 'nav-down' );
			}
		}

		lastScrollTop = st;
	}
}

// Smooth scroll
function smoothScroll() {
	const links = document.querySelectorAll( 'a[href*=\'#\']:not([href=\'#\']):not([href=\'#0\'])' );

	for ( const link of links ) {
		link.addEventListener( 'click', clickHandler );
	}

	function clickHandler( e ) {
		e.preventDefault();
		const href = this.getAttribute( 'href' );
		const offsetTop = document.querySelector( href ).offsetTop;

		scroll({
			top: offsetTop - 100,
			behavior: 'smooth'
		});
	}
}

// Navigation
function navMobile() {
	const navOpen = document.querySelector( '#nav-open' );
	const navClose = document.querySelector( '#nav-close' );
	const navContainer = document.querySelector( '#nav-mobile' );

	navOpen.addEventListener( 'click', function() {
		gsap.to( navContainer, {
			display: 'block'
		});
		gsap.to( navContainer, {
			autoAlpha: 1
		});
		document.documentElement.classList.add( 'noscroll' );
	});

	navClose.addEventListener( 'click', function() {
		gsap.to( navContainer, {
			autoAlpha: 0
		});
		gsap.to( navContainer, {
			display: 'none'
		});
		document.documentElement.classList.remove( 'noscroll' );
	});
} 


//// Flexible content functions ////


//// Utility functions ////

// DOM Ready
const DOMReady = function( callback ) {
	if ( 'interactive' === document.readyState || 'complete' === document.readyState ) {
		callback();
	} else if ( document.addEventListener ) {
		document.addEventListener( 'DOMContentLoaded', callback() );
	} else if ( document.attachEvent ) {
		document.attachEvent( 'onreadystatechange', function() {
			if ( 'loading' != document.readyState ) {
				callback();
			}
		});
	}
};

// Burger Menu

function siteMenu() {

	const menuBtn = document.querySelector('.menu-btn');
	const menu = document.querySelector('.navbar-menu');
	const html = document.body.parentNode;
	const nav = document.getElementById('site-navigation');

	menuBtn.addEventListener("click", function() {
		menuBtn.classList.toggle("opened");
		nav.classList.toggle("menu-open");

		if(menuBtn.classList.contains('opened') ) {
			menuBtn.setAttribute('aria-expanded', 'true');
			menu.style.display = "flex";
			html.style.overflow = "hidden";
		} else {
			menuBtn.setAttribute('aria-expanded', 'false');
			menu.style.display = "none";
			html.style.overflow = "unset";
		}
	})

	// Prevent parent link from working
	const menuItem = document.querySelectorAll('.menu-item');

	menuItem.forEach((item) => { 
		const subMenu = item.children[1];
		item.children[0].addEventListener('click', (e) => {
			if (subMenu) {
				e.preventDefault();		
			}
		})
	});
}

// MMENU

function navMmenu() {
    new Mmenu('#menu-inner', {
        wrappers: ['wordpress'],
        offCanvas: false,
        navbar: {
            sticky: false,
            title: 'Propellernet'
        },
        extensions: ['border-none', 'fullscreen', 'fx-panels-slide-100']
    });
}


//// Let's go! ////
DOMReady( function() {

	// headerHideShow();
    // smoothScroll();
	// navMmenu();
	siteMenu();

});



//// Preloader ///
/* const preloader = document.querySelector( '#page-preloader' );

function handlePreloader() {
	if ( preloader.classList.contains( 'loaded' ) ) {
		preloader.classList.remove( 'loaded' );
	}
	setTimeout( function() {
		preloader.classList.add( 'loaded' );
	}, 600 );
}
window.addEventListener( 'load', handlePreloader );
 */




