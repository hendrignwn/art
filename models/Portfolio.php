<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "portfolio".
 *
 * @property integer $id
 * @property integer $service_id
 * @property string $name
 * @property string $slug
 * @property string $completed_on
 * @property string $client
 * @property string $website
 * @property string $description
 * @property string $metakey
 * @property string $metadesc
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * 
 * @property Service[] $service
 * @property Gallery[] $galleries
 */
class Portfolio extends BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors() 
    {
        return ArrayHelper::merge(parent::behaviors(), [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name',
                'slugAttribute' => 'slug',
                'ensureUnique' => true,
            ]
        ]);
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_id', 'name', 'completed_on', 'client', 'website', 'description'], 'required'],
            [['service_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['completed_on', 'created_at', 'updated_at'], 'safe'],
            [['description'], 'string'],
            [['name', 'metakey'], 'string', 'max' => 200],
            [['slug', 'client', 'website', 'metadesc'], 'string', 'max' => 255],
            [['metakey'], 'string', 'max' => 100],
            [['metadesc'], 'string', 'max' => 150],
            [['slug'], 'unique'],
            [['status'], 'default', 'value' => self::STATUS_ACTIVE],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'service_id' => Yii::t('app', 'Service ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'completed_on' => Yii::t('app', 'Completed On'),
            'client' => Yii::t('app', 'Client'),
            'website' => Yii::t('app', 'Website'),
            'description' => Yii::t('app', 'Description'),
            'metakey' => Yii::t('app', 'Metakey'),
            'metadesc' => Yii::t('app', 'Metadesc'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
    
    /**
     * @return yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['id'=>'service_id']);
    }
    
    /**
     * @return yii\db\ActiveQuery
     */
    public function getGalleries()
    {
        return $this->hasMany(Gallery::className(), ['portfolio_id'=>'id']);
    }
}
