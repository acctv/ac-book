<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "library".
 *
 * @property string $书名
 * @property string|null $作者
 * @property float|null $价格
 */
class Library extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'library';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['书名'], 'required'],
            [['价格'], 'number'],
            [['书名'], 'string', 'max' => 10],
            [['作者'], 'string', 'max' => 52],
            [['书名'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '书名' => '书名',
            '作者' => '作者',
            '价格' => '价格',
        ];
    }
}
