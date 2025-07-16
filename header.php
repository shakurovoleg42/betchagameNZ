<?php
// Получаем имя текущего файла
$current_page = basename($_SERVER['PHP_SELF']);

// Функция для проверки активной страницы
function isActive($page, $current) {
    return $page === $current ? 'style="color: #28a745"' : '';
}
?>

<header>
  <div class="betchagame-header-content container">
    <div>
      <a href="/">
        <img src="betchagame-images/betchagame-header-logo.svg" 
             alt="Logo" 
             style="width: 52px; height: 58px">
      </a>
    </div>
    <nav>
      <ul class="betchagame-nav__list">
        <li><a href="/" <?= isActive('index.php', $current_page) ?>>Home</a></li>
        <li><a href="/play.php" <?= isActive('play.php', $current_page) ?>>Play</a></li>
        <li><a href="/leaderboard.php" <?= isActive('leaderboard.php', $current_page) ?>>Leaderboard</a></li>
        <li><a href="/about.php" <?= isActive('about.php', $current_page) ?>>About</a></li>
        <li><a href="/faq.php" <?= isActive('faq.php', $current_page) ?>>FAQ</a></li>
        <li><a href="/contact.php" <?= isActive('contact.php', $current_page) ?>>Contact</a></li>
      </ul>
    </nav>
    <div class="betchagame-auth__buttons">
      <button class="betchagame-default__button">Log In</button>
      <button class="betchagame-default__button">Sign Up</button>
    </div>
  </div>
</header>