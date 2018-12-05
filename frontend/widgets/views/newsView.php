<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/26/17
 * Time: 16:40
 */
use yii\helpers\Url;

/* @var $article \common\models\Article*/

?>

<div class="secondary-news">
    <?php foreach($model as $article): ?>
    <?php    $article->getLang(Yii::$app->language);     ?>
    <div class="news-second">
        <div class="sliding-color"></div>
        <a href="<?=Url::to(['article/view', 'id' => $article->id])?>">
            <div class="small-image">
                <?php
                if(file_exists(Yii::getAlias("@frontend/web/uploads/{$article->image}")) && !is_null($article->image))
                    echo \yii\helpers\Html::tag('img', '', ['src' => Yii::getAlias("@web/uploads/{$article->image}")])
                ?>
            </div>
        </a>
        <a href="<?=Url::to(['article/view', 'id' => $article->id])?>">
            <div class="content-small">
                <h2><?= $article->title?></h2>
                <p><?= $article->description?></p>
            </div>
        </a>
        <div class="particular">
            <div class="views-date">
                <i class="fa fa-eye"></i><span>53</span>
                <span class="date"><?= $article->date?></span>
            </div>
            <div class="link">
                <a href="<?=Url::to(['article/view', 'id' => $article->id])?>">Подробнее >></a>
            </div>
        </div>
    </div>
   <?php endforeach; ?>
</div>









