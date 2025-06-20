jQuery(document).ready(function() {
  jQuery("h1.banner-heading").each(function() {
      var eco_renewable_energy_t = jQuery(this).text();
      var eco_renewable_energy_splitT = eco_renewable_energy_t.split(" ");
      var eco_renewable_energy_lastSecondIndex = eco_renewable_energy_splitT.length - 2;
      var eco_renewable_energy_lastIndex = eco_renewable_energy_splitT.length - 1;
      var eco_renewable_energy_newText = "";
      for (var eco_renewable_energy_i = 0; eco_renewable_energy_i < eco_renewable_energy_splitT.length; eco_renewable_energy_i++) {
          if (eco_renewable_energy_i == eco_renewable_energy_lastSecondIndex || eco_renewable_energy_i == eco_renewable_energy_lastIndex) {
              eco_renewable_energy_newText += "<span style='color: var(--wp--preset--color--accent)'>";
              eco_renewable_energy_newText += eco_renewable_energy_splitT[eco_renewable_energy_i] + " ";
              eco_renewable_energy_newText += "</span>";
          } else {
            eco_renewable_energy_newText += eco_renewable_energy_splitT[eco_renewable_energy_i] + " ";
          }
      }
      jQuery(this).html(eco_renewable_energy_newText);
  });
  //Haeder Search placeholder
  jQuery('.search-column #wp-block-search__input-2').attr('placeholder', 'Search...');
});

// swiper js
jQuery(document).ready(function () {
  var eco_renewable_energy_swiper_testimonials = new Swiper(".testimonial-swiper-slider.mySwiper", {
    slidesPerView: 3,
      spaceBetween: 15,
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".testimonial-swiper-button-next",
        prevEl: ".testimonial-swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        1023: {
          slidesPerView: 3,
        }
      },
  })
});
