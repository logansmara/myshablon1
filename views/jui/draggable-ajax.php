<a href="<?= \yii\helpers\Url::to(['jui/update-ajax']) ?>" class="a1">начать новую игру</a>

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
            var top1= ui.offset.top;
            var left1= ui.offset.left;
             $.ajax({
 url: '/jui/draggable-ajax',
 type: 'GET',
 data: {top: top1, left: left1, id: id},
 success: function(res){
  console.log(res)
 },
 error: function(){
 alert('Error!');
 }
 });
          }
        });
      });
    });
JS;

$this->registerCss($css);
$this->registerJs($js);

?>

