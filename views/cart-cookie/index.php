<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<style>
	label {
		display: none;
	}
</style>
<?php
$cookies = Yii::$app->request->cookies;
?>
<?php

foreach ($cookies as $key) {
	echo $key->name . ' - ' . $key->value . "<br>";
}

$qwerty = '';
foreach ($cookies as $cookie) {
	if (substr($cookie->name, 0, 4) == 'utka') {
		$qwerty = $qwerty . $cookie->name;
	}
}
/* $qwerty  - Получили строку из массива, предварительно выбрав куки, начинающиеся на "utka"<br>'
*/
$substr = substr($qwerty, 4); //отрезали первую "utka"

$explode = explode('utka', $substr); //получили массив из строки без "utka"
/*
echo "<pre>";
print_r($explode);
echo "</pre>";
*/
?>

<hr>
<hr>
<hr>

<?php foreach($products as $product):?>

<?php
$value = 0;
foreach ($cookies as $cookie) {
if(substr($cookie->name, 4) == $product->cookie_id) {
		$value = $value + $cookie->value;
		//echo $value . " - value<br>";
	}
}
?>

<?php if ($value == 0): ?>
<?= $product->name ?>

<a href="<?= \yii\helpers\Url::to(['cart-cookie/plus', 'id' => $product->cookie_id, 'value' => $value]); ?>" class="cartplus1">+<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
<?php else: ?>
<?= $product->name ?>

<a href="<?= \yii\helpers\Url::to(['cart-cookie/minus', 'id' => $product->cookie_id, 'value' => $value]); ?>" class="cartminus1">-</a>
<?= $value; ?>

<a href="<?= \yii\helpers\Url::to(['cart-cookie/plus', 'id' => $product->cookie_id, 'value' => $value]); ?>" class="cartplus1">+</a>
<?php endif; ?>
<hr>
<hr>
<?php endforeach; ?>
