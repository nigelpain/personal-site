<?php
session_start();
$confirmation = isset($_SESSION['confirmation']) ? $_SESSION['confirmation'] : [];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Nigel Pain Photography - Contact</title>
    <link href="css/styles.css", type="text/css", rel="stylesheet">
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="index.html" class="navbtn">Home</a></li>
        <li><a href="gallery/index.html" class="navbtn">Gallery</a></li>
        <li><a href="#" class="navbtn">Blog</a></li>
        <li><a href="about.html" class="navbtn">About</a></li>
        <li><a href="contact.php" class="navbtncur">Contact</a></li>
      </ul>
    </nav>
    <div id="page" class="container_12 clearfix">
      <header class="grid_12">
        <img src="./images/Header Logo.png" alt="Website Logo">
      </header>

      <div id="columnTopLeft" class="grid_8">
        <h1 id="pageHeader">Get in Touch</h1>
        <div id="contact-intro" class="grid_6">
          <p>You can use any of the methods on this page to contact me. I like to think that I am a friendly and approachable kinda chap, so just get in touch if you have questions about services I offer.</p>
        </div><!-- contact-intro -->
      </div><!-- columnTopLeft -->

      <div id="columnTopRight" class="grid_4">
        <h2 class="sectionHeader">Audiophone</h2>
        <p>If you prefer the sound of a human voice then feel free to call me on:</p>
        <p><b>07527 983268</b></p>
      </div><!-- columnTopRight -->

      <div id="columnBottomLeft" class="grid_6">
        <h2 class="sectionHeader">Fine Form</h2>
        <?php if(!empty($confirmation)): ?>
          <p id="formMessage"><?php echo $_SESSION['confirmation']; ?></p>
        <?php endif; ?>
        <form action="email.php" method="post">
          <div class="formElement">
            <label class="formLabel" for="name">Name : </label>
            <input class="formInput" type="text" id="name" name="name" size="30" required>
          </div>
          <div class="formElement">
            <label class="formLabel" for="email">Email : </label>
            <input class="formInput" type="email" id="email" name="email" size="30" required>
          </div>
          <div class="formElement">
            <label class="formLabel" for="subject">Subject : </label>
            <input class="formInput" type="text" id="subject" name="subject" size="30" required>
          </div>
          <div class="formElement">
            <label class="formLabel" for="message">Message : </label>
            <textarea class="formInput" id="message" name="message" rows="5" cols="35" required></textarea>
          </div>
          <div class="formSubmit">
            <input class="formButton" type="submit" value="Submit">
          </div>
        </form>
      </div><!-- columnBottomLeft -->

      <div id="columnBottomRight" class="grid_6">
        <h2 class="sectionHeader">Follow Me!</h2>
        <p>(just not in a creepy way please)</p>
        <script src="https://platform.twitter.com/widgets.js"></script>
        <a href="https://twitter.com/intent/follow?screen_name=Monk_a_Moo"><img id="twitterLogo" src="./images/TwitterLogo_white.png" /></a>
      </div><!-- columnBottomRight -->
    </div><!-- page -->
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

<?php
unset($_SESSION['confirmation']);
?>
