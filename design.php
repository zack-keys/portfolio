<html>
  <head>
    <title>Zack Keys - Design</title>
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/headGlobalMeta.php"); ?>
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/headScripts.php"); ?>
  </head>

  <body class="designBody">
    <!-- Include Navigation Fragment -->
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/nav.php"); ?>
    <!-- Portfolio Grid -->
    <section class="portfolio">
      
      <?php
      // For each project display main.(any type) as image and link to project.php within the same directory.
      foreach(glob('groups/*/thumb.*') as $image)
      {
        echo '<a class="portTile" href="' . dirname($image) . '/g_index.php" >';
        echo '<img src="' . $image . '" onload="imgLoaded(this)" />';
        echo '</a>';
      }

      // For each project display main.(any type) as image and link to project.php within the same directory.
      foreach(glob('projects/*/thumb.*') as $image)
      {
        echo '<a class="portTile"href="' . dirname($image) . '/project.php" >';
        echo '<img src="' . $image . '" onload="imgLoaded(this)" />';
        echo '</a>';
      }
      ?>
    </section>

    <!-- Include the footer fragment -->
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/footer.php"); ?>

  </body>
</html>