<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/26/17
 * Time: 14:53
 */
use yii\helpers\Url;

?>

<div class="last-art">
    <h3>Теги:</h3>
    <?php foreach($model as $tag):?>
    <a href="#"><span><?=$tag->title?></span></a>
    <a href="#"><span>тег 2</span></a>
    <a href="#"><span>тег 3</span></a>
    <a href="#"><span>тег 4</span></a>
    <a href="#"><span>тег 5</span></a>
    <a href="#"><span>тег 6</span></a>
    <a href="#"><span>тег 7</span></a>
    <a href="#"><span>тег 8</span></a>
    <a href="#"><span>тег 9</span></a>
    <a href="#"><span>тег 10</span></a>


</div>

<!--<div class="col-md-4 leftBox noPaddingLeft">
        <div class="infoBox">
            <p class="infoTitle"><?/*= Yii::t('app', 'события');*/?></p>

            <ul class="infoBoxList">

                <li>
                    <?php /*foreach($model as $article): */?>
                    <div class="date blue">
                        <?php /*$article->getLang(Yii::$app->language);*/?>
                        <p><?/*=date('d-M', strtotime($article->date))*/?></p>
                    </div>
                    <div class="infoBoxListContent">
                        <a href="<?/*=Url::to(['article/view', 'id' => $article->id])*/?>">
                            <p class="infoBoxListTitle"><?/*=$article->title*/?></p>
                        </a>

                        <p class="infoBoxListText"><?/*=$article->description*/?></p>
                    </div>
                    <?php /*endforeach;*/?>

                    <div class="clearfix"></div>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="marger"></div>

        <ul class="simpleList">
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i>
                    <span><?/*= Yii::t('app', 'Вакансии');*/?></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-envelope"></i>
                    <span><?/*= Yii::t('app', 'Обратная связь');*/?></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-comment"></i>
                    <span><?/*= Yii::t('app', 'Часто задаваемые вопросы');*/?></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-duplicate"></i>
                    <span><?/*= Yii::t('app', 'Разрешительные документы');*/?></span>
                </a>
            </li>
        </ul>

        <div class="marger"></div>

        <div class="hotLineBox">
            <div class="col-xs-7 text-right">
                <div class="middle">
                    <p>Телефон доверия<br> (371) <span class="phone">239-10-06</span></p>
                </div>

            </div>

            <div class="col-xs-5">
                <div class="greenBox">Региональные телефоны доверия</div>
            </div>
        </div>

        <div class="marger"></div>

    </div>-->