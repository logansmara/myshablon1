<?php
    use yii\helpers\Url;
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
    use yii\jui\DatePicker;
    $this->registerCssFile('@web/css/table.css');
    $this->title = 'Альбомы';
    $this->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики111']);
    $this->registerMetaTag(['name' =>  'description', 'content' => 'ключевики222']);
    $this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'title'); ?>
<?= $form->field($model,'data')->widget(DatePicker::className()); ?>
<?= Html::submitButton(); ?>
<?php ActiveForm::end(); ?>

