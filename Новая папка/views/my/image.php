<?php
$this->title = 'Загрузка изображений';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
$this->registerCssFile('css/jquery.fancybox.css', [ 'position' => \yii\web\View::POS_END ]);
$this->registerJsFile('@web/js/jquery.fancybox.js', ['depends' => 'yii\web\YiiAsset']);
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'imageFile')->fileInput() ?>
    <?= Html::submitButton('Загрузить') ?>
<?php ActiveForm::end() ?>

<hr>

<?php
$dir = 'images';
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
<div style="display: inline-block;">
<a href="/images/<?= $value ?>" class="fancybox">
<img src="/images/<?= $value ?>" width="100px">
</a>
<?= $value ?>
<?php $form1 = ActiveForm::begin([]) ?>
    <input type="hidden" name="delete" value="<?= $value ?>">
    <?= Html::submitButton('Удалить') ?>
<?php ActiveForm::end() ?>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<div style="width: 100%; height: 40px; clear: both;"></div>
<?php
$js = <<< JS
$(function() {
$(".fancybox").fancybox();
})(jQuery);
JS;
$this->registerJs($js);
?>
<p>
	Здесь используется <a href="https://webformyself.com/top-plaginov-jquery-plagin-fancybox/" target="_blank">fancybox</a>
	<br>
	При нажатии на картинку она увеличится
</p>
