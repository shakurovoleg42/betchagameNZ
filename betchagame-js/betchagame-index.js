document.addEventListener("DOMContentLoaded", function () {
  // начало модалки
  function showPopup() {
    document.querySelector(".popup-overlay").style.display = "block";
    document.querySelector(".popup").style.display = "block";
    document.body.style.overflow = "hidden";
  }

  function hidePopup() {
    document.querySelector(".popup-overlay").style.display = "none";
    document.querySelector(".popup").style.display = "none";
    document.body.style.overflow = "auto";
  }

  if (localStorage.getItem("popupShown") !== "true") {
    localStorage.setItem("popupShown", "true");
    showPopup();
  }

  document.getElementById("popup-close").addEventListener("click", hidePopup);
  // конец модалки

  const slider = document.querySelector(".betchagame-reviews_list");

  if (slider) {
    const sliderSwiper = new Swiper(slider, {
      loop: true,
      observer: true,
      observeParents: true,
      watchOverflow: true,
      slidesPerView: "auto",
      spaceBetween: 32,
      direction: "horizontal",
      simulateTouch: true,
      touchRatio: 1,
      a11y: {
        enabled: false,
      },
      navigation: {
        nextEl: ".slider-next",
        prevEl: ".slider-prev",
      },
    });
  }
});
