<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/26/17
 * Time: 16:45
 */

namespace frontend\widgets;

use common\models\Article;
use yii\base\Widget;

class Com extends Widget
{
    public function run()
    {
        $model = Article::find()->where(['category_id' => 6])->orderBy('date desc')->limit(1)->all();
        return $this->render('comView', [
            'model' => $model,
        ]);
    }
}