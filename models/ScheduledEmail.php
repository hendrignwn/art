<?php

namespace app\models;

use app\helpers\MailHelper;
use Yii;
use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\helpers\Url;
use yii\web\UploadedFile;

/**
 * This is the model class for table "scheduled_email".
 *
 * @property integer $id
 * @property integer $category
 * @property string $subject
 * @property string $body
 * @property string $photo
 * @property string $send_date
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class ScheduledEmail extends BaseActiveRecord
{
    const CATEGORY_SUBSCRIBER = 1;
    
    /**
     * @var UploadedFile
     */
    public $photoFile;
    
    private $_path;
        
    public function init()
    {
        parent::init();
        
        $this->path = 'web/uploads/scheduled-email/';
        if (!is_dir(Yii::getAlias('@app/' . $this->path))) {
            mkdir(Yii::getAlias('@app/' . $this->path));
        }

        return true;
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scheduled_email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject', 'body', 'send_date'], 'required'],
            [['category', 'status', 'created_by', 'updated_by'], 'integer'],
            [['body'], 'string'],
            [['send_date', 'created_at', 'updated_at'], 'safe'],
            [['subject'], 'string', 'max' => 255],
            [['photo'], 'string', 'max' => 100],
            [['category'], 'default', 'value' => self::CATEGORY_SUBSCRIBER],
            [['status'], 'default', 'value' => self::STATUS_ACTIVE],
            [['photoFile'], 'file', 'skipOnEmpty' => true, 'checkExtensionByMimeType' => false,
                'extensions' => ['jpg', 'jpeg', 'png'],
                'maxSize' => 1024 * 1024 * 1],
        ];
    }
    
    /**
     * - delete photoFile
     * 
     * @return type
     */
    public function beforeDelete()
    {
        /* todo: delete the corresponding file in storage */
        $this->deleteFile();
        
        return parent::beforeDelete();
    }
    
    protected function deleteFile()
    {
        @unlink(Yii::getAlias('@app/' . $this->path) . $this->photo);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category' => Yii::t('app', 'Category'),
            'subject' => Yii::t('app', 'Subject'),
            'body' => Yii::t('app', 'Body'),
            'photo' => Yii::t('app', 'Photo'),
            'send_date' => Yii::t('app', 'Send Date'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
    
    /**
     * - process upload file
     * 
     * @param type $insert
     * @return type
     */
    public function beforeSave($insert) 
    {
        $this->processUploadFile();
        
        return parent::beforeSave($insert);
    }
    
    /**
     * process uploaded file
     * 
     * @return boolean
     */
    public function processUploadFile()
    {
        if (!empty($this->photoFile)) {
            $this->deleteFile();

            $path = str_replace('web/', '', $this->path);
            
            // generate filename
            $filename = Inflector::slug($this->subject . '-' . Yii::$app->security->generateRandomString(20));
            $filename = $filename . '.' . $this->photoFile->extension;
            
            $this->photoFile->saveAs($path . $filename);
            $this->photo = $filename;
        }

        return true;
    }
    
    /**
     * get url file
     * 
     * @return type
     */
    public function getPhotoUrl() 
    {
        if (empty($this->photo)) {
            return null;
        }

        $path = $this->path . $this->photo;

        if (!file_exists(Yii::getAlias('@app/' . $path))) {
            return null;
        }

        return Url::to('@' . $path, true);
    }

    public function getPhotoUrlHtml($name = null, $options = ['target' => '_blank']) 
    {
        $name = $name ? $name : $this->subject;

        if (!$this->getPhotoUrl()) {
            return $name;
        }

        return Html::a($name, $this->getPhotoUrl(), $options);
    }

    /**
     * set path
     * 
     * @param type $value
     */
    public function setPath($value)
    {
        $this->_path = $value;
    }
    
    /**
     * @return string
     */
    public function getPath()
    {
        return $this->_path;
    }
    
    /**
     * console blast email to subscribers
     * 
     * @return boolean
     */
    public static function consoleBlastToSubscribers()
    {
        $query = self::find()
                ->andWhere(['send_date' => date('Y-m-d'), 'category' => self::CATEGORY_SUBSCRIBER])
                ->actived()
                ->all();
        
        $success = true;
        foreach ($query as $schedule) {
            
            $subscribers = Subscribe::find()->actived()->all();
            foreach ($subscribers as $subscriber) {
                $mail = MailHelper::sendMail([
                    'to' => $subscriber->email,
                    'replyTo' => [],
                    'subject' => $schedule->subject,
                    'view' => ['html' => 'scheduled-email/blast-to-subscriber'],
                    'viewParams' => [
                        'subscriber' => $subscriber,
                        'schedule' => $schedule,
                    ],
                ]);
                
                $success = $success && $mail;
            }
            
        }
        
        return $success;
    }
    
}
