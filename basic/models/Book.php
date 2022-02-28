<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $name
 * @property int $age
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'age'], 'required'],
            [['name', 'age'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'age' => 'Age',
        ];
    }
}
