<?php
use app\components\MenuWidget;
?>
<p>
    Здесь используется MenuWidget
</p>

<p>
    <?php echo MenuWidget::widget(); ?>
</p>
<hr>
<p>
    Здесь обычным способом
</p>
<?php foreach ($categories as $category): ?>
<a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category->id]); ?>"><?= $category->name ?></a><br>
<?php endforeach; ?>
