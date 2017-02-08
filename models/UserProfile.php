<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\helpers\Url;
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
    public function behaviors() 
    {
        return [];
    }
    
    public function init()
    {
        parent::init();
        
        $this->path = 'web/uploads/user/';
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
            [['photo', 'photo_background', 
                'social_facebook', 'social_twitter', 'social_linked_in', 'social_dribbble', 'social_email'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['photoFile', 'photoBackgroundFile'], 'file', 'skipOnEmpty' => true, 'checkExtensionByMimeType' => false,
                'extensions' => ['jpg', 'jpeg', 'png'],
                'maxSize' => 1024 * 1024 * 1],
        ];
    }
    
    public function afterFind()
    {
        $this->normalizeSocialAccounts();
        
        return parent::afterFind();
    }
    
    /**
     * normalize social accounts to another variables
     * 
     * @return boolean
     */
    protected function normalizeSocialAccounts()
    {
        $socialAccounts = json_decode($this->social_account, true);
        
        $this->social_facebook = $socialAccounts['facebook'];
        $this->social_twitter = $socialAccounts['twitter'];
        $this->social_linked_in = $socialAccounts['linked_in'];
        $this->social_dribbble = $socialAccounts['dribbble'];
        $this->social_email = $socialAccounts['email'];
        
        return true;
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
    
    protected function deleteFile($value = null)
    {
        if ($value == null) {
            @unlink(Yii::getAlias('@app/' . $this->path) . $this->photo);
            @unlink(Yii::getAlias('@app/' . $this->path) . $this->photo_background);
        } else {
            @unlink(Yii::getAlias('@app/' . $this->path) . $value);
        }
        
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
     * - process upload file
     * 
     * @param type $insert
     * @return type
     */
    public function beforeSave($insert) 
    {
        $this->processUploadFile();
        $this->social_account = $this->mergeSocialAccount();
        
        return parent::beforeSave($insert);
    }
    
    /**
     * returns merge social accounts
     * 
     * @return array
     */
    protected function mergeSocialAccount($json = true)
    {
        $values = [
            'facebook' => $this->social_facebook,
            'twitter' => $this->social_twitter,
            'linked_in' => $this->social_linked_in,
            'dribbble' => $this->social_dribbble,
            'email' => $this->social_email,
        ];
        
        return ($json == true) ? json_encode($values) : $values;
    }

    /**
     * @return ActiveQuery
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
            $this->deleteFile($this->photo);

            $path = str_replace('web/', '', $this->path);
            
            // generate filename
            $filename = Inflector::slug($this->name . '-' . Yii::$app->security->generateRandomString(20));
            $filename = $filename . '.' . $this->photoFile->extension;
            
            $this->photoFile->saveAs($path . $filename);
            $this->photo = $filename;
        }
        
        if (!empty($this->photoBackgroundFile)) {
            $this->deleteFile($this->photo_background);

            $path = str_replace('web/', '', $this->path);
            
            // generate filename
            $filename = Inflector::slug($this->name . '-' . Yii::$app->security->generateRandomString(20));
            $filename = $filename . '.' . $this->photoBackgroundFile->extension;
            
            $this->photoBackgroundFile->saveAs($path . $filename);
            $this->photo_background = $filename;
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
        $name = $name ? $name : $this->name;

        if (!$this->getPhotoUrl()) {
            return $name;
        }

        return Html::a($name, $this->getPhotoUrl(), $options);
    }
    
    /**
     * get url file
     * 
     * @return type
     */
    public function getPhotoBackgroundUrl() 
    {
        if (empty($this->photo_background)) {
            return null;
        }

        $path = $this->path . $this->photo_background;

        if (!file_exists(Yii::getAlias('@app/' . $path))) {
            return null;
        }

        return Url::to('@' . $path, true);
    }

    public function getPhotoBackgroundUrlHtml($name = null, $options = ['target' => '_blank']) 
    {
        $name = $name ? $name : $this->name;

        if (!$this->getPhotoBackgroundUrl()) {
            return $name;
        }

        return Html::a($name, $this->getPhotoBackgroundUrl(), $options);
    }
}
