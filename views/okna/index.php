<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<div style="width: 100%; height: 10px; border: 1px solid red;"></div>
<?php
$sum = $length1 * $height1 * $windowsill1 * $installation1;
echo $sum;
?>
<hr>

<?php $form = ActiveForm::begin([/*'id' => 'contact-form'*/]); ?>
<?= $form->field($calculator, 'height') ?>
<?= $form->field($calculator, 'length') ?>
<?php
/*
Выпадающий список с выводом данных из модели (базы данных)
Необходимо подключение хелпера ArrayHelper
https://p0vidl0.info/yii2-vypadayushhij-spisok-dropdownlist.html
*/
$items1 = ArrayHelper::map($windowsills,'value','name');
?>
<?= $form->field($calculator, 'windowsill')->dropDownList($items1) ?>

<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>

