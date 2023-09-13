<?php

namespace app\modules\jobs\models;

use app\modules\system\models\User;
use Yii;

/**
 * This is the model class for table "operations".
 *
 * @property int $id
 * @property int|null $job_id
 * @property int|null $operator_by
 * @property string|null $details
 * @property string|null $sparepart_list
 * @property float|null $cost
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $remask
 * @property string|null $docs
 *
 * @property Jobs $job
 */
class Operations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_id', 'operator_by'], 'integer'],
            [['details', 'sparepart_list', 'remask'], 'string'],
            [['cost'], 'number'],
            [['start_date', 'end_date'], 'safe'],
            [['job_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jobs::class, 'targetAttribute' => ['job_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'job_id' => Yii::t('app', 'Job ID'),
            'operator_by' => Yii::t('app', 'Operator By'),
            'details' => Yii::t('app', 'Details'),
            'sparepart_list' => Yii::t('app', 'Sparepart List'),
            'cost' => Yii::t('app', 'Cost'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'remask' => Yii::t('app', 'Remask'),
            'docs' => Yii::t('app', 'Docs'),
        ];
    }

    /**
     * Gets query for [[Job]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJob()
    {
        return $this->hasOne(Jobs::class, ['id' => 'job_id']);
    }

    public function getOperatorBy()
    {
        return $this->hasOne(User::class, ['id' => 'operator_by']);
    }


    // set format  Ex-> 12 ก.ย. 2023 เวลา 14:45 น.
    function formatDateTime($timestamp)
    {
        if ($timestamp !== null) {
            $monthNames = [
                'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.',
                'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.',
                'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'
            ];
            $day = date('d', $timestamp);
            $month = $monthNames[date('n', $timestamp) - 1];
            $year = date('Y', $timestamp);
            $time = "เวลา " . date('H:i', $timestamp) . " น.";
            return "$day $month $year $time";
        } else {
            return null;
        }
    }
}
