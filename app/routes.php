<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link href="css/main.css", type="text/css", rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
  <div class="grid">
    


<div class="grid__header background background--ride">
    <header class="header">
        <nav class="header__nav">
            <a class="header__nav-logo" href="index.php">
                <h1>NIGEL PAIN</h1>
            </a>

            <a id="header__nav-link--mobile" class="header__nav-link header__nav-link--mobile" href="#"><img src="../images/icons/menu.svg">Menu</a>

            <ul id="header__nav-list" class="header__nav-list">
                <li><a href="work.php" class="header__nav-link ">Work</a></li>

                <li><a href="ride.php" class="header__nav-link  text-colour--ride">Ride</a></li>

                <li><a href="eat.php" class="header__nav-link ">Eat</a></li>

                <li><a href="play.php" class="header__nav-link ">Play</a></li>

                <li><a href="http://blog.nigelpain.com" class="header__nav-link">Blog</a></li>

                <li><a href="contact.php" class="header__nav-link ">Contact</a></li>
            </ul>
        </nav>

        <div class="header__action">
            
                <h1 class="header__action-heading text-colour--ride">RIDE</h1>

                <p class="header__action-sub-heading">tales from the trails - routes to ride</p>

                <div class="header__action-buttons">
                    <a class="link-button" href="http://blog.nigelpain.com">READ MY MUSINGS</a>

                    <a class="link-button" href="contact.php">CONTACT ME</a>
                </div>
             
        </div>
    </header>
</div>


<div class="grid__content">
    <?php
    $posts = json_decode(file_get_contents('http://blog.nigelpain.com/wp-json/wp/v2/posts?per_page=5&categories=3&filter[orderby]=date'));
    foreach ( $posts as $post ) {
        echo '<div class="grid__content__item"><div class="blog-post"><div class="blog-post__header"><h3 class="blog-post__heading text-colour--ride">'.$post->title->rendered.'</h3><p class="blog-post__sub-header">Last updated: '.$post->modified_gmt.'</p></div><div class="blog-post__content">'.$post->content->rendered.'</div></div></div>';
    }
    ?>
</div>



<div class="grid__footer background background--ride">
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
