<?php

/**
 * @file jcarousel-view.tpl.php
 * View template to display a list as a carousel.
 */
?>

<ul class="<?php print $jcarousel_classes; ?>">
  <?php foreach ($rows as $row_number => $columns): ?>
    <li class="<?php print $row_classes[$id]; ?>"><?php foreach ($columns as $column_number => $item): ?>
          <div class="<?php print $column_classes[$row_number][$column_number]; ?>" style="width:240px;">
            
            <?php print $item; ?>
          </div>
        <?php endforeach; ?></li>
  <?php endforeach; ?>
</ul>

 