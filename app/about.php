<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link href="css/main.css", type="text/css", rel="stylesheet">
</head>
<body>
  



<header>
  <div id="websiteLogo">
    <a href="index.php">
      <img src="images/header_logo.png" alt="Website Logo">
    </a>
  </div>
  <nav>
    <ul>
      <li><a href="photography.php" class=" navbtn ">Photography</a></li>
      <li><a href="design.php" class=" navbtn ">Design</a></li>
      <li><a href="about.php" class=" navbtncur ">About</a></li>
      <li><a href="contact.php" class=" navbtn ">Contact</a></li>
    </ul>
  </nav>
  <div id="callToAction">
    <p>
      Amateur Photographer Based in Devon<br>
      <a href="gallery.php">check out my photos</a>
    </p>
  </div>
</header>


  <div id="page" class="container_12 clearfix">

    <div id="columnLeft" class="grid_7">
      <h1 id="pageHeader">The Man Behind the Lens</h1>
      <p>I am Nigel Pain, yes that charming fellow in the photo over there. I live in Devon with my partner and our two cats, pictured below, because you know cat pictures make everything better. I work in the IT industry as a software tester, although recently I have been expanding my skills into user experience and web design. It may not surprise you then to know that I am a bit of geek around all things computers, enjoying trading some banter with my mates over the latest computer games, or getting stuck into a good science fiction/fantasy film or book.</p>
      <p>However unlike the stereotypical geek image I also enjoy venturing forth from my basement and exploring the world around me. I feel myself fortunate to be living in one of the most beautiful parts of England, with the likes of Dartmoor and the North Cornish coast right on my doorstep. I enjoy the excitement of exploring new areas with my partner in tow before retiring to a cosy pub for a pint or two of real ale!</p>
      <p>This is really where my passion for photography has come from. I feel we live quite enclosed lives nowadays and Ive experienced myself just how much there is outside your doorstep to discover and how much it changes throughout the year, moments passing by in the blink of an eye going unnoticed by the majority. What i love about photography is its ability to record these moments that I experience and using my creativity to bring out the feeling and atmosphere in the hopes that when I share them with other people it will inspire them to explore and appreciate more of this amazing world we live in.</p>
    </div>

    <div id="columnRight" class="grid_5">
      <img id="mePhoto" src="images/Out In The Field.jpg" alt="Photograph of Me">
    </div>

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
