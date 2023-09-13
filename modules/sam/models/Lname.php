<?php

namespace app\modules\sam\models;

use Yii;

/**
 * This is the model class for table "lname".
 *
 * @property int $id
 * @property string|null $surname
 *
 * @property FnameLname[] $fnameLnames
 * @property Fname[] $fnames
 */
class Lname extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lname';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'surname' => Yii::t('app', 'Surname'),
        ];
    }

    /**
     * Gets query for [[FnameLnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFnameLnames()
    {
        return $this->hasMany(FnameLname::class, ['lname_id' => 'id']);
    }

    /**
     * Gets query for [[Fnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFnames()
    {
        return $this->hasMany(Fname::class, ['id' => 'fname_id'])->viaTable('fname_lname', ['lname_id' => 'id']);
    }
}
