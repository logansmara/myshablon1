<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
use yii\imagine\Image;

class ProbaImage extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $delete;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
            [['delete'] , 'string'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('images/proba/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            /*
            https://prowebmastering.ru/yii2-ispolyzovanie-klassa-yii-imagine-image-primery.html
            */
            /*
            php composer.phar require --prefer-dist yiisoft/yii2-imagine "*"
            */
            $image = Yii::getAlias('@webroot/images/proba/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            // Обрежет по ширине на 600px, по высоте пропорционально
/*
Image::resize($image, 600, 600)->save(Yii::getAlias('@webroot/images/proba/' . $this->imageFile->baseName . '.' . $this->imageFile->extension), ['quality' => 80]);
*/
Image::thumbnail($image, 800, 500)
 ->save(Yii::getAlias('@webroot/images/proba/' . $this->imageFile->baseName . '.' . $this->imageFile->extension), ['quality' => 80]);
            return true;
        } else {
            return false;
        }
    }
}
