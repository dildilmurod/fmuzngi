<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/26/17
 * Time: 16:39
 */
namespace frontend\widgets;

use common\models\Article;
use yii\base\Widget;

class Innovation extends Widget
{
    public function run()
    {

        $model = Article::find()->where(['category_id' => 9])->orderBy('date desc')->limit(3)->all();
        return $this->render('innovationView', [
            'model' => $model,
        ]);
    }
}

