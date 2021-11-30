<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );

// Style Variables
$fontStackBody = $this->params->get("fontStackBody", "cambria");
$fontStackHeading = $this->params->get("fontStackHeading", "palatino");
$fontStackNav = $this->params->get("fontStackNav", "helvetica");
$fontSize = $this->params->get("fontSize", "82%");

$analytics = $this->params->get("analytics","");

// Bg Image
$bgImage = $this->params->get("bgImage", "logo.png");

// Css hilite
$hilite = $this->params->get("hilite", "yellow.css");

// Logo Variables
$logoFile = $this->params->get("logoFile", "logo.png");
$logoLink = $this->params->get("logoLink", "index.php");
$logoPosition = $this->params->get("logoPosition", "below");

// Layout Variables

$tWidth = $this->params->get("tWidth","960");
$gutter = $this->params->get("gutter","40");
$containerGutter = $this->params->get("containerGutter","0");
$halfgutter = $gutter/2;
$cols = $this->params->get("cols","12");
$position = $this->params->get("position","left");
$containerMargin = $this->params->get("containerMargin","280px");


$headerEqual = $this->params->get("headerEqual","1");
$topEqual = $this->params->get("topEqual","1");
$grid1Equal = $this->params->get("grid1Equal","1");
$grid2Equal = $this->params->get("grid2Equal","1");
$grid3Equal = $this->params->get("grid3Equal","1");
$grid4Equal = $this->params->get("grid4Equal","1");
$grid5Equal = $this->params->get("grid5Equal","1");
$grid6Equal = $this->params->get("grid6Equal","1");
$bottomEqual = $this->params->get("bottomEqual","1");
$panelEqual = $this->params->get("panelEqual","1");

// Menu Variables
$panelMenu = $this->params->get("panelMenu", 0); 
$superfish = $this->params->get("superfish", 1);
$sfEffect = $this->params->get("sfEffect", "5");


// Panel Variables
$panelWidth = $this->params->get("panelWidth", "800");
$panelHeight = $this->params->get("panelHeight", "600");
$openPanel = $this->params->get("openPanel", "Open Panel");
$closePanel = $this->params->get("closePanel", "Close Panel");
$panel1Cols = $this->params->get("panel1Width", "four");
$panel2Cols = $this->params->get("panel2Width", "four");
$panel3Cols = $this->params->get("panel3Width", "two");
$panel4Cols = $this->params->get("panel4Width", "four");

// Variables for the top, grid, advert and bottom modules
$header1Cols = $this->params->get("header1Width", "three");
$header2Cols = $this->params->get("header2Width", "three");
$header3Cols = $this->params->get("header3Width", "three");
$header4Cols = $this->params->get("header4Width", "three");
$top1Cols = $this->params->get("top1Width", "three");
$top2Cols = $this->params->get("top2Width", "three");
$top3Cols = $this->params->get("top3Width", "three");
$top4Cols = $this->params->get("top4Width", "three");
$bannerCols = $cols;
$grid1Cols = $this->params->get("grid1Width", "three");
$grid2Cols = $this->params->get("grid2Width", "three");
$grid3Cols = $this->params->get("grid3Width", "three");
$grid4Cols = $this->params->get("grid4Width", "three");
$grid5Cols = $this->params->get("grid5Width", "four");
$grid6Cols = $this->params->get("grid6Width", "four");
$grid7Cols = $this->params->get("grid7Width", "four");
$grid8Cols = $this->params->get("grid8Width", "four");
$grid9Cols = $this->params->get("grid9Width", "six");
$grid10Cols = $this->params->get("grid10Width", "six");
$grid11Cols = $this->params->get("grid11Width", "six");
$grid12Cols = $this->params->get("grid12Width", "six");
$grid13Cols = $this->params->get("grid13Width", "six");
$grid14Cols = $this->params->get("grid14Width", "six");
$grid15Cols = $this->params->get("grid15Width", "three");
$grid16Cols = $this->params->get("grid16Width", "six");
$grid17Cols = $this->params->get("grid17Width", "four");
$grid18Cols = $this->params->get("grid18Width", "four");
$grid19Cols = $this->params->get("grid19Width", "four");
$grid20Cols = $this->params->get("grid20Width", "four");
$grid21Cols = $this->params->get("grid21Width", "three");
$grid22Cols = $this->params->get("grid22Width", "three");
$grid23Cols = $this->params->get("grid23Width", "three");
$grid24Cols = $this->params->get("grid24Width", "three");
$advert1Cols = $this->params->get("advert1Width", "two");
$advert2Cols = $this->params->get("advert2Width", "two");
$advert3Cols = $this->params->get("advert3Width", "two");
$advert4Cols = $this->params->get("advert4Width", "two");
$advert5Cols = $this->params->get("advert5Width", "two");
$advert6Cols = $this->params->get("advert6Width", "two");
$bottom1Cols = $this->params->get("bottom1Width", "four");
$bottom2Cols = $this->params->get("bottom2Width", "four");
$bottom3Cols = $this->params->get("bottom3Width", "four");
$bottom4Cols = $this->params->get("bottom4Width", "four");
$bottom5Cols = $this->params->get("bottom5Width", "four");

