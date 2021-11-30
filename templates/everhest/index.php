<?php
// SUCKERFISH   // 
$menu_name = $this->params->get("menuName", "mainmenu");
/*
*Everhest TEMPLATE*
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

<?php JHTML::_('behavior.mootools'); ?>

	<jdoc:include type="head" />
	<?php if($my->id) initEditor(); ?>
	<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/everhest/css/tdefaut.css" type="text/css" media="all" />
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/script.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/mouseover.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/slideshow.js"></script>
<link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />

<!--[if IE 6]>
<link href="templates/<?php echo $this->template ?>/css/ie6.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	img,#header,a.login-switch,a.register-switch,a.search-switch { behavior: url(<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/scripts/iepngfix.htc); } 
	</style>
<![endif]-->

<!--[if IE 7]>
<link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->


<?php   //main width
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

</head>
<body>  
    <div id="header">
        <div class="pagewidth">
			<div id="header-left">
			    <div id="sitename">
                    <a href="index.php"><img src="templates/<?php echo $this->template ?>/images/logo.png" width="376" height="242" alt="logotype" /></a>
                </div>
					<div id="tool"><!--mod_login-form-->
			            <jdoc:include type="modules" name="login" /> 
				        <!--module search-->			
    			        <?php if($this->countModules('user4')) : ?>
    			        <jdoc:include type="modules" name="user4" />
    			        <?php endif; ?>
			        </div> 
		    </div>
				<div id="header-right">
					<div id="topmenu">
					    <div id="navigation">
                            <?php TopMenu($menu_name); ?>
                        </div>
					</div>
                        <div id="slideshow"> 
						    <img src="templates/<?php echo $this->template ?>/images/slide1.jpg" alt="image1" />
							<img src="templates/<?php echo $this->template ?>/images/slide2.jpg" alt="image2" />
							<img src="templates/<?php echo $this->template ?>/images/slide3.jpg" alt="image3" />
							<img src="templates/<?php echo $this->template ?>/images/slide4.jpg" alt="image4" />
							<img src="templates/<?php echo $this->template ?>/images/slide5.jpg" alt="image5" />
							<img src="templates/<?php echo $this->template ?>/images/slide6.jpg" alt="image6" />
							<img src="templates/<?php echo $this->template ?>/images/slide7.jpg" alt="image7" />
							<img src="templates/<?php echo $this->template ?>/images/slide8.jpg" alt="image8" />
						</div>
								<script type="text/javascript" charset="utf-8">
								    var $j = jQuery.noConflict(); 
								        $j(document).ready(function(){
							                $j("#slideshow").slideshow({
			                                pauseSeconds: 5,
			                                height: 230,
			                                caption: false
		                                });
		                            });
						         </script>	
                </div>
		</div>
    </div>
		<?php if ($this->countModules('user1') || $this->countModules('user2') || $this->countModules('user3')) { ?>
		    <div id="box-wrap">
		        <div class="pagewidth">
			        <div id="users-box">
				        <div class="box">
						     <jdoc:include type="modules" name="user1" style="xhtml" />
					    </div>
					        <div class="sep">
					        </div>
					    <div class="box">
						<jdoc:include type="modules" name="user2" style="xhtml" />
					    </div>
					        <div class="sep">
					        </div>
					    <div class="box">
						     <jdoc:include type="modules" name="user3" style="xhtml" />
					    </div>
				    </div>
			    </div>
			</div>
		<?php } ?>
			<div id="pathway-wrap">
				<div class="pagewidth">
			        <div id="pathway"><p>you are here:
				        <jdoc:include type="modules" name="breadcrumb" /></p>
			        </div>
						<div id="datetime">
                            <?php echo date('d\ -F \-Y - H\:i'); ?>
                        </div>
				</div>
			</div>
			<div class="pagewidth">
			    <?php if($this->countModules('left')) : ?>
			        <div id="left">
				    	<jdoc:include type="modules" name="left" style="xhtml" />
				    </div>
				<?php endif; ?>
				
				    <div id="main<?php echo $width; ?>">
				        <jdoc:include type="component" />
				    </div>
					
				
				 <?php if($this->countModules('right')) : ?>
				    <div id="right">
				    	<jdoc:include type="modules" name="right" style="xhtml" />
				    </div>
				<?php endif; ?>	
			</div>
				
				    <div id="footer">
					    <div class="pagewidth">
					        <div id="footer_tm">
                                <div class="ftb">
                                    Copyright&copy; <?php echo date( '2008 - Y' ); ?> | <a href="http://www.templates4all.de/" title="Joomla Templates" target="_blank">Joomla Templates</a> | <?php echo $mainframe->getCfg('sitename');?> .&nbsp;
                                    <?php if ($this->params->get('show_footertext')) : ?>
                                    <?php echo $this->params->get("footertext"); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
	                            <div id="top">
                                    <div class="top-button">
                                        <a href="#" onclick="scrollToTop();return false;"><img src="templates/<?php echo $this->template ?>/images/top.png" width="30" height="30" alt="top" /></a>
                                    </div>
				                </div>
					    </div>
					</div>	    
</body>
</html>