<?php

namespace app\controllers;

use Yii;
use app\models\CalculatorForm;
use app\models\OknaWindowsill;
use app\models\OknaInstallation;

class OknaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // значения подоконников из таблицы
        $windowsills = OknaWindowsill::find()->all();
        $windowsill1 = '';
        // значения монтажа из таблицы
        $installations = OknaInstallation::find()->all();
        $installation1 = '';
    	$calculator = new CalculatorForm();
        $length1 = '';
        $height1 = '';
        if($calculator->load(Yii::$app->request->post())) {
            $length1 = $calculator->length;
            $height1 = $calculator->height;
            $windowsill1 = $calculator->windowsill;
            $installation1 =$calculator->installation;
        }
        return $this->render('index', [
            'calculator' => $calculator,
            'length1' => $length1,
            'height1' => $height1,
            'windowsills' => $windowsills,
            'windowsill1' => $windowsill1,
            'installations' => $installations,
            'installation1' => $installation1,
        ]);
    }

    public function actionQwerty()
    {
        $windowsill = OknaWindowsill::find()->all();
        return $this->render('qwerty', compact('windowsill'));
    }

}
