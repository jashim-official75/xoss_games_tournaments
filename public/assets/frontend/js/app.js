


// sidebar js

function showSidebar() {
  document.querySelector('.sidebar').style.right = '0';
  document.querySelector('.overlay').style.display = 'block';
}

function closeSidebar() {
  document.querySelector('.sidebar').style.right = '-400px';
  document.querySelector('.overlay').style.display = 'none';
}

window.onload = function() {
    // Get preloader element
    var preloader = document.getElementById("preloader_container");
    // Hide preloader
    preloader.style.opacity = "0";
    preloader.style.visibility = "hidden";
}



 $(".slider__items").slick({
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });



const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute("aria-expanded");

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute("aria-expanded", "false");
  }

  if (itemToggle == "false") {
    this.setAttribute("aria-expanded", "true");
  }
}

items.forEach((item) => item.addEventListener("click", toggleAccordion));


$(document).ready(function () {
  $("#toggle_password").click(function () {
    $("#password_change").slideToggle("fast");
  });
});

const togglePassword = document.querySelectorAll(".toggle-password");

togglePassword.forEach((icon) => {
  icon.addEventListener("click", function () {
    const target = document.querySelector(icon.getAttribute("data-target"));

    if (target.type === "password") {
      target.type = "text";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    } else {
      target.type = "password";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    }
  });
});




// =============================
// tournament slider 
// =============================

$(".tournament_slider").slick({
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  adaptiveHeight: true,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  dots: true,
  fade: true,
  cssEase: 'linear',
  pauseOnHover:false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
        autoplaySpeed: 6000,
        dots: false,
      },
    },
  ],
});

