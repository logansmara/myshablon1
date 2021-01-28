<p>
В адресной стороке методом GET передадутся координаты мыши, когда указатель мыши находится над элементом с классом "table" и кнопка мыши отпускается
</p>
<a href="http://basicweb.ru/jquery/jquery_event_mouseup.php" target="_blank">jQuery метод .mouseup()</a>
<br><br><br>
<div class="table" style="border: 1px solid red;">
<?php if(isset($x) && isset($y)): ?>
<?php if(!empty($x) && !empty($y)): ?>
<span class="span1" style="left: <?= $x ?>px; top: <?= $y ?>px">
<?= $x ?> <?= $y ?>
</span>
<?php endif; ?>
<?php endif; ?>
</div>

<?php

$css = <<< CSS
.table {
width: 850px;
height: 450px;
border: 1px solid red;
}
.span1 {
	color: green;
	position: absolute;
	display: inline-block;
	padding: 5px;
	background: yellow;
	border-radius: 3em;
}
CSS;

$js = <<< JS
    $(function() {

        $(".table").mouseup(function(evt) {
            var xPos = evt.pageX;
            var yPos = evt.pageY;
            window.location.href = "/jui/mouseup1?pagex=" + xPos + "&pagey=" + yPos;
        });
    });
JS;

$this->registerCss($css);
$this->registerJs($js);

?>