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
$_FILES['Image1']['name']['imageFile'] - 
<?php
if ($_FILES['Image1']) {
echo ($_FILES['Image1']['name']['imageFile']);
}
?>
<hr>
<hr>