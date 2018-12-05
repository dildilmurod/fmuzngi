<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MenuLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_id')->textInput() ?>

    <?= $form->field($model, 'lang')->dropDownList(['ru' => 'Rus', 'uz' => 'Uzb', 'en' => 'Eng']) ?>

    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
