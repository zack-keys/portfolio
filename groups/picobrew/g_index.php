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
      <h1>PicoBrew</h1>
      <p>PicoBrew is the creator of a small form-factor home-brew system. In my role as Visual Designer for the company I was able to tackle a huge variety of projets – everything from Prototype UIs, to Beer Label illustration, to full-fledge Audio/Video production for their how-to youtube series.</p>
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
