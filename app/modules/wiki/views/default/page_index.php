<?php /** @var $pages WikiPage[] */?>
<?php $namespace=NULL?>

<ul>
<?php foreach($pages as $page):?>
	<?php if ($page->namespace != $namespace) echo "</ul> <u>Namespace</u>: \"".$page->namespace."\" <ul>" ?>
	<li>
		<?php echo CHtml::link(CHtml::encode($page->page_uid), array('view', 'uid' => $page->page_uid))?>
		<?php $namespace=$page->namespace?>
	</li>
<?php endforeach?>
</ul>