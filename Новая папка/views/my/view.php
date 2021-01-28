<?php
$this->registerCssFile('@web/css/table.css');
$this->title = 'Фотографии';
$this->params['breadcrumbs'][] = ['label' => 'Альбомы', 'url' => ['table']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $post->title ?></h1>

<p><?= $post->content ?></p>
<hr>
<h3>Здесь также применяется обработка ошибок</h3>
В MyController.php
<pre>
public function actionView($id)
    {
        //$id = \Yii::$app->request->get();
        $post = Post::findOne($id);
        // Обработка ошибок
        if(empty($post))
        throw new \yii\web\HttpException(404, 'Такой категории нет.');
        return $this->render('view', compact('post'));
    }
</pre>
Страница ошибки site/error
