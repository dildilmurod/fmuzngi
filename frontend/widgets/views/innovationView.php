<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/26/17
 * Time: 16:40
 */
use yii\helpers\Url;

?>

<div class="noPaddingLeft">
    <ul class="list">
        <?php foreach($model as $article): ?>
            <?php $article->getLang(Yii::$app->language)?>
            <li class="col-md-4">
                <img src="<?= $article->image?>">
                <p class="listTitle"><a href="<?=Url::to(['article/view', 'id' => $article->id])?>"><?=$article->title?></a></p>
                <p class="listText"><?=$article->description?></p>
                <p class="date"><?= $article->date?></p>
            </li>
        <?php endforeach;?>
    </ul>
    <a class="backgroundAble" href="<?=Url::to(['article/index', 'type' => '4'])?>"><?= Yii::t('app', 'все статьи');?></a>
</div>