// Variables for Main Width with left module only
$leftCols2L = $this->params->get("leftCols2L", "six");
$midCols2L = $this->params->get("midCols2L", "six");

// Variables for the mainwidth with right column only
$rightCols2R = $this->params->get("rightCols2R", "three");
$midCols2R = $this->params->get("midCols2R", "nine");

// Variables for the main width with left and right
$leftCols3LR = $this->params->get("leftCols3LR", "three");
$midCols3LR = $this->params->get("midCols3LR", "six");
$rightCols3LR = $this->params->get("rightCols3LR", "three");

// Variables for the main width with left and right and center
$leftCols4LRC = $this->params->get("leftCols4LRC", "three");
$midCols4LRC = $this->params->get("midCols4LRC", "six");
$rightCols4LRC = $this->params->get("rightCols4LRC", "three");
$centerCols4LRC = $this->params->get("centerCols4LRC", "three");

// Variables for the main width with left and right and center
$leftCols3LC = $this->params->get("leftCols3LC", "three");
$midCols3LC = $this->params->get("midCols3LC", "six");
$centerCols3LC = $this->params->get("centerCols3LC", "three");

// Variables for the main width with left and right and center
$rightCols3RC = $this->params->get("rightCols3RC", "three");
$midCols3RC = $this->params->get("midCols3RC", "six");
$centerCols3RC = $this->params->get("centerCols3RC", "three");

// Width for the logo and navigation
$mainLayout = $this->params->get("mainLayout", 2);
$logoCols = $this->params->get("logoWidth", "four");
$navCols = $this->params->get("navWidth", "twelve");
$navLeft = $this->params->get("navLeft", "1");

