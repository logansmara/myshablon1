Данные получены с использованием hasMany и использованием модели Category
<br>
в models/Category.php
<br>
<pre>
  public function getProducts() {
    return $this->hasMany(Product::className(), ['category_id' => 'id']);
  }
</pre>
в controllers/CategoryController.php
<pre>
$categories = Category::findOne(3);
</pre>
<?php
if(!empty($categories->products)){
    foreach ($categories->products as $prodhasmany){
        echo $prodhasmany->name . '<br>';
    }
}
?>
<hr>
<hr>
Те же данные получены с использованием модели Product и без использования hasOne
<pre>
$products = Product::find()->where(['category_id' => 3])->all();
</pre>
<?php
if(!empty($products)) {
    foreach ($products as $product) {
        echo $product->name . '<br>';
    }
}
?>