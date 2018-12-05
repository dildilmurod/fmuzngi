<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/26/17
 * Time: 16:45
 */

namespace frontend\widgets;

use common\models\Article;
use common\models\Tag;
use yii\base\Widget;

class Tags extends Widget
{
    public function run()
    {
        $model = Tag::find()->orderBy('id desc')->limit(10)->all();
        return $this->render('tagsView', [
            'model' => $model,
        ]);
    }
}