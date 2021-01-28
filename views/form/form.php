<?= $q; ?>
<hr>
Для безопасности полученные из формы данные оборачиваем в \yii\helpers\Html::encode($q)
<br>
Если отправлены пустые данные, возвращается index.php
<pre>
public function actionForm() {
    $q = trim(Yii::$app->request->get('q'));
    $q = \yii\helpers\Html::encode($q);
    if(empty($q)) return $this->render('index');
    return $this->render('form', compact('q'));
}
</pre>
