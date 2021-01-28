<?php

namespace app\controllers;

use app\models\Product;
use app\models\Cart;
use Yii;

class CartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $products = Product::find()->all();
        return $this->render('index', compact('products'));
    }

    public function actionAdd($id, $znak)
    {
    	//массив продукта с 'product_id' => $id и 'cookie_name' => $_COOKIE["name"]]
        $cart1 = Cart::find()->asArray()->where(['product_id' => $id, 'cookie_name' => $_COOKIE["name"]])->all();
        $cart = new Cart();
        //если еще не в таблице этого продукта для этого пользователя ($_COOKIE["name"])
        if(!count($cart1)) {
        	$cart->cookie_name = $_COOKIE['name'];
            $cart->product_id = $id;
            $cart->date = date("Y-m-d H:i:s");
            //если пользователь нажал на кнопку +
            if($znak == 1) {
            	$cart->quantity = 1;
            }
            $cart->save();
        } else {
        	/*так как $cart массив (хотя мы и имеем всего строку, но использовали при получении all()).
        	Именно поэтому мы и использовали ->asArray()->,
        	чтобы можно было получить $cart1[0]['id']
        	*/
        	$qwerty = $cart1[0]['id'];
        	$cart2 = Cart::findOne($qwerty);
        	//если пользователь нажал на кнопку - (минус)
            if($znak == -1) {
            // чтобы не получить отрицательного значения количества товара
               if($cart2->quantity > 0) {
               	$cart2->quantity = $cart2->quantity - 1; 
               } else {
               	$cart2->quantity = 0;
               }
            //если пользователь нажал на кнопку + и данный товар уже имеется в корзине, то мы увеличиваем в сроке этого товара количество на 1
            } elseif ($znak == 1) {
                $cart2->quantity = $cart2->quantity + 1; 
            }
            $cart2->save();
        }
        // перенаправляет снова на страницу cart/index
        return Yii::$app->response->redirect(['cart/index']);
    }

        public function actionDeleteAll()
    {
    	$qw = time() - 240;
        $connection = Yii::$app->db;
        $model = $connection->createCommand("Delete From cart Where cookie_name < $qw");
        $model->execute();
        return Yii::$app->response->redirect(['cart/index']);
    }

}
