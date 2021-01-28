<?php

namespace app\controllers;

class JavaScriptController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionI2()
    {
        return $this->render('i2');
    }

    public function actionI3()
    {
        return $this->render('i3');
    }

}
