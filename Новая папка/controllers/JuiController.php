<?php

namespace app\controllers;

use app\models\Juislider;
use app\models\Move;
use app\models\Move1;
use Yii;

class JuiController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAccordion()
    {
        return $this->render('accordion');
    }
    
    public function actionSlider()
    {
        return $this->render('slider');
    }

    public function actionSliderInput()
    {
        $model = new Juislider;
        if($model->load(\Yii::$app->request->post())) {
           $model->save();
           return $this->refresh();
        }
        $posts = Juislider::find()->all();
        return $this->render('slider-input', compact('model', 'posts'));
    }

    public function actionAutoComplete()
    {
        $model = new Juislider();
        if($model->load(\Yii::$app->request->post())) {
           $model->save();
           return $this->refresh();
        }
        $posts = Juislider::find()->all();
        return $this->render('auto-complete', compact('model', 'posts'));
    }

    public function actionDraggable()
    {
    	$moves = Move::find()->all();
        return $this->render('draggable', compact('moves'));
    }

    public function actionDraggable1()
    {
    	$moves1 = Move1::find()->asArray()->all();
        return $this->render('draggable1', compact('moves1'));
    }

    public function actionMouseup1($pagex = 0, $pagey = 0)
    {
    	$x = $pagex;
    	$y = $pagey;
        return $this->render('mouseup1', compact('x', 'y'));
    }

    public function actionMouseup2($pagex = 0, $pagey = 0)
    {
    	$x = $pagex;
    	$y = $pagey;
        return $this->render('mouseup2', compact('x', 'y'));
    }

    public function actionMove($top, $left, $id)
    {
    	$move = Move::findOne($id);
        $move->pagex = $left;
        $move->pagey = $top;
        $move->save();

        // перенаправляет снова на страницу jui/draggable
        return Yii::$app->response->redirect(['jui/draggable']);
    }

    public function actionMove1($top, $left, $id)
    {
        $move = Move1::findOne($id);
        $move->pagex = $left;
        $move->pagey = $top;
        $move->save();

        // перенаправляет снова на страницу jui/draggable1
        return Yii::$app->response->redirect(['jui/draggable1']);
    }

    public function actionUpdate()
    {
        /*
        https://www.yiiframework.com/doc/api/2.0/yii-db-activerecord#update()-detail
        */
        $update1 = Move::findOne(1);
        $update1->pagex = 403;
        $update1->pagey = 455;
        $update1->update();

        $update2 = Move::findOne(2);
        $update2->pagex = 304 ;
        $update2->pagey = 455;
        $update2->update();

        $update3 = Move::findOne(3);
        $update3->pagex = 205 ;
        $update3->pagey = 455 ;
        $update3->update();

        $update4 = Move::findOne(4);
        $update4->pagex = 106 ;
        $update4->pagey = 455 ;
        $update4->update();

        $update5 = Move::findOne(5);
        $update5->pagex = 256 ;
        $update5->pagey = 403 ;
        $update5->update();

        $update6 = Move::findOne(6);
        $update6->pagex = 157 ;
        $update6->pagey = 403 ;
        $update6->update();

        $update7 = Move::findOne(7);
        $update7->pagex = 454 ;
        $update7->pagey = 403 ;
        $update7->update();

        $update8 = Move::findOne(8);
        $update8->pagex = 354 ;
        $update8->pagey = 403 ;
        $update8->update();

        $update9 = Move::findOne(9);
        $update9->pagex = 106 ;
        $update9->pagey = 354 ;
        $update9->update();

        $update10 = Move::findOne(10);
        $update10->pagex = 205 ;
        $update10->pagey = 354 ;
        $update10->update();

        $update11 = Move::findOne(11);
        $update11->pagex = 401 ;
        $update11->pagey = 354 ;
        $update11->update();

        $update12 = Move::findOne(12);
        $update12->pagex = 304 ;
        $update12->pagey = 354 ;
        $update12->update();

        $update13 = Move::findOne(13);
        $update13->pagex = 353 ;
        $update13->pagey = 204 ;
        $update13->update();

        $update14 = Move::findOne(14);
        $update14->pagex = 457 ;
        $update14->pagey = 204 ;
        $update14->update();

        $update15 = Move::findOne(15);
        $update15->pagex = 155 ;
        $update15->pagey = 204 ;
        $update15->update();

        $update16 = Move::findOne(16);
        $update16->pagex = 258 ;
        $update16->pagey = 204 ;
        $update16->update();

        $update17 = Move::findOne(17);
        $update17->pagex = 405 ;
        $update17->pagey = 155 ;
        $update17->update();

        $update18 = Move::findOne(18);
        $update18->pagex = 303 ;
        $update18->pagey = 155 ;
        $update18->update();

        $update19 = Move::findOne(19);
        $update19->pagex = 205 ;
        $update19->pagey = 155 ;
        $update19->update();

        $update20 = Move::findOne(20);
        $update20->pagex = 105 ;
        $update20->pagey = 155 ;
        $update20->update();

        $update21 = Move::findOne(21);
        $update21->pagex = 455 ;
        $update21->pagey = 105 ;
        $update21->update();

        $update22 = Move::findOne(22);
        $update22->pagex = 355 ;
        $update22->pagey = 105 ;
        $update22->update();

        $update23 = Move::findOne(23);
        $update23->pagex = 255 ;
        $update23->pagey = 105 ;
        $update23->update();

        $update24 = Move::findOne(24);
        $update24->pagex = 155 ;
        $update24->pagey = 105 ;
        $update24->update();

        // перенаправляет снова на страницу jui/draggable
        return Yii::$app->response->redirect(['jui/draggable']);
    }

    public function actionUpdate1()
    {
        /*
        https://www.yiiframework.com/doc/api/2.0/yii-db-activerecord#update()-detail
        */
        $update1 = Move1::findOne(1);
        $update1->pagex = 302;
        $update1->pagey = 354;
        $update1->update();

        $update2 = Move1::findOne(2);
        $update2->pagex = 205;
        $update2->pagey = 354;
        $update2->update();

        $update3 = Move1::findOne(3);
        $update3->pagex = 105;
        $update3->pagey = 354;
        $update3->update();

        $update4 = Move1::findOne(4);
        $update4->pagex = 5 ;
        $update4->pagey = 354;
        $update4->update();

        $update5 = Move1::findOne(5);
        $update5->pagex = 355;
        $update5->pagey = 304;
        $update5->update();

        $update6 = Move1::findOne(6);
        $update6->pagex = 255;
        $update6->pagey = 304;
        $update6->update();

        $update7 = Move1::findOne(7);
        $update7->pagex = 155;
        $update7->pagey = 304;
        $update7->update();

        $update8 = Move1::findOne(8);
        $update8->pagex = 55;
        $update8->pagey = 304;
        $update8->update();

        $update9 = Move1::findOne(9);
        $update9->pagex = 302;
        $update9->pagey = 254;
        $update9->update();

        $update10 = Move1::findOne(10);
        $update10->pagex = 205;
        $update10->pagey = 254;
        $update10->update();

        $update11 = Move1::findOne(11);
        $update11->pagex = 105;
        $update11->pagey = 254;
        $update11->update();

        $update12 = Move1::findOne(12);
        $update12->pagex = 5;
        $update12->pagey = 254;
        $update12->update();

        $update13 = Move1::findOne(13);
        $update13->pagex = 353 ;
        $update13->pagey = 104;
        $update13->update();

        $update14 = Move1::findOne(14);
        $update14->pagex = 253 ;
        $update14->pagey = 104;
        $update14->update();

        $update15 = Move1::findOne(15);
        $update15->pagex = 155 ;
        $update15->pagey = 104;
        $update15->update();

        $update16 = Move1::findOne(16);
        $update16->pagex = 55 ;
        $update16->pagey = 104;
        $update16->update();

        $update17 = Move1::findOne(17);
        $update17->pagex = 302;
        $update17->pagey = 54;
        $update17->update();

        $update18 = Move1::findOne(18);
        $update18->pagex = 204;
        $update18->pagey = 54;
        $update18->update();

        $update19 = Move1::findOne(19);
        $update19->pagex = 104;
        $update19->pagey = 54;
        $update19->update();

        $update20 = Move1::findOne(20);
        $update20->pagex = 4;
        $update20->pagey = 54;
        $update20->update();

        $update21 = Move1::findOne(21);
        $update21->pagex = 353;
        $update21->pagey = 4;
        $update21->update();

        $update22 = Move1::findOne(22);
        $update22->pagex = 253;
        $update22->pagey = 4;
        $update22->update();

        $update23 = Move1::findOne(23);
        $update23->pagex = 154;
        $update23->pagey = 4;
        $update23->update();

        $update24 = Move1::findOne(24);
        $update24->pagex = 55;
        $update24->pagey = 4;
        $update24->update();
        // min
        $update25 = Move1::findOne(25);
        $update25->pagex = 3;
        $update25->pagey = 267;
        $update25->update();

        $update26 = Move1::findOne(26);
        $update26->pagex = 79;
        $update26->pagey = 267;
        $update26->update();

        $update27 = Move1::findOne(27);
        $update27->pagex = 153;
        $update27->pagey = 267;
        $update27->update();

        $update28 = Move1::findOne(28);
        $update28->pagex = 227;
        $update28->pagey = 267;
        $update28->update();

        $update29 = Move1::findOne(29);
        $update29->pagex = 41;
        $update29->pagey = 229;
        $update29->update();

        $update30 = Move1::findOne(30);
        $update30->pagex = 115;
        $update30->pagey = 229;
        $update30->update();

        $update31 = Move1::findOne(31);
        $update31->pagex = 190;
        $update31->pagey = 229;
        $update31->update();

        $update32 = Move1::findOne(32);
        $update32->pagex = 267;
        $update32->pagey = 229;
        $update32->update();

        $update33 = Move1::findOne(33);
        $update33->pagex = 3;
        $update33->pagey = 191;
        $update33->update();

        $update34 = Move1::findOne(34);
        $update34->pagex = 79;
        $update34->pagey = 191;
        $update34->update();

        $update35 = Move1::findOne(35);
        $update35->pagex = 153;
        $update35->pagey = 191;
        $update35->update();

        $update36 = Move1::findOne(36);
        $update36->pagex = 227;
        $update36->pagey = 191;
        $update36->update();

        $update37 = Move1::findOne(37);
        $update37->pagex = 41;
        $update37->pagey = 79;
        $update37->update();

        $update38 = Move1::findOne(38);
        $update38->pagex = 117;
        $update38->pagey = 79;
        $update38->update();

        $update39 = Move1::findOne(39);
        $update39->pagex = 191;
        $update39->pagey = 79;
        $update39->update();

        $update40 = Move1::findOne(40);
        $update40->pagex = 265;
        $update40->pagey = 79;
        $update40->update();

        $update41 = Move1::findOne(41);
        $update41->pagex = 3;
        $update41->pagey = 41;
        $update41->update();

        $update42 = Move1::findOne(42);
        $update42->pagex = 79;
        $update42->pagey = 41;
        $update42->update();

        $update43 = Move1::findOne(43);
        $update43->pagex = 153;
        $update43->pagey = 41;
        $update43->update();

        $update44 = Move1::findOne(44);
        $update44->pagex = 227;
        $update44->pagey = 41;
        $update44->update();

        $update45 = Move1::findOne(45);
        $update45->pagex = 41;
        $update45->pagey = 3;
        $update45->update();

        $update46 = Move1::findOne(46);
        $update46->pagex = 115;
        $update46->pagey = 3;
        $update46->update();

        $update47 = Move1::findOne(47);
        $update47->pagex = 191;
        $update47->pagey = 3;
        $update47->update();

        $update48 = Move1::findOne(48);
        $update48->pagex = 265;
        $update48->pagey = 3;
        $update48->update();

        // перенаправляет снова на страницу jui/draggable1
        return Yii::$app->response->redirect(['jui/draggable1']);
    }

}
