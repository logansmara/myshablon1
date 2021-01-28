<?php
$this->title = 'Вывод поста';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $post->title; ?>
<hr>
$post = Post::findOne(1);
<br>
Если в findOne() вставить значение, это будет значение $id