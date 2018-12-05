<?php

namespace backend\controllers;

use Yii;
use common\models\MenuLang;
use common\models\MenuLangSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MenuLangController implements the CRUD actions for MenuLang model.
 */
class MenuLangController extends Controller
{
    /**
     * @inheritdoc
     */


    /**
     * Lists all MenuLang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenuLangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MenuLang model.
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
     * Creates a new MenuLang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($menu_id)
    {
        $model = new MenuLang();
        $model->load(Yii::$app->request->post());
        $model->menu_id = $menu_id;
        if ($model->save()) {
            return $this->redirect(['menu/view', 'id' => $model->menu_id, 'tab'=>2]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MenuLang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['menu/view', 'id' => $model->menu_id, 'tab'=>2]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MenuLang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $menuId = $model->menu_id;
        $model->delete();

        return $this->redirect(['menu/view', 'id'=>$menuId, 'tab'=>2]);
    }

    /**
     * Finds the MenuLang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MenuLang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MenuLang::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
