<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/26/17
 * Time: 16:32
 */

namespace frontend\widgets;

use common\models\Article;
use yii\base\Widget;

class Advices extends Widget
{
    public function run()
    {
        $model = Article::find()->where(['category_id' => 3])->orderBy('date desc')->limit(4)->all();
        return $this->render('advicesView', [
            'model' => $model,
        ]);
    }
}