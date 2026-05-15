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
        const target = +counter.getAttribute('data-target');
        const suffix = counter.getAttribute('data-suffix') || '';
        
        const updateCount = () => {
            const currentText = counter.innerText.replace('+', '').replace('%', '');
            const count = +currentText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc) + suffix;
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target + suffix;
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

/* 11. Global Form Handler */
function global_form(form_id, response_id) {
    var url = window.location.href;

    // Ensure all dropdown hidden inputs are properly set before submission
    $(form_id).find('input[type="hidden"].dropdown-input').each(function () {
        var hiddenInput = $(this);
        var dropdownContainer = hiddenInput.closest('.custom-contact-select');
        var selectedDiv = dropdownContainer.find('.selected');

        // Only set value if a selection has been made
        var isSelected = selectedDiv.text().trim() !== 'What Are You Looking For?' &&
            selectedDiv.text().trim() !== 'Budget' &&
            selectedDiv.text().trim() !== '';

        if (!isSelected) {
            hiddenInput.val('');
        }
    });

    $(response_id).show();
    
    var mf = $(form_id + ' input[id="mandatory_fields_except_file_fields"]').val();
    var mff = $(form_id + ' input[id="mandatory_file_fields"]').val();
    var ef = $(form_id + ' input[id="email_fields"]').val();
    var cf = $(form_id + ' input[id="contact_fields"]').val();
    var ff = $(form_id + ' input[id="file_fields"]').val();
    var ft = $(form_id + ' input[id="form_type"]').val();
    var df = $(form_id + ' input[id="downlaoded_file"]').val();
    var tm = $(form_id + ' input[id="thanks_message"]').val();
    var ts = $(form_id + ' input[id="thanks_redirection_status"]').val();
    var tu = $(form_id + ' input[id="thanks_url"]').val();
    var duplicate_email = $(form_id + ' input[id="duplicate_by_email_enabled"]').val();
    var duplicate_message = $(form_id + ' input[id="duplicate_message"]').val();
    var email_from = $(form_id + ' input[id="email_from"]').val();
    var email_to = $(form_id + ' input[id="email_to"]').val();
    
    var form_elem = $(form_id)[0];
    var data = new FormData(form_elem);

    // Set Page_URL if present
    if ($(form_id).find('#Page_URL').length) {
        $(form_id).find('#Page_URL').val(url);
    }

    var ajax_url = (typeof BASE_PATH !== 'undefined' ? BASE_PATH : '') + 'form-ajax-global.php';

    $.ajax({
        type: 'POST',
        url: ajax_url + '?mf=' + escape(mf) + '&mff=' + escape(mff) + '&ef=' + escape(ef) + '&cf=' + escape(cf) + '&ff=' + escape(ff) + '&ft=' + escape(ft) + '&tm=' + escape(tm) + '&df=' + escape(df) + '&ts=' + escape(ts) + '&tu=' + escape(tu) + '&email=' + escape(email_from) + '&duplicate_by_email_enabled=' + escape(duplicate_email) + '&dmessage=' + escape(duplicate_message) + '&email_to=' + escape(email_to),
        data: data,
        contentType: false,
        cache: false,
        processData: false,
    }).done(function (data) {
        $(response_id).hide();
        if (~data.indexOf("green")) {
            if ((tu == '') || (ts == 'no')) {
                $(response_id).html(data);
                $.alert({ backgroundDismiss: true, title: 'Success!', type: 'green', theme: 'light', content: data });

                // Reset form only on success
                $(form_id)[0].reset();
                
                // Reset dropdown displays
                $(form_id).find('.custom-contact-select .selected').each(function (index) {
                    if ($(this).closest('.custom-contact-select').find('#service-input').length || $(this).text().includes('Looking')) {
                        $(this).html('What Are You Looking For? <span class="arrow"><i class="fas fa-angle-down"></i></span>');
                    }
                });
                $(form_id).find('.dropdown .selected').each(function() {
                    var text = $(this).text();
                    if (text.includes('Looking')) {
                        $(this).html('What Are You Looking For? <span class="arrow"><i class="fas fa-angle-down"></i></span>');
                    }
                });

            } else {
                $(response_id).html(data);
                $.alert({ backgroundDismiss: true, title: 'Success!', type: 'green', theme: 'light', content: data });
                
                // Reset form
                $(form_id)[0].reset();

                setTimeout(function () {
                    window.location.replace(tu);
                }, 2500);
            }
        } else {
            $.alert({ backgroundDismiss: true, title: 'Error!', type: 'red', theme: 'light', content: data });
        }
    }).fail(function () {
        alert("Posting failed. Please check your internet connection.");
    });
    return false;
}




