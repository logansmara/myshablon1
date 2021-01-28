<?php

namespace app\controllers;
use Yii;

class FormController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
     
    public function actionForm() {
        $q = trim(Yii::$app->request->get('q'));
        $q = \yii\helpers\Html::encode($q);
        if(empty($q)) return $this->render('index');
        return $this->render('form', compact('q'));
    }

}
