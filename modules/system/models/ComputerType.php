<?php

namespace app\modules\system\models;

use Yii;

/**
 * This is the model class for table "computer_type".
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $color
 *
 * @property Computers[] $computers
 */
class ComputerType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'computer_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name', 'color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'code' => Yii::t('app', 'Code'),
            'name' => Yii::t('app', 'Name'),
            'color' => Yii::t('app', 'Color'),
        ];
    }

    /**
     * Gets query for [[Computers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComputers()
    {
        return $this->hasMany(Computers::class, ['computer_type' => 'id']);
    }
}
