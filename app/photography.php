<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link href="css/main.css", type="text/css", rel="stylesheet">
</head>
<body>
  



<header class="header">
  <div class="header__logo">
    <a href="index.php">
      <img src="images/header_logo.png" alt="Website Logo">
    </a>
  </div>

  <nav class="header__nav">
    <ul>
      <li><a href="work.php" class=" header__nav-link ">Work</a></li>

      <li><a href="ride.php" class=" header__nav-link ">Ride</a></li>

      <li><a href="eat.php" class=" header__nav-link ">Eat</a></li>

      <li><a href="play.php" class=" header__nav-link ">Play</a></li>

      <li><a href="http://blog.nigelpain.com" class="header__nav-link">Blog</a></li>

      <li><a href="contact.php" class=" header__nav-link ">Contact</a></li>
    </ul>
  </nav>
</header>


  <div id="page" class="container_12 clearfix">

    <div id="columnLeft" class="grid_6">
      <h1 id="pageHeader">Welcome Traveller</h1>
      <p>Welcome web wanderer to nigelpainphotography.com I am Nigel Pain (clever naming huh?) I work in IT as a software tester, though I am looking to give up breaking things for a living and branch out into making things look pretty as a frontend web developer, hence I am building this site in my spare time. It's the digital home for all of my musings on love, life and photography. But also a place for me to share with the world the beautiful landscapes of the south west of england and the strange forms of life that call this land home.</p>
      <script src="https://platform.twitter.com/widgets.js"></script>
      <a href="https://twitter.com/intent/follow?screen_name=Monk_a_Moo"><img id="twitterLogo" src="./images/TwitterLogo_white.png" /></a>
    </div><!-- columnLeft -->

    <div id="columnRight" class="grid_6">
      <div id="siteSummary">
        <h2 class="subHeader">"Devon based amateur photographer...<br/>...and part-time web wizard"</h2>
      </div><!-- siteSummary -->
      <p>At the moment this website is under construction (if you can't tell from the relative lack of content and sometimes dodgy presentation). However there are some examples of my photographic works over in the gallery and if you like what you see then feel free to get in touch to say "hey good job", or "I would like to ask about prints", just hopefully nothing along the lines of "I am outside your bedroom window with a camera please turn around so I can get a better view". I hope you enjoy using this site and come back to check on it's progress!</p>
      <h2 class="sectionHeader">Latest Public Exposures</h2>
      <img id="recentPhotos" src="images/recent photos/First to Fall (website).jpg" alt="Recently Added Photos" />

      <p><a href="gallery.html">See more snappings at the gallery...</a></p>
    </div><!-- columnRight -->

  </div>



  <!--build:js js/main.min.js-->
  <script type="text/javascript" src="js/recent_photos.js"></script>
  <script type="text/javascript" src="js/lightbox-plus-jquery.js"></script>
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
