<?php
/*
// "K2" Component by JoomlaWorks for Joomla! 1.5.x - Version 2.1
// Copyright (c) 2006 - 2009 JoomlaWorks Ltd. All rights reserved.
// Released under the GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
// More info at http://www.joomlaworks.gr and http://k2.joomlaworks.gr
// Designed and developed by the JoomlaWorks team
// *** Last update: September 9th, 2009 ***
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Define default image size (do not change)
$image = 'image'.$this->params->get($this->item->itemGroup.'ImgSize');

?>



	<?php if (!($this->item->$image == "")) { ?>
	<a href="<?php echo $this->item->link; ?>">
		<img src="<?php echo $this->item->$image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo $this->item->image_caption; else echo $this->item->title; ?>" />
	</a>
	<?php } ?>

	<?php if($this->item->params->get('catItemTitle')): ?>
	  	<!-- Item title -->
	  	
	  	<?php if($this->item->params->get('catItemFeaturedNotice') && $this->item->featured): ?>
	  	<!-- Featured flag -->
	  	<span>
		  	<sup>
		  		<?php echo JText::_('Featured'); ?>
		  	</sup>
	  	</span>
	  	<?php endif; ?>

	  	<h3 class="catItemTitle">
	  	<?php if ($this->item->params->get('catItemTitleLinked')): ?>
				<a href="<?php echo $this->item->link; ?>">
			  		<?php echo $this->item->title; ?>
	  			</a>
	  	<?php else: ?>
	  	<?php echo $this->item->title; ?>
	  	<?php endif; ?>

	  </h3>

	  <?php endif; ?>
	   <?php if($this->item->params->get('catItemDateCreated')): ?>
		<!-- Date created -->
		<span class="catItemDateCreated">
			<?php echo JHTML::_('date', $this->item->created , JText::_('DATE_FORMAT_LC3')); ?>
		</span>
		
		<?php endif; ?>
	  
	  <?php if($this->item->params->get('catItemIntroText')): ?>

	  <div class="catItemIntroText">
	  		<?php echo $this->item->introtext; ?>
	  </div>
	  <?php endif; ?>

		<div class="clear"></div> 
		
		<?php if ($this->item->params->get('catItemReadMore')): ?>
	<!-- Item 'read more...' link -->
	<div class="catItemReadMore">
		<a class="k2ReadMore" href="<?php echo $this->item->link; ?>">
			<?php echo JText::_('Read more...'); ?>
		</a>
	</div>
	<?php endif; ?>
	
	<div class="clear"></div>



