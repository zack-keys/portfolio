<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>PicoBrew Manual - Z Series</title>
  <link rel="stylesheet" type="text/css" href="_css/pb_manual.css">
  <link rel="stylesheet" type="text/css" href="_css/print.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Set up PHP Markdown Parser -->
  <?php 
    require_once '_libs/Parsedown.php'; 
    require_once '_libs/ParsedownExtra.php'; 
    $parsedown = new ParsedownExtra();
    $text = file_get_contents('content.md');
  ?>

</head>

<body>

  <!-- Manual Hero Text+Image+UpdateTime -->
  <div class="hero">
    <h1>Picobrew Z-Series Manual</h1>
    <h4 class="ud-time">
      <?php echo "Updated: ".date("Y.m.d",filemtime("content.md")); ?>
    </h4>
  </div>

  <!-- The fixed footer navigation bar -->
  <nav>
    <a href="#home"><i class="fas fa-home"></i></a>
  </nav>

  <!-- Render the manual content -->
  <div class="content">
    <a name="home"></a>
    <?php echo $parsedown->text($text) ?>
  </div>

</body>

</html>
