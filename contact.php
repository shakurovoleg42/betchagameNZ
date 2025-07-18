<!DOCTYPE html> 
<?php
include 'head.php';
?>
    <div class="betchagame-page">
      <?php include 'header.php'; ?>
      <main>
        <section class="betchagame-hero contact-section">
          <div class="betchagame-hero__content container">
            <h1>Contact Us</h1>
          </div>
        </section>
        <section class="betchagame-contact ">
          <div class="betchagame-contact__content container">
            <form id="contactForm">
              <input type="text" name="name" placeholder="Name" required />
              <input type="text" name="lastname" placeholder="Last Name" required />
              <textarea name="message" placeholder="Your Message" required></textarea>
            </form>
            <button class="betchagame-form__button">Send</button>
            <p id="formMessage" style="color: green; margin-top: 12px; display: none; font-size: 32px">Message sent successfully!</p>
          </div>
        </section>
      </main>
      <?php include 'footer.php'; ?>
    </div>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const sendBtn = document.querySelector(".betchagame-form__button");
    const messageElem = document.getElementById("formMessage");

    async function formSend(formData) {
      const response = await fetch("/mail.php", {
        method: "POST",
        body: formData,
      });
      if (!response.ok) {
        throw new Error("Server error: " + response.status);
      }
      return await response.text();
    }

    if (form && sendBtn && messageElem) {
      sendBtn.addEventListener("click", async (e) => {
        e.preventDefault();

        // Проверка на валидность формы
        if (!form.checkValidity()) {
          form.reportValidity();
          return;
        }

        const formData = new FormData(form);

        try {
          await formSend(formData);
          form.reset();
          messageElem.textContent = "Message sent successfully!";
          messageElem.style.color = "green";
          messageElem.style.display = "block";
        } catch (err) {
          messageElem.textContent = "Error sending message. Please try again.";
          messageElem.style.color = "red";
          messageElem.style.display = "block";
          console.error(err);
        }
      });
    }
  });
</script>

  </body>
</html>
