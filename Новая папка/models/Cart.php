<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property int $id
 * @property string $cookie_name
 * @property string $product_id
 * @property int $quantity
 * @property string $date
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cookie_name', 'product_id', 'quantity', 'date'], 'required'],
            [['quantity'], 'integer'],
            [['cookie_name'], 'string', 'max' => 200],
            [['product_id'], 'string', 'max' => 10],
            [['date'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cookie_name' => 'Cookie Name',
            'product_id' => 'Product ID',
            'quantity' => 'Quantity',
            'date' => 'Date',
        ];
    }
}
