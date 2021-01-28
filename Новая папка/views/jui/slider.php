<?php
use yii\jui\Slider;

echo Slider::widget([
    'id' => 'slider',
    'clientOptions' => [

    ],
    'clientEvents' => [
    'slidecreate' => 'function() {
      $(".ui-slider-horizontal .ui-slider-handle").text( $( this ).slider( "value" ) );
    }',
    'slide' => 'function( event, ui ) {
      $(".ui-slider-horizontal .ui-slider-handle").text( ui.value );
    }',
    ],
]);
?>
<hr>
<a href="http://jquery.page2page.ru/index.php5/%D0%9F%D0%BE%D0%BB%D0%B7%D1%83%D0%BD%D0%BE%D0%BA_UI" target="_blank">ссылка</a>
<br>
<a href="https://atuin.ru/blog/polzunok-diapazonov-jquery-ui-slider/" target="_blank">ссылка</a>