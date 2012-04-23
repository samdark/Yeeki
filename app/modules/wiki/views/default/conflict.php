<h1><?php echo CHtml::encode($page->getWikiUid())?></h1>
<?php echo 'There is a conflict. Please pick one of the following...' ?>
<br/>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buttons',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
)); ?>
<div class="wiki-diff">
<?php echo CHtml::activeRadioButtonList($page,'radrev',array('1' => 'OLD:  '.$rev->content, '2' => 'CURRENT:   '.$diff1, '3' => 'YOURS:   '.$diff2));?><br />
</div>
<?php echo CHtml::submitButton('Submit'); ?>
<?php $this->endWidget(); ?>
        

