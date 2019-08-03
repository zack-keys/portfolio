<nav>
  <a id="nav" href="/index.php" class="logo">
    <?php include ("logo.php"); ?>
  </a>
  <div class="navText">
    <ul>
      <a href="/design.php">
        <li><span class="navLink">Design</span></li>
      </a><a href="/illustration.php">
        <li><span class="navLink">Illustration</span></li>
      </a><a href="/gamedev.php">
        <li><span class="navLink">Game Developemnt</span></li>
      </a>
    </ul>
  </div>
  <div class="navContact">
    <div class="deskMail"><a class="externalLink" href="mailto:<?php  echo $ini['site_email']; ?>"><?php  echo $ini['site_email']; ?></a></div>
    <div class="spacer deskMail">&nbsp;</div>
    <div>
      <a class="socialIcon mail externalLink" href="mailto:<?php  echo $ini['site_email']; ?>"><i class="fa fa-envelope-o navLink"></i></a>
      <a class="socialIcon externalLink" href="https://twitter.com/<?php  echo $ini['social_twitter']; ?>"><i class="fa fa-twitter navLink"></i></a>
      <a class="socialIcon externalLink " href="http://<?php  echo $ini['social_tumblr']; ?>.tumblr.com"><i class="fa fa-tumblr navLink"></i></a>
      <a class="socialIcon externalLink" href="https://www.instagram.com/<?php  echo $ini['social_instagram']; ?>/"><i class="fa fa-instagram navLink"></i>
      </a>
    </div>
  </div>
</nav>
