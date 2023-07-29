<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Developer Portfolio</title>

  <link rel='stylesheet' type='text/css' href='reset.css'>
  <link rel='stylesheet' type='text/css' href='index.css'>
  <link rel='stylesheet' type='text/css' href='toglemenu.css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

  <div class='container-fluid main-container'>

    <header class='menu'>
      <div class='logo-container'>
        Johnathan Specter
      </div>

      <div class='links-container'>
        <ul class='links-list-menu'>
          <li>
            <a href='#'>Articles</a>
          </li>
          <li>
            <a href='#'>Chats</a>
          </li>
          <li>
            <a href='#'>Awards</a>
          </li>
          <li>
            <a href='#'>About</a>
          </li>
        </ul>
      </div>

      <div class='aside-container'>
        <div class='burger-btn'>
          <img class='hamburger-icon' src='./StarterFiles/Assets/HamburgerMenu.svg'>
        </div>

        <div class='contact-links'>
          <a class='btn-contact' href='#'>Get in touch</a>
        </div>
      </div>
    </header>

    <div class='container my-introduction'>
      <h1 class='title'>
        Helping companies build better, scalable software.
      </h1>

      <p class='intro-text'>
        Award-winning web developer and author, with over 15+ years of working experience with Fortune 500 companies like Apple, Google, Facebook and more.
      </p>
    </div>

    <div class='container companies'>

      <div class='column-cp'>
        <img src='./StarterFiles/Assets/Logos/Walmart.svg' class='companie-logo'>
        <img src='./StarterFiles/Assets/Logos/JP_Morgan.svg' class='companie-logo'>
        <img src='./StarterFiles/Assets/Logos/Visa.svg' class='companie-logo'>
      </div>
      <div class='column-cp'>
        <img src='./StarterFiles/Assets/Logos/Tinder2.svg' class='companie-logo'>
        <img src='./StarterFiles/Assets/Logos/Samsung.svg' class='companie-logo'>
        <img src='./StarterFiles/Assets/Logos/Verizon.svg' class='companie-logo'>
      </div>

    </div>

    <div class='container project-examples'>
      <div class='project'>

        <div class='project-image'>
          <img src='./StarterFiles/Assets/Spense.png' class='p-img'>
        </div>
        <div class='project-description'>
          <div class='project-header'>
            <h2>Spense.com</h2> <img src='./StarterFiles/Assets/arrRight.svg'>
          </div>
          <p>Rethinking the way writers get paid, an open-source plataform desgined to help writers focus more on writing, and less on when and how they get paid, Project in collaboration with Codewell.cc</p>
        </div>

      </div>

      <div class='project'>

        <div class='project-image'>
          <img src='./StarterFiles/Assets/YelpCamp.png' class='p-img'>
        </div>
        <div class='project-description'>
          <div class='project-header'>
            <h2>YelpCamp.com</h2> <img src='./StarterFiles/Assets/arrRight.svg'>
          </div>
          <p>Allowing backpack travelers to perfectly plain their trip through an open-source plataform similar to TripAdvisor. With over 1m MAU, YelpCamp has been the crowd's favorite in 2021.</p>
        </div>

      </div>
    </div>

    <div class='container my-history'>

      <div class='my-hitory-text'>

        <div class='history-part'>

          <h2>A co-founder at one of the world's largest communities.</h2>

          <p>
            The combined experience i have working at Fortune 500 companies has allowed me to developer a skillset that helps me in not just development, but in every aspect of any business.
          </p>
          <p>
            I'm proud to announce that I am now working at one of the world's largest communities teaching young minds about how to <i>sell</i> yourself as a developer and open them to a whole new world of oportunities.
          </p>
        </div>

        <div class='history-part'>
          <p>
            As a developer, you have everything available to you and all that's holding you back is yourself.
          </p>
          <p>
            A quote I live by perfectly ilustrates what I mean.
          </p>
          <p>
            "How big would you dream, if you <b>knew</b> you would'nt fail?" You've already gone through the hardest parts beign a developer, it's time to elevate your skills and become a leader in something you're <i>passionate</i> about.
          </p>
          <p>
            I'm happy to chat over coffee some time about how I can help your company.
          </p>
        </div>

      </div>

    </div>

    <div class='container contact'>

      <div class='contact-text'>

        <h2>Interested in working with me?</h2>
        <p>
          I'm active on all social media plataforms listened bellow, but ypu can also me an email and I will get back to you within 24-48 hours.
        </p>

      </div>

      <div class='contact-links'>
        <a class='btn-contact' href='#'>Get in touch</a>
      </div>
            
    </div>

    <footer class='footer'>

      <div class='footer-content'>
        <div class='logo'>
          Johnathan Specter
        </div>
        <div class='social-network'>
          <a class='btn-social' href='#'>
            <img src='./StarterFiles/Assets/Social_Icons/Github.svg'>
          </a>
          <a class='btn-social' href='#'>
            <img src='./StarterFiles/Assets/Social_Icons/LinkedIn.svg'>
          </a>
          <a class='btn-social' href='#'>
            <img src='./StarterFiles/Assets/Social_Icons/Twitter.svg'>
          </a>
        </div>
      </div>

    </footer>

  </div>

  <script type='text/javascript'>

    btn = document.querySelectorAll('.burger-btn');

    var showMenu = true
    btn[0].addEventListener("click", function() {

      itensMenuList = document.querySelectorAll('.links-container')

      if(showMenu) {
        itensMenuList[0].classList.add('toogle-menu');
      } else {
        itensMenuList[0].classList.remove('toogle-menu');
      }

      showMenu = !showMenu
    })


  </script>
</body>
</html>