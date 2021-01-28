<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "move1".
 *
 * @property int $id
 * @property string $color
 * @property int $pagex
 * @property int $pagey
 */
class Move1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'move1';
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
