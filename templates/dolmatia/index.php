<?php
// SUCKERFISH  MENU SWITCH // 
$menu_name = $this->params->get("menuName", "mainmenu");
/**
*Dolmatia TEMPLATE*
 * @copyright 2009 template design by globbers for globbersthemes	Copyright (C) .All rights reserved.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo _LANGUAGE; ?>" xml:lang="<?php echo _LANGUAGE; ?>">

<head>
<?php 
define( 'TEMPLATEPATH', dirname(__FILE__) );
include( TEMPLATEPATH.DS."suckerfish.php");

?>
	<jdoc:include type="head" />
	<?php if($my->id) initEditor(); ?>
	<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php
# main width#
$mod_left = $this->countModules( 'left' );
$mod_right = $this->countModules( 'right' );
if ( $mod_left && $mod_right ) {
 
	$width = '';
} elseif ( ($mod_left || $mod_right) ) {
 
	$width = '-mid';
} else {
  
	$width = '-full';
}
?>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/dolmatia/css/tdefaut.css" type="text/css" media="all" />
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/mouseover.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/cufon-replace.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/Tw_Cen_MT_400.font.js"></script>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/dolmatia/css/<?php echo $this->params->get('color'); ?>.css" type="text/css" />
<link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />

<!--[if lte IE 6]>
<link href="templates/<?php echo $this->template ?>/css/ie6.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	img, #topmenu,#carrousel,#slide{ behavior: url(<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/scripts/iepngfix.htc); } 
	</style>
<![endif]-->

</head>
<body class="color_<?php echo $this->params->get('color'); ?>">

<div class="pagewidth">
    <div id="header">
        <a href="index.php"><img src="templates/<?php echo $this->template ?>/images/logo.png" width="285" height="98" style="margin-top:40px" alt="logotype" /></a>
            <div id="pathway"><div class="pos">you are here:
                 <jdoc:include type="module" name="breadcrumbs" />
            </div>		
    </div>
	    <div class="clr">
		</div>
	        <div id="topmenu">
			    <div id="navigation">
                    <?php mosShowListMenu($menu_name); ?>
	            </div>
				    <div id="search">
	                    <jdoc:include type="modules" name="user4" />
                    </div>
		    </div>
			    <div id="carrousel">
	                <jdoc:include type="modules" name="user1" />
	            </div> 
				    <div id="newsflash">
	                    <jdoc:include type="modules" name="top" style="xhtml" />
					</div>
					   <div id="main-dolmatia">											
                            <div id="main<?php echo $width; ?>">
	                            <jdoc:include type="component"  />
                            </div>
							    <div id="colonnewrap<?php echo $width; ?>">

	                                <?php if ($this->countModules('left')) { ?>
	                                    <div id="col1">
	                                        <div class="element">			
	                                            <jdoc:include type="modules" name="left" style="xhtml" />
	                                        </div>
	                                    </div>
	                                <?php } ?>
		
	                                    <?php if ($this->countModules('right')) { ?>
	                                        <div id="col2">
	                                            <div class="element">			
	                                                <jdoc:include type="modules" name="right" style="xhtml" />
	                                            </div>
	                                        </div>
	                                     <?php } ?>
	                            </div>
						</div>
								<?php if ($this->countModules('user2') || $this->countModules('user3') || $this->countModules('user5') || $this->countModules('user6')) { ?>
							        <div id="users">
	                                    <div id="users-content">
					                        <div class="box">
						                        <jdoc:include type="modules" name="user2" style="xhtml" />
					                        </div>
					                        <div class="box">
						                        <jdoc:include type="modules" name="user3" style="xhtml" />
					                        </div>
					                        <div class="box">
						                        <jdoc:include type="modules" name="user5" style="xhtml" />
					                        </div>
					                        <div class="box">
					                            <jdoc:include type="modules" name="user6" style="xhtml" />
					                        </div>
										</div>
									</div>
								<?php } ?>
								
							        <div id="footer">
									    <div id="footer_tm">
                                            <div class="ftb">
                                                Copyright&copy; <?php echo date( '2008 - Y' ); ?><?php echo $mainframe->getCfg('sitename');?>.&nbsp;
                                                <?php if ($this->params->get('show_footertext')) : ?>
                                                <?php echo $this->params->get("footertext"); ?> - <a href="http://www.templates4all.de/" title="Joomla Templates" target="_blank">Joomla Templates</a> <?php endif; ?>
                                            </div>
                                        </div>
                                            <div id="top">
                                                <div class="top_button">
                                                     <a href="#" onclick="scrollToTop();return false;">
													 <img src="templates/<?php echo $this->template ?>/images/top.jpg" width="26" height="25" alt="top" /></a>
                                                </div>
                                            </div>

				                    </div>
                 			
									
								
</div><!--fin pagewidth-->
	
                  		

</body>

</html>