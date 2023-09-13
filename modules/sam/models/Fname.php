<?php

namespace app\modules\sam\models;

use Yii;

/**
 * This is the model class for table "fname".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $sam
 *
 * @property FnameLname[] $fnameLnames
 * @property Lname[] $lnames
 * @property Sam $sam0
 */
class Fname extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fname';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sam'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['sam'], 'exist', 'skipOnError' => true, 'targetClass' => Sam::class, 'targetAttribute' => ['sam' => 'id']],
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
            'sam' => Yii::t('app', 'Sam'),
        ];
    }

    /**
     * Gets query for [[FnameLnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFnameLnames()
    {
        return $this->hasMany(FnameLname::class, ['fname_id' => 'id']);
    }

    /**
     * Gets query for [[Lnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLnames()
    {
        return $this->hasMany(Lname::class, ['id' => 'lname_id'])->viaTable('fname_lname', ['fname_id' => 'id']);
    }

    /**
     * Gets query for [[Sam0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSam0()
    {
        return $this->hasOne(Sam::class, ['id' => 'sam']);
    }
}
