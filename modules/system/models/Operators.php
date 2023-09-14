<?php

namespace app\modules\system\models;

use Yii;

/**
 * This is the model class for table "operators".
 *
 * @property int $id
 * @property string|null $thai_name
 * @property string|null $eng_name
 * @property string|null $nick_name
 * @property string|null $team_name
 * @property int|null $parent
 * @property int|null $department
 * @property string|null $email
 * @property string|null $tel1
 * @property string|null $tel2
 * @property string|null $line
 * @property string|null $avatar
 * @property int|null $status
 */
class Operators extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operators';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent', 'department', 'status'], 'integer'],
            [['thai_name', 'eng_name', 'team_name', 'line', 'avatar'], 'string', 'max' => 200],
            [['nick_name', 'email', 'tel1', 'tel2'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'thai_name' => Yii::t('app', 'Thai Name'),
            'eng_name' => Yii::t('app', 'Eng Name'),
            'nick_name' => Yii::t('app', 'Nick Name'),
            'team_name' => Yii::t('app', 'Team Name'),
            'parent' => Yii::t('app', 'Parent'),
            'department' => Yii::t('app', 'Department'),
            'email' => Yii::t('app', 'Email'),
            'tel1' => Yii::t('app', 'Tel1'),
            'tel2' => Yii::t('app', 'Tel2'),
            'line' => Yii::t('app', 'Line'),
            'avatar' => Yii::t('app', 'Avatar'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
