<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Menu;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(Menu::fetchCategory(), ['prompt' => '']) ?>

    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'link')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'parent_id')->dropDownList(Menu::fetchData(), ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
