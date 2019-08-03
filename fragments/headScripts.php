<link rel="stylesheet" type="text/css" href="/css/style.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/ext-core/3.1.0/ext-core.js"></script>

<!-- Jquery -->
<script src="/scripts/jquery-1.12.1.min.js"></script>

<!-- Image Load -->
<script>
  function imgLoaded(img){
    var $img = $(img);
    $img.parent().addClass('loaded');
  };
</script>

<!-- Import Site Settings -->
<?php 
$ini = parse_ini_file($_SERVER['DOCUMENT_ROOT']. "/zackeys.ini");
?>
