<h1><?php echo CHtml::link(CHtml::encode($page->getWikiUid()), array('view', 'uid' => $page->getWikiUid()))?> <?php echo Yii::t('wiki', 'version history')?></h1>
<?php echo CHtml::beginForm('', 'post', array('id' => 'permissions-form') ?>
<div class="main">
    <?php echo CHtml::radioButton('btn', true, array(
    'value'=>'1',
    'name'=>'public',
    'uncheckValue'=>null,
    'onClick'=>'form.sub.disabled=true'
    ));
    ?> Public <br /> 
    <?php echo CHtml::radioButton('btn', false, array(
        'value'=>'2',
        'name'=>'private',
        'uncheckValue'=>null,
        'onClick'=>'form.sub.disabled=false'
        )); 
    ?> Private
</div>
<div class="sub" name="sub">
    <?php echo CHtml::radioButton('sub', true, array(
    'value'=>'1',
    'name'=>'solo',
    'uncheckValue'=>null,
    'onClick'=>'form.input.disabled=true'
    ));
    ?> Only Me <br /> 
    <?php echo CHtml::radioButton('sub', false, array(
        'value'=>'2',
        'name'=>'input',
        'uncheckValue'=>null,
        'onClick'=>'form.input.disabled=false'
        )); 
    ?> Custom
</div>
<div class="input" id="input">
    <?php echo CHtml::textField('1', '')?><br />
    <?php echo CHtml::textField('2', '')?><br />
    <?php echo CHtml::textField('3', '')?><br />
    <?php echo CHtml::textField('4', '')?><br />
</div>
<?php echo CHtml::submitButton(Yii::t('wiki', 'Save'))?>
<?php echo CHtml::endForm()?>

 
