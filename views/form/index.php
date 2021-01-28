<form method="get" action="<?= \yii\helpers\Url::to(['form/form']) ?>">
    <input type="text" placeholder="Search" name="q">
    <input type="submit" value="Поиск">
</form>

Данные, переданные методом GET, не проверяются правилами rules, заданными в модели
<hr>