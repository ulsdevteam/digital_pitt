<div id="pittbar" class="whitebar">
<a href="http://pitt.edu"><img src="/sites/digital/themes/digital_pitt/images/pitt-logo-whitebkg.gif"> </a>    <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('footernav')),)); ?>
</div>
<div id="wrap_headers" class="blue_bg">
<div class="banner">

		 <!-- print banner region -->
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
        
      <!-- print banner region -->
        <?php print render($page['banner']); ?>
    </div></div>
<!-- /end banner -->
  <div id"=wrap_banner" class="dark_blue"> <div id="banimage">
    <img src="/sites/digital/themes/digital_pitt/images/banner_960.jpg" style="margin:0px auto;">
</div></div>
<div id="wrap_mainmenu" class="ltblue_bg">
   	<div id="nav">
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('primary-nav')),)); ?>
      <div id="search">
        <?php print render($page['search']); ?>
      </div><!-- /end search -->
    </div></div><!-- /end nav -->

<?php print $messages; ?>
<div id="two-col-right-main"> 
 
  
  <?php if ($tabs): ?>
  <div class="tabs"><?php print render($tabs); ?></div>
  <?php endif; ?>
  <?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
  <?php endif; ?>
 
  
  <div id="main-content"> <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <div class="content-wrapper"> <?php print render($page['content']); ?> </div>
    <!-- /end content-wrapper --> 
  </div>
  <!-- /end main-content -->

  <!-- /end footer --> 
</div>  <div id="footer">
    <div id="footer-col1"> <?php print render($page['footer-col1']); ?> </div>
    <!-- /end footer column 1 -->
    <div id="footer-col2"> <?php print render($page['footer-col2']); ?> </div>
    <!-- /end footer column 2 --> 
  </div>
<!-- /end page-secondary -->