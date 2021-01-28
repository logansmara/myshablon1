<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- права доступа для администратора и редактора -->
<?php if(Yii::$app->user->identity->username == 'admin1' ||
Yii::$app->user->identity->username == 'redactor1'):?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'name',
            'content:ntext',
            'price',
            //'keywords',
            //'description',
            //'img',
            //'hit',
            //'new',
            //'sale',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<?php else: ?>
<h2>У Вас нет прав доступа к этой странице</h2>
<?php endif; ?>