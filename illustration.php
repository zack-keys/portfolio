<html>
  <head>
    <title>Zack Keys - Illustration</title>
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/headGlobalMeta.php"); ?>
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/headScripts.php"); ?>
  </head>
 
  <body class="illustrationBody">
    <!-- Include Navigation Fragment -->
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/nav.php"); ?>
 
    <!-- Portfolio Grid -->
    <section class="portfolio">
 
      <?php
      // For each project display main.(any type) as image and link to project.php within the same directory.
 
      foreach(glob('illustrations/*/') as $image)
      {
        // get the url if there is one
        echo '<a class="portTile illustration externalLink" target="_blank"" >'; // href="' . file_get_contents($image . '/url.txt') . '" >';
        
        // If the file is a jpg
        if (file_exists($image . '/illustration.jpg')) {
          echo '<img src="' . $image . '/illustration.jpg' . '" onload="imgLoaded(this)" />';
          echo '</a>';
        
        // Else if the file is a gif
        } else if (file_exists($image . '/illustration.gif')) {
          echo '<img src="' . $image . '/illustration.gif' . '" onload="imgLoaded(this)" />';
          echo '</a>';
        }
        
      }
      ?>
    </section>
 
    <!-- Include the footer fragment -->
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/footer.php"); ?>
 
  </body>
</html>