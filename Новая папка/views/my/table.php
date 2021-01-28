<?php
    use yii\helpers\Url;
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
    $this->registerCssFile('@web/css/table.css');
    $this->title = 'Альбомы';
    $this->params['breadcrumbs'][] = $this->title;
    $this->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики111']);
    $this->registerMetaTag(['name' =>  'description', 'content' => 'ключевики222']);
?>

<?php
$form = ActiveForm::begin();
echo $form->field($model, 'title');
echo $form->field($model, 'content');
echo Html::submitButton();
ActiveForm::end();
?>
<hr>

<?php foreach ($posts as $post): ?>
<p><?= $post->content; ?></p>
<a href="<?= Url::to(['my/view', 'id' => $post->id]); ?>"><?= $post->title; ?></a>
<br>
<a href="<?= Url::to(['my/delete', 'id' => $post->id]); ?>">Удалить</a>
<hr>
<?php endforeach; ?>
