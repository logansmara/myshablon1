<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $categories = Category::find()->all();
        return $this->render('index', compact('categories'));
    }

    public function actionView($id)
    {
        $category = Category::findOne($id);
        return $this->render('view', compact('category'));
    }
    
    public function actionCache()
    {
        $categories = Yii::$app->cache->get('categories');
        if(!$categories){
            $categories = Category::find()->all();
            Yii::$app->cache->set('categories', $categories, 30);
        }
        return $this->render('cache', compact('categories'));
    }
    
    public function actionHasmany()
    {
        $categories = Category::findOne(3);
        $products = Product::find()->where(['category_id' => 3])->all();
        return $this->render('hasmany', compact('categories', 'products'));
    }
    
    public function actionHasone()
    {
        $products = Product::find()->where(['category_id' => 3])->all();
        return $this->render('hasone', compact('products'));
    }
    
    public function actionWith()
    {
        $products = Product::find()->where(['category_id' => 3])->with('category')->all();
        return $this->render('with', compact('products'));
    }

}
