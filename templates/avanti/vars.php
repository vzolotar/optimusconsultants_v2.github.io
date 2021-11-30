<?php 
// logic for grid widths
$contentWidth = $tWidth-($gutter*2);
$gutters = $cols - 1;
$margins = $gutter * $gutters;
$colWidths = ($contentWidth-$margins)/$cols;


// widths of each grid div
$two = (2*$colWidths) + (1*$gutter);
$three = (3*$colWidths) + (2*$gutter);
$four = (4*$colWidths) + (3*$gutter);
$five = (5*$colWidths) + (4*$gutter);
$six = (6*$colWidths) + (5*$gutter);
$seven = (7*$colWidths) + (6*$gutter);
$eight = (8*$colWidths) + (7*$gutter);
$nine = (9*$colWidths) + (8*$gutter);
$ten = (10*$colWidths) + (9*$gutter);
$eleven = (11*$colWidths) + (10*$gutter);
$twelve = (12*$colWidths) + (11*$gutter);
$thirteen = (13*$colWidths) + (12*$gutter);
$fourteen = (14*$colWidths) + (13*$gutter);
$sixteen = (16*$colWidths) + (15*$gutter);

// Code to test whether or not to print the rows
if ($logoPosition=="above") {
$header = ($this->countModules('header2')?1:0)+ ($this->countModules('header3')?1:0)+ ($this->countModules('header4')); 
}
elseif ($logoPosition=="below") {
$header = ($this->countModules('header1')?1:0) + ($this->countModules('header2')?1:0)+ ($this->countModules('header3')?1:0)+ ($this->countModules('header4')); 
}
$grid1 = ($this->countModules('grid1')?1:0)+ ($this->countModules('grid2')?1:0)+ ($this->countModules('grid3')?1:0)+ ($this->countModules('grid4')?1:0); 
$grid2 = ($this->countModules('grid5')?1:0)+ ($this->countModules('grid6')?1:0)+ ($this->countModules('grid7')?1:0)+ ($this->countModules('grid8')?1:0); 
$grid3 = ($this->countModules('grid9')?1:0)+ ($this->countModules('grid10')?1:0)+ ($this->countModules('grid11')?1:0)+ ($this->countModules('grid12')?1:0); 
$grid4 = ($this->countModules('grid13')?1:0)+ ($this->countModules('grid14')?1:0)+ ($this->countModules('grid15')?1:0)+ ($this->countModules('grid16')?1:0); 
$grid5 = ($this->countModules('grid17')?1:0) + ($this->countModules('grid18')?1:0) + ($this->countModules('grid19')?1:0) + ($this->countModules('grid20')?1:0); 
$grid6 = ($this->countModules('grid21')?1:0)+ ($this->countModules('grid22')?1:0)+ ($this->countModules('grid23')?1:0)+ ($this->countModules('grid24')?1:0);
$top = ($this->countModules('top1')?1:0)+ ($this->countModules('top2')?1:0)+ ($this->countModules('top3')?1:0)+ ($this->countModules('top4')?1:0);
$bottom = ($this->countModules('bottom1')?1:0)+ ($this->countModules('bottom2')?1:0)+ ($this->countModules('bottom3')?1:0)+ ($this->countModules('bottom4')?1:0);
$slides = ($this->countModules('slide1')?1:0)+ ($this->countModules('slide2')?1:0)+ ($this->countModules('slide3')?1:0)+ ($this->countModules('slide4')?1:0); 
$advert1 = ($this->countModules('advert1')?1:0)+ ($this->countModules('advert2')?1:0)+ ($this->countModules('advert3')?1:0); 
$advert2 = ($this->countModules('advert4')?1:0)+ ($this->countModules('advert5')?1:0)+ ($this->countModules('advert6')?1:0); 
$panel = ($this->countModules('panel1')?1:0)+ ($this->countModules('panel2')?1:0)+ ($this->countModules('panel3')?1:0)+ ($this->countModules('panel4')?1:0);

// Determines equal columns calculations
$numbers=array("zero","one","two","three","four","five","six","seven","eight","nine","ten","eleven","twelve","thirteen","fourteen","sixteen","sixteen");

if($header!=0 && $headerEqual && $logoPosition=="below") {
$headerModules = $cols/$header;
$header1Cols = $header2Cols = $header3Cols = $header4Cols = $numbers[$headerModules];
} 

if($header!=0 && $headerEqual && $logoPosition=="above") {
$headerModules = $cols/($header+1);
$logoCols = $header2Cols = $header3Cols = $header4Cols = $numbers[$headerModules];
} 

if($top!=0 && $topEqual) {
$topModules = $cols/$top;
$top1Cols = $top2Cols = $top3Cols = $top4Cols = $numbers[$topModules];
}

if($bottom!=0 && $bottomEqual) {
$bottomModules = $cols/$bottom;
$bottom1Cols = $bottom2Cols = $bottom3Cols = $bottom4Cols = $numbers[$bottomModules];
}

