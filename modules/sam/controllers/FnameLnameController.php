<?php

namespace app\modules\sam\controllers;

use app\modules\sam\models\Fname;
use app\modules\sam\models\FnameLname;
use app\modules\sam\models\FnameLnameSearch;
use app\modules\sam\models\Lname;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FnameLnameController implements the CRUD actions for FnameLname model.
 */
class FnameLnameController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all FnameLname models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FnameLnameSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FnameLname model.
     * @param int $fname_id Fname ID
     * @param int $lname_id Lname ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($fname_id, $lname_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($fname_id, $lname_id),
        ]);
    }

    /**
     * Creates a new FnameLname model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new FnameLname();
        $modelF = new Fname();
        $modelL = new Lname();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $modelF->load($this->request->post()) && $modelL->load($this->request->request)) {
                // $model->fname = $modelF->id;
                // $model->lname = $modelL->id;.
                $modelF->sam = 1;
                $modelF->save();
                $modelL->save();
                $model->save();
                return $this->redirect(['view', 'fname_id' => $model->fname_id, 'lname_id' => $model->lname_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'modelF' => $modelF,
            'modelL' => $modelL,
        ]);
    }

    /**
     * Updates an existing FnameLname model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $fname_id Fname ID
     * @param int $lname_id Lname ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($fname_id, $lname_id)
    {
        $model = $this->findModel($fname_id, $lname_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'fname_id' => $model->fname_id, 'lname_id' => $model->lname_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FnameLname model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $fname_id Fname ID
     * @param int $lname_id Lname ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($fname_id, $lname_id)
    {
        $this->findModel($fname_id, $lname_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FnameLname model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $fname_id Fname ID
     * @param int $lname_id Lname ID
     * @return FnameLname the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($fname_id, $lname_id)
    {
        if (($model = FnameLname::findOne(['fname_id' => $fname_id, 'lname_id' => $lname_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
