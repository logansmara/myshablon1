<?php

namespace app\controllers;
use app\models\Post;
use app\models\Image;
use app\models\Image1;
use yii\web\UploadedFile;
use app\models\Updateall;
use app\models\Jui;
use app\models\Carousel;
use yii\data\Pagination;
use Yii;

class MyController extends \yii\web\Controller
{
    /**/
    public function actionQw()
    {
        return $this->render('qw');
    }
    /**/
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionSlider()
    {
        return $this->render('slider');
    }
    
    public function actionCarousel()
    {
        $carousel = Carousel::find()->all();
        return $this->render('carousel', compact('carousel'));
    }

    public function actionPostOne()
    {
        $post = Post::findOne(1);
        return $this->render('post-one', compact('post'));
    }
    
    public function actionDelete($id)
    {
        Post::findOne($id)->delete();
        return $this->redirect(['table']);
    }
    
    public function actionPagination()
    {
        $query = Post::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('pagination', compact('posts', 'pages'));
    }

    public function actionTable()
    {
        $posts = Post::find()->orderBy(['id' => SORT_DESC])->all();
        $model = new Post();
        if($model->load(Yii::$app->request->post())) {
            if($model->save()) {
              // в view.php код не нужен
              Yii::$app->session->setFlash('success', 'Данные приняты');
              return $this->refresh();
            }else {
              Yii::$app->session->setFlash('error', 'Ошибка'); 
            }
        }
        return $this->render('table', compact('posts', 'model'));
    }

    public function actionView($id)
    {
        //$id = \Yii::$app->request->get();
        $post = Post::findOne($id);
        // Обработка ошибок
        if(empty($post))
        throw new \yii\web\HttpException(404, 'Такой категории нет.');
        return $this->render('view', compact('post'));
    }
    
    public function actionImage() {
        $model = new Image();
        if (Yii::$app->request->isPost) {
            if(!isset($_REQUEST['delete'])) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                return $this->refresh();
            }
            }
            
            if(isset($_REQUEST['delete'])) {
                $qw = $_REQUEST['delete'];
                unlink("images/{$qw}");
            }
        }
        return $this->render('image', compact('model'));
    }

/**/
    public function actionImage1() {
        $model = new Image1();
        return $this->render('image1', compact('model'));
    }
/**/

    public function actionUpdateAll()
    {
        Updateall::updateAll(['status' => 1], 'status = 3');
        return $this->render('update-all');
    }
    
    public function actionDeleteAll()
    {
        Updateall::deleteAll('status = 4');
        return $this->render('delete-all');
    }
    
    public function actionJui()
    {
        $posts = Jui::find()->orderBy(['id' => SORT_DESC])->all();
        $model = new Jui();
        if($model->load(Yii::$app->request->post())&& $model->validate()) {
          $model->save();
          return $this->refresh();
        }
        return $this->render('jui', compact('model', 'posts'));
    }
    
    public function actionSearch() {
        $q = trim(Yii::$app->request->get('q'));
        if(!$q)
            return $this->render('search');
        $query = Post::find()->where(['like', 'title', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('posts', 'pages', 'q'));
    }
 
}