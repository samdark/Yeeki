<?php /** @var $pages WikiPage[] */?>
<ul>
<?php foreach($pages as $page):?>
	<li>
		<?php echo CHtml::link(CHtml::encode($page->page_uid), array('view', 'uid' => $page->page_uid))?>
	</li>
<?php endforeach?>
</ul>