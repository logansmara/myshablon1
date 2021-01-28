<?php
    use yii\helpers\Url;
    use yii\bootstrap\ActiveForm;
    use mihaildev\ckeditor\CKEditor;
    use yii\helpers\Html;
    $this->registerCssFile('@web/css/table.css');
    $this->title = 'Альбомы';
    $this->params['breadcrumbs'][] = $this->title;
    $this->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики111']);
    $this->registerMetaTag(['name' =>  'description', 'content' => 'ключевики222']);
?>

<h2>Текстовый редактор</h2>
<a href="https://github.com/MihailDev/yii2-ckeditor" target="_blank">MihailDev/yii2-ckeditor: Yii2 CKEditor - GitHub</a>
<p>composer require --prefer-dist mihaildev/yii2-ckeditor "*"</p>
<pre>
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
echo $form->field($post, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);
</pre>

<?php
$form = ActiveForm::begin();
echo $form->field($model, 'title');
echo $form->field($model, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);
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
