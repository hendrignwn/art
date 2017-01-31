<?php

namespace app\models;

use app\helpers\Url;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "blog_tag".
 *
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property BlogPostTag[] $blogPostTags
 */
class BlogTag extends BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors() 
    {
        return ArrayHelper::merge(parent::behaviors(), [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
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
        return 'blog_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['name'], 'unique'],
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
            'name' => Yii::t('app', 'Name'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getBlogPostTags()
    {
        return $this->hasMany(BlogPostTag::className(), ['blog_tag_id' => 'id']);
    }
    
    /**
     * returns url
     * 
     * @param type $isAbsolute is false
     * @return type
     */
    public function getUrl($isAbsolute = false)
    {
        return Url::to(['blog/tag', 'slug' => $this->slug], $isAbsolute);
    }
}
