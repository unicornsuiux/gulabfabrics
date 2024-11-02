document.addEventListener('DOMContentLoaded', function () {
  if (!localStorage.getItem('aosInitialized')) {
      AOS.init();
      localStorage.setItem('aosInitialized', 'true');
  }
});
AOS.init({
  once: true // Animations will happen only once
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    //>=, not <=
    if (scroll >= 115) {
        //clearHeader, not clearheader - caps H
        $("header").addClass("sticky_header");
    } else {
        $("header").removeClass("sticky_header");
    }
});



$('.solution_silder_wrap').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots:true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        768: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

$('.testimonail_silder').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    responsive: {
        0: {
            items: 1.5
        },
        600: {
            items: 1.5
        },
        1000: {
            items: 3.7
        }
    }
});
$('.partner_slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 5
        },
        1000: {
            items: 7
        }
    }
});




const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const headerMenu = document.getElementById("header");

// Open Close Navbar Menu on Click Burger
if (burgerMenu && navbarMenu) {
  burgerMenu.addEventListener("click", () => {
    burgerMenu.classList.toggle("is-active");
    navbarMenu.classList.toggle("is-active");
  });
}

// Close Navbar Menu on Click Menu Links
document.querySelectorAll(".menu-link").forEach((link) => {
  link.addEventListener("click", () => {
    burgerMenu.classList.remove("is-active");
    navbarMenu.classList.remove("is-active");
  });
});

// Change Header Background on Scrolling
window.addEventListener("scroll", () => {
  if (this.scrollY >= 85) {
    headerMenu.classList.add("on-scroll");
  } else {
    headerMenu.classList.remove("on-scroll");
  }
});

// Fixed Navbar Menu on Window Resize
window.addEventListener("resize", () => {
  if (window.innerWidth > 768) {
    if (navbarMenu.classList.contains("is-active")) {
      navbarMenu.classList.remove("is-active");
    }
  }
});

$(window).on('load', function () {
  // When the page is fully loaded, hide the loader
  $('.loader-wrapper').fadeOut('slow');
});