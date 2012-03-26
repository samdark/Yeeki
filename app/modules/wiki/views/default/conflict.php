<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1> Conflict View </h1>
<h1><?php echo CHtml::encode($page->getWikiUid())?></h1>
<?php
    echo $page->content;
    echo $revision->content;
    echo $added;
?>
