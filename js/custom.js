// Disable right-click context menu globally
document.addEventListener('contextmenu', function(event) {
    event.preventDefault();
    return false;
});

// Disable right-click on all elements
$(document).on('contextmenu', function(e) {
    e.preventDefault();
    return false;
});

// sticky header
$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
        $('.header_sec').addClass('fixed');
    } else {
        $('.header_sec').removeClass('fixed');
    }
});

$("#toggle").click(function() {
  $(this).toggleClass("on");
  $("#menu").slideToggle();
});

// $(".navbar-toggler").click(function() {
//   $('.navbar-brand').toggleClass("expan-logo");
// });

  // banner slider
  $('.banner_area').owlCarousel({
    center:true,
    loop:true,
    margin:0,
    stagePadding:0,
    dots:true,
    nav:false,
    autoplay:true,
    smartSpeed :1000,
    autoplayTimeout:6000,
    navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  });  



    $(".domain-area").owlCarousel({
      items: 4,
      margin:25,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      loop: true,
      dots: false,         // hides pagination
      nav: false,          // hides navigation arrows
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 2
        },
        1024: {
          items: 4
        }
      }
    });



  // services slider
$(document).ready(function() {
  var $slider = $('.serv-main-slider');

  $slider.owlCarousel({
    loop: true,
    margin: 120,
    stagePadding: 0,
    dots: true,
    nav: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayTimeout: 8000,
    navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });

  // Pause autoplay on hover
  $slider.on('mouseenter', function() {
    $slider.trigger('stop.owl.autoplay');
  });

  // Resume autoplay on mouse leave
  $slider.on('mouseleave', function() {
    $slider.trigger('play.owl.autoplay', [6000]);
  });
});


    var swiper = new Swiper(".testimonial_area", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
      autoplay: {
        delay: 4000, 
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper = new Swiper(".image_testi_area", {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
    });

    var swiper = new Swiper(".video_testi_area", {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 5000,
        disableOnInteraction: true, // stop when user plays video
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
    });

    // Play/Pause video testimonials on click
    $(document).on('click', '.video_testi_area video', function() {
        if (this.paused) {
            this.play();
        } else {
            this.pause();
        }
    });

    var swiper = new Swiper(".client-area", {
      slidesPerView: 6,
	  slidesPerGroup: 6,
      paginationClickable: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
            navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
    delay: 8000, // 3 seconds between slides
    disableOnInteraction: false, // continue autoplay after user interaction
  },

       breakpoints: {
    300: {
      slidesPerView: 2,
	  slidesPerGroup: 2,
      spaceBetween: 20
    },
    600: {
      slidesPerView: 2,
	  slidesPerGroup: 2,
      spaceBetween: 20
    },
    1024: {
      slidesPerView: 6,
	  slidesPerGroup: 6,
      spaceBetween: 20
    }

  }
    });  

/*
document.addEventListener('DOMContentLoaded', () => {
    const dropdown = document.querySelector('.dropdown');
    
    if (!dropdown) {
        console.error('Dropdown element not found');
        return;
    }

    // Single event listener using event delegation
    dropdown.addEventListener('click', (e) => {
        const target = e.target;

        // Toggle dropdown when clicking selected country
        if (target.matches('.selected-country') || target.closest('.selected-country')) {
            e.stopPropagation();
            dropdown.querySelector('.dropdown-list').classList.toggle('active');
            return;
        }

        // Handle list item clicks
        const listItem = target.closest('.dropdown-list li');
        if (listItem) {
            e.stopPropagation();
            const selectedCountry = dropdown.querySelector('.selected-country');
            const flagImg = selectedCountry.querySelector('img');
            const codeSpan = selectedCountry.querySelector('span');

            const code = listItem.dataset.code;
            const flag = listItem.dataset.flag;

            if (code && flag && flagImg && codeSpan) {
                flagImg.src = flag;
                flagImg.alt = `${listItem.textContent.trim()} Flag`;
                codeSpan.textContent = code;
                dropdown.querySelector('.dropdown-list').classList.remove('active');
            }
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
            dropdown.querySelector('.dropdown-list').classList.remove('active');
        }
    });
});   
*/

function openCity(evt, cityName, wid) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  var tabElement = document.getElementById(cityName);
  if (tabElement) {
    tabElement.style.display = "block";
  }

  // Handle both real clicks and simulated calls
  if (evt && evt.currentTarget) {
    evt.currentTarget.className += " active";
  } else {
    // For simulated calls, find and activate the corresponding button
    var buttons = document.getElementsByClassName("tablinks");
    for (i = 0; i < buttons.length; i++) {
      if (buttons[i].getAttribute('onclick') && buttons[i].getAttribute('onclick').includes(cityName)) {
        buttons[i].className += " active";
        break;
      }
    }
  }
}



const inputs = document.querySelectorAll("input, select");

inputs.forEach(input => {
  input.addEventListener("change", () => {
    if (input.value.trim() !== "") {
      input.style.backgroundColor = "#fff";
    }
  });
});





AOS.init();

/* 10. Counter Animation */
const animateCounters = () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const currentText = counter.innerText.replace('+', '').replace('%', '');
            const count = +currentText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc) + (counter.innerText.includes('%') ? '%' : '+');
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target + (counter.innerText.includes('%') ? '%' : '+');
            }
        };
        updateCount();
    });
};

const numbersSection = document.querySelector('.numbers-speak');
if (numbersSection) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    observer.observe(numbersSection);
}




