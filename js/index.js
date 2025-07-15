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
});
