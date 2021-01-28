<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "move".
 *
 * @property int $id
 * @property string $class
 * @property int $pagex
 * @property int $pagey
 */
class Move extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'move';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['color', 'pagex', 'pagey'], 'required'],
            [['pagex', 'pagey'], 'integer'],
            [['color'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'color' => 'Color',
            'pagex' => 'Pagex',
            'pagey' => 'Pagey',
        ];
    }
}
