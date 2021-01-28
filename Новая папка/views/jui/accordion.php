<?php
use yii\jui\Accordion;

echo Accordion::widget([
    'items' => [
        [
            'header' => 'Section 1',
            'content' => 'Mauris mauris ante, blandit et, ultrices a, suscipit eget...',
        ],
        [
            'header' => 'Section 2',
            'headerOptions' => ['tag' => 'h3'],
            'content' => 'Sed non urna. Phasellus eu ligula. Vestibulum sit amet purus...',
            'options' => ['tag' => 'div'],
        ],
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['tag' => 'h3'],
    'clientOptions' => ['collapsible' => false],
]);
?>
<hr>
<a href="https://www.yiiframework.com/extension/yiisoft/yii2-jui/doc/api/2.0/yii-jui-accordion" target="_blank">Class yii\jui\Accordion</a>
