<?php

/*--------------------------------------------------------------
# December 2008 (for Joomla 1.5)
# Copyright (C) design-joomla.eu All Rights Reserved.
# License: Copyrighted Commercial Software
# Website: http://www.design-joomla.eu
# Support: joomla-monster@design-joomla.eu
---------------------------------------------------------------*/

defined( '_JEXEC' ) or die( 'Restricted access' );
$url = clone(JURI::getInstance());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php  
require_once ( "templates/" . $this->template . "/menu.php");

// Use the folowing option for quick off LEFT and LIRHT positions displaying
$sideBarsScheme = array (
    //by default
    'default'=>      'left-right-content',

    // specify extra options for different components
    // if you dont write left or right - these positions wont be published
    // left-right-content | right-left-content | content-right-left | content-left-right
    // left-content-right | right-content-left
    // right-content | content-left | left-content | content-right
    'com_contact'=>  'content',
    'com_search'=>  'content-left-right',
    'com_content'=>  'left-content-right',
    'com_frontpage'=> 'left-content-right'

);

// ***************************************************
// Default Text/Size
// 0 = Smallest; 1 = Medium; 2 = X Large
// ***************************************************
$text_size = 0;

/***
DO NOT MODIFY THIS IF YOU DONT KNOW WHAT YOU DOING!
***/

if ($option && isset($sideBarsScheme[$option]) && trim($sideBarsScheme[$option]) && stristr($sideBarsScheme[$option],'content')!= false){
	$currentScheme = trim($sideBarsScheme[$option]);
} else {
	$currentScheme = $sideBarsScheme['default'];
}

if (!$this->countModules('left')) $currentScheme = str_replace('left','',$currentScheme);
if (!$this->countModules('right')) $currentScheme = str_replace('right','',$currentScheme);

$schemeOutput = '';
$currentScheme = explode("-",$currentScheme);
if (is_array ($currentScheme)) {
   foreach ($currentScheme as $item) {
   	   if ($item) $schemeOutput[] = $item;
   }
}
$currentScheme = "scheme_".count($schemeOutput);
$jj_templ_name = $this->template;
$jj_templ_path = 'templates/' . $jj_templ_name . '/';


?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/horizontal.css" type="text/css" />
<!--[if IE 6 ]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 7 ]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" language="javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/animation.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/cssmenus.js"></script>
<link rel="shortcut icon" href="templates/<?php echo $this->template ?>/images/favicon.ico"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/editor.css" type="text/css" />

</head>
<body>
<div align="center">
	<div id="top" class="clearfix">
		<div id="logo">
			 <a onfocus="blur()" href="<?php echo $mainframe->getCfg('live_site');?>index.php"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.gif" alt="logo" /></a>
		</div>
		<div id="top_right">
			<div id="top_1">
				<div id="icons">					
					<jdoc:include type="modules" name="user3" style="raw"/>
				</div>
				<div id="search_box">
					<jdoc:include type="modules" name="user4" style="raw"/>
				</div>
			</div>
			<div id="menu_box">
				<?php mosShowListMenu('topmenu'); ?>
			</div>
		</div>
	</div>
	<div id="header" class="clearfix"><div id="header_t" class="clearfix"><div id="header_b" class="clearfix">
		<div id="head_slogan">		
			<?php
         		if ($this->countModules('top')) : ?>
        	 		<jdoc:include type="modules" name="top" style="raw"/> 
        	<?php else : ?>
         		<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/head_slogan.jpg" alt="here is a slogan" border="0" />
        	<?php endif; ?>			
		</div>
		<div id="head_img">
			<?php
         		if ($this->countModules('header')) : ?>
        	 		<jdoc:include type="modules" name="header" style="raw"/> 
        	<?php else : ?>
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/head_img.jpg" alt="head image"  border="0" />
			<?php endif; ?>	
		</div>
	</div></div></div>
	<div id="two_cols" class="clearfix"><div <?php echo ' class="'.$currentScheme.'"';?>>
	 <?php
      if (!is_array($schemeOutput)) {
      	  echo '<p align="center"><b>Wrong SCHEME OPTION. Please, set valid scheme name<b></p>';
      } else {
        $i=1;
      	foreach ($schemeOutput as $item) {
      	    if ($i==1){$className = 'first-in-scheme';}else if ($i==2){$className = 'second-in-scheme';}else if ($i==3){$className = 'third-in-scheme';}
      		if (stristr($item,'left')) { ?>
      <div id="left" class="<?php echo $className; ?>">
         <jdoc:include type="modules" name="left" style="rounded"/><?php $i++; ?>
      </div>
      <?php } else if (stristr($item,'right')) { ?>
      <div id="right" class="<?php echo $className; ?>">
         <jdoc:include type="modules" name="right" style="rounded"/><?php $i++; ?>
      </div>
      <?php } else if (stristr($item,'content')) {?>
      <div id="content" class="<?php echo $className; ?>">
           	 <div id="mainbody" class="clearfix"><jdoc:include type="message" /><jdoc:include type="component" style="html"/></div>
      </div>
      <?php
        $i++;
        	}
        }
      }
	  ?>
	  </div></div>
	<div id="foot_in" class="clearfix"><div id="foot_t" class="clearfix"><div id="foot_b" class="clearfix">
		<div id="foot" class="clearfix">
			<div id="copyright"><jdoc:include type="modules" name="copyrights" style="raw"/></div>
			<div id="design"><a href="http://www.design-joomla.eu" target="_blank" title="Professional Joomla Templates">Joomla Templates</a> | More <a href="http://www.templates-royal.de" target="_blank" title="Joomla Templates">Joomla Templates</a>
		</div>
	</div></div></div>
</div>
</body>
</html>







