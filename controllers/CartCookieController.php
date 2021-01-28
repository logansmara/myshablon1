<?php

namespace app\controllers;

use app\models\ProductCookie;
use Yii;

class CartCookieController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $products = ProductCookie::find()->all();
        $cookies = Yii::$app->request->cookies;
        return $this->render('index', [
            'products' => $products,
            'cart' => $cart,
            'name' => $cookies->getValue('name')
        ]);
    }

    public function actionPlus($id, $value) {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'utka' . $id,
            'value' => $value + 1,
            'expire' => time() + 86400, // время активности Cookie в секундах (по умолчанию «0»)
        ]));

    	return $this->redirect(['index']);
    }

    public function actionMinus($id, $value) {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'utka' . $id,
            'value' => $value - 1,
            'expire' => time() + 86400, // время активности Cookie в секундах (по умолчанию «0»)
        ]));

    	return $this->redirect(['index']);
    }

}
