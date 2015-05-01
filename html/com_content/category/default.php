<?php // @version $Id: default.php 11917 2009-05-29 19:37:05Z ian $
defined('_JEXEC') or die('Restricted access');
$cparams = JComponentHelper::getParams ('com_media');
?>

<?php if ($this->params->get('show_page_title',1)) : ?>
<h1 class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
	<?php echo $this->escape($this->params->get('page_title')); ?>
</h1>
<?php endif; ?>
<div id="catdescription">
	<?php echo $this->category->description; ?>
	<?php if ($this->category->image) : ?>
		<img src="<?php echo $this->baseurl . '/' . $cparams->get('image_path') . '/'. $this->category->image;?>" align="<?php echo $this->category->image_position;?>" hspace="6" alt="<?php echo $this->category->image;?>" />
	<?php endif; ?>
</div>

<?php $this->items =& $this->getItems();
echo $this->loadTemplate('items'); ?>

<?php if ($this->access->canEdit || $this->access->canEditOwn) :
	echo JHTML::_('icon.create', $this->category, $this->params, $this->access);
endif;
