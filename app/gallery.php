<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link href="css/main.css", type="text/css", rel="stylesheet">
</head>
<body>
  



  <nav>
    <ul>
      <li><a href="index.php" class=" navbtn ">Home</a></li>
      <li><a href="photography.php" class=" navbtn ">Photography</a></li>
      <li><a href="gallery.php" class=" navbtncur ">Gallery</a></li>
      <li><a href="#" class="navbtn">Blog</a></li>
      <li><a href="about.php" class=" navbtn ">About</a></li>
      <li><a href="contact.php" class=" navbtn ">Contact</a></li>
    </ul>
  </nav>


  <div id="page" class="container_12 clearfix">

    <header class="grid_12">
  <img src="images/Header Logo.png" alt="Website Logo">
</header>


    <div id="galleries" class="container_12">
      <div class="grid_12">
        <h1 id="pageHeader">Welcome to the Gallery</h1>
      </div>

      <div class="galleryThumb grid_3">
          <a href="wildlife.php" onclick="ga('send', 'event', 'View Gallery', 'Click', 'Wildlife Gallery');">
            <img class="imageThumb" src="images/gallery/wildlife/Little Nipper (website).jpg" alt="An image of a baby crocodile resting on a log" title="Little Nipper" />
          </a>
          <p>Wildlife</p>
      </div><!-- galleryThumb -->

      <div class="galleryThumb grid_3">
          <a href="stilllife.php" onclick="ga('send', 'event', 'View Gallery', 'Click', 'Still Life Gallery');">
            <img class="imageThumb" src="images/gallery/still life/First to Fall (website).jpg" alt="An image of a fallen apple amongst autumn leaves" title="First to Fall" />
          </a>
          <p>Still Life</p>
      </div><!-- galleryThumb -->

      <div class="galleryThumb grid_3">
          <a href="landscapes.php" onclick="ga('send', 'event', 'View Gallery', 'Click', 'Landscapes Gallery');">
            <img class="imageThumb" src="images/gallery/landscapes/Heavens Ridge (website).jpg" alt="An image of the devils cauldron section of lydford gorge" title="Devils Cauldron"/>
          </a>
          <p>Landscapes</p>
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
