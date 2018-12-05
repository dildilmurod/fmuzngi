<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MenuLangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = Yii::t('app', 'Menu Langs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Menu Lang'), ['/menu-lang/create', 'menu_id'=>$menuId], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'menu_id',
            'lang',
            'label',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
