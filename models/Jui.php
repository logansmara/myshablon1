<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jui".
 *
 * @property int $id
 * @property string $title
 * @property string $data
 */
class Jui extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jui';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'data'], 'required'],
            [['data'], 'safe'],
            [['title'], 'string', 'max' => 255],
            ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'data' => 'Data',
        ];
    }
}