// Logic for the superfish
if ($sfEffect == "1") {
$sfType = 'height:"show"';
}
else if ($sfEffect == "2") {
$sfType = 'width:"show"';
}
else if ($sfEffect == "3") {
$sfType = 'opacity:"show"';
}
else if ($sfEffect == "4") {
$sfType = 'width:"show", opacity:"show"';
}
else if ($sfEffect == "5") {
$sfType = 'height:"show",opacity:"show"';
}
else if ($sfEffect == "6") {
$sfType = 'height:"show", width:"show",opacity:"show" ';
}
else if ($sfEffect == "7") {
$sfType = 'height:"show", width:"show"';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico" />

<!-- Import Style Sheets-->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link href="templates/<?php echo $this->template ?>/css/template_css.css" rel="stylesheet" type="text/css" media="screen" />	
<link href="templates/<?php echo $this->template ?>/style/base/theme.css" rel="stylesheet" type="text/css" media="screen" />
<link href="templates/<?php echo $this->template ?>/style/hilite/<?php echo $hilite ?>.css" rel="stylesheet" type="text/css" media="screen" />

	
<?php if ($superfish) { ?>
<script type="text/JavaScript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/superfish.js"></script>
<?php } ?>
<?php if($this->countModules('panel1') or $this->countModules('panel2') or $this->countModules('panel3') or $this->countModules('panel4')) { ?>
<script type="text/JavaScript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.popup.js"></script>
<?php } ?>
<?php if ($panelMenu) { ?>
<!-- Panel Menu-->
<script type="text/JavaScript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/accordionMenu.js"></script>
<?php }?>


<!--[if lte IE 6]>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/DD_belatedPNG0.0.8a-min.js"></script>
<script>
    DD_belatedPNG.fix('.pathway img,#logo a img,#leftCol ul li li a,#rightCol ul li li a,.bgOverlay,.ssPager li,.jbLogo,#leftCol ul li a,#rightCol ul li a, #centerCol ul li a,.bottomRow ul li a,#leftCol ul li a,#rightCol ul li a,#leftCol ul li span.separator,#rightCol ul li span.separator,#centerCol ul li a,#leftCol ul li li a,#rightCol ul li li a,#centerCol ul li li a,#leftCol span.expanded,#rightCol span.expanded,#leftCol ul li li span.expanded,#rightCol ul li li span.expanded'); 
</script>
<![endif]-->


<?php
// Loads the vars file
define( 'YOURBASEPATH', dirname(__FILE__) );
require(YOURBASEPATH .DS."vars.php");
?>

<script type="text/javascript">
jQuery(document).ready(function(){
	
	<?php if ($superfish == "yes") : ?>
			jQuery("#nav ul")
			.superfish({
				animation : {<?php echo $sfType ?>},
				delay : 1000
			});	
	<?php endif; ?>
	
});
</script>

<style type="text/css" media="screen">
.bannerRow{background: #232323 url(templates/<?php echo $this->template ?>/style/bg/<?php echo $bgImage ?>) center top no-repeat}
</style>

</head>
<body class="<?php echo $fontStackBody ?> <?php echo $fontStackHeading ?>" style="font-size: <?php echo $fontSize ?>">
<div class="fullWrap">
<?php if ($top > "0") : ?>
<div class="outerWrapper topRow"> <!-- Top Wrapper -->
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
				<div class="containerBG">
						<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">
								<div id="topWrapper">
									
									<?php if($this->countModules('top1')) : ?>
									<div id="top1" style="width:<?php echo $$top1Cols; ?>px;margin-right: <?php echo $gutter ?>px">
												<jdoc:include type="modules" name="top1" style="xhtml" />
									</div>
									<?php endif; ?>
									
									<?php if($this->countModules('top2')) : ?>
									<div id="top2" style="width:<?php echo $$top2Cols; ?>px;margin-right: <?php echo $gutter ?>px">
												<jdoc:include type="modules" name="top2" style="xhtml" />
									</div>
									<?php endif; ?>
									
									<?php if($this->countModules('top3')) : ?>
									<div id="top3" style="width:<?php echo $$top3Cols; ?>px;margin-right: <?php echo $gutter ?>px">
												<jdoc:include type="modules" name="top3" style="xhtml" />
									</div>
									<?php endif; ?>
									
									<?php if($this->countModules('top4')) : ?>
									<div id="top4" style="width:<?php echo $$top4Cols; ?>px">
												<jdoc:include type="modules" name="top4" style="xhtml" />
									</div>
									<?php endif; ?>
								</div> 
						</div>
				</div>
		</div>
</div> <!-- Top Wrapper -->
<?php endif; ?>

<?php if ($logoPosition =="above" or $header > "0") { ?>
<!-- Logo Wrapper -->
<div class="outerWrapper logoRow">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
				<div class="containerBG">
						<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">
								<?php if ($logoPosition =="above") { ?>
								<div id="logo" style="width:<?php echo $$logoCols; ?>px;margin-right: <?php echo $gutter ?>px">
										<a href="<?php echo $logoLink ?>"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/style/logo/<?php echo $logoFile ?>" alt="<?php echo $mainframe->getCfg('sitename');?>" /></a>
								</div> 
								<?php } ?>
								
								<?php if ($logoPosition =="below") { ?>
								<div id="header1" style="width:<?php echo $$header1Cols; ?>px;margin-right: <?php echo $gutter ?>px">
										<jdoc:include type="modules" name="header1" style="xhtml" />
								</div> 								
								<?php } ?>
								
								<?php if($this->countModules('header2')) : ?>
								<div id="header2" style="width:<?php echo $$header2Cols; ?>px;margin-right: <?php echo $gutter ?>px">
										<jdoc:include type="modules" name="header2" style="xhtml" />
								</div>
								<?php endif; ?>
								
								<?php if($this->countModules('header3')) : ?>
								<div id="header3" style="width:<?php echo $$header3Cols; ?>px;margin-right: <?php echo $gutter ?>px">
										<jdoc:include type="modules" name="header3" style="xhtml" />
								</div>
								<?php endif; ?>
								
								<?php if($this->countModules('header4')) : ?>
								<div id="header4" style="width:<?php echo $$header4Cols; ?>px">
										<jdoc:include type="modules" name="header4" style="xhtml" />
								</div>
								<?php endif; ?>
								
						</div>
				</div>
		</div>
</div>
<!-- Logo Wrapper -->
<?php } ?>

<!-- Nav Wrapper -->
<div class="outerWrapper navRow">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
				<div class="containerBG">
						<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">
								<div id="navWrapper">
										<?php if ($logoPosition =="below") { ?>
										<div id="logo" style="width:<?php echo $$logoCols; ?>px">
												<a href="<?php echo $logoLink ?>"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/style/logo/<?php echo $logoFile ?>" alt="<?php echo $mainframe->getCfg('sitename');?>" /></a>
										</div> 
										<?php } ?>
										<div id="navWrap" <?php if ($navLeft) { ?> class="navLeft" <?php } elseif ($navLeft =="0") { ?> class="navRight" <?php } ?>style="width:<?php echo $$navCols; ?>px">
												<div id="nav" class="<?php echo $fontStackNav ?>">
															<jdoc:include type="modules" name="menu" style="xhtml" />
												</div>	
												
										</div>
								</div>	
						</div>
				</div>
		</div>
</div>
<!-- Nav Wrapper -->

<?php if($this->countModules('banner')) : ?>
<!-- Banner Wrapper -->
<div class="outerWrapper bannerRow">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
				<div class="containerBG">
						<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">
																
								
								<div id="banner" style="width:100%">
										<jdoc:include type="modules" name="banner" style="xhtml" />
								</div> 								
							
																
						</div>
				</div>
		</div>
</div>
<!-- Banner Wrapper -->
<?php endif; ?>

<div id="mainBodyWrap">
<?php if ($grid1 > "0") : ?>
<!-- First Row Grid -->
<div class="outerWrapper grid1Row">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
				<div class="containerBG">
						<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">
								<div class="gridWrap1">
									
										<?php if($this->countModules('grid1')) : ?>
												<div id="grid1" style="width:<?php echo $$grid1Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="grid1" style="xhtml" />
												</div>
										<?php endif; ?>
										<?php if($this->countModules('grid2')) : ?>
												<div id="grid2" style="width:<?php echo $$grid2Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="grid2" style="xhtml" />
												</div>
										<?php endif; ?>
										<?php if($this->countModules('grid3')) : ?>
												<div id="grid3" style="width:<?php echo $$grid3Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="grid3" style="xhtml" />
												</div>
										<?php endif; ?>
										<?php if($this->countModules('grid4')) : ?>
												<div id="grid4" style="width:<?php echo $$grid4Cols; ?>px">
														<jdoc:include type="modules" name="grid4" style="xhtml" />
												</div>
										<?php endif; ?>
									
								</div>
						</div>
				</div>
		</div>
</div>
<!-- First Grid -->
<?php endif; ?>
<?php if ($grid2 > "0") : ?>
							<!-- Second Row Grid -->
<div class="outerWrapper grid2Row">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
				<div class="containerBG">
						<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">		
		
								<div class="gridWrap2">
									
											<?php if($this->countModules('grid5')) : ?>
													<div id="grid5" style="width:<?php echo $$grid5Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid5" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid6')) : ?>
													<div id="grid6" style="width:<?php echo $$grid6Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid6" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid7')) : ?>
													<div id="grid7" style="width:<?php echo $$grid7Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid7" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid8')) : ?>
													<div id="grid8" style="width:<?php echo $$grid8Cols; ?>px">
															<jdoc:include type="modules" name="grid8" style="xhtml" />
													</div>
											<?php endif; ?>
										
								</div>
								<div class="clear"></div>
								
						</div>
				</div>
		</div>
</div>
<!-- Second Row Grid -->
<?php endif; ?>
<?php if ($grid3 > "0") : ?>
								<!-- Third Row Grid -->
<div class="outerWrapper grid3Row">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
				<div class="containerBG">
						<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">
								
								
								<div class="gridWrap3">
									
										<?php if($this->countModules('grid9')) : ?>
												<div id="grid9" style="width:<?php echo $$grid9Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="grid9" style="xhtml" />
												</div>
										<?php endif; ?>
										<?php if($this->countModules('grid10')) : ?>
												<div id="grid10" style="width:<?php echo $$grid10Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="grid10" style="xhtml" />
												</div>
										<?php endif; ?>
										<?php if($this->countModules('grid11')) : ?>
												<div id="grid11" style="width:<?php echo $$grid11Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="grid11" style="xhtml" />
												</div>
										<?php endif; ?>
										<?php if($this->countModules('grid12')) : ?>
												<div id="grid12" style="width:<?php echo $$grid12Cols; ?>px">
														<jdoc:include type="modules" name="grid12" style="xhtml" />
												</div>
										<?php endif; ?>
									
								</div>
								
						</div>
				</div>
		</div>
</div>
<!-- Third Row Grid -->
<?php endif; ?>

<div class="outerWrapper mainRow">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
				<div class="containerBG">
						<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">
										

								<div id="mainWrap" class="<?php echo $mainWidth ?>">
							
								<?php if($this->countModules('breadcrumb')) : ?>
								<!-- Breadcrumb -->
									<div id="breadcrumb">
											<jdoc:include type="modules" name="breadcrumb" style="xhtml" />
									</div>
									<div class="clear"></div>
								<!-- End Breadcrumb -->
								<?php endif; ?>
								
								<?php if($this->countModules('above')) : ?>
								<!--  above -->
									
											<div id="above" class="<?php echo $mainWidth ?>">
													<jdoc:include type="modules" name="above" style="xhtml" />
											</div>									
								
								<!-- End  above -->
								<div class="clear"></div>
								
								<?php endif; ?>
								
								<?php if($this->countModules('left')) : ?>
								<!-- Left Column -->
									<div id="leftCol">
											<div id="left" style="width:<?php echo $$leftCols; ?>px;margin-right: <?php echo $gutter ?>px" class="<?php echo $mainWidth ?>">
													<jdoc:include type="modules" name="left" style="xhtml" />
											</div>
									</div>
								<!-- End Left Column -->
								<?php endif; ?>
								
								<?php if ($mainLayout =="1") {
								 if($this->countModules('center')) : ?>
								<!-- Center Column -->
									<div id="centerCol">
											<div id="center" style="width:<?php echo $$centerCols; ?>px;margin-right: <?php echo $gutter ?>px" class="<?php echo $mainWidth ?>">
													<jdoc:include type="modules" name="center" style="xhtml" />
											</div>
									</div>
								<!-- End Center Column -->
								<?php endif; 
								} ?>

								<!-- Main Content -->
									<div id="midCol" style="width:<?php echo $$midCols; ?>px;<?php echo $midColFloat ?>;<?php echo $midColMargin ?>px" class="<?php echo $mainWidth ?>">
								
								<?php if ($advert1 > "0") : ?>
										<!-- Top Advert Row -->
										<div id="topAdvert">
												<?php if($this->countModules('advert1')) : ?>
												<div id="advert1" style="width:<?php echo $$advert1Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="advert1" style="xhtml" />
												</div>
												<?php endif; ?>
												
												<?php if($this->countModules('advert2')) : ?>
												<div id="advert2" style="width:<?php echo $$advert2Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="advert2" style="xhtml" />
												</div>
												<?php endif; ?>
												
												<?php if($this->countModules('advert3')) : ?>
												<div id="advert3" style="width:<?php echo $$advert3Cols; ?>px">
														<jdoc:include type="modules" name="advert3" style="xhtml" />
												</div>
												<?php endif; ?>
										</div>
										<!-- Top Advert Row -->
										<?php endif; ?>

										<div class="clear"></div>
										

										<div id="mainContent"  class="<?php echo $mainWidth ?>">
												<jdoc:include type="message" />
												<jdoc:include type="component" />
										</div>
										

										<div class="clear"></div>
										
										<?php if ($advert2 > "0") : ?>
										<!-- Bottom Advert Row -->
												<div id="bottomAdvert">
												<?php if($this->countModules('advert4')) : ?>
												<div id="advert4" style="width:<?php echo $$advert4Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="advert4" style="xhtml" />
												</div>
												<?php endif; ?>
												
												<?php if($this->countModules('advert5')) : ?>
												<div id="advert5" style="width:<?php echo $$advert5Cols; ?>px;margin-right: <?php echo $gutter ?>px">
														<jdoc:include type="modules" name="advert5" style="xhtml" />
												</div>
												<?php endif; ?>
												
												<?php if($this->countModules('advert6')) : ?>
												<div id="advert6" style="width:<?php echo $$advert6Cols; ?>px">
														<jdoc:include type="modules" name="advert6" style="xhtml" />
												</div>
												<?php endif; ?>
										</div>
										<?php endif; ?>
								</div>
								<!-- End Main Content -->
								
								
								<?php if ($mainLayout =="2") {
								if($this->countModules('center')) : ?>
								<!-- Center Column -->
									<div id="centerCol">
											<div id="center" style="width:<?php echo $$centerCols; ?>px;margin-right: <?php echo $gutter ?>px" class="<?php echo $mainWidth ?>">
													<jdoc:include type="modules" name="center" style="xhtml" />
											</div>
									</div>
								<!-- End Center Column -->
								<?php endif; 
								} ?>
								
								<?php if($this->countModules('right')) : ?>
								<!-- Right Column -->
									<div id="rightCol">
									
											<div id="right" style="width:<?php echo $$rightCols; ?>px"  class="<?php echo $mainWidth ?>">
													<jdoc:include type="modules" name="right" style="xhtml" />
											</div>
									</div>
								<!-- End Right Column -->
								<?php endif; ?>
								</div>
								
								<div class="clear"></div>
								
								<?php if($this->countModules('below')) : ?>
								<!-- Below -->
									
											<div id="below"  class="<?php echo $mainWidth ?>">
													<jdoc:include type="modules" name="below" style="xhtml" />
											</div>									
								
								<!-- End Below -->
								<div class="clear"></div>
								
								<?php endif; ?>
						</div>
				</div>
		</div>
</div>
<div id="botGridWrap">

<?php if ($grid4 > "0") { ?>
<div class="outerWrapper grid4Row">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
			<div class="containerBG">
				<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">								
								
						
								<div class="gridWrap4">
									
											<?php if($this->countModules('grid13')) : ?>
													<div id="grid13" style="width:<?php echo $$grid13Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid13" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid14')) : ?>
													<div id="grid14" style="width:<?php echo $$grid14Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid14" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid15')) : ?>
													<div id="grid15" style="width:<?php echo $$grid15Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid15" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid16')) : ?>
													<div id="grid16" style="width:<?php echo $$grid16Cols; ?>px">
															<jdoc:include type="modules" name="grid16" style="xhtml" />
													</div>
											<?php endif; ?>
									
								</div>
				
					</div>
			</div>
		</div>
</div>
<?php } ?>

<?php if ($grid5 > "0") { ?>
<div class="outerWrapper grid5Row">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
			<div class="containerBG">
				<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">

								
									<div class="gridWrap5">
												
											<?php if($this->countModules('grid17')) : ?>
													<div id="grid17" style="width:<?php echo $$grid17Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid17" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid18')) : ?>
													<div id="grid18" style="width:<?php echo $$grid18Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid18" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid19')) : ?>
													<div id="grid19" style="width:<?php echo $$grid19Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid19" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid20')) : ?>
													<div id="grid20" style="width:<?php echo $$grid20Cols; ?>px">
															<jdoc:include type="modules" name="grid20" style="xhtml" />
													</div>
											<?php endif; ?>
									
								</div>

						<div class="clear"></div>
					
				</div>
		</div>
	</div>
</div>
<?php } ?>
	

<?php if ($grid6 > "0") { ?>
<div class="outerWrapper grid6Row">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
				<div class="containerBG">
						<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">
						
								<div class="gridWrap6">
									
											<?php if($this->countModules('grid21')) : ?>
													<div id="grid21" style="width:<?php echo $$grid21Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid21" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid22')) : ?>
													<div id="grid22" style="width:<?php echo $$grid22Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid22" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid23')) : ?>
													<div id="grid23" style="width:<?php echo $$grid23Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="grid23" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('grid24')) : ?>
													<div id="grid24" style="width:<?php echo $$grid24Cols; ?>px">
															<jdoc:include type="modules" name="grid24" style="xhtml" />
													</div>
											<?php endif; ?>
									
								</div>

						</div>
				</div>
		</div>
</div>
<?php } ?>
</div>	
</div>
<div id="mainBottomWrap">
<?php if ($bottom > "0") { ?>
<div class="outerWrapper bottomRow">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
			<div class="containerBG">
				<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">						
								<div class="bottomWrap">
									<div id="bottom">
											<?php if($this->countModules('bottom1')) : ?>
													<div id="bottom1" style="width:<?php echo $$bottom1Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="bottom1" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('bottom2')) : ?>
													<div id="bottom2" style="width:<?php echo $$bottom2Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="bottom2" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('bottom3')) : ?>
													<div id="bottom3" style="width:<?php echo $$bottom3Cols; ?>px;margin-right: <?php echo $gutter ?>px">
															<jdoc:include type="modules" name="bottom3" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('bottom4')) : ?>
													<div id="bottom4" style="width:<?php echo $$bottom4Cols; ?>px">
															<jdoc:include type="modules" name="bottom4" style="xhtml" />
													</div>
											<?php endif; ?>
											<?php if($this->countModules('bottom5')) : ?>
													<div id="bottom5" style="width:<?php echo $$bottom5Cols; ?>px">
															<jdoc:include type="modules" name="bottom5" style="xhtml" />
													</div>
											<?php endif; ?>
									</div>
								</div>
				</div>
		</div>
</div>
<?php } ?>
</div>
</div>
<div class="outerWrapper footerRow">
		<div class="container <?php echo $position ?>" style="width:<?php echo $tWidth ?>px;<?php echo $containerOffset?>">
			<div class="containerBG">
				<div class="innerContainer" style="width:<?php echo $contentWidth ?>px;margin-left:<?php echo $gutter ?>px">		
					<div id="footer">
							<div id="footerLeft" style="width:<?php echo $nine; ?>px;margin-right: <?php echo $gutter ?>px">
									<jdoc:include type="modules" name="footer" style="xhtml" />
							</div>
							<!-- Copyright -->				
							<div id="footerRight">
										<a href="http://www.joomlabamboo.com"><img class="jbLogo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/style/images/jb.png" alt="Joomla Bamboo" /></a>
							</div>				
					</div>
					</div> <!-- innerContainer -->
				</div>	<!-- containerBG -->					
		</div> <!-- Container -->
</div>
		<?php if($this->countModules('panel1') or $this->countModules('panel2') or $this->countModules('panel3') or $this->countModules('panel4')) : ?>
					<!-- Panel -->
					<div id="toppanel">
					<!-- The tab on top -->	
							<div class="tab">
								<a id="open" rel="#panelInner" href="#"><?php echo $openPanel ?></a>
							</div> <!-- / top -->
						<div id="panelInner"  style="width:<?php echo $contentWidth ?>px;height: <?php echo $panelHeight ?>px" class="overlay">
							<div id="panel">
								<?php if($this->countModules('panel1')) : ?>
									<div id="panel1" style="width:<?php echo $$panel1Cols; ?>px;margin-right: <?php echo $gutter ?>px">
										<jdoc:include type="modules" name="panel1" style="xhtml"/>
									</div>
								<?php endif; ?> 
								<?php if($this->countModules('panel2')) : ?>
									<div id="panel2" style="width:<?php echo $$panel2Cols; ?>px;margin-right: <?php echo $gutter ?>px">
										<jdoc:include type="modules" name="panel2" style="xhtml"/>
									</div>
								<?php endif; ?> 
								<?php if($this->countModules('panel3')) : ?>
									<div id="panel3" style="width:<?php echo $$panel3Cols; ?>px">
										<jdoc:include type="modules" name="panel3" style="xhtml"/>
									</div>
								<?php endif; ?> 
								<?php if($this->countModules('panel4')) : ?>
									<div id="panel4" style="width:<?php echo $$panel4Cols; ?>px">
										<jdoc:include type="modules" name="panel4" style="xhtml"/>
									</div>
								<?php endif; ?> 
							</div> <!-- /login -->	
							
							<div class="close"></div>
						</div>
						<div id="backgroundPopup"></div>
					</div> <!--panel -->
				<?php endif; ?>

</div> <!-- OuterWrapper -->
<!-- Full Wrap -->
	<div class="clear"></div>
	<jdoc:include type="modules" name="debug" style="xhtml" />
	<?php echo $analytics ?>
</body>
</html>