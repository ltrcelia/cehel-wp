document.addEventListener("DOMContentLoaded", function () {
  /* mouvements souris */
  const mouse = document.querySelector("#mouse");

  window.addEventListener("mousemove", (e) => {
    setTimeout(() => {
      mouse.style.top = e.clientY + "px";
      mouse.style.left = e.clientX + "px";
    }, 100);
  });
  /* fin */

  /* header */
  let lastScroll = 0;

  window.addEventListener("scroll", () => {
    if (window.scrollY < lastScroll) {
      navBar.style.top = 0;
    } else {
      navBar.style.top = "-90px";
    }
    lastScroll = window.scrollY;
  });
  /* fin */

  /* menu burger */
  const btnBurger = document.getElementById("btn");
  const menuBurger = document.getElementById("menu-burger");
  const menuLiens = document.querySelectorAll("a");

  btnBurger.addEventListener("click", () => {
    btnBurger.classList.toggle("active");
    menuBurger.classList.toggle("open");
  });
  menuLiens.forEach((link) => {
    link.addEventListener("click", () => {
      btnBurger.classList.remove("active");
      menuBurger.classList.remove("open");
    });
  });
  /* fin */

  /* realisations */
  jQuery(document).ready(function ($) {
    $(".btn-pink").on("click", function () {
      $(".btn-pink").removeClass("active");
      $(this).addClass("active");
      var category = $(this).data("category");

      $.ajax({
        url: "/portfolio-cehel/wp-admin/admin-ajax.php",
        type: "post",
        data: {
          action: "filter_projects",
          category: category,
        },
        success: function (response) {
          $(".realisation").html(response);
        },
      });
    });
  });
  /* fin */

  /* competences */
  jQuery(document).ready(function ($) {
    $(".more.design-g").click(function () {
      var hc_design = $(".hidden-container.hc-design");
      if (hc_design.hasClass("active")) {
        hc_design.removeClass("active");
      } else {
        hc_design.addClass("active");
        hc_design[0].scrollIntoView({ behavior: "smooth" });
        $(".hidden-container.hc-motion").removeClass("active");
        $(".hidden-container.hc-web").removeClass("active");
      }
    });

    $(".more.motion-d").click(function () {
      var hc_motion = $(".hidden-container.hc-motion");
      if (hc_motion.hasClass("active")) {
        hc_motion.removeClass("active");
      } else {
        hc_motion.addClass("active");
        hc_motion[0].scrollIntoView({ behavior: "smooth" });
        $(".hidden-container.hc-design").removeClass("active");
        $(".hidden-container.hc-web").removeClass("active");
      }
    });

    $(".more.web-d").click(function () {
      var hc_web = $(".hidden-container.hc-web");
      if (hc_web.hasClass("active")) {
        hc_web.removeClass("active");
      } else {
        hc_web.addClass("active");
        hc_web[0].scrollIntoView({ behavior: "smooth" });
        $(".hidden-container.hc-motion").removeClass("active");
        $(".hidden-container.hc-design").removeClass("active");
      }
    });
  });
  /* fin */

  /* ajouter son */
  const video = document.getElementById("videoPlayer");
  const toggleButton = document.getElementById("toggleSound");

  if (toggleButton) {
    toggleButton.addEventListener("click", function () {
      if (video.muted) {
        video.muted = false;
        toggleButton.textContent = "Désactiver le son";
      } else {
        video.muted = true;
        toggleButton.textContent = "Activer le son";
      }
    });
  }
  /* fin */

  /* lightbox */
  const images = document.querySelectorAll(".image-secondaire");
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const closeBtn = document.querySelector(".close");

  images.forEach((image) => {
    image.addEventListener("click", function () {
      handleImageClick(this.src);
    });
  });

  function handleImageClick(imageSrc) {
    lightbox.style.display = "flex";
    lightboxImg.src = imageSrc;
  }

  function closeModal() {
    lightbox.style.display = "none";
  }

  if (lightbox) {
    lightbox.addEventListener("click", (event) => {
      if (event.target === lightbox) {
        closeModal();
      }
    });

    closeBtn.addEventListener("click", () => {
      lightbox.style.display = "none";
    });
  }

  /* fin */
});
