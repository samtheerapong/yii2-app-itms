<?php

namespace app\modules\itms\models;

use app\modules\system\models\ComputerStatus;
use app\modules\system\models\ComputerType;
use Yii;

/**
 * This is the model class for table "computers".
 *
 * @property int $id
 * @property int|null $computer_type ประเภท
 * @property string|null $asset_number รหัสทรัพย์สิน
 * @property string|null $hostname ชื่อคอมพิวเตอร์
 * @property string|null $model รุ่น
 * @property string|null $serial ซีเรียว
 * @property string|null $cpu ซีพียู
 * @property string|null $ram แรม
 * @property string|null $hdd1 HDD หลัก
 * @property string|null $hdd2 HDD รอง
 * @property string|null $ssd1 SSD หลัก
 * @property string|null $ssd2 SSD รอง
 * @property string|null $vga การ์ดจอ
 * @property string|null $lan_ip_address LAN IP
 * @property string|null $lan_mac_address LAN MAC
 * @property string|null $wifi_ip_address WI-FI IP
 * @property string|null $wifi_mac_address WI-FI MAC
 * @property string|null $install_date วันติดตั้ง
 * @property string|null $docs ไฟล์แนบ
 * @property string|null $vendor ผู้ขาย
 * @property float|null $cost ราคา
 * @property string|null $remask หมายเหตุ
 *
 * @property ComputerType $computerType
 * @property SystemUser[] $systemUsers
 */
class Computers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'computers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['computer_type','computer_status'], 'integer'],
            [['install_date'], 'safe'],
            [['docs', 'vendor', 'remask'], 'string'],
            [['cost'], 'number'],
            [['asset_number', 'hostname', 'serial', 'cpu', 'ram', 'hdd1', 'hdd2', 'ssd1', 'ssd2', 'vga', 'lan_ip_address', 'lan_mac_address', 'wifi_ip_address', 'wifi_mac_address'], 'string', 'max' => 45],
            [['model'], 'string', 'max' => 200],
            [['hostname'], 'unique'],
            [['asset_number'], 'unique'],
            [['computer_type'], 'exist', 'skipOnError' => true, 'targetClass' => ComputerType::class, 'targetAttribute' => ['computer_type' => 'id']],
            [['computer_status'], 'exist', 'skipOnError' => true, 'targetClass' => ComputerStatus::class, 'targetAttribute' => ['computer_status' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'computer_type' => Yii::t('app', 'ประเภท'),
            'asset_number' => Yii::t('app', 'รหัสทรัพย์สิน'),
            'hostname' => Yii::t('app', 'ชื่อคอมพิวเตอร์'),
            'model' => Yii::t('app', 'รุ่น'),
            'serial' => Yii::t('app', 'ซีเรียว'),
            'cpu' => Yii::t('app', 'ซีพียู'),
            'ram' => Yii::t('app', 'แรม'),
            'hdd1' => Yii::t('app', 'HDD หลัก'),
            'hdd2' => Yii::t('app', 'HDD รอง'),
            'ssd1' => Yii::t('app', 'SSD หลัก'),
            'ssd2' => Yii::t('app', 'SSD รอง'),
            'vga' => Yii::t('app', 'การ์ดจอ'),
            'lan_ip_address' => Yii::t('app', 'LAN IP'),
            'lan_mac_address' => Yii::t('app', 'LAN MAC'),
            'wifi_ip_address' => Yii::t('app', 'WI-FI IP'),
            'wifi_mac_address' => Yii::t('app', 'WI-FI MAC'),
            'install_date' => Yii::t('app', 'วันติดตั้ง'),
            'docs' => Yii::t('app', 'ไฟล์แนบ'),
            'vendor' => Yii::t('app', 'ผู้ขาย'),
            'cost' => Yii::t('app', 'ราคา'),
            'computer_status' => Yii::t('app', 'Computer Status'),
            'remask' => Yii::t('app', 'หมายเหตุ'),
        ];
    }

    /**
     * Gets query for [[ComputerType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComputerType()
    {
        return $this->hasOne(ComputerType::class, ['id' => 'computer_type']);
    }

    public function getComputerStatus()
    {
        return $this->hasOne(ComputerStatus::class, ['id' => 'computer_status']);
    }

    /**
     * Gets query for [[SystemUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSystemUsers()
    {
        return $this->hasMany(SystemUser::class, ['computer' => 'id']);
    }
}
