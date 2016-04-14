<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Tour;
use app\models\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
/**
 * TourController implements the CRUD actions for Tour model.
 */
class TourController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tour models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TourSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tour model.
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
     * Creates a new Tour model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tour();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tour model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tour model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tour model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tour the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tour::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
    public function actionAlltour() {
          // build a DB query to get all articles with status = 1
          $query = Tour::find();
          //print_r($query);
          

// get the total number of articles (but do not fetch the article data yet)
          $count = $query->count();

// create a pagination object with the total count
          $pagination = new Pagination(['totalCount' => $count,'pageSize'=>4]);
        
// limit the query using the pagination and retrieve the articles
          $tours = $query->offset($pagination->offset)
                  ->limit($pagination->limit)
                  ->all();
          return $this->render('alltour',['pagination'=>$pagination,'tours'=>$tours]);
      }
      
      public function actionDetails($id)
      {
          $tour=  Tour::findOne($id);
          $itneries= $tour->getItineries()->all();
          $galleries=$tour->getGalleries()->all();
          $includes=$tour->getInclusions()->all();
          $excludes=$tour->getExcludes()->all();
          
     return $this->render('details',['tour'=>$tour,'itneries'=>$itneries,'galleries'=>$galleries,'includes'=>$includes,'excludes'=>$excludes
        ]);
          
      }

  }
