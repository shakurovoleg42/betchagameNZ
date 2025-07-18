<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/betchagame-css/betchagame-style.css" />
    <link rel="canonical" href="https://betchagame.co.nz" />
    <link
      rel="preload"
      href="/betchagame-fonts/rubik-webfont/betchagame-Rubik-Bold.woff"
      as="font"
      type="font/woff"
      crossorigin
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script defer src="swiper/swiper.js"></script>

    <script src="/betchagame-js/betchagame-index.js" defer></script>
    <title>Challenge Friends & Play Free – Social Casino & Prediction Games NZ</title>
    <meta name="description" content="Join BetchaGame, New Zealand’s top social casino platform. Sign up, make predictions, earn points, and climb the leaderboard — all for fun, no real-money betting." />
  
  </head>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <body>
    <div class="betchagame-popup-wrapper">
      <div class="betchagame-popup-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;"></div>
      <div class="betchagame-popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 99999;">
        <div class="betchagame-popup-content">
          <h2>Welcome to BetchaGame!</h2>
          <p>
            Are you 18 or older?
          </p>
          <button class="betchagame-default__button" id="popup-close">
            Yes, I am over 18
          </button>
        </div>
      </div>
    </div>
    
    <div class="betchagame-page">
      <?php include 'header.php'; ?>
      <main>
        <!-- hero section  -->
        <section class="betchagame-hero">
          <div class="betchagame-hero__content container">
            <h1>Challenge your friends. Predict. Win.</h1>
            <a href="/play.html"><button class="betchagame-default__button">Start Playing</button></a>
          </div>
        </section>

        <!-- HOW IT WORKS -->
        <section class="betchagame-how-it-works">
          <div class="betchagame-works__content container">
            <div class="betchagame-works__header">
              <h3>How It Works</h3>
            </div>
            <div class="betchagame-works_cards">
              <ul>
                <li>
                  <div class="betchagame-work_card">
                    <img
                      src="betchagame-icons/betchagame-01signup.svg"
                      alt="betchagame-01signup"
                    />
                    <p class="betchagame-work_card_title">01/ Sign Up</p>
                    <p class="betchagame-word-wrapper work_card_description">
                      Create your free profile in seconds and join the action.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="betchagame-work_card">
                    <img src="betchagame-icons/betchagame-rating.svg" alt="betchagame-rating" />
                    <p class="betchagame-work_card_title">02/ Play & Predict</p>
                    <p class="betchagame-word-wrapper work_card_description">
                      Find a game that suits your interests and join in.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="betchagame-work_card">
                    <img src="betchagame-icons/betchagame-earn_points.svg" alt="betchagame-earn_points" />
                    <p class="betchagame-work_card_title">03/ Earn Points</p>
                    <p class="betchagame-word-wrapper work_card_description">
                      Use your knowledge to predict outcomes and earn points.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="betchagame-work_card">
                    <img src="betchagame-icons/betchagame-02signup.svg" alt="betchagame-02signup" />
                    <p class="betchagame-work_card_title">01/ Sign Up</p>
                    <p class="betchagame-word-wrapper work_card_description">
                      Create your free profile in seconds and join the action.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <!-- GAMES section -->
        <section class="betchagame-games">
          <div class="betchagame-games__content">
            <div class="betchagame-games__header">
              <h3>Games</h3>
            </div>
            <div class="betchagame-games_cards">
              <ul>
                <li>
                  <div class="betchagame-game_card">
                    <img
                      title="Pirate slot"
                      src="/betchagame-images/infoContent/betchagame-Pirate-slot.png"
                      alt="Pirate slot"
                    />
                    <p class="betchagame-game_card_title">pirate slot</p>
                    <a href="/play/pirate-slot/index"><button class="betchagame-game_card_button">play now</button></a>
                  </div>
                </li>
                <li>
                  <div class="betchagame-game_card">
                    <img
                      title="Shadow Forest"
                      src="/betchagame-images/infoContent/betchagame-shadow_forest.png"
                      alt="Shadow Forest"
                    />
                    <p class="betchagame-game_card_title">Shadow Forest</p>
                    <a href="/play/shadow-forest/index"><button class="betchagame-game_card_button">play now</button></a>
                  </div>
                </li>
                <li>
                  <div class="betchagame-game_card">
                    <img
                    title="Slot Pan"
                      src="/betchagame-images/infoContent/betchagame-slot_pan.png"
                      alt="Slot Pan"
                    />
                    <p class="betchagame-game_card_title">Slot Pan</p>
                    <a href="/play/slot-pan/index"><button class="betchagame-game_card_button">play now</button></a>
                  </div>
                </li>
                <li>
                  <div class="betchagame-game_card">
                    <img
                    title="Night City"
                      src="/betchagame-images/infoContent/betchagame-night_city.png"
                      alt="Night City"
                    />
                    <p class="betchagame-game_card_title">Night City</p>
                    <a href="/play/night-city/index"><button class="betchagame-game_card_button">play now</button></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="betchagame-leadership">
          <div class="betchagame-leadership__content container">
            <div class="betchagame-leadership__header">
              <h3>Leaders of the week</h3>
            </div>
            <div class="betchagame-leadership__table">
              <ul>
                <li>
                  <div class="betchagame-leadership_line">
                    <div class="betchagame-leadership_card">
                      <div class="betchagame-leadership_card_left">
                        <img src="betchagame-icons/betchagame-cup.svg" alt="cup" />
                        <p class="betchagame-leader_name">Samantha Blaze</p>
                      </div>
                      <div class="betchagame-leadership_card_right">
                        <b class="betchagame-leader_progress" style="width: 100%"></b>
                        <p class="betchagame-leader_points">14,920</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="betchagame-leadership_line">
                    <div class="betchagame-leadership_card">
                      <div class="betchagame-leadership_card_left">
                        <img src="betchagame-icons/betchagame-cup.svg" alt="cup" />
                        <p class="betchagame-leader_name">Jaxon Wilde</p>
                      </div>
                      <div class="betchagame-leadership_card_right">
                        <b class="betchagame-leader_progress" style="width: 86%"></b>
                        <p class="betchagame-leader_points">13,540</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="betchagame-leadership_line">
                    <div class="betchagame-leadership_card">
                      <div class="betchagame-leadership_card_left">
                        <img src="betchagame-icons/betchagame-cup.svg" alt="cup" />
                        <p class="betchagame-leader_name">Ava Storm</p>
                      </div>
                      <div class="betchagame-leadership_card_right">
                        <b class="betchagame-leader_progress" style="width: 76%"></b>
                        <p class="betchagame-leader_points">12,870</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="betchagame-leadership_line">
                    <div class="betchagame-leadership_card">
                      <div class="betchagame-leadership_card_left">
                        <img src="betchagame-icons/betchagame-cup.svg" alt="cup" />
                        <p class="betchagame-leader_name">Luca Meier</p>
                      </div>
                      <div class="betchagame-leadership_card_right">
                        <b class="betchagame-leader_progress" style="width: 66%"></b>
                        <p class="betchagame-leader_points">12,850</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="betchagame-leadership_line">
                    <div class="betchagame-leadership_card">
                      <div class="betchagame-leadership_card_left">
                        <img src="betchagame-icons/betchagame-cup.svg" alt="cup" />
                        <p class="betchagame-leader_name">Tyra Knox</p>
                      </div>
                      <div class="betchagame-leadership_card_right">
                        <b class="betchagame-leader_progress" style="width: 64%"></b>
                        <p class="betchagame-leader_points">11,960</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="betchagame-reviews ">
          <div class="betchagame-reviews_content">
            <div class="betchagame-reviews_header container">
              <h3>Reviews</h3>
              <div class="betchagame-review_togglers">
                <button class="slider-prev betchagame-toggle-reviews-btn">
                  <img src="/betchagame-icons/betchagame-arrow-left.svg" alt="arrow-left"/>
                </button>
                <button class="slider-next betchagame-toggle-reviews-btn">
                  <img src="/betchagame-icons/betchagame-arrow-right.svg" alt="arrow-right" />
                </button>
              </div>
            </div>
