<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okna_windowsill".
 *
 * @property int $id
 * @property int $value
 * @property string $name
 */
class OknaWindowsill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okna_windowsill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value', 'name'], 'required'],
            [['value'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'name' => 'Name',
        ];
    }
}
