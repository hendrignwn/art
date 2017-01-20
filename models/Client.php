<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id
 * @property string $name
 * @property string $website
 * @property string $photo
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Client extends \app\models\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'website', 'photo'], 'required'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'website'], 'string', 'max' => 100],
            [['photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'website' => Yii::t('app', 'Website'),
            'photo' => Yii::t('app', 'Photo'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
