<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "user_profile".
 *
 * @property integer $user_id
 * @property string $name
 * @property string $proffesional
 * @property string $photo
 * @property string $photo_background
 * @property string $bio
 * @property string $social_account
 *
 * @property User $user
 */
class UserProfile extends BaseActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $photoFile;
    
    /**
     * @var UploadedFile
     */
    public $photoBackgroundFile;
    
    private $_path;
    
    /** social */
    public $social_facebook;
    public $social_twitter;
    public $social_linked_in;
    public $social_dribbble;
    public $social_email;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'proffesional', 'bio'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['proffesional', 'photo', 'photo_background'], 'string', 'max' => 100],
            [['bio', 'social_account'], 'string', 'max' => 255],
            [['photo', 'photo_background'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['photoFile', 'photoBackgroundFile'], 'file', 'skipOnEmpty' => true, 'checkExtensionByMimeType' => false,
                'extensions' => ['jpg', 'jpeg', 'png'],
                'maxSize' => 1024 * 1024 * 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'name' => Yii::t('app', 'Name'),
            'proffesional' => Yii::t('app', 'Proffesional'),
            'photo' => Yii::t('app', 'Photo'),
            'photo_background' => Yii::t('app', 'Photo Background'),
            'bio' => Yii::t('app', 'Bio'),
            'social_account' => Yii::t('app', 'Social Account'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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
            $filename = Inflector::slug($this->first_name . '-' . Yii::$app->security->generateRandomString(20));
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
        $name = $name ? $name : $this->first_name;

        if (!$this->getPhotoUrl()) {
            return $name;
        }

        return Html::a($name, $this->getPhotoUrl(), $options);
    }
}
