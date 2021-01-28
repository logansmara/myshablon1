<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StrReplace */

$this->title = 'Create Str Replace';
$this->params['breadcrumbs'][] = ['label' => 'Str Replaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="str-replace-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
