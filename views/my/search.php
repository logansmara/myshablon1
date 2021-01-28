<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
?>

<?php if (!empty($posts)): ?>

<?php foreach ($posts as $post): ?>
    <?= $post->title ?> | <?= $post->content ?><hr>
<?php endforeach; ?>
<div class="clearfix"></div>
<?php
echo \yii\widgets\LinkPager::widget([
    'pagination' => $pages,
]);
?>
<?php else : ?>
<h2>Ничего не надо...</h2>
<?php endif; ?>
