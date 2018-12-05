<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/26/17
 * Time: 18:37
 */

namespace frontend\controllers;


use common\models\Pages;
use yii\web\Controller;

class PageController extends Controller
{
    public function actionView($name)
    {
        $model = Pages::findOne(['codename' => $name]);

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}