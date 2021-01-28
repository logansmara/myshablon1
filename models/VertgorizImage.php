<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
use yii\imagine\Image;
/*
* Вертикальное или горизонтальное изображение
*/
class VertgorizImage extends Model
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
            $this->imageFile->saveAs('images/vertgoriz/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
/*
https://prowebmastering.ru/yii2-ispolyzovanie-klassa-yii-imagine-image-primery.html

php composer.phar require --prefer-dist yiisoft/yii2-imagine "*"
*/

/*
Определяем - горизонтальная или вертикальная картинка

https://prowebmastering.ru/yii2-ispolyzovanie-klassa-yii-imagine-image-primery.html
*/
$newPath = Yii::getAlias('@webroot/images/vertgoriz/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
$size = getimagesize($newPath); // Определяем размер картинки
$imageWidth = $size[0];  // Ширина картинки
$imageHeight = $size[1]; // Высота картинки
$r = $imageWidth/$imageHeight;
/**/

$image = Yii::getAlias('@webroot/images/vertgoriz/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);

if ($r > 1) {
Image::thumbnail($image, 800, 500)
 ->save(Yii::getAlias('@webroot/images/vertgoriz/' . $this->imageFile->baseName . '.' . $this->imageFile->extension), ['quality' => 80]);
} else {
Image::thumbnail($image, 300, 500)
 ->save(Yii::getAlias('@webroot/images/vertgoriz/' . $this->imageFile->baseName . '.' . $this->imageFile->extension), ['quality' => 80]);
}
            return true;
        } else {
            return false;
        }
    }
}
