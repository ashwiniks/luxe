<?php

  namespace rest\versions\v1\controllers;

  use Yii;
  use yii\rest\Controller;
  use backend\models\Tour;
  use backend\models\TourSearch;
  
  use yii\web\NotFoundHttpException;
  use yii\filters\VerbFilter;
  use yii\web\UploadedFile;

  /**
   * TourController implements the CRUD actions for Tour model.
   */
  class TourController extends Controller {

      public function behaviors() {
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
      public function actionGettours($category,$subcategory) {
          $tours = Yii::$app->db->createCommand("SELECT * FROM tour where category=$category and subcategory=$subcategory")
            ->queryAll();
          return $tours;
          
      }



  }
  