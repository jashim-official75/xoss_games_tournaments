
$(".prizes_slider").slick({
  infinite: true,
  speed: 500,
  slidesToShow: 6,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 1500,
  pauseOnHover:true,
  arrows:false,
  dots:true,
  touchMove:true,
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      },
    },
    {
      breakpoint: 1367,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
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
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],

});


let prevScrollPos = window.pageYOffset;
const header = document.getElementById("header");

window.onscroll = () => {
    const currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        header.style.transform = "translateY(0)";
    } else {
        header.style.transform = "translateY(-100%)";
    }

    prevScrollPos = currentScrollPos;
};

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


// $(document).ready(function () {
//   $("#toggle_password").click(function () {
//     $("#password_change").slideToggle("fast");
//   });
// });

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



const Confettiful = function (el) {
  this.el = el;
  this.containerEl = null;

  this.confettiFrequency = 3;
  this.confettiColors = ["#fce18a", "#ff726d", "#b48def", "#f4306d"];
  this.confettiAnimations = ["slow", "medium", "fast"];

  this._setupElements();
  this._renderConfetti();
};

Confettiful.prototype._setupElements = function () {
  const containerEl = document.createElement("div");
  const elPosition = this.el.style.position;

  if (elPosition !== "relative" || elPosition !== "absolute") {
    this.el.style.position = "relative";
  }

  containerEl.classList.add("confetti-container");

  this.el.appendChild(containerEl);

  this.containerEl = containerEl;
};

Confettiful.prototype._renderConfetti = function () {
  this.confettiInterval = setInterval(() => {
    const confettiEl = document.createElement("div");
    const confettiSize = Math.floor(Math.random() * 3) + 7 + "px";
    const confettiBackground =
      this.confettiColors[
        Math.floor(Math.random() * this.confettiColors.length)
      ];
    const confettiLeft = Math.floor(Math.random() * this.el.offsetWidth) + "px";
    const confettiAnimation =
      this.confettiAnimations[
        Math.floor(Math.random() * this.confettiAnimations.length)
      ];

    confettiEl.classList.add(
      "confetti",
      "confetti--animation-" + confettiAnimation
    );
    confettiEl.style.left = confettiLeft;
    confettiEl.style.width = confettiSize;
    confettiEl.style.height = confettiSize;
    confettiEl.style.backgroundColor = confettiBackground;

    confettiEl.removeTimeout = setTimeout(function () {
      confettiEl.parentNode.removeChild(confettiEl);
    }, 3000);

    this.containerEl.appendChild(confettiEl);
  }, 25);
};

window.confettiful = new Confettiful(document.querySelector(".js-container"));

