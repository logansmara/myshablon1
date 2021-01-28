<?php

namespace app\models;

use yii\base\Model;

class CalculatorForm extends Model
{
    public $length;
    public $height;
    public $windowsill;
    public $installation;

    public function rules()
    {
        return [
            [['length', 'height', 'windowsill', 'installation'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'length' => 'Ширина',
            'height' => 'Высота',
            'windowsill' => 'Подоконник',
            'installation' => 'Монтаж',
        ];
    }
}