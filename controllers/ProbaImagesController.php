<?php

namespace app\controllers;

use Yii;
//use app\models\OknaSlopes;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\ProbaImage;

/**
 * OknaSlopesController implements the CRUD actions for OknaSlopes model.
 */
class ProbaImagesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function actionIndex() {
        $model = new ProbaImage();
        if (Yii::$app->request->isPost) {
            if(!isset($_REQUEST['delete'])) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                return $this->refresh();
            }
            }
            
            if(isset($_REQUEST['delete'])) {
                $qw = $_REQUEST['delete'];
                unlink("images/proba/{$qw}");
            }
        }
        return $this->render('index', compact('model'));
    }

}
