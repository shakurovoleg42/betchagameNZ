<?php
// Получаем текущий путь из URI
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$segments = explode('/', $uri);

// Получаем имя текущей папки или файла
$current_page = end($segments);
if ($current_page === '' || $current_page === 'index.php' || $current_page === 'index.html') {
    $current_page = $segments[count($segments) - 2] ?? 'index';
}

// Функция для проверки активной страницы
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
      <div class="betchagame-auth__buttons">
        <button class="betchagame-default__button">Log In</button>
        <button class="betchagame-default__button">Sign Up</button>
      </div>
    </nav>

    <div class="betchagame-auth__buttons-desktop">
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
      <span>Log in</span>
      <span>Register</span>
    </div>
    
    <form>
      <div>
        <label for="username">Username</label>
      <input type="text" id="username" placeholder="Username" required>
      </div>
      <div>
        <label for="email">Email</label>
      <input type="email" id="email" placeholder="Email" required>
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Password" required>
      </div>
      <button type="submit" class="betchagame-default__button">Register</button>
    </form>
  </div>
</div>

<script>
document.querySelector(".burger-menu").addEventListener("click", function () {
    this.classList.toggle("active");
    document.querySelector(".betchagame-nav").classList.toggle("active");
  });

    document.querySelectorAll('.betchagame-default__button').forEach(btn => {
    if (btn.textContent.trim() === 'Sign Up') {
      btn.addEventListener('click', () => {
        document.getElementById('signupPopup').classList.add('show');
      });
    }
  });

  // Закрытие попапа
  document.getElementById('closeSignupPopup').addEventListener('click', () => {
    document.getElementById('signupPopup').classList.remove('show');
  });

  // Закрытие при клике вне окна
  document.getElementById('signupPopup').addEventListener('click', (e) => {
    if (e.target === e.currentTarget) {
      e.currentTarget.classList.remove('show');
    }
  });
</script>
