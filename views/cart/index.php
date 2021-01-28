<?php foreach($products as $product):?>
<?= $product->name ?> 
<?php
// получаем массив внутри foreach для каждого продукта
$cart2 = app\models\Cart::find()->asArray()->where(['product_id' => $product->id, 'cookie_name' => $_COOKIE["name"]])->all();
?>
<!-- если нет строки данного продукта для данного куки или количество товара равно нулю -->
<?php if(!count($cart2) || $cart2[0]['quantity'] == 0): ?>
<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id, 'znak' => '1']); ?>" data-id="<?= $product->id; ?>" class="cartplus1">+<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
<?php else: ?>
<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id, 'znak' => '-1']); ?>" data-id="<?= $product->id; ?>" class="cartminus1">-</a>
<!-- количество в корзине данного продукта -->
<span><?= $cart2[0]['quantity']; ?></span>
<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id, 'znak' => '1']); ?>" data-id="<?= $product->id; ?>" class="cartplus1">+</a>
<?php endif; ?>
<br>
<?php endforeach; ?>

<a href="<?= \yii\helpers\Url::to(['cart/delete-all'])?>">Удалить строки старше 240 секунд</a>
<br>
<a href="http://www.webapplex.ru/rabota-s-zaprosami-v-yii-2.x.-dobavlenie,-izmenenie-i-udalenie-dannyix-iz-tabliczyi-(chast-4)">ссылка</a>
