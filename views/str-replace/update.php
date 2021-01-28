<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StrReplace */

$this->title = 'Update Str Replace: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Str Replaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="str-replace-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
