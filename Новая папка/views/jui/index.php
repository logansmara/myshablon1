<?php
use yii\helpers\Url;
?>
<h1>/jui/index</h1>

<ul>
    <li><a href="<?= Url::to(['jui/accordion']); ?>">accordion</a></li>
    <li><a href="<?= Url::to(['jui/slider']); ?>">slider</a></li>
    <li><a href="<?= Url::to(['jui/slider-input']); ?>">slider-input</a></li>
    <li><a href="<?= Url::to(['jui/auto-complete']); ?>">auto-complete</a></li>
    <li><a href="<?= Url::to(['jui/draggable']); ?>">draggable</a> (используется ui.offset – объект, в свойствах top и left которого содержится информация об абсолютном положении перемещаемого элемента.) - </li>
    <li><a href="<?= Url::to(['jui/draggable1']); ?>">draggable1</a> (ui.position – объект, в свойствах top и left которого содержится информация о положении перемещаемого элемента относительно родительского элемента;)</li>
    <li><a href="<?= Url::to(['jui/mouseup1']); ?>">mouseup1</a></li>
</ul>
<p>
	<a href="http://www.cyberforum.ru/javascript-jquery/thread947131.html" target="_blank">отследить координаты Draggable элемента</a>
</p>
<a href="http://www.codeharmony.ru/materials/129"  target="_blank">Передача значений переменных из JavaScript в PHP и обратно</a>
<br>
<a href="https://itchief.ru/lessons/javascript/jquery-data" target="_blank">jQuery - Data</a>
<p>
	Если разместить шашки в div с position: relative и дать height, то в базе данных новые значения не перезаписываются
</p>