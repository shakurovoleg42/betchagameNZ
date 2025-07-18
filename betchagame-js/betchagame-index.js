document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".betchagame-reviews_list");
  const tabs = document.querySelectorAll(".register-tab");
  const form = document.getElementById("authForm");
  const emailGroup = document.querySelector(".email-group");
  const usernameGroup = document.querySelector(".username-group");
  const passwordGroup = document.querySelector(".password-group");

  function updateFormByTab(tabType) {
    if (!emailGroup || !usernameGroup || !passwordGroup) return;

    if (tabType === "register") {
      emailGroup.classList.remove("hidden");
      usernameGroup.classList.remove("hidden");
      passwordGroup.classList.add("hidden");
      form.querySelector('button[type="submit"]').textContent = "Register";
    } else if (tabType === "login") {
      emailGroup.classList.add("hidden");
      usernameGroup.classList.remove("hidden");
      passwordGroup.classList.remove("hidden");
      form.querySelector('button[type="submit"]').textContent = "Log In";
    }
  }

  // === Age popup logic ===
  function showAgePopup() {
    const overlay = document.getElementById("agePopupOverlay");
    const popup = document.getElementById("agePopupContent");

    if (overlay && popup) {
      overlay.style.display = "block";
      popup.style.display = "block";
      document.body.style.overflow = "hidden";
    }
  }

  function hideAgePopup() {
    const overlay = document.getElementById("agePopupOverlay");
    const popup = document.getElementById("agePopupContent");

    if (overlay && popup) {
      overlay.style.display = "none";
      popup.style.display = "none";
      document.body.style.overflow = "auto";
    }
  }

  if (localStorage.getItem("ageConfirmed") !== "true") {
    showAgePopup();
  }

  const ageConfirmBtn = document.getElementById("popup-close");
  if (ageConfirmBtn) {
    ageConfirmBtn.addEventListener("click", () => {
      localStorage.setItem("ageConfirmed", "true");
      hideAgePopup();
    });
  }

  // === Swiper init ===
  if (slider) {
    new Swiper(slider, {
      loop: true,
      observer: true,
      observeParents: true,
      watchOverflow: true,
      slidesPerView: "auto",
      spaceBetween: 32,
      direction: "horizontal",
      simulateTouch: true,
      touchRatio: 1,
      a11y: { enabled: false },
      navigation: {
        nextEl: ".slider-next",
        prevEl: ".slider-prev",
      },
    });
  }

  // === Burger menu toggle ===
  document.querySelector(".burger-menu").addEventListener("click", function () {
    this.classList.toggle("active");
    document.querySelector(".betchagame-nav").classList.toggle("active");
  });

  // === Auth tabs switch ===
  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      tabs.forEach((t) => t.classList.remove("active-tab"));
      tab.classList.add("active-tab");
      updateFormByTab(tab.dataset.tab);
    });
  });

  // === Sign Up / Log In popup open ===
  document.querySelectorAll(".betchagame-default__button").forEach((btn) => {
    const text = btn.textContent.trim();

    if (text === "Sign Up" || text === "Log In") {
      btn.addEventListener("click", () => {
        const signupPopup = document.getElementById("signupPopup");
        const form = document.getElementById("authForm");

        if (signupPopup && form) {
          signupPopup.classList.add("show");
          form.style.display = "block"; // ✅ Показываем форму снова
        }

        const targetTab = text === "Sign Up" ? "register" : "login";

        document.querySelectorAll(".register-tab").forEach((tab) => {
          tab.classList.toggle("active-tab", tab.dataset.tab === targetTab);
        });

        updateFormByTab(targetTab);
      });
    }
  });

  const popupMessageClose = document.getElementById("popupMessageClose");
  if (popupMessageClose) {
    popupMessageClose.addEventListener("click", () => {
      const popup = document.getElementById("popupMessage");
      if (popup) {
        popup.style.display = "none";
      }
    });
  }

  // === Close auth popup ===
  document.getElementById("closeSignupPopup").addEventListener("click", () => {
    document.getElementById("signupPopup").classList.remove("show");
  });

  document.getElementById("signupPopup").addEventListener("click", (e) => {
    if (e.target === e.currentTarget) {
      e.currentTarget.classList.remove("show");
    }
  });

  // === Form send ===
  const formSend = async (formData) => {
    const response = await fetch("/mail.php", {
      method: "POST",
      body: formData,
    });

    if (!response.ok) {
      throw new Error(
        `Ошибка по адресу /mail.php, статус ошибки ${response.status}`
      );
    }

    return await response.text();
  };

  function showPopupMessage(text) {
    const popup = document.getElementById("popupMessage");
    const popupText = document.getElementById("popupText");
    if (!popup || !popupText) return;

    popupText.textContent = text;
    popup.style.display = "flex";
    popup.classList.add("show");

    setTimeout(() => {
      popup.classList.remove("show");
      popup.style.display = "none";
    }, 5000);
  }

  if (document.querySelector("form")) {
    const forms = document.querySelectorAll("form");

    forms.forEach((form) => {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        formSend(formData)
          .then((response) => {
            form.reset();
            form.style.display = "none";
            document.getElementById("signupPopup").classList.remove("show");
            showPopupMessage("We have accepted your response");
          })
          .catch((err) => {
            console.error(err);
            showPopupMessage("Error response");
          });
      });
    });
  }
});
