<!--
https://mariit.ru/articles/ajax-zagruzka-dannyh-v-yii2-listview
-->
<a href="https://mariit.ru/articles/ajax-zagruzka-dannyh-v-yii2-listview
" style="font-size: 28px;color: blue" target="_blank">Ajax загрузка данных в Yii2 ListView</a>
<br>
<a href="https://github.com/kop/yii2-scroll-pager" style="font-size: 28px;color: blue" target="_blank">Yii2 Scroll Pager</a>
<br>
<style>
	.summary {
		display: none;
	}
	.ias-noneleft {
		display: none !important;
	}
</style>
<?php
use app\models\Blogs;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Blogs::find(),
    'pagination' => [
        'pageSize' => 3,
    ],
]);
?>
<?= ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item'],
     'itemView' => '_item_view',
     'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
?>