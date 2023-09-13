<?php

namespace app\modules\itms\models;

use Yii;

/**
 * This is the model class for table "office".
 *
 * @property int $id
 * @property string|null $asset_no รหัสทรัพย์สิน
 * @property string|null $name ชื่อ
 * @property string|null $key KEY
 * @property string|null $install_date วันที่ติดตั้ง
 * @property string|null $email_actived Actived Email
 * @property string|null $email_password Email Password
 * @property string|null $vendor ผู้ขาย
 * @property string|null $docs รูปภาพ
 * @property float|null $cost ราคา
 * @property string|null $remask หมายเหตุ
 *
 * @property SystemUser[] $systemUsers
 */
class Office extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'office';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['install_date'], 'safe'],
            [['vendor', 'docs', 'remask'], 'string'],
            [['cost'], 'number'],
            [['asset_no', 'key', 'email_actived', 'email_password'], 'string', 'max' => 45],
            [['name'], 'string', 'max' => 100],
            [['asset_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'asset_no' => Yii::t('app', 'รหัสทรัพย์สิน'),
            'name' => Yii::t('app', 'ชื่อ'),
            'key' => Yii::t('app', 'KEY'),
            'install_date' => Yii::t('app', 'วันที่ติดตั้ง'),
            'email_actived' => Yii::t('app', 'Actived Email'),
            'email_password' => Yii::t('app', 'Email Password'),
            'vendor' => Yii::t('app', 'ผู้ขาย'),
            'docs' => Yii::t('app', 'รูปภาพ'),
            'cost' => Yii::t('app', 'ราคา'),
            'remask' => Yii::t('app', 'หมายเหตุ'),
        ];
    }

    /**
     * Gets query for [[SystemUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSystemUsers()
    {
        return $this->hasMany(SystemUser::class, ['license_office' => 'id']);
    }
}
