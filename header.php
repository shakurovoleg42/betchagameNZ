<?php
// Получаем текущий путь из URI
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$segments = explode('/', $uri);

$current_page = end($segments);
if ($current_page === '' || $current_page === 'index.php' || $current_page === 'index.html') {
    $current_page = $segments[count($segments) - 2] ?? 'index';
}

function isActive($page, $current) {
    return $page === $current ? 'style="color: #28a745"' : '';
}
?>

<header>
  <div class="betchagame-header-content container">
    <div>
      <a href="/">
        <img src="/betchagame-images/betchagame-header-logo.svg" 
             alt="betchagame-header-logo" 
             style="width: 52px; height: 58px">
      </a>
    </div>
    <nav class="betchagame-nav">
      <ul class="betchagame-nav__list">
        <li><a href="/" <?= isActive('index', $current_page) ?>>Home</a></li>
        <li><a href="/play/" <?= isActive('play', $current_page) ?>>Play</a></li>
        <li><a href="/leaderboard.php" <?= isActive('leaderboard.php', $current_page) ?>>Leaderboard</a></li>
        <li><a href="/about.php" <?= isActive('about.php', $current_page) ?>>About</a></li>
        <li><a href="/faq.php" <?= isActive('faq.php', $current_page) ?>>FAQ</a></li>
        <li><a href="/contact.php" <?= isActive('contact.php', $current_page) ?>>Contact</a></li>
      </ul>
      <div class="betchagame-auth__buttons header-buttons-forms">
        <button class="betchagame-default__button">Log In</button>
        <button class="betchagame-default__button">Sign Up</button>
      </div>
    </nav>

    <div class="betchagame-auth__buttons-desktop header-buttons-forms">
      <button class="betchagame-default__button">Log In</button>
      <button class="betchagame-default__button">Sign Up</button>
    </div>
    
    <div class="burger-menu" aria-label="Toggle menu">
      <span class="burger-line"></span>
      <span class="burger-line"></span>
      <span class="burger-line"></span>
    </div>
  </div>
</header>
<!-- Регистрационный попап -->
<div class="popup-overlay" id="signupPopup">
  <div class="popup-content">
    <button class="popup-close" id="closeSignupPopup" style="color: #ffffff; font-weight: 700">&times;</button>
    <div class="register-tabs">
  <span class="register-tab" data-tab="login">Log in</span>
  <span class="register-tab" data-tab="register">Register</span>
</div>
    
  <form id="authForm" action="/mail.php" method="POST" enctype="multipart/form-data">
    <div class="form-group username-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Username" required autocomplete="off">
    </div>
    <div class="form-group email-group" style="margin-top: 20px">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Email"  autocomplete="off">
    </div>
    <div class="form-group password-group" style="margin-top: 20px">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Password"  autocomplete="off">
    </div>
    <button type="submit" class="betchagame-default__button" style="margin-top: 20px">Register</button>
  </form>
  </div>
</div>

<div class="popup-message" id="popupMessage">
  <div class="popup-message__content" id="popupContent">
    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M22.5 0.625C18.1735 0.625 13.9442 1.90795 10.3469 4.3116C6.74959 6.71526 3.94581 10.1317 2.29014 14.1288C0.634478 18.1259 0.20128 22.5243 1.04533 26.7676C1.88938 31.0109 3.97277 34.9087 7.03205 37.968C10.0913 41.0272 13.9891 43.1106 18.2324 43.9547C22.4757 44.7987 26.8741 44.3655 30.8712 42.7099C34.8683 41.0542 38.2848 38.2504 40.6884 34.6531C43.0921 31.0558 44.375 26.8265 44.375 22.5C44.375 16.6984 42.0703 11.1344 37.968 7.03204C33.8656 2.92968 28.3016 0.625 22.5 0.625ZM19.375 31.2344L11.5625 23.4219L14.0469 20.9375L19.375 26.2656L30.9531 14.6875L33.4469 17.1656L19.375 31.2344Z" fill="white" />
</svg>
    <p id="popupText"></p>
    <button class="betchagame-default__button" id="popupMessageClose">OK</button>
  </div>
</div>

  <div class="betchagame-page">
      <div id="agePopup" class="betchagame-popup-wrapper">
  <div id="agePopupOverlay" class="betchagame-popup-overlay" style="display: none;"></div>
  <div id="agePopupContent" class="betchagame-popup" style="display: none;">
    <div class="betchagame-popup-content">
      <h2>Verify your age</h2>
      <p>Are you 18 or older?</p>
      <button class="betchagame-default__button" id="popup-close">
        Yes, I am over 18
      </button>
    </div>
  </div>
</div>

