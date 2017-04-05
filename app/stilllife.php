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
      <li><a href="photography.php" class=" navbtncur ">Photography</a></li>
      <li><a href="design.php" class=" navbtn ">Design</a></li>
      <li><a href="about.php" class=" navbtn ">About</a></li>
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

    <div class="grid_12">
      <h1 id="pageHeader">Still Life Gallery</h1>
    </div>

    <div class="galleryThumb grid_3">
        <a href="images/gallery/still life/First to Fall (website).jpg" rel="lightbox" data-lightbox="still life" title="With this photograph I wanted to try and capture that feeling when the first apples of the season have fallen, a sign of all the tasty things to come!">
          <img class="imageThumb" src="images/gallery/still life/First to Fall (website).jpg" alt="An image of a fallen apple amongst autumn leaves" title="First to Fall" />
        </a>
        <p>First to Fall</p>
    </div><!-- galleryThumb -->

    <div class="galleryThumb grid_3">
        <a href="images/gallery/still life/Forgotten Love (website).jpg" rel="lightbox" data-lightbox="still life" title="This was one of my first still life photography projects that I undertook! My aim with this photo was to convey a sombre mood and really provoke the viewer into thinking beyond the photo. What is in the letter? And what happened to it's recipient?">
          <img class="imageThumb" src="images/gallery/still life/Forgotten Love (website).jpg" alt="An image of a forgotten letter of love" title="Forgotten Love" />
        </a>
        <p>Forgotten Love</p>
    </div><!-- galleryThumb -->

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
