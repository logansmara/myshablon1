<?php
$this->title = 'Пагинация';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if (!empty($posts)): ?>
<?php foreach ($posts as $post): ?>
    <?= $post->title ?><br>
<?php endforeach; ?>
<?php
echo \yii\widgets\LinkPager::widget([
    'pagination' => $pages,
]);
?>
<?php else : ?>
<h2>Здесь фотографий пока нет...</h2>
<?php endif; ?>
