<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $user_email
 * @property string $name
 * @property string $description
 * @property string $ikey
 * @property string $amount
 * @property int $quantity
 * @property string $avaibility
 * @property string $prod_condition
 * @property string $brand
 * @property int $stock
 * @property string $image
 * @property int $status
 * @property string $created_at
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'ikey', 'amount', 'avaibility', 'prod_condition', 'brand', 'stock', 'image', 'status'], 'required'],
            [['description'], 'string'],
            [['quantity', 'stock', 'status'], 'integer'],
            [['created_at', 'user_email'], 'safe'],
            [['user_email', 'prod_condition', 'brand'], 'string', 'max' => 100],
            [['name', 'image'], 'string', 'max' => 255],
            [['ikey', 'amount', 'avaibility'], 'string', 'max' => 50],
            [['image'], 'file', 'extensions' => 'jpg,png,gif','skipOnEmpty' =>false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_email' => 'User Email',
            'name' => 'Name',
            'description' => 'Description',
            'ikey' => 'Ikey',
            'amount' => 'Amount',
            'quantity' => 'Quantity',
            'avaibility' => 'Avaibility',
            'prod_condition' => 'Prod Condition',
            'brand' => 'Brand',
            'stock' => 'Stock',
            'image' => 'Image',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
