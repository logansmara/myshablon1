Данные получены с использованием hasOne и использованием модели Product
<br>
в models/Product.php
<br>
<pre>
public function getCategory() {
    return $this->hasOne(Category::className(), ['id' => 'category_id']);
}
</pre>
в controllers/CategoryController.php
<pre>
$products = Product::find()->where(['category_id' => 3])->with('category')->all();
</pre>
добавлена with('category')
<hr>
в view/with.php &#9730;
<pre>
if(!empty($products)){
    foreach ($products as $product) {
        echo 'Продукт: ' . $product->name . ' - Категория: ' . $product->category->name . '&lt;br&gt;';
    }
}
</pre>
<?php
if(!empty($products)){
    foreach ($products as $product) {
        echo 'Продукт: ' . $product->name . ' - Категория: ' . $product->category->name . '<br>';
    }
}
?>
