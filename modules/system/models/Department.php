<?php

namespace app\modules\system\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $color
 *
 * @property Jobs[] $jobs
 * @property SystemUser[] $systemUsers
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
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
     * Gets query for [[Jobs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Jobs::class, ['job_department' => 'id']);
    }

    /**
     * Gets query for [[SystemUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSystemUsers()
    {
        return $this->hasMany(SystemUser::class, ['department' => 'id']);
    }
}
