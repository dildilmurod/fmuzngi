<?php

use yii\bootstrap\Button;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Articles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Article'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            //'content:ntext',
            'date',
            [
                'format'=>'html',
                'label'=>'image',
                'value'=>function($data){
                    $img = $data->image;
                    $ext = substr($img, strpos($img, '.'), strlen($img)-strpos($img, '.'));
                    /* @var $data \common\models\Article*/
                    if(!empty($img)) {
                        if ($ext == '.jpg' || $ext == '.jpeg' || $ext == '.png') {
                            return Html::a("<i class=\"fa fa-file-image-o\"></i> " . 'Скачать', "http://web-docs/uploads/{$img}", $options = ['class' => 'btn btn-default']);
                        } elseif ($ext == '.doc' || $ext == '.docx' || $ext == '.txt') {
                            return Html::a("<i class=\" fa fa-file-word-o\"></i> " . 'Скачать', "http://web-docs/uploads/{$img}", $options = ['class' => 'btn btn-default']);
                        } elseif ($ext == '.pdf') {
                            return Html::a("<i class=\" fa a-file-pdf-o\"></i> " . 'Скачать', "http://web-docs/uploads/{$img}", $options = ['class' => 'btn btn-default']);
                        } elseif ($ext == '.xls' || $ext == '.xlsx' || $ext == '.xlsm' || $ext == '.xlsb') {
                            return Html::a("<i class=\" fa a-file-excel-o\"></i> " . 'Скачать', "http://web-docs/uploads/{$img}", $options = ['class' => 'btn btn-default']);
                        } elseif ($ext == '.ppt' || $ext == '.pptx' || $ext == '.ppts') {
                            return Html::a("<i class=\" fa a-file-powerpoint-o\"></i> " . 'Скачать', "http://web-docs/uploads/{$img}", $options = ['class' => 'btn btn-default']);
                        } elseif ($ext == '.zip' || $ext == '.rar' || $ext == '.gzip' || $ext == '.7z') {
                            return Html::a("<i class=\" fa a-file-powerpoint-o\"></i> " . 'Скачать', "http://web-docs/uploads/{$img}", $options = ['class' => 'btn btn-default']);
                        } else
                            return Html::a('Скачать', "http://web-docs/uploads/{$img}", $options = ['class' => 'btn btn-default']);
                    }
                    return 'Нет файла';
                }
            ],
            // 'image',
            // 'user_id',
            // 'status',
            // 'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