<!-- Swiper block -->
    <div class="swiper betchagame-reviews_list">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="max-width: 400px">
          <li class="betchagame-review_item">
            <p class="word-wrapper review_text">
              “Love the rush! I jump in during my lunch break and boom — pure fun. No pressure, just good vibes.”
            </p>
            <div class="betchagame-review_card_bttm">
              <div class="betchagame-stars-review">
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
              </div>
              <p class="betchagame-name_review">Tina R.</p>
            </div>
          </li>
        </div>
        <div class="swiper-slide" style="max-width: 400px">
          <li class="betchagame-review_item">
            <p class="betchagame-word-wrapper review_text">
              “The games are so smooth and exciting. Feels like Vegas without leaving my couch!”
            </p>
            <div class="betchagame-review_card_bttm">
              <div class="betchagame-stars-review">
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
              </div>
              <p class="betchagame-name_review">Leo D.</p>
            </div>
          </li>
        </div>
        <div class="swiper-slide" style="max-width: 400px">
          <li class="betchagame-review_item">
            <p class="betchagame-word-wrapper review_text">
              “I play with my friends every evening. We compete for bragging rights — no money, just pride!”
            </p>
            <div class="betchagame-review_card_bttm">
              <div class="betchagame-stars-review">
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
              </div>
              <p class="betchagame-name_review">Jess M.</p>
            </div>
          </li>
        </div>
        <div class="swiper-slide" style="max-width: 400px">
          <li class="betchagame-review_item">
            <p class="betchagame-word-wrapper review_text">
              “Bright lights, fun spins, and daily rewards? I’m hooked. It’s my favorite way to unwind.”
            </p>
            <div class="betchagame-review_card_bttm">
              <div class="betchagame-stars-review">
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
                <img src="betchagame-icons/betchagame-star-review.svg" alt="star-review" />
              </div>
              <p class="betchagame-name_review">Nina K.</p>
            </div>
          </li>
        </div>
      </div>
    </div>
  </div>
</section>


        <section class="betchagame-join_game">
          <div class="betchagame-join_game_content container">
            <img
              src="betchagame-images/decorativeContent/betchagame-join-the-game.png"
              alt="join-the-game"
            />
            <div class="betchagame-join_banner_content">
              <h3>Join the Game</h3>
              <p class="betchagame-word-wrapper join_banner_text">
                Ready to compete, predict, and rise to the top? Sign up now and
                start playing with thousands of users across New Zealand and
                beyond. It’s free, fun, and full of action.
              </p>
              <button class="betchagame-join_banner_btn">Sign Up</button>
            </div>
          </div>
        </section>
      </main>
       <?php include 'footer.php'; ?>
    </div>
  </body>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".betchagame-reviews_list", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  });
</script>
</html>

