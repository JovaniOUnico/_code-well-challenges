<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Javascript30 Navbar</title>

  <link rel='stylesheet' type='text/css' href='reset.css'>
  <link rel='stylesheet' type='text/css' href='index.css'>
</head>
<body>

  <header class='menu-container'>
    <div class='logo-container'>
      <img src='StarterFiles/Assets/Logo.svg'></img>
    </div>
    <div class='links-container'>
      <nav>
        <ul class='links-menu'>
          <li><a href='#' class='products-btn'>Products</a></li>
          <li><a href='#'>Challenges</a></li>
          <li><a href='#'>Resources</a></li>
          <li><a href='#'>Other Links</a></li>
        </ul>
      </nav>
    </div>
    <div class='login-container'>
      <a class='btn-sigin' href='#'>Sign in</a>
      <a class='btn-try-free' href='#'>Try for free</a>
    </div>
    <div class='menu-burger-container'>
      <img src='StarterFiles/Assets/Menu.svg' class='menu-btn'></img>
    </div>

    <div class='submenu-container hide'>
      <div class="arrow-up"></div>
      <div class='submenu-header'>
        <div class='submenu-title'>
          Products
        </div>
        <div class='submenu-close'>
          <img src='StarterFiles/Assets/Close.svg' class='menu-close'></img>
        </div>
      </div>

      <div class='submenu-body'>
        <div class='submenu-item'>
          <div class='s-icon'>
            <img src='StarterFiles/Assets/Spense_Icon.svg'></img>
          </div>
          <div class='s-info'>
            <div class='s-title'>
              Spence
            </div>
            <div class='s-text'>
              Spence is a landing page for writers. Great for practicing absolute positioning and flex layouts.
            </div>
          </div>
        </div>
        <div class='submenu-item'>
          <div class='s-icon'>
            <img src='StarterFiles/Assets/Fiber_Icon.svg'></img>
          </div>
          <div class='s-info'>
            <div class='s-title'>
              Fiber Landing Page
            </div>
            <div class='s-text'>
              An online portfolio generator. great to pratice flex/grid layouts, and absolute positioning.
            </div>
          </div>
        </div>
        <div class='submenu-item'>
          <div class='s-icon'>
            <img src='StarterFiles/Assets/Gradie_Icon.svg'></img>
          </div>
          <div class='s-info'>
            <div class='s-title'>
              Gradie Sign Up Page
            </div>
            <div class='s-text'>
              Gradie is a simple sign up page, great to pratice centering layouts.
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class='main-container'>
    <div class='main-container-info'>
      <div class='press'>
        <h1 class='press-title'>ONDECK IS YOUR REMOTE <span class='yellow-txt'>CONFERENCE CALLING TOOL</span></h1>

        <p class='press-description'>Ondeck ia a service that allows you to create beautiful, online, and encrypted video calls for you and your remote team.</p>
      </div>
      <div class='try-container'>
        <a class='btn-try-free' href='#'>Try for free</a>
      </div>
      <div class='rating-container'>
        <p class='rating-text'>5.0 Rating based on reviews from: </p>
        <div class='rating-img-group'>
          <img src='StarterFiles/Assets/Capterra Logo.svg'>
          <img src='StarterFiles/Assets/AlternativeTo Logo.svg'>
          <img src='StarterFiles/Assets/Shopify.png'>
        </div>
      </div>
    </div>
    <div class='main-container-img'>
      <img src='StarterFiles/Assets/Hero Image.png' class='menu-close'></img>
    </div>
  </section>

  <footer class='footer-container'>
    <div class='footer-text'>
      Trusted by 3+ million people at companies like
    </div>
    <div class='footer-image-list'>
      <img src='StarterFiles/Assets/Netflix Logo.svg'>
      <img src='StarterFiles/Assets/Shopify Logo.svg'>
      <img src='StarterFiles/Assets/Spotify Logo.svg'>
      <img src='StarterFiles/Assets/Walmart Logo.svg'>
    </div>
  </footer>

  <script>

    const menuBtn = document.querySelectorAll('.menu-btn');
    const productsBtn = document.querySelectorAll('.products-btn');
    const subMenuCloseBtn = document.querySelectorAll('.submenu-close');
    const subMenu = document.querySelectorAll('.submenu-container');

    menuBtn[0].addEventListener("click", function () {

      subMenu[0].classList.remove('hide');

    });

    subMenuCloseBtn[0].addEventListener("click", function () {

      subMenu[0].classList.add('hide');

    });

    productsBtn[0].addEventListener("mouseover", function () {

      subMenu[0].classList.remove('hide');

    });

    subMenu[0].addEventListener("mouseover", function () {

      subMenu[0].classList.remove('hide');

    });

    subMenu[0].addEventListener("mouseout", function () {

      subMenu[0].classList.add('hide');

    });

  </script>

</body>
</html>