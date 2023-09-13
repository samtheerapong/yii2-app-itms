<?php

namespace app\modules\itms\models;

use Yii;

/**
 * This is the model class for table "printers".
 *
 * @property int $id
 * @property string|null $asset_number รหัสทรัพย์สิน
 * @property string|null $model รุ่น
 * @property string|null $serial ซีเรียว
 * @property string|null $printer_type ประเภท
 * @property string|null $details รายละเอียด
 * @property string|null $install_date วันที่ติดตั้ง
 * @property string|null $docs รูปภาพ
 * @property string|null $vendor ผู้ขาย
 * @property float|null $cost ราคา
 * @property string|null $port_connected การเชื่อมต่อ
 * @property string|null $ip_address IP
 * @property string|null $mac_address Mac
 * @property string|null $remask หมายเหตุ
 *
 * @property SystemUser[] $systemUsers
 * @property SystemUser[] $systemUsers0
 */
class Printers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'printers';
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
            [['asset_number', 'serial', 'printer_type', 'port_connected', 'ip_address', 'mac_address'], 'string', 'max' => 45],
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
            'printer_type' => Yii::t('app', 'ประเภท'),
            'details' => Yii::t('app', 'รายละเอียด'),
            'install_date' => Yii::t('app', 'วันที่ติดตั้ง'),
            'docs' => Yii::t('app', 'รูปภาพ'),
            'vendor' => Yii::t('app', 'ผู้ขาย'),
            'cost' => Yii::t('app', 'ราคา'),
            'port_connected' => Yii::t('app', 'การเชื่อมต่อ'),
            'ip_address' => Yii::t('app', 'IP'),
            'mac_address' => Yii::t('app', 'Mac'),
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
        return $this->hasMany(SystemUser::class, ['printer_1' => 'id']);
    }

    /**
     * Gets query for [[SystemUsers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSystemUsers0()
    {
        return $this->hasMany(SystemUser::class, ['printer_2' => 'id']);
    }
}
