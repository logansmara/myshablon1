<?php foreach ($categories as $category): ?>
<a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category->id]); ?>"><?= $category->name ?></a><br>
<?php endforeach; ?>
