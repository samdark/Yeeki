<div>
	<div class="wiki-controls">
		<?php echo CHtml::link(Yii::t('wiki', 'Edit'), array('edit', 'uid' => $page->getWikiUid()))?>
		<?php echo CHtml::link(Yii::t('wiki', 'History'), array('history', 'uid' => $page->getWikiUid()))?>
            <?php echo CHtml::link(Yii::t('wiki', 'Set Permissions'), array('permissions', 'uid' => $page->getWikiUid()))?>
	</div>
	<div class="wiki-text">
		<?php echo $text?>
	</div>
	<div class="wiki-controls">
		<?php echo CHtml::link(Yii::t('wiki', 'Edit'), array('edit', 'uid' => $page->getWikiUid()))?>
		<?php echo CHtml::link(Yii::t('wiki', 'History'), array('history', 'uid' => $page->getWikiUid()))?>

		<?php echo CHtml::link(Yii::t('wiki', 'Page Index'), array('pageIndex'))?>
            <?php echo CHtml::link(Yii::t('wiki', 'Set Permissions'), array('permissions', 'uid' => $page->getWikiUid()))?>
	</div>
</div>