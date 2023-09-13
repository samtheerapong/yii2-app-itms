<?php

namespace app\modules\jobs\controllers;

use app\modules\jobs\models\Jobs;
use app\modules\jobs\models\JobsSearch;
use app\modules\jobs\models\Operations;
use app\modules\jobs\models\OperationsSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OperationsController implements the CRUD actions for Operations model.
 */
class OperationsController extends Controller
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
     * Lists all Operations models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new OperationsSearch();
        // $searchModelJobs = new JobsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        // $dataProviderJobs = $searchModelJobs->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            // 'searchModelJobs' => $searchModelJobs,
            'dataProvider' => $dataProvider,
            // 'dataProviderJobs' => $dataProviderJobs,
        ]);
    }

    /**
     * Displays a single Operations model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $modelJobs = $this->findModelJobs($model->job_id);

        if ($modelJobs === null) {
            throw new NotFoundHttpException('The requested job does not exist.');
        }

        return $this->render('view', [
            'model' => $model,
            'modelJobs' => $modelJobs,
        ]);
    }


    /**
     * Creates a new Operations model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Operations();


        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                if ($model->save()) {
                    Yii::$app->session->setFlash('success', Yii::t('app', 'Successfully'));
                    return $this->redirect(['view', 'id' => $model->id]);
                } else {
                    Yii::$app->session->setFlash('warning', Yii::t('app', 'Unsuccessfully'));
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Operations model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelJobs = $this->findModelJobs($model->job_id);


        if ($this->request->isPost && $model->load($this->request->post()) & $modelJobs->load($this->request->post())) {
            // $modelJobs->job_status = 3;
            $modelJobs->save();
            if ($model->save()) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Successfully'));
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->session->setFlash('warning', Yii::t('app', 'Unsuccessfully'));
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
            'modelJobs' => $modelJobs,
        ]);
    }

    protected function findModelJobs($id)
    {
        if (($model = Jobs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Deletes an existing Operations model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Operations model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Operations the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Operations::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
