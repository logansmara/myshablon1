<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = 'Create Product';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- права доступа для администратора и редактора -->
<?php if(Yii::$app->user->identity->username == 'admin1' ||
Yii::$app->user->identity->username == 'redactor1'):?>
<div class="product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php else: ?>
<h2>У Вас нет прав доступа к этой странице</h2>
<?php endif; ?>
