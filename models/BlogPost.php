<?php

namespace app\models;

use app\helpers\FormatConverter;
use app\helpers\Url;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "blog_post".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $photo
 * @property string $post_date
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
        return 'blog_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'blog_category_id', 'post_date'], 'required'],
            [['lead_text', 'content'], 'string'],
            [['slug', 'created_at', 'updated_at'], 'safe'],
            [['post_date'],'datetime', 'format' => 'php: Y-m-d H:i:s', 'message' => Yii::t('app.message', 'Datetime format must be `Y-m-d H:i:s` eg: 2017-01-30 19:00:50')],
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
            'post_date' => Yii::t('app', 'Post Date'),
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
     * @return ActiveQuery
     */
    public function getBlogCategory()
    {
        return $this->hasOne(BlogCategory::className(), ['id' => 'blog_category_id']);
    }

    /**
     * @return ActiveQuery
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
        $year = FormatConverter::dateFormat($this->post_date, 'Y');
        $month = FormatConverter::dateFormat($this->post_date, 'm');
        
        return Url::to([
            'blog/detail', 
            'year' => $year, 
            'month' => $month, 
            'slug' => $this->slug
        ], $absolute);
    }
    
    public static function getSearch($params = [])
    {
        $query = self::find()
            ->select([
                'blog_post.*',
            ])
            ->joinWith('blogCategory')
            ->joinWith('blogPostTags')
            ->where([
                'blog_post.status' => self::STATUS_ACTIVE,
            ])
            ->distinct(true);

        // Filter by post_name
        if(isset($params['post_title'])) {
            $query->andFilterWhere(['like','title',$params['post_title']]);
        }

        // Filter by post_date
        if(isset($params['post_date'])) {
            $query->andFilterWhere(['like','post_date',$params['post_date']]);
        }

        // Filter by taxonomy it could be categories or tag
        if(isset($params['category'])) {
            $query->andFilterWhere(['blog_category_id' => $params['category']]);
        }

        if(isset($params['limit'])) {
            $query->limit($params['limit']);
        }
        

        $query->orderBy([
            'post_date' => SORT_DESC
        ]);
        
        if (isset($params['result'])) {
            switch ($params['result']) {
                case 'query':
                    $results = $query;
                    break;
                case 'count':
                    $results = $query->count();
                    break;
                case 'result':
                default:
                    $results = $query->all();
                    break;
            }
        } else {
            $results = $query->all();
        }

        return $results;
    }
}
