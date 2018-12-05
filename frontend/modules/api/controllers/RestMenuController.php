<?php

namespace frontend\modules\api\controllers;

use yii\rest\ActiveController;

class RestMenuController extends ActiveController
{
    public $modelClass = 'common\models\Menu';
}