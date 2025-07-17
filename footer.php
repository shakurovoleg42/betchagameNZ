<?php
if (!function_exists('isActive')) {
  function isActive($path) {
    return $_SERVER['REQUEST_URI'] === $path;
  }
}
?>

<footer>
  <div class="betchagame-footer_content container">
    <!-- Первая линия -->
    <div class="betchagame-footer-lines">
      <div class="betchagame-footer-logo">
        <img src="/betchagame-images/betchagame-header-logo.svg" 
             alt="Logo" 
             style="width: 52px; height: 58px">
        <div class="betchagame-footer-text-logo">
          <p>BetchaGame — social gaming & prediction platform</p>
        </div>
      </div>
      <div style="display: flex; align-items: center">
        <ul class="betchagame-nav__list">
  <li><a href="/" <?= isActive('index', $current_page) ?>>Home</a></li>
  <li><a href="/play/" <?= isActive('play', $current_page) ?>>Play</a></li>
  <li><a href="/leaderboard.php" <?= isActive('leaderboard.php', $current_page) ?>>Leaderboard</a></li>
  <li><a href="/challenges.php" <?= isActive('challenges.php', $current_page) ?>>Challenges</a></li>
  <li><a href="/about.php" <?= isActive('about.php', $current_page) ?>>About</a></li>
  <li><a href="/faq.php" <?= isActive('faq.php', $current_page) ?>>FAQ</a></li>
</ul>

      </div>
    </div>

    <!-- Вторая линия -->
    <div class="betchagame-footer-lines">
      <div class="betchagame-footer-cookie">
        <div class="betchagame-footer-paragraphs">
          <p class="betchagame-footer-cookie-text-title word-wrapper">Cookie Policy</p>
          <p class="betchagame-footer-cookie-text-description word-wrapper">
            We use cookies to enhance your experience and analyse site
            traffic across BetchaGame. By continuing to browse, you
            consent to our use of cookies in accordance with our Cookie
            Policy.
          </p>
        </div>
      </div>
      <div class="betchagame-footer-paragraphs">
        <p class="betchagame-footer-cookie-text-title word-wrapper">Are You 18 or Older?</p>
        <p class="betchagame-footer-cookie-text-description word-wrapper">
          BetchaGame is intended for users 18 years and older. By using
          this site, you confirm that you meet the legal age requirement.
        </p>
      </div>
    </div>

    <!-- Третья линия -->
    <div class="betchagame-footer-lines">
      <div class="betchagame-footer-cookie">
        <div class="betchagame-footer-paragraphs">
          <p class="betchagame-footer-cookie-text-title word-wrapper">Disclaimer</p>
          <p class="betchagame-footer-cookie-text-description word-wrapper">
            BetchaGame is a social platform that offers prediction-based
            games for entertainment purposes only. No real-money gambling
            is available. Users must be 18+ to participate.
          </p>
        </div>
      </div>
      <div class="betchagame-footer-paragraphs">
        <p class="betchagame-footer-cookie-text-title word-wrapper">Responsible Play</p>
        <p class="betchagame-footer-cookie-text-description word-wrapper">
          Play should always be fun. Keep track of the time and money you
          spend, and never risk more than you can afford to lose.
          BetchaGame is a social platform — no real-money gambling
          involved — but we still encourage healthy gaming habits.
        </p>
      </div>
    </div>

    <!-- Четвертая линия -->
    <div class="betchagame-footer-lines" style="display: flex; flex-wrap: wrap; gap: 16px; align-items: center; justify-content:left;">
      <div class="betchagame-footer-cookie">
        <div class="betchagame-footer-paragraphs">
          <p class="betchagame-footer-cookie-text-title word-wrapper">Need Help or Support?</p>
          <p class="betchagame-footer-cookie-text-description word-wrapper">
            If you or someone you know is showing signs of compulsive
            behaviour or gaming-related stress, help is available:<br />
            Gambling Helpline New Zealand <br />📞 0800 654 655 – Free,
            24/7 confidential support<br />🌐<a target="_blank"
              href="https://www.gamblinghelpline.co.nz"
              >www.gamblinghelpline.co.nz</a>
          </p>
        </div>
      </div>
      <div class="betchagame-footer-paragraphs">
        <p class="betchagame-footer-cookie-text-title word-wrapper">Know the Risks</p>
        <p class="betchagame-footer-cookie-text-description word-wrapper">
          Gaming addiction is a serious issue. Warning signs include:<br />–
          Playing at the expense of work or relationships<br />– Trying to
          cut back but failing<br />– Borrowing money to keep playing<br />If
          any of this sounds familiar, reach out. You're not alone.
        </p>
      </div>
    </div>

    <!-- Пятая линия -->
    <div class="betchagame-footer-lines">
      <div class="betchagame-footer-cookie">
        <div class="betchagame-footer-paragraphs">  
          <div class="betchagame-footer_imgs">
            <img src="/betchagame-icons/betchagame-footer18.svg" alt="footer18">
            <img src="/betchagame-icons/betchagame-GamCare.svg" alt="GamCare">
            <img src="/betchagame-icons/betchagame-BeGambleAward.svg" alt="BeGambleAward">
          </div>
        </div>
      </div>
      <div class="betchagame-footer-paragraphs">
        <div style="display: flex; align-items: center">
          <ul class="betchagame-nav__list">
            <li><a href="/terms-of-use.php" <?= isActive('terms-of-use.php', $current_page) ?>>Terms of Use</a></li>
            <li><a href="/privacy-policy.php" <?= isActive('privacy-policy.php', $current_page) ?>>Privacy Policy</a></li>
            <li><a href="/legal-disclaimer.php" <?= isActive('legal-disclaimer.php', $current_page) ?>>Disclaimer</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Копирайт -->
    <div style="display: flex; text-align: center; width: 100%; justify-content: center;">
      <p style="font-family: var(--font-family); font-weight: 400; font-size: 16px; line-height: 155%; text-align: center; color: #fff;">
        © 2025 BetchaGame. All rights reserved.
      </p>
    </div>
  </div>
</footer>