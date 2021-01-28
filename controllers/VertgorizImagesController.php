<?php

namespace app\controllers;

use Yii;
//use app\models\OknaSlopes;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\VertgorizImage;
use yii\imagine\Image;

/**
 * OknaSlopesController implements the CRUD actions for OknaSlopes model.
 */
class VertgorizImagesController extends Controller
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
$model = new VertgorizImage();
$basename1 = '';
if (Yii::$app->request->isPost) {
if(!isset($_REQUEST['delete'])) {
$model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                
if ($model->validate()) {
$model->imageFile->saveAs('images/vertgoriz/' . $model->imageFile->baseName . '.' . $model->imageFile->extension);
$newPath = Yii::getAlias('@webroot/images/vertgoriz/' . $model->imageFile->baseName . '.' . $model->imageFile->extension);
$size = getimagesize($newPath); // Определяем размер картинки
$imageWidth = $size[0];  // Ширина картинки
$imageHeight = $size[1]; // Высота картинки
$r = $imageWidth/$imageHeight;
$image = Yii::getAlias('@webroot/images/vertgoriz/' . $model->imageFile->baseName . '.' . $model->imageFile->extension);
/* название файла */
$basename1 = $model->imageFile->baseName;
/**/
if ($r > 1) {
Image::thumbnail($image, 800, 500)
 ->save(Yii::getAlias('@webroot/images/vertgoriz/' . $model->imageFile->baseName . '.' . $model->imageFile->extension), ['quality' => 80]);
} else {
Image::thumbnail($image, 300, 500)
 ->save(Yii::getAlias('@webroot/images/vertgoriz/' . $model->imageFile->baseName . '.' . $model->imageFile->extension), ['quality' => 80]);
}
//return $this->refresh();
return $this->render('index', compact('model', 'basename1'));
            }
            }
            
            if(isset($_REQUEST['delete'])) {
                $qw = $_REQUEST['delete'];
                unlink("images/vertgoriz/{$qw}");
            }
        }
        return $this->render('index', compact('model', 'basename1'));
    }

}
