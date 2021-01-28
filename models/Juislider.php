<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "juislider".
 *
 * @property int $id
 * @property string $name
 * @property int $slider
 */
class Juislider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'juislider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slider'], 'required'],
            [['slider'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slider' => 'Slider',
        ];
    }
}
