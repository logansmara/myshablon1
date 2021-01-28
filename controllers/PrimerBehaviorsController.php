<?php

namespace app\controllers;
use app\models\Primerbehaviors;
use Yii;

class PrimerBehaviorsController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$primer = new Primerbehaviors();
    	$qw1 = $primer->name;
    	$qw2 = $primer->property1;
        return $this->render('index', compact('qw1', 'qw2'));
    }

}
