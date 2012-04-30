<h1><?php echo CHtml::link(CHtml::encode($page->getWikiUid()), array('view', 'uid' => $page->getWikiUid()))?> <?php echo Yii::t('wiki', 'permission selection')?></h1>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permissions_form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
)); ?>

<div class="main">
<?php echo CHtml::activeRadioButton($page, 'main_permissions', array(
    'value'=>1,
    'uncheckValue'=>null,
    'onClick'=>'document.getElementById("sub").style.visibility="hidden"; document.getElementById("input").style.visibility="hidden"',
    'checked'=>"checked",
    )); ?>
    Public<br />
<?php echo CHtml::activeRadioButton($page, 'main_permissions', array(
    'value'=>2,
    'uncheckValue'=>null, 
    'onClick'=>'document.getElementById("sub").style.visibility="visible"'
    )); ?>
    Private<br />
</div>

<div id="sub" style="visibility:hidden">
    <?php echo CHtml::activeRadioButton($page, 'sub_permissions', array(
        'value'=>1,
        'uncheckValue'=>null,
        'onClick'=>'document.getElementById("input").style.visibility="hidden"'
        ));
    ?> Only Me <br /> 
    
    <?php echo CHtml::activeRadioButton($page, 'sub_permissions', array(
        'value'=>2,
        'uncheckValue'=>null,
        'onClick'=>'document.getElementById("input").style.visibility="visible"'
        ));?> 
    Custom (Please list the users that you would like to add, separated by a semi-colon.)<br />
    
    <div id="input" style="visibility:hidden">
        <?php echo CHtml::activeTextArea($page, 'input',array(
            'rows'=>7,
            'cols'=>60,
            'value'=>$page->permissions))?>
    </div>
</div>

<?php echo CHtml::submitButton('Submit');?>
<?php $this->endWidget()?>

 
