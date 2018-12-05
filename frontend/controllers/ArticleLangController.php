<?php

namespace backend\controllers;

use Yii;
use common\models\ArticleLang;
use common\models\ArticleLangSearch;

use yii\web\NotFoundHttpException;


/**
 * ArticleLangController implements the CRUD actions for ArticleLang model.
 */
class ArticleLangController extends Controller
{
    /**
     * @inheritdoc
     */


    /**
     * Lists all ArticleLang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleLangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ArticleLang model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ArticleLang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($article_id)
    {
        $model = new ArticleLang();
        $model->load(Yii::$app->request->post());
        $model->article_id = $article_id;
        if ($model->save()) {
            return $this->redirect(['article/view', 'id' => $model->article_id, 'tab'=>2]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ArticleLang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['article/view', 'id' => $model->article_id, 'tab'=>2]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ArticleLang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $articleId = $model->article_id;
        $model->delete();

        return $this->redirect(['article/view', 'id'=>$articleId, 'tab'=>2]);
    }

    /**
     * Finds the ArticleLang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ArticleLang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ArticleLang::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
