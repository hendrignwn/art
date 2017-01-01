<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page_static".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $type
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $metakey
 * @property string $metadesc
 * @property integer $status
 * @property integer $order
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class PageStatic extends \app\models\BaseActiveRecord
{
    const TYPE_ABOUT = 'about';
    const TYPE_SERVICE = 'service';
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page_static';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'slug', 'description'], 'required'],
            [['category_id', 'status', 'order', 'created_by', 'updated_by'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['type'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 150],
            [['slug', 'metadesc'], 'string', 'max' => 255],
            [['metakey'], 'string', 'max' => 100],
            [['slug'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'type' => Yii::t('app', 'Type'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'description' => Yii::t('app', 'Description'),
            'metakey' => Yii::t('app', 'Metakey'),
            'metadesc' => Yii::t('app', 'Metadesc'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id'=>'category_id']);
    }
    
}
