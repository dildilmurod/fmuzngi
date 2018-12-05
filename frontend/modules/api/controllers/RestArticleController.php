<?php
//
//namespace frontend\modules\api\controllers;
//
//use yii\filters\auth\HttpBearerAuth;
//use yii\filters\VerbFilter;
//use yii\rest\ActiveController;
//
//class RestArticleController extends ActiveController
//{
//    public $modelClass = 'common\models\Article';
//
//    public function behaviors()
//    {
//        $behaviors = parent::behaviors();
//        $behaviors['authenticator']['class'] = HttpBearerAuth::className();
//        $behaviors['authenticator']['except'] = ['update', 'create'];
//        return $behaviors;
//    }
//}

//<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 8/30/17
 * Time: 10:47
 */

//namespace frontend\controllers;
namespace frontend\modules\api\controllers;


use common\models\Article;
use yii\rest\Controller;

class RestArticleController extends Controller
{

    function actionIndex()
    {
        return 'esghdtghf';
    }

    function actionInsert()
    {
        if (\Yii::$app->request->method != 'POST')
            return false;



        $model = new Article();


        return [
            'status' => 'ok'
        ];
    }
    function actionDelete(){
      if (\Yii::$app->request->method != 'DELETE')
            return;

      }

}


