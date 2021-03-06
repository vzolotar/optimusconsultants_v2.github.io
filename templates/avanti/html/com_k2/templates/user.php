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

// Get user stuff (do not change)
$user = &JFactory::getUser();

?>

<!-- Start K2 User Layout -->

<div id="k2Container" class="userView<?php if($this->params->get('pageclass_sfx')) echo ' '.$this->params->get('pageclass_sfx'); ?>">

	<?php if($this->params->get('show_page_title') && $this->params->get('page_title')!=$this->user->name): ?>
	<!-- Page title -->
	<div class="componentheading<?php echo $this->params->get('pageclass_sfx')?>">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</div>
	<?php endif; ?>

	<?php if($this->params->get('userFeed')): ?>
	<!-- RSS feed icon -->
	<div class="k2FeedIcon">
		<a href="<?php echo $this->feed; ?>" title="<?php echo JText::_('Subscribe to this RSS feed'); ?>">
			<span><?php echo JText::_('Subscribe to this RSS feed'); ?></span>
		</a>
		<div class="clear"></div>
	</div>
	<?php endif; ?>

	<?php if ($this->params->get('userImage') || $this->params->get('userName') || $this->params->get('userDescription') || $this->params->get('userURL') || $this->params->get('userEmail')): ?>
	<div class="avanteK2UserLeft">
			
		
		<?php if(isset($this->addLink) && JRequest::getInt('id')==$user->id): ?>
		<!-- Item add link -->
		<span class="userItemAddLink">
			<a class="modal" rel="{handler:'iframe',size:{x:990,y:650}}" href="<?php echo $this->addLink; ?>">
				<?php echo JText::_('Post a new item'); ?>
			</a>
		</span>
		<?php endif; ?>
		
		<?php if ($this->params->get('userImage') && !empty($this->user->avatar)): ?>
		<img src="<?php echo $this->user->avatar; ?>" alt="<?php echo $this->user->name; ?>" />
		<?php endif; ?>
		
		<?php if ($this->params->get('userName')): ?>
		<h2><?php echo $this->user->name; ?></h2>
		<?php endif; ?>
		
		<?php if ($this->params->get('userURL') || $this->params->get('userEmail')): ?>
		<p class="userAdditionalInfo">
			<?php if ($this->params->get('userURL') && isset($this->user->profile->url)): ?>
			<span class="userURL">
				<?php echo JText::_("Website URL"); ?>: <a href="<?php echo $this->user->profile->url; ?>" target="_blank"><?php echo $this->user->profile->url; ?></a>
			</span><br />
			<?php endif; ?>

			<?php if ($this->params->get('userEmail')): ?>
			<span class="userEmail">
				<?php echo JText::_("E-mail"); ?>: <?php echo JHTML::_('Email.cloak', $this->user->email); ?>
			</span>
			<?php endif; ?>	
		</p>
		<?php endif; ?>
		</div>

		<div class="avanteK2UserRight">
 		
		<?php if ($this->params->get('userDescription') && isset($this->user->profile->description)): ?>
		<p class="userDescription"><?php echo $this->user->profile->description; ?></p>
		<?php endif; ?>
		
		
	</div>
		<div class="clear"></div>
		
		<?php echo $this->user->event->K2UserDisplay; ?>
		
		<div class="clear"></div>

	<?php endif; ?>




	<?php if(count($this->items)): ?>
	<!-- Item list -->
	<div class="userItemList">
		<?php foreach ($this->items as $item): ?>
		<div class="avanteK2Left">
				<div class="catMetak2Avante">
					<?php if($item->params->get('userItemTitle')): ?>
			  <!-- Item title -->
			  <h3 class="userItemTitle">
			  	<?php if ($item->params->get('userItemTitleLinked')): ?>
					<a href="<?php echo $item->link; ?>">
			  		<?php echo $item->title; ?>
			  	</a>
			  	<?php else: ?>
			  	<?php echo $item->title; ?>
			  	<?php endif; ?>
			  </h3>
			  <?php endif; ?>
				
				
				<?php if($item->params->get('userItemDateCreated')): ?>
				<!-- Date created -->
				<span class="userItemDateCreated">
					<?php echo JHTML::_('date', $item->created , JText::_('DATE_FORMAT_LC2')); ?>
				</span>
				<?php endif; ?>


				<?php if($item->params->get('userItemCategory')): ?>
				<!-- Item category name -->
				<div class="userItemCategory">
					<strong><?php echo JText::_('Published in'); ?></strong>
					<a href="<?php echo $item->category->link; ?>"><?php echo $item->category->name; ?></a>
				</div>
				<?php endif; ?>
				
			  <?php if($item->params->get('userItemTags') && count($item->tags)): ?>
			  <!-- Item tags -->
			  <div class="userItemTagsBlock">
				  <span><?php echo JText::_("Tagged under"); ?></span>
				  <ul class="userItemTags">
				    <?php foreach ($item->tags as $tag): ?>
				    <li><a href="<?php echo $tag->link; ?>"><?php echo $tag->name; ?></a></li>
				    <?php endforeach; ?>
				  </ul>
				  <div class="clear"></div>
			  </div>
			  <?php endif; ?>
			  
			  
			  <?php if($item->params->get('userItemCommentsAnchor') && ( ($item->params->get('comments') == '2' && !$this->user->guest) || ($item->params->get('comments') == '1')) ): ?>
			<!-- Anchor link to comments below -->
			<div class="userItemCommentsLink">
				<?php if($item->numOfComments > 0): ?>
				<a href="<?php echo $item->link; ?>#itemCommentsAnchor">
					<?php echo $item->numOfComments; ?> <?php echo ($item->numOfComments>1) ? JText::_('comments') : JText::_('comment'); ?>
				</a>
				<?php else: ?>
				<a href="<?php echo $item->link; ?>#itemCommentsAnchor">
					<?php echo JText::_('Be the first to comment!'); ?>
				</a>
				<?php endif; ?>
			</div>
			<?php endif; ?>



		</div>
		</div>

		<div class="avanteK2Right">
 		<div class="catItemBody">
		<!-- Start K2 Item Layout -->
		<div class="userItemView">
		
			<!-- Plugins: BeforeDisplay -->
			<?php echo $item->event->BeforeDisplay; ?>
			
			<!-- K2 Plugins: K2BeforeDisplay -->
			<?php echo $item->event->K2BeforeDisplay; ?>
		
			<?php if(isset($item->editLink)): ?>
			<!-- Item edit link -->
			<span class="userItemEditLink">
				<a class="modal" rel="{handler:'iframe',size:{x:990,y:650}}" href="<?php echo $item->editLink; ?>">
					<?php echo JText::_('Edit item'); ?>
				</a>
			</span>
			<?php endif; ?>
		
			<div class="userItemHeader">
							
			  
		  </div>
		
		  <!-- Plugins: AfterDisplayTitle -->
		  <?php echo $item->event->AfterDisplayTitle; ?>
		  
		  <!-- K2 Plugins: K2AfterDisplayTitle -->
		  <?php echo $item->event->K2AfterDisplayTitle; ?>

		  <div class="userItemBody">
		
			  <!-- Plugins: BeforeDisplayContent -->
			  <?php echo $item->event->BeforeDisplayContent; ?>
			  
			  <!-- K2 Plugins: K2BeforeDisplayContent -->
			  <?php echo $item->event->K2BeforeDisplayContent; ?>
		
			  <?php if($item->params->get('userItemImage') && !empty($item->imageGeneric)): ?>
			  <!-- Item Image -->
			  <div class="userItemImageBlock">
				  <span class="userItemImage">
				    <a href="<?php echo $item->link; ?>" title="<?php if(!empty($item->image_caption)) echo $item->image_caption; else echo $item->title; ?>">
				    	<img src="<?php echo $item->imageGeneric; ?>" alt="<?php if(!empty($item->image_caption)) echo $item->image_caption; else echo $item->title; ?>" />
				    </a>
				  </span>
				  <div class="clear"></div>
			  </div>
			  <?php endif; ?>
			  
			  <?php if($item->params->get('userItemIntroText')): ?>
			  <!-- Item introtext -->
			  <div class="userItemIntroText">
			  	<?php echo $item->introtext; ?>
			  </div>
			  <?php endif; ?>
		
				<div class="clear"></div>

			  <!-- Plugins: AfterDisplayContent -->
			  <?php echo $item->event->AfterDisplayContent; ?>
			  
			  <!-- K2 Plugins: K2AfterDisplayContent -->
			  <?php echo $item->event->K2AfterDisplayContent; ?>
		
			  <div class="clear"></div>
		  </div>
		
		  <?php if($item->params->get('userItemCategory') || $item->params->get('userItemTags')): ?>
		  <div class="userItemLinks">

				

				<div class="clear"></div>
		  </div>
		  <?php endif; ?>  
		
			<div class="clear"></div>

			
		  
			<?php if ($item->params->get('userItemReadMore')): ?>
			<!-- Item 'read more...' link -->
			<div class="userItemReadMore">
				<a class="k2ReadMore" href="<?php echo $item->link; ?>">
					<?php echo JText::_('Read more...'); ?>
				</a>
			</div>
			<?php endif; ?>
			
			<div class="clear"></div>

		  <!-- Plugins: AfterDisplay -->
		  <?php echo $item->event->AfterDisplay; ?>
		  
		  <!-- K2 Plugins: K2AfterDisplay -->
		  <?php echo $item->event->K2AfterDisplay; ?>
			
			<div class="clear"></div>
		</div>
		<!-- End K2 Item Layout -->
		</div></div>
		<div class="clear"></div>
		<?php endforeach; ?>
	</div>

	<!-- Pagination -->
	<?php if(count($this->pagination->getPagesLinks())): ?>
	<div class="k2Pagination">
		<?php echo $this->pagination->getPagesLinks(); ?>
		<div class="clear"></div>
		<?php echo $this->pagination->getPagesCounter(); ?>
	</div>
	<?php endif; ?>
	
	<?php endif; ?>

</div>

<!-- End K2 User Layout -->
