<?php

namespace app\modules\itms\models;

use Yii;

/**
 * This is the model class for table "ups".
 *
 * @property int $id
 * @property string|null $asset_number รหัสทรัพย์สิน
 * @property string|null $model รุ่น
 * @property string|null $serial ซีเรียว
 * @property string|null $details รายละเอียด
 * @property string|null $install_date วันที่ติดตั้ง
 * @property string|null $docs รูปภาพ
 * @property string|null $vendor ผู้ขาย
 * @property float|null $cost ราคา
 * @property string|null $remask หมายเหตุ
 *
 * @property SystemUser[] $systemUsers
 */
class Ups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['details', 'docs', 'vendor', 'remask'], 'string'],
            [['install_date'], 'safe'],
            [['cost'], 'number'],
            [['asset_number', 'serial'], 'string', 'max' => 45],
            [['model'], 'string', 'max' => 200],
            [['serial'], 'unique'],
            [['asset_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'asset_number' => Yii::t('app', 'รหัสทรัพย์สิน'),
            'model' => Yii::t('app', 'รุ่น'),
            'serial' => Yii::t('app', 'ซีเรียว'),
            'details' => Yii::t('app', 'รายละเอียด'),
            'install_date' => Yii::t('app', 'วันที่ติดตั้ง'),
            'docs' => Yii::t('app', 'รูปภาพ'),
            'vendor' => Yii::t('app', 'ผู้ขาย'),
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
        return $this->hasMany(SystemUser::class, ['ups' => 'id']);
    }
}
