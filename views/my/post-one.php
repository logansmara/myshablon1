<?php
$this->title = 'Вывод поста';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $post->title; ?>
<hr>
$post = Post::findOne(1);
<pre>
При выводе foreach не нужен.
<?php
print_r($post->title);
?>
</pre>
Если в findOne() вставить значение, это будет значение $id
