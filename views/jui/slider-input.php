<?php
use yii\jui\SliderInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div id="polzunok"></div>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name'); ?>

<?= $form->field($model, 'slider')->widget(SliderInput::classname(), [
    'clientOptions' => [
        'min' => 1,
        'max' => 10,
    ],
    'clientEvents' => [
        'slide' => 'function( event, ui ) {
        $(".ui-slider-horizontal .ui-slider-handle").text(ui.value);     
        $("#slider-slider").val(ui.value);
    }', 
    ],
]) ?>
<br>
<?= Html::submitButton(); ?>
<?php ActiveForm::end(); ?>

<hr>
<?php foreach ($posts as $post): ?>
<?= $post->name ?> | <?= $post->slider ?>
<br>
<?php endforeach; ?>

<hr>
<a href="https://atuin.ru/blog/polzunok-diapazonov-jquery-ui-slider/" target="_blank">ссылка</a>