<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $name
 * @property string $icon
 * @property string $slug
 * @property string $description
 * @property string $metakey
 * @property string $metadesc
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * 
 * @property Portfolio[] $portfolios
 */
class Service extends BaseActiveRecord
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
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['slug', 'created_at', 'updated_at', 'icon'], 'safe'],
            [['name'], 'string', 'max' => 200],
            [['slug'], 'string', 'max' => 255],
            [['metakey'], 'string', 'max' => 100],
            [['metadesc'], 'string', 'max' => 150],
            [['icon'], 'string', 'max' => 20],
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
            'name' => Yii::t('app', 'Name'),
            'icon' => Yii::t('app', 'Icon'),
            'slug' => Yii::t('app', 'Slug'),
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
    public function getPortfolios()
    {
        return $this->hasMany(Portfolio::className(), ['portfolio_id'=>'id']);
    }
}
