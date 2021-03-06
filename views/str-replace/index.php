<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Str Replaces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="str-replace-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <a href="preview">предварительный просмотр</a>
<hr>
    <p>
        <?= Html::a('Create Str Replace', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
