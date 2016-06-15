<?php print $messages; ?>


  <?php if ($tabs): ?>
  <div class="tabs"><?php print render($tabs); ?></div>
  <?php endif; ?>
  <?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
  <?php endif; ?>

  <div id="main-content">
    <div id="sidebar">
  <?php if ($collection_metadata): ?>
  <div class="islandora-basic-collection-metadata">
    <!--<p>using the islandora metadata framework</p>-->
    <?php print $collection_metadata; ?> </div>
  <?php endif; ?>
		<?php if ($page['sidebar']): ?>
    <div class="widget"> <?php print render($page['sidebar']); ?> </div>
    <!-- /end widget -->
    <?php endif; ?>
  </div><!-- /end sidebar -->
  
	<?php print render($title_prefix); ?>
	<?php if ($collection_img): ?>
  <div class="islandora-basic-collection-metadata-image"> <?php print $collection_img; ?> </div>
  <?php endif; ?>

  <?php
        $block = module_invoke('islandora_datastream_blocks', 'block_view', 'idb-DESC');
        print render($block['content']);
  ?>
  <div class="islandora-basic-collection clearfix">
    <span class="islandora-objects-display-switch">
    <?php
    print theme('links', array(
      'links' => $display_links,
      'attributes' => array('class' => array('links', 'inline')),
      ));
    ?>
  </span>
    <?php print $pager; ?>
    <div>Total objects: <?php print $total_count; ?></div>
    <?php print $content; ?>
    <?php print $pager; ?>
  </div><!-- /end islandora-basic-collection-metadata-desc -->

</div><!-- /end main-content -->


