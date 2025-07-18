<html lang="en">
<head>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- SEO -->
  <meta property="og:type" content="website">
  <meta name="language" content="English">
  <meta name="robots" content="index, follow">
  <meta property="og:locale" content="en_NZ">
  <meta property="og:url" content="https://betchagame.co.nz/">
  <!-- <meta property="og:image" content="https://betchagame.co.nz/main.png"> -->
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="BetchaGame Social Casino">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="https://betchagame.co.nz/">
  <!-- <meta name="twitter:image" content="https://betchagame.co.nz/main.png"> -->

  <!-- Favicon -->
  <link rel="icon" href="/favicon.png" type="image/png">

  <!-- Fonts -->
  <link rel="preload" href="/betchagame-fonts/rubik-webfont/betchagame-Rubik-Bold.woff" as="font" type="font/woff" crossorigin>

  <!-- CSS -->
  <link rel="stylesheet" href="/betchagame-css/input.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script defer src="/betchagame-js/betchagame-index.js"></script>

  <!-- PHP dynamic SEO -->
  <?php
    $urlPage = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    require_once('title.php');
    global $title_arr;
    global $description_arr;
    global $styles_arr;

    echo '
      <link rel="canonical" href="' . $urlPage . '">
      <meta name="description" content="' . $description_arr[$_SERVER["SCRIPT_NAME"]] . '">
      <meta name="twitter:description" content="' . $description_arr[$_SERVER["SCRIPT_NAME"]] . '">
      <meta property="og:site_name" content="' . $description_arr[$_SERVER["SCRIPT_NAME"]] . '">
      <meta property="og:title" content="' . $title_arr[$_SERVER["SCRIPT_NAME"]] . '">
      <meta name="twitter:title" content="' . $title_arr[$_SERVER["SCRIPT_NAME"]] . '">
      <title>' . $title_arr[$_SERVER["SCRIPT_NAME"]] . '</title>
      ';
      // <link rel="stylesheet" href="' . $styles_arr[$_SERVER["SCRIPT_NAME"]] . '">
  ?>
</head>
