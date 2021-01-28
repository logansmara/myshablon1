<a href="<?= \yii\helpers\Url::to(['jui/update']) ?>" class="a1">начать новую игру</a>

<?php foreach($moves as $move): ?>
<div class="draggable" href="<?= $move->id ?>" style="background: <?= $move->color ?>;left: <?= $move->pagex ?>px; top: <?= $move->pagey ?>px"></div>
<?php endforeach; ?>

<?php

$css = <<< CSS
body {
	background: url(/images/board.png) no-repeat 100px 100px;
}
.a1 {
  position: absolute;
  top: 90px;
  left: 600px;
}
.table {
	width: 400px;
}
.draggable {
position: absolute;
width: 40px;
height: 40px;
border: 1px solid #999;
border-radius: 5em;
}
CSS;

$js = <<< JS
    $(function() {
      $('.draggable').each(function() {

        var id = $(this).attr('href');
        $(this).draggable({
          stop: function(event,ui) {

            window.location.href = "/jui/move?top=" + ui.offset.top + "&left=" + ui.offset.left + "&id=" + id;
          }
        });
      });
    });
JS;

$this->registerCss($css);
$this->registerJs($js);

/*
stop - событие наступает при завершении перемещения.
window.location.href - свойство, перенаправляющее страницу по заданному адресу
ui.offset.top и ui.offset.left - положения перемещаемого элемента относительно документа
*/

?>
