<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $Code
 * @property int $Name
 * @property int $Population
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Code', 'Name', 'Population'], 'required'],
            [['Code', 'Name', 'Population'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Code' => 'Code',
            'Name' => 'Name',
            'Population' => 'Population',
        ];
    }
}
