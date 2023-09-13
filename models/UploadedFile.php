<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uploaded_file".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $filename
 * @property int|null $size
 * @property string|null $type
 */
class UploadedFile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uploaded_file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['size'], 'integer'],
            [['name', 'filename'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'filename' => Yii::t('app', 'Filename'),
            'size' => Yii::t('app', 'Size'),
            'type' => Yii::t('app', 'Type'),
        ];
    }
}
