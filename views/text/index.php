<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Texts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-index">

    <h1><?= Html::encode($this->title) ?></h1>

<?= Html::a('Посмотреть', ['/text/look']) ?>
<br><br>
    <p>
        <?= Html::a('Create Text', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
