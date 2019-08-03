<html>
  <head>
    <title>Zack Keys - Design</title>
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/headGlobalMeta.php"); ?>
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/headScripts.php"); ?>
  </head>

  <body class="designBody">
    <!-- Include Navigation Fragment -->
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/nav.php"); ?>
    
    <!-- Group Description -->
    
    <section class="groupText">
      
      <div>
        <h1>Drift Marketplace</h1>
        <p>Drift marketplace is an environmentally-focused alternative to the traditional power utility. Using predictive algorithms and a this-century approach to their business, they're working on pushing the power grid into a new era. I was lucky enough to be part of the product team as we worked to launch Drift in New York, helping to establish the brand voice and guiding the development of the product UI.</p>
      </div>
      
    </section>
    
    <!-- Portfolio Grid -->
    <section class="portfolio">
      
      <?php

      // For each project display main.(any type) as image and link to project.php within the same directory.
      foreach(glob('projects/*/thumb.*') as $image)
      {
        echo '<a class="portTile" href="' . dirname($image) . '/project.php" >';
        echo '<img src="' . $image . '" onload="imgLoaded(this)" />';
        echo '</a>';
      }
      ?>
    </section>

    <!-- Include the footer fragment -->
    <?php include ($_SERVER['DOCUMENT_ROOT']. "/fragments/footer.php"); ?>

  </body>
</html>