<hr style="border-top: 2px solid #93b68f;">
<?= yii\helpers\Html::a('Вернуться', ['/text/index']) ?>
<br><br>
<p style="border: 1px solid green; padding: 10px;">
$text1 = str_replace("\n", "&lt;br&gt;", $text);	
</p>
<?php foreach ($texts as $text) {
$text1 = str_replace("\n", "<br>", $text->text);
?>
<?= $text1 ?>
<hr>
<?php } ?>