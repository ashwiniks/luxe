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
      public function actionGetdata() {
          $tours = Yii::$app->db->createCommand('SELECT * FROM tour')
            ->queryAll();
          return $tours;
          
      }

      /**
       * Displays a single Tour model.
       * @param integer $id
       * @return mixed
       */
      public function actionView($id) {
          return $this->render('view', [
                      'model' => $this->findModel($id),
          ]);
      }

      /**
       * Creates a new Tour model.
       * If creation is successful, the browser will be redirected to the 'view' page.
       * @return mixed
       */
      public function actionCreate() {
          $model = new Tour();

          if ($model->load(Yii::$app->request->post())) {
              $model->tourimage = UploadedFile::getInstance($model, 'tourimage');
              if ($model->upload()) {
                 
                  
                  $model->image = "uploads/" . $model->tourimage->name;
                  $model->save();
                      return $this->redirect(['view', 'id' => $model->id]);
                  
              }
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
      public function actionUpdate($id) {
          $model = $this->findModel($id);

          if ($model->load(Yii::$app->request->post()) ) {
               $model->tourimage = UploadedFile::getInstance($model, 'tourimage');
              if ($model->upload()) {
                 
                  
                  $model->image = "uploads/" . $model->tourimage->name;
                  $model->save();
                      return $this->redirect(['view', 'id' => $model->id]);
                  
              }
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
      public function actionDelete($id) {
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
      protected function findModel($id) {
          if (($model = Tour::findOne($id)) !== null) {
              return $model;
          } else {
              throw new NotFoundHttpException('The requested page does not exist.');
          }
      }

  }
  