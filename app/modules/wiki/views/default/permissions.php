<h1><?php echo CHtml::link(CHtml::encode($page->getWikiUid()), array('view', 'uid' => $page->getWikiUid()))?> <?php echo Yii::t('wiki', 'permission selection')?></h1>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permissions_form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
)); ?>

<div class="main">
<?php echo CHtml::activeRadioButton($page, 'main_permissions', array('value'=>1,'uncheckValue'=>null,'onClick'=>'form.sub.disabled=true')); ?>Public<br />
<?php echo CHtml::activeRadioButton($page, 'main_permissions', array('value'=>2,'uncheckValue'=>null, 'onClick'=>'form.sub.disabled=false')); ?>Private<br />
</div>

<div class="sub" name="sub">
    <?php echo CHtml::activeRadioButton($page, 'sub_permissions', array(
        'value'=>3,
        'uncheckValue'=>null,
        'onClick'=>'form.input.disabled=true'
        ));
    ?> Only Me <br /> 
    
    <?php echo CHtml::activeRadioButton($page, 'sub_permissions', array(
        'value'=>4,
        'uncheckValue'=>null,
        'onClick'=>'form.input.disabled=false'
        ));
    ?> Custom <br />
    
    <div class="input" id="input">
        <?php echo CHtml::textField('1', '')?><br />
        <?php echo CHtml::textField('2', '')?><br />
        <?php echo CHtml::textField('3', '')?><br />
        <?php echo CHtml::textField('4', '')?><br />
    </div>
</div>

<?php echo CHtml::submitButton('Submit');?>
<?php $this->endWidget()?>

<?php //echo $page->permissions ?>
 