if($grid1!=0 && $grid1Equal) {
	$grid1Modules = $cols/$grid1;
	$grid1Cols = $grid2Cols = $grid3Cols = $grid4Cols = $numbers[$grid1Modules];
}

if($grid2!=0 && $grid2Equal) {
	$grid2Modules = $cols/$grid2;
	$grid5Cols = $grid6Cols = $grid7Cols = $grid8Cols = $numbers[$grid2Modules];
}


if($grid3!=0 && $grid3Equal) {
	$grid3Modules = $cols/$grid3;
	$grid9Cols = $grid10Cols = $grid11Cols = $grid12Cols = $numbers[$grid3Modules];
}

if($grid4!=0 && $grid4Equal) {
	$grid4Modules = $cols/$grid4;
	$grid13Cols = $grid14Cols = $grid15Cols = $grid16Cols = $numbers[$grid4Modules];
}

if($grid5!=0 && $grid5Equal) {
	$grid5Modules = $cols/$grid5;
	$grid17Cols = $grid18Cols = $grid19Cols = $grid20Cols = $numbers[$grid5Modules];
}

if($grid6!=0 && $grid6Equal) {
	$grid6Modules = $cols/$grid6;
	$grid21Cols = $grid22Cols = $grid23Cols = $grid24Cols = $numbers[$grid6Modules];
}

if($panel!=0 && $panelEqual) {
	$panelModules = $cols/$panel;
	$panel1Cols = $panel2Cols = $panel3Cols = $panel4Cols = $numbers[$panelModules];
}


// Main Width Logic
if (($this->countModules( 'left' )) && ($this->countModules( 'right' )) && !($this->countModules( 'center' ))) { $mainWidth = 'threeLR';} 
elseif (($this->countModules( 'left' )) && !($this->countModules( 'right' )) && !($this->countModules( 'center' ))) { $mainWidth = 'twoL';}
elseif (!($this->countModules( 'left' )) && ($this->countModules( 'right' )) && !($this->countModules( 'center' ))) { $mainWidth = 'twoR';}
elseif (!($this->countModules( 'left' )) && !($this->countModules( 'right' )) && !($this->countModules( 'center' ))) { $mainWidth = 'one';}
elseif (!($this->countModules( 'left' )) && !($this->countModules( 'right' )) && ($this->countModules( 'center' ))) { $mainWidth = 'one';}
elseif (($this->countModules( 'left' )) && ($this->countModules( 'right' )) && ($this->countModules( 'center' ))) { $mainWidth = 'fourLRC';}
elseif (($this->countModules( 'left' )) && !($this->countModules( 'right' )) && ($this->countModules( 'center' ))) { $mainWidth = 'threeLC';}
elseif (!($this->countModules( 'left' )) && ($this->countModules( 'right' )) && ($this->countModules( 'center' ))) { $mainWidth = 'threeRC';}


if ($mainWidth == "one") {
	$midCols = "twelve";
	$midColFloat = "float:left";
	$midColMargin ="margin-right: 0";
}

if ($mainWidth == "twoR") {
	$midColFloat = "float:left";
	$midColMargin ="margin-right: 0";
	$midCols = $midCols2R;
	$rightCols = $rightCols2R;
}
if ($mainWidth == "twoL") {
	$midColFloat = "float:right";
	$midColMargin ="margin-right: 0";
	$midCols = $midCols2L;
	$leftCols = $leftCols2L;
}
if ($mainWidth == "threeLR") {
	$midColFloat = "float:left";
	$midColMargin ="margin-right: $gutter";
	$midCols = $midCols3LR;
	$leftCols = $leftCols3LR;
	$rightCols = $rightCols3LR;
}	

if ($mainWidth == "fourLRC") {
	$midColFloat = "float:left";
	$midColMargin ="margin-right: $gutter";
	$midCols = $midCols4LRC;
	$leftCols = $leftCols4LRC;
	$rightCols = $rightCols4LRC;
	$centerCols = $centerCols4LRC;
}	

if ($mainWidth == "threeLC") {
	$midColFloat = "float:right";
	$midColMargin ="margin-right: 0";
	$midCols = $midCols3LC;
	$leftCols = $leftCols3LC;
	$centerCols = $centerCols3LC;
}

if ($mainWidth == "threeRC") {
	$midColFloat = "float:left";
	$midColMargin ="margin-right: $gutter";
	$midCols = $midCols3RC;
	$rightCols = $rightCols3RC;
	$centerCols = $centerCols3RC;
}


// Logic for the alignment of the site
if ($position =="left") {$containerOffset = "margin: 0 0 0 $containerMargin";}
if ($position =="right") {$containerOffset = "margin: 0 $containerMargin 0 0";}
if ($position =="center") {$containerOffset = "";}

?>
