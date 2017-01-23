<?php

namespace app\models;

use app\helpers\FormatConverter;
use app\helpers\Url;
use Yii;

/**
 * This is the model class for table "blog_post".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $photo
 * @property string $lead_text
 * @property string $content
 * @property string $metakey
 * @property string $metadesc
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $blog_category_id
 *
 * @property BlogCategory $blogCategory
 * @property BlogPostTag[] $blogPostTags
 */
class BlogPost extends BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'content', 'blog_category_id'], 'required'],
            [['lead_text', 'content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'blog_category_id'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 128],
            [['photo'], 'string', 'max' => 100],
            [['metakey'], 'string', 'max' => 150],
            [['metadesc'], 'string', 'max' => 160],
            [['title'], 'unique'],
            [['slug'], 'unique'],
            [['blog_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => BlogCategory::className(), 'targetAttribute' => ['blog_category_id' => 'id']],
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
            'title' => Yii::t('app', 'Title'),
            'slug' => Yii::t('app', 'Slug'),
            'photo' => Yii::t('app', 'Photo'),
            'lead_text' => Yii::t('app', 'Lead Text'),
            'content' => Yii::t('app', 'Content'),
            'metakey' => Yii::t('app', 'Metakey'),
            'metadesc' => Yii::t('app', 'Metadesc'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'blog_category_id' => Yii::t('app', 'Blog Category ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogCategory()
    {
        return $this->hasOne(BlogCategory::className(), ['id' => 'blog_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogPostTags()
    {
        return $this->hasMany(BlogPostTag::className(), ['blog_post_id' => 'id']);
    }
    
    /**
     * get detail url -> 'blog/<year>/<month>/<slug>'
     * 
     * @param type $absolute by default is false
     * @return type
     */
    public function getDetailUrl($absolute = false)
    {
        $year = FormatConverter::dateFormat($this->created_at, 'Y');
        $month = FormatConverter::dateFormat($this->created_at, 'm');
        
        return Url::to([
            'blog/detail', 
            'year' => $year, 
            'month' => $month, 
            'slug' => $this->slug
        ], $absolute);
    }
}
