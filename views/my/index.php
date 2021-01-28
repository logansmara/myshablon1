<?php
use app\components\MyWidget;
use app\components\ProbaWidget;
use app\components\SliderWidget;
use app\components\CarouselWidget;
use yii\helpers\Url;
use yii\helpers\Html;

    $this->title = 'Shoow123';
    $this->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики111']);
    $this->registerMetaTag(['name' =>  'description', 'content' => 'ключевики222']);
    
$this->registerCssFile('css/myindex.css', [ 'position' => \yii\web\View::POS_END ]);
?>
<pre>
Начинается my/index.php
</pre>
<p>
На этой странице (my/index.php) подключена таблица стилей внизу страницы
<div style="border: 1px solid #ccc; border-radius: 4px; padding: 5px; background-color: #f0f0f0;">
$this->registerCssFile('css/myindex.css', [ 'position' => \yii\web\View::POS_END ]);
</div>
</p>
<h2>Слайдер подключен через виджет SliderWidget</h2>
<div>
<?php echo SliderWidget::widget(); ?>
</div>
<div>
<h2>Слайдер подключен require_once('slider.php')</h2>
<p>
Чтобы можно было подключать через require_once
<pre>
use app\models\Slider;
$slider = Slider::find()->all();
</pre>
должны быть в slider.php
</p>
<?php require_once('slider.php'); ?>
</div>
<!-- unlink() -->
<hr>
<a href="<?= Url::to(['/my/qw']); ?>">my/qw (Удаление файла из папки)</a>
<hr>
<!-- unlink() -->
<h1>/my/index</h1>
<?php
echo '$_COOKIE["name"] - ' . $_COOKIE["name"];
echo "<br>";
echo 'time() - ' . time();
?>
<p>
<a href="<?= Url::to(['/my/table']); ?>">my/table</a> (с тексовым редактором)
</p>
<ul class="nav nav-tabs">
    <li role="presentation"><a href="<?= Url::to(['/my/index']); ?>">my/index</a></li>
    <li role="presentation"><a href="<?= Url::to(['/scroll-pager/index']); ?>">scroll-pager/index</a></li>
    <li role="presentation"><a href="<?= Url::to(['/ckeditor/index']); ?>">ckeditor/index</a></li>
    <li role="presentation"><a href="<?= Url::to(['/str-replace/index']); ?>">str-replace/index</a></li>
  <li role="presentation"><a href="<?= Url::to(['/my/pagination']); ?>">my/pagination</a></li>
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
<p>
<h3>Чтение из таблицы text с заменой /n на <br></h3>
$text1 = str_replace("\n", "&lt;br&gt;", $text);
<br>
$text2 = str_replace("image=", "&lt;img src='/images/authors/shablon/", $text1);
<br>
$text3 = str_replace(".jpg", ".jpg'&gt;", $text2);
<br>
<a href="text/index">text/index</a>
</p>
<p>
<h3>Загрузка изображений</h3>
<a href="<?= Url::to(['/my/image']); ?>">my/image</a>
<br>
<a href="<?= Url::to(['/my/image1']); ?>">my/image1</a>
(echo ($_FILES['Image1']['name']['imageFile']);)
<br>
Здесь используется <a href="https://webformyself.com/top-plaginov-jquery-plagin-fancybox/" target="_blank">fancybox</a>
<br>
При нажатии на картинку она увеличится
<br>
Также здесь подключена таблица css внизу страницы
<div style="border: 1px solid #ccc; border-radius: 4px; padding: 5px; background-color: #f0f0f0; margin:  0;">
$this->registerCssFile('css/jquery.fancybox.css', [ 'position' => \yii\web\View::POS_END ]);
</div>
и вставлен js скрипт в страницу
<pre>
$js = <<< JS
$(function() {
$(".fancybox").fancybox();
})(jQuery);
JS;
$this->registerJs($js);
</pre>
</p>
<p>
<h3>Загрузка изображений в нужном размере</h3>
<a href="<?= Url::to(['/proba-images/index']); ?>">proba-images/index</a>
<br>
Необходимо через composer загрузить
<br>
php composer.phar require --prefer-dist yiisoft/yii2-imagine "*"
<br>
<a href="https://prowebmastering.ru/yii2-ispolyzovanie-klassa-yii-imagine-image-primery.html" target="_blank">Yii2: Использование класса yii\imagine\Image (примеры)</a>
<hr>
</p>
<p>
<h3>Загрузка изображений в нужном размере и с сохранением горизонтальности или вертикальности</h3>
<a href="<?= Url::to(['/vertgoriz-images/index']); ?>">vertgoriz-images/index</a>
<hr>
<h2>webp</h2>
&ltpicture&gt<br>
&ltsource srcset="/images/cherdak1.webp" type="image/webp"&gt<br>
&ltimg data-src="/images/cherdak1.jpg" style="width: 20%"&gt<br>
&lt/picture&gt<br>
<picture>
<source srcset="/images/cherdak1.webp" type="image/webp">
<img data-src="/images/cherdak1.jpg" style="width: 20%">
</picture>
<hr>
</p>
<pre>
namespace app\controllers;
use Yii;
use app\models\Blogs;
  public function actionSelect()
  {
    $posts = Yii::$app->db->createCommand('SELECT *FROM blogs')->queryAll();
    return $this->render('select',compact('posts'));
  }
  public function actionCreate()
  {
    $sqlQuery = "CREATE TABLE IF NOT EXISTS proba_pdo (name VARCHAR(20), owner VARCHAR(20))";
    $sqlCommand = Yii::$app->db->createCommand($sqlQuery);
    $sqlCommand->execute();
    return $this->render('create');
  }
 
