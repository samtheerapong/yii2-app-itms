<?php

namespace app\modules\itms\models;

use Yii;

/**
 * This is the model class for table "system_user".
 *
 * @property int $id
 * @property int|null $user ผู้ครอบครอง
 * @property string|null $default_username Username
 * @property string|null $default_password DefaultPassword
 * @property int|null $department แผนก
 * @property int|null $position ตำแหน่ง
 * @property int|null $role สิทธิ์
 * @property int|null $location สถานที่
 * @property string|null $company_email อีเมลบริษัท
 * @property string|null $company_phone เบอร์ภายใน
 * @property string|null $private_phone เบอร์ส่วนตัว
 * @property string|null $line_id ไลน์ไอดี
 * @property int|null $code_mfc รหัสเครื่องถ่ายเอกสาร
 * @property int|null $computer คอมพิวเตอร์
 * @property int|null $monitor_main จอหลัก
 * @property int|null $monitor_secondary จอรอง
 * @property int|null $license_windows ลิขสิทธิ์วินโดส์
 * @property int|null $license_office ลิขสิทธิ์ออฟฟิส
 * @property int|null $printer_1 เครื่องพิมพ์หลัก
 * @property int|null $printer_2 เครื่องพิมพ์รอง
 * @property int|null $ups เครื่องสำรองไฟ
 * @property int|null $status สถานะ
 * @property string|null $remask หมายเหตุ
 * @property float|null $total รวม
 * @property string|null $image รูปภาพ
 * @property string|null $docs
 *
 * @property Computers $computer0
 * @property Department $department0
 * @property Office $licenseOffice
 * @property Windows $licenseWindows
 * @property Location $location0
 * @property Monitors $monitorMain
 * @property Monitors $monitorSecondary
 * @property Position $position0
 * @property Printers $printer1
 * @property Printers $printer2
 * @property Role $role0
 * @property Ups $ups0
 */
class SystemUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'system_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'department', 'position', 'role', 'location', 'code_mfc', 'computer', 'monitor_main', 'monitor_secondary', 'license_windows', 'license_office', 'printer_1', 'printer_2', 'ups', 'status'], 'integer'],
            [['remask', 'image', 'docs'], 'string'],
            [['total'], 'number'],
            [['default_username', 'default_password', 'company_email'], 'string', 'max' => 200],
            [['company_phone', 'private_phone', 'line_id'], 'string', 'max' => 45],
            [['computer'], 'exist', 'skipOnError' => true, 'targetClass' => Computers::class, 'targetAttribute' => ['computer' => 'id']],
            [['department'], 'exist', 'skipOnError' => true, 'targetClass' => Department::class, 'targetAttribute' => ['department' => 'id']],
            [['location'], 'exist', 'skipOnError' => true, 'targetClass' => Location::class, 'targetAttribute' => ['location' => 'id']],
            [['monitor_main'], 'exist', 'skipOnError' => true, 'targetClass' => Monitors::class, 'targetAttribute' => ['monitor_main' => 'id']],
            [['monitor_secondary'], 'exist', 'skipOnError' => true, 'targetClass' => Monitors::class, 'targetAttribute' => ['monitor_secondary' => 'id']],
            [['license_office'], 'exist', 'skipOnError' => true, 'targetClass' => Office::class, 'targetAttribute' => ['license_office' => 'id']],
            [['position'], 'exist', 'skipOnError' => true, 'targetClass' => Position::class, 'targetAttribute' => ['position' => 'id']],
            [['printer_1'], 'exist', 'skipOnError' => true, 'targetClass' => Printers::class, 'targetAttribute' => ['printer_1' => 'id']],
            [['printer_2'], 'exist', 'skipOnError' => true, 'targetClass' => Printers::class, 'targetAttribute' => ['printer_2' => 'id']],
            [['role'], 'exist', 'skipOnError' => true, 'targetClass' => Role::class, 'targetAttribute' => ['role' => 'id']],
            [['ups'], 'exist', 'skipOnError' => true, 'targetClass' => Ups::class, 'targetAttribute' => ['ups' => 'id']],
            [['license_windows'], 'exist', 'skipOnError' => true, 'targetClass' => Windows::class, 'targetAttribute' => ['license_windows' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user' => Yii::t('app', 'ผู้ครอบครอง'),
            'default_username' => Yii::t('app', 'Username'),
            'default_password' => Yii::t('app', 'DefaultPassword'),
            'department' => Yii::t('app', 'แผนก'),
            'position' => Yii::t('app', 'ตำแหน่ง'),
            'role' => Yii::t('app', 'สิทธิ์'),
            'location' => Yii::t('app', 'สถานที่'),
            'company_email' => Yii::t('app', 'อีเมลบริษัท'),
            'company_phone' => Yii::t('app', 'เบอร์ภายใน'),
            'private_phone' => Yii::t('app', 'เบอร์ส่วนตัว'),
            'line_id' => Yii::t('app', 'ไลน์ไอดี'),
            'code_mfc' => Yii::t('app', 'รหัสเครื่องถ่ายเอกสาร'),
            'computer' => Yii::t('app', 'คอมพิวเตอร์'),
            'monitor_main' => Yii::t('app', 'จอหลัก'),
            'monitor_secondary' => Yii::t('app', 'จอรอง'),
            'license_windows' => Yii::t('app', 'ลิขสิทธิ์วินโดส์'),
            'license_office' => Yii::t('app', 'ลิขสิทธิ์ออฟฟิส'),
            'printer_1' => Yii::t('app', 'เครื่องพิมพ์หลัก'),
            'printer_2' => Yii::t('app', 'เครื่องพิมพ์รอง'),
            'ups' => Yii::t('app', 'เครื่องสำรองไฟ'),
            'status' => Yii::t('app', 'สถานะ'),
            'remask' => Yii::t('app', 'หมายเหตุ'),
            'total' => Yii::t('app', 'รวม'),
            'image' => Yii::t('app', 'รูปภาพ'),
            'docs' => Yii::t('app', 'Docs'),
        ];
    }

    /**
     * Gets query for [[Computer0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComputer0()
    {
        return $this->hasOne(Computers::class, ['id' => 'computer']);
    }

    /**
     * Gets query for [[Department0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment0()
    {
        return $this->hasOne(Department::class, ['id' => 'department']);
    }

    /**
     * Gets query for [[LicenseOffice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLicenseOffice()
    {
        return $this->hasOne(Office::class, ['id' => 'license_office']);
    }

    /**
     * Gets query for [[LicenseWindows]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLicenseWindows()
    {
        return $this->hasOne(Windows::class, ['id' => 'license_windows']);
    }

    /**
     * Gets query for [[Location0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation0()
    {
        return $this->hasOne(Location::class, ['id' => 'location']);
    }

    /**
     * Gets query for [[MonitorMain]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMonitorMain()
    {
        return $this->hasOne(Monitors::class, ['id' => 'monitor_main']);
    }

    /**
     * Gets query for [[MonitorSecondary]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMonitorSecondary()
    {
        return $this->hasOne(Monitors::class, ['id' => 'monitor_secondary']);
    }

    /**
     * Gets query for [[Position0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosition0()
    {
        return $this->hasOne(Position::class, ['id' => 'position']);
    }

    /**
     * Gets query for [[Printer1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrinter1()
    {
        return $this->hasOne(Printers::class, ['id' => 'printer_1']);
    }

    /**
     * Gets query for [[Printer2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrinter2()
    {
        return $this->hasOne(Printers::class, ['id' => 'printer_2']);
    }

    /**
     * Gets query for [[Role0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole0()
    {
        return $this->hasOne(Role::class, ['id' => 'role']);
    }

    /**
     * Gets query for [[Ups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUps0()
    {
        return $this->hasOne(Ups::class, ['id' => 'ups']);
    }
}
