
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
?>

<hr>
<?php
if($basename1 != '') {
	echo "загружено изображение - " . $basename1;
}
?>
<hr>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'imageFile')->fileInput() ?>
    <?= Html::submitButton('Загрузить') ?>
<?php ActiveForm::end() ?>

<hr>
<?php
if ($_FILES['VertgorizImage']) {
	echo "<h1 style=color: red;>Qwerty</h1>";
}
?>
<hr>

<?php
$dir = 'images/vertgoriz';
$files1 = scandir($dir);
//echo "<pre>";
//print_r($files1);
//echo "</pre>";
?>

<?php foreach ($files1 as $value):?>
<?php if($value != '.' && $value != '..'): ?>
<!-- PHP7 (стр 390) -->
<?php $qw = '/\.jpg|\.jpeg|\.gif|\.png/'; ?> 
<?php if(preg_match($qw, $value)): ?>
<div style="display: inline-block; border: 1px solid #ccc; margin: 20px; padding: 10px;">
<img src="/images/vertgoriz/<?= $value ?>" height="150px">
<br>
<span style="margin: 10px 0; display: inline-block;">
	<?= $value ?>
</span>
<?php $form1 = ActiveForm::begin([]) ?>
    <input type="hidden" name="delete" value="<?= $value ?>">
    <?= Html::submitButton('Удалить') ?>
<?php ActiveForm::end() ?>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>

