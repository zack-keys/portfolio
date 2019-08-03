<?php
  $image = "main.jpg";
  echo '<div class="heroImage" style="background-image: url(' . $image . ');" >';
   echo '<img src="' . $image . '" onload="imgLoaded(this)" />';
  echo '</div>';
?>