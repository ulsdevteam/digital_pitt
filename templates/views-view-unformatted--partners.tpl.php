<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
    
<?php endif; ?>
<div>
<p>In addition to digitizing material from our own archives and special collection departments for online access, the ULS often partners with Pitt faculty, students and departments to create and provide access to unique teaching and research material. Examples include <a href="http://images.library.pitt.edu/c/chartres/">Chartres Cathedral,</a> <a href="http://images.library.pitt.edu/s/stalinka/">Stalinka,</a> <a href="http://digital.library.pitt.edu/a/americanleft/">American Left Ephemera,</a> <a href="http://digital.library.pitt.edu/k/kogyo/index.html">Kogyo,</a> and <a href="http://www.library.pitt.edu/freeatlast/">Free at Last</a>. If you are affiliated with Pitt and have a digitization need, please <a href="http://library.pitt.edu/ask-archivist">contact us!</a><br><br>

The ULS also partners with local and regional cultural heritage repositories, such as the Heinz History Center, Northland Public Library, Pittsburgh History & Landmarks Foundation, and many other organizations, to provide online access to selected historical material. See our Historic Pittsburgh website for more information.
</p>
</div>
<?php foreach ($rows as $id => $row): ?>
<div class="collection-wrapper">
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
</div><!-- /end collection-wrapper -->
<?php endforeach; ?>

