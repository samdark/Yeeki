<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1> Conflict View </h1>
<h1><?php //echo CHtml::encode($page->getWikiUid())?></h1>
<?php echo 'OLD: '.$rev->content.'<br />' ?>
<div class="wiki-diff">
<?php echo 'Current revision: '.$diff1.'<br />Your revision: '.$diff2?>
</div>
