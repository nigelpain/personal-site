<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link href="css/main.css", type="text/css", rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
  <div class="grid">
    


<div class="grid__header background ">
    <header class="header">
        <nav class="header__nav">
            <a class="header__nav-logo" href="index.php">
                <h1>NIGEL PAIN</h1>
            </a>

            <a id="header__nav-link--mobile" class="header__nav-link header__nav-link--mobile" href="#"><img src="../images/icons/menu.svg">Menu</a>

            <ul id="header__nav-list" class="header__nav-list">
                <li><a href="work.php" class="header__nav-link ">Work</a></li>

                <li><a href="ride.php" class="header__nav-link ">Ride</a></li>

                <li><a href="eat.php" class="header__nav-link  text-colour--eat">Eat</a></li>

                <li><a href="play.php" class="header__nav-link ">Play</a></li>

                <li><a href="http://blog.nigelpain.com" class="header__nav-link">Blog</a></li>

                <li><a href="contact.php" class="header__nav-link ">Contact</a></li>
            </ul>
        </nav>

        <div class="header__action">
            
                <h1 class="header__action-heading text-colour--eat">EAT</h1>

                <p class="header__action-sub-heading">recipe rundowns - culinary critiques</p>

                <div class="header__action-buttons">
                    <a class="link-button" href="http://blog.nigelpain.com">READ MY MUSINGS</a>

                    <a class="link-button" href="contact.php">CONTACT ME</a>
                </div>
             
        </div>
    </header>
</div>


<div class="grid__content">
  <div class="grid__content__item">
    <div class="intro">
      <h2 class="intro__text">This is the section about eating cake and other yummy stuff.</h3>
    </div>
  </div>

  <div class="grid__content__item">
    
<div class="article ">
    <img class="article__image" src="../images/icons/article.svg">
    <div class="article__text">
        <h3 class="article__header">Recipe Rundowns</h3>
        <p class="article__summary">Anyone who knows me, knows that I love to eat anything and everything! Sometimes my culinary ramblings inspire me to take to the kitchen and come up with my own ideas for mouth watering meals, all of which can be viewed with the link below.</p>
        <a class="article__link" href="recipes.php">View details of my recipes</a>
    </div>
</div>

  </div>
</div>



<div class="grid__footer background ">
    <footer class="footer">
        <p class="footer__copyright">&copy; Copyright 2020 Nigel Pain</p>
        
        <ul class="footer__link-list">
            <li><a href="https://www.linkedin.com/in/nigel-pain/" class="footer__link">LinkedIn</a></li>
            <li><a href="https://www.facebook.com/nigel.pain" class="footer__link">Facebook</a></li>
            <li><a href="https://twitter.com/Monk_a_Moo" class="footer__link">Twitter</a></li>
            <li><a href="https://www.youtube.com/channel/UCZPyJN2bv3TD99fQcnLCyXA" class="footer__link">Youtube</a></li>
            <li><a href="contact.php" class="footer__link">Contact</a></li>
        </ul>
    </footer>
</div>




  </div>

  <!--build:js js/main.min.js-->
  <script src="js/nav-menu-mobile.js"></script>
  <!--endbuild-->

  <!-- google analytics code -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-62904127-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
