<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\jui\AutoComplete;

?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'slider'); ?>
<?= $form->field($model, 'name')->widget(\yii\jui\AutoComplete::classname(), [
    'clientOptions' => [
        'source' => ['USA', 'CUBA'],
    ],
]) ?>
<br>
<?= Html::submitButton(); ?>
<?php ActiveForm::end(); ?>