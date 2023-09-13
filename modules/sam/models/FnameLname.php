<?php

namespace app\modules\sam\models;

use Yii;

/**
 * This is the model class for table "fname_lname".
 *
 * @property int $fname_id
 * @property int $lname_id
 *
 * @property Fname $fname
 * @property Lname $lname
 */
class FnameLname extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fname_lname';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fname_id', 'lname_id'], 'required'],
            [['fname_id', 'lname_id'], 'integer'],
            [['fname_id', 'lname_id'], 'unique', 'targetAttribute' => ['fname_id', 'lname_id']],
            [['fname_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fname::class, 'targetAttribute' => ['fname_id' => 'id']],
            [['lname_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lname::class, 'targetAttribute' => ['lname_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fname_id' => Yii::t('app', 'Fname ID'),
            'lname_id' => Yii::t('app', 'Lname ID'),
        ];
    }

    /**
     * Gets query for [[Fname]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFname()
    {
        return $this->hasOne(Fname::class, ['id' => 'fname_id']);
    }

    /**
     * Gets query for [[Lname]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLname()
    {
        return $this->hasOne(Lname::class, ['id' => 'lname_id']);
    }
}
