<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $name
 * @property integer $banner_category_id
 * @property string $description
 * @property string $picture
 * @property string $url
 * @property integer $is_absolute
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Banner extends \app\models\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'banner_category_id', 'description', 'picture', 'url'], 'required'],
            [['banner_category_id', 'is_absolute', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'picture'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['url'], 'string', 'max' => 200],
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
            'banner_category_id' => Yii::t('app', 'Banner Category ID'),
            'description' => Yii::t('app', 'Description'),
            'picture' => Yii::t('app', 'Picture'),
            'url' => Yii::t('app', 'Url'),
            'is_absolute' => Yii::t('app', 'Is Absolute'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
