<?php
use app\components\MyWidget;
use app\components\ProbaWidget;
use yii\helpers\Url;
use yii\helpers\Html;

    $this->title = 'Shoow123';
    $this->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики111']);
    $this->registerMetaTag(['name' =>  'description', 'content' => 'ключевики222']);
    
    
$this->registerCssFile('css/myindex.css', [ 'position' => \yii\web\View::POS_END ]);
?>
<h1>/my/index</h1>
<?php
echo $_COOKIE["name"] . '<br>' . time();
?>
<ul class="nav nav-tabs">
    <li role="presentation"><a href="<?= Url::to(['/my/index']); ?>">my/index</a></li>
  <li role="presentation"><a href="<?= Url::to(['/my/table']); ?>">my/table</a></li>
  <li role="presentation"><a href="<?= Url::to(['/my/pagination']); ?>">my/pagination</a></li>
  <li role="presentation"><a href="<?= Url::to(['/my/image']); ?>">my/image</a></li>
  <li role="presentation"><a href="<?= Url::to(['/my/post-one']); ?>">my/post-one</a></li>
  <li role="presentation"><a href="<?= Url::to(['/my/update-all']); ?>">my/update-all</a></li>
  <li role="presentation"><a href="<?= Url::to(['/my/delete-all']); ?>">my/delete-all</a></li>
  <li role="presentation"><a href="<?= Url::to(['java-script/index']); ?>">java-script/index</a></li>
  <li role="presentation"><a href="<?= Url::to(['/jui/index']); ?>">jui</a></li>
  <li role="presentation"><a href="<?= Url::to(['admin']); ?>">админка</a></li>
  <?php if(Yii::$app->user->isGuest): ?>
  <li class="class1"><?= Html::a('Зарегистрироваться', ['/site/signup']) ?></li>
  <li class="class1"><?= Html::a('Войти', ['/site/login']) ?></li>
<?php endif; ?>
  <?php if(!Yii::$app->user->isGuest): ?>
<li class="class1"><a href="<?= yii\helpers\Url::to(['/site/logout']) ?>">Выйти (<?= Yii::$app->user->identity->username ?>)</a></li>
<?php endif; ?>
</ul>
<h2>Метатеги</h2>
<pre>
$this->title = 'Shoow123';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики111']);
$this->registerMetaTag(['name' =>  'description', 'content' => 'ключевики222']);
</pre>
Версия PHP <?= phpversion(); ?>
<hr>
<a href="<?= Url::to(['my/slider']); ?>">слайдер</a>
<hr>
<a href="<?= Url::to(['my/carousel']); ?>">карусель</a>
<hr>

<div class="style2">
В .htaccess
<br>
RewriteRule ^fonts/(.*)$ web/fonts/$1 [L]
<br>
background: url(/fonts/aeroplan.jpg);
</div>
<span class="jquery1">здесь применен jquery</span>
<br>
<span class="style1">здесь применен style.css</span>
<br>
<a href="https://getbootstrap.com/docs/3.3/components/">getbootstrap.com/docs/3.3/components</a>
<br>
<a href="https://fontawesome.com/v4.7.0/">font-awesome 4.7 <i class="fa fa-address-book" aria-hidden="true"></i></a>
<br>
<a href="https://origin.fontawesome.com/">font-awesome 5 <i class="fas fa-address-card"></i></a>
<p>
    В my/table применен success (Данные приняты), orderBy(['id' => SORT_DESC]), кнопка "Удалить"
</p>
<p>
    В my/image применена загрузка и удаление картинок и считывание их из папки
</p>
<p>
    В my/post-one если в findOne() вставить значение, это будет значение $id
</p>
<p>
    в my/update-all во всех строках, где status = 3, теперь status = 1
</p>
<p>
    в my/delete-all удалены все строки, где status = 4
</p>
<p>
    Здесь используется виджет (часть 1, урок 18)
    <br>
    <?php echo MyWidget::widget(/*['name' => 'Вася']*/); ?>
</p>
<p>
    <a href="<?= Url::to(['category/index']); ?>">MenuWidget</a>
</p>
<p>
    Установили расширение <a href="https://www.yiiframework.com/extension/yiisoft/yii2-jui" target="_blank">JUI Extension for Yii 2</a>
    <br>
    
    <a href="https://github.com/yiisoft/yii2-jui/blob/master/docs/guide/usage-widgets.md" target="_blank">Yii widgets</a>
<p class="myindex">
    В my/index подключен файл myindex.css внизу страницы
</p>
<hr>
<p>
    Здесь используется виджет Proba
    <br>
    <?php echo ProbaWidget::widget(); ?>
</p>
<hr>
<p>
    <a href="<?= Url::to(['category/cache']); ?>">category/cache</a>
</p>
<hr>
<p>
    Здесь используется hasMany()
    <a href="<?= Url::to(['category/hasmany']); ?>">category/hasmany</a>
</p>
<hr>
<p>
    Здесь используется hasOne()
    <a href="<?= Url::to(['category/hasone']); ?>">category/hasone</a>
</p>
<hr>
<p>
    Здесь используется hasOne() и жадная загрузка
    <a href="<?= Url::to(['category/with']); ?>">category/with</a>
</p>
<hr>
<p class="myindex">
    В my/view применяется ОБРАБОТКА ОШИБОК (переходить из my/table)
</p>
<hr>
<p>
<h4>Поиск из таблицы Post по title</h4>
Реализуется в my/search (часть2 урок13)
<br><br>
<form method="get" action="<?= Url::to(['my/search']) ?>">
    <input type="text" placeholder="Search" name="q">
    <input type="submit" value="Поиск">
</form>
</p>
<hr>
<pre>
'&lt;?= \yii\helpers\Url::to(['my/search']) ?&gt; = <?= \yii\helpers\Url::to(['my/search']) ?>
</pre>
<p>
    <a href="<?= Url::to(['form/index']) ?>">Форма</a>, написанная в html и использующая метод GET
    <br>
    (Данные, переданные методом GET, не проверяются правилами rules, заданными в модели)
    <br>
    Для безопасности полученные из формы данные оборачиваем в \yii\helpers\Html::encode($q)
</p>
<hr>
<a href="<?= Url::to(['cart/index']) ?>">корзина</a>
<hr>
В assets/AppAsset добавили jQuery UI <a href="http://qaru.site/questions/11881407/make-element-dragable-in-yii2" target="_blank">ссылка</a>
<br>
'yii\jui\JuiAsset',
<br>
В файле просмотра используем $this->registerJs() и $this->registerCss() чтобы добавить пользовательские коды CSS и JS, чтобы избежать конфликтов.
<hr>
