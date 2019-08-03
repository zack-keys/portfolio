<?php
foreach(glob('fullImg/*') as $fullImage) 
{
  echo '<img class="fullImg" src="' . $fullImage . '" onload="imgLoaded(this)" />';
}
?>
<div class="smallImgGallery">
<?php
foreach(glob('img/*') as $image) 
{
  echo '<img class="smallImg" src="' . $image . '" onload="imgLoaded(this)" />';
}
?>
  </div>