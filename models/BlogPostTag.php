<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_post_tag".
 *
 * @property integer $id
 * @property integer $blog_post_id
 * @property integer $blog_tag_id
 *
 * @property BlogPost $blogPost
 * @property BlogTag $blogTag
 */
class BlogPostTag extends \app\models\BaseActiveRecord
{
    public function behaviors()
    {
        return [];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_post_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blog_post_id', 'blog_tag_id'], 'required'],
            [['blog_post_id', 'blog_tag_id'], 'integer'],
            [['blog_post_id'], 'exist', 'skipOnError' => true, 'targetClass' => BlogPost::className(), 'targetAttribute' => ['blog_post_id' => 'id']],
            [['blog_tag_id'], 'exist', 'skipOnError' => true, 'targetClass' => BlogTag::className(), 'targetAttribute' => ['blog_tag_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'blog_post_id' => Yii::t('app', 'Blog Post ID'),
            'blog_tag_id' => Yii::t('app', 'Blog Tag ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogPost()
    {
        return $this->hasOne(BlogPost::className(), ['id' => 'blog_post_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogTag()
    {
        return $this->hasOne(BlogTag::className(), ['id' => 'blog_tag_id']);
    }
}
