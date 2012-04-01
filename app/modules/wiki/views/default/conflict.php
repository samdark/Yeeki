<h1><?php echo CHtml::encode($page->getWikiUid())?></h1>
<?php echo 'There is a conflict. Please pick one of the following...' ?>
<?php echo CHtml::link(Yii::t('wiki','OLD: '),array('view', 'uid'=>$page->page_uid, 'rev'=>$rev->id)) .$rev->content.'<br />' ?>
<div class="wiki-diff">
<?php echo CHtml::link(Yii::t('wiki','Current Revision: '),array('view', 'uid'=>$page->page_uid)).$diff1.'<br />' ?>
<?php echo 'Your Revision'.$diff2 ?>
</div>