В $sqlQuery ="" вставить SQL-запрос из PHPAdmin
</pre>
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
<h2>Карусель подключена через виджет CarouselWidget</h2>
<div>
<?php echo CarouselWidget::widget(); ?>
</div>
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
<a href="<?= Url::to(['cart/index']) ?>">корзина без регистрации (с сохранением в базе данных)</a>
<br>
<a href="<?= Url::to(['cart-cookie/index']) ?>">корзина без регистрации (с сохранением в куки)</a>
<hr>
В assets/AppAsset добавили jQuery UI <a href="http://qaru.site/questions/11881407/make-element-dragable-in-yii2" target="_blank">ссылка</a>
<br>
'yii\jui\JuiAsset',
<br>
В файле просмотра используем $this->registerJs() и $this->registerCss() чтобы добавить пользовательские коды CSS и JS, чтобы избежать конфликтов.
<hr>
<h2>Yii2: Получение данных из формы через PHP</h2>
<pre>
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
echo $form->field($model, 'name1');
echo $form->field($model, 'name2');
    
echo Html::submitButton('Submit', ['class' => 'btn']);

ActiveForm::end();

if(isset($_POST['ProbaForm'])) {
echo $_POST['ProbaForm']['name1'];
}
</pre>
<hr>
<p>
<a href="<?= Url::to(['/primer-behaviors/index']); ?>">primer-behaviors/index</a>
<br>
Простой пример использования behaviors()
</p>
<hr>
<h2>Расширение добавляет возможность размещать стили в любом месте тела.</h2>
<br><br>
<span>vendor/lan143/yii2-advanced-view</span>
<pre>
Update config file config/web.php
return [
    'components' => [
        'view' => [
            'class' => 'lan143\advanced_view\View',
        ],
    ],
]
</pre>
Далее смотри здесь <a href="https://github.com/lan143/yii2-advanced-view" target="_blank">github.com/lan143/yii2-advanced-view</a>
<hr>
В Ospanel/userdata/config добавить(если еще нет) path.txt, и прописать в нем путь до git
<br>
<pre>
  \Program Files\Git\bin
</pre>
<p>
Перейти на панели задач Ospanel в настройки/сервер, выбрать
Свой Path + userdata/config/path.txt Сохранить
</p>
<a href="https://www.youtube.com/watch?v=SP-WdubaKVg&feature=emb_logo" target="_blank">Настройка git в консоли openserver (youtube)</a>
<h2>Хлебные крошки</h2>
<pre>
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'KsyushaDelaets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
</pre>
<h2>Получение всех файлов или каталогов, входящих в @frontend/views</h2>
<pre>
$dir_frontend_views = Yii::getAlias('@frontend/views');
$frontend_views = scandir($dir_frontend_views);
$one = array_search('.', $frontend_views);
unset($frontend_views[$one]);
$two = array_search('..', $frontend_views);
unset($frontend_views[$two]);
print_r($frontend_views);
</pre>
<h2>file_exists - Проверяет наличие указанного файла или каталога</h2>
<pre>
$big = $big . '.php';
$filename = Yii::getAlias('@frontend/models/') . $big;
if (file_exists($filename)) {
  echo 'Файл' . $big . ' в папке @frontend/models/ существует';
} 
</pre>
