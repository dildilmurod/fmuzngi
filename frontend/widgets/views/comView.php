<?php
use yii\helpers\Url;

?>
<div class="news-main">

    <?php foreach($model as $article): ?>
    <?php $article->getLang(Yii::$app->language)?>
    <div class="sliding-color"></div>
    <a href="<?=Url::to(['article/view', 'id' => $article->id])?>">

        <?php
        if(file_exists(Yii::getAlias("@frontend/web/uploads/{$article->image}")) && !is_null($article->image)):?>
            <div class="big-image"> <?=\yii\helpers\Html::tag('img', '', ['src' => Yii::getAlias("@web/uploads/{$article->image}")])?> </div>
        <?php endif;?>

    </a>
    <a href="<?=Url::to(['article/view', 'id' => $article->id])?>">
        <div class="content-big">
            <h2><?=$article->title?></h2>
            <p><?=$article->description?></p>
        </div>
    </a>
    <div class="particular">
        <div class="views-date">
            <i class="fa fa-eye"></i><span>123</span>
            <span class="date"><?= $article->date?></span>
        </div>
        <div class="link">
            <a href="<?=Url::to(['article/view', 'id' => $article->id])?>">Подробнее >></a>
        </div>
    </div>
    <?php endforeach;?>
</div>


