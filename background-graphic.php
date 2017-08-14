<?php
  $background = get_field('background_graphic');
  if($background == 'left_side'){
    echo '<div class="page-background page-background-left"></div>';
  }
  elseif($background == 'right_side'){
    echo '<div class="page-background page-background-right"></div>';
  }
?>