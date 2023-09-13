<?php

namespace app\modules\sam\models;

use Yii;

/**
 * This is the model class for table "sam".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Fname[] $fnames
 */
class Sam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * Gets query for [[Fnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFnames()
    {
        return $this->hasMany(Fname::class, ['sam' => 'id']);
    }
}
