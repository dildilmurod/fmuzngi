<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticleLangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Article Langs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Article Lang'), ['article-lang/create', 'article_id' => $articleId], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'article_id',
            'lang',
            'title',
            'description:ntext',
            // 'content:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'controller'=>'article-lang',
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
