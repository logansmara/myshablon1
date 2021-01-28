<?php

if(!isset($_COOKIE["name"])) {
  setcookie("name",time(),time()+240);
}
//раскоментировать, если надо удалить куки
//setcookie("name",time(),time()-3600);


use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
rmrevin\yii\fontawesome\CdnFreeAssetBundle::register($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<style>
/* Заказать звонок */
.button-zvonok {
margin-top: 20px;
background-color: transparent;
border: 1px solid #f0f;
color: #f0f;
border-radius: 5px;
padding: 6px;
transition: color .25s ease-out;
transition: border .15s ease-out;
}
.button-zvonok:hover {
color: rgba(255, 177, 0, 1);
border: 1px solid rgba(255, 177, 0,.5);
}
.window-tel1 {
position: absolute;
top: 0;
left: 0;
z-index: 10;
text-decoration: none;
width: 100vw;
height: 100vh;
}
.window-tel1 p {
margin-top: 30vh;
margin-right: 20vw;
float: right;
border: 1px solid #ccc;
border-radius: 5px;
padding: 20px;
background: green;
color: white;
}
</style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<a href="<?= Url::to(['/my/index']); ?>">my/index1</a>
<hr>
<!-- Кнопка пуска модальное окно -->  
<button type="button" class="button-zvonok" data-toggle="modal" data-target="#myModal1">
  Заказать расчет
</button>
<!-- /Кнопка пуска модальное окно --> 
<hr>
<!-- Модальное окно -->  
<?php require_once('zvonok.php'); ?>
<!-- /Модальное окно -->
<p>
В папке models ZvonokForm.php
<br>
В web/js/scripts.php
<pre>
/* Закрыть "Ваша заявка принята" */
  $('.window-tel1').on('click', function() {
      $(this).css("display", "none");
  });
</pre>
</p>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
<pre>
Прерывается layout и начинается $content
</pre>
        <?= $content ?>
    </div>
</div>

<footer>

<!-- Согласие -->  
<?php require_once('soglasye.php'); ?>
<!-- /Согласие -->

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
