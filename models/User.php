<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $email
 * @property string $username
 * @property string $password_hash
 * @property string $auth_key
 * @property integer $status
 * @property string $last_login
 * @property string $join_at
 * @property string $blocked_at
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class User extends BaseActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @var string $password
     */
    public $password;
    
    public function init() 
    {
        parent::init();
        
        $this->on(self::EVENT_BEFORE_INSERT, [$this, 'beforeInsert']);
        $this->on(self::EVENT_AFTER_INSERT, [$this, 'afterInsert']);
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'username', 'password'], 'required', 'on' => self::SCENARIO_INSERT],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['auth_key', 'last_login', 'join_at', 'blocked_at', 'created_at', 'updated_at', 'password_hash'], 'safe'],
            [['email'], 'unique', 'message' => \Yii::t('app', 'This email address has already been taken')],
            [['email'], 'email'],
            [['username'], 'unique', 'message' => \Yii::t('app', 'This username has already been taken')],
            [['username'], 'match', 'pattern' => '/^[-a-zA-Z0-9_\.@]+$/'],
            [['username'], 'string', 'min' => 3, 'max' => 100],
            [['password'], 'string', 'min' => 6, 'max' => 72],
            [['auth_key'], 'default', 'value' => $this->generateAuthKey()],
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
            'email' => Yii::t('app', 'Email'),
            'username' => Yii::t('app', 'Username'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'status' => Yii::t('app', 'Status'),
            'last_login' => Yii::t('app', 'Last Login'),
            'join_at' => Yii::t('app', 'Join At'),
            'blocked_at' => Yii::t('app', 'Blocked At'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
    
    /**
     * event after insert
     * 
     * @return boolean
     */
    public function afterInsert()
    {
        return true;
    }
    
    /**
     * event before insert
     * 
     * @return boolean
     */
    public function beforeInsert()
    {
        $this->join_at = date('Y-m-d H:i:s');
        
        return true;
    }
    
    /**
     * event before save
     * 
     * @param type $insert
     * @return type
     */
    public function beforeSave($insert) 
    {
        if (!empty($this->password)) {
            $this->setPassword($this->password);
        }
        
        return parent::beforeSave($insert);
    }
    
	/**
	 * update last login when login is successful
	 * 
	 * @return boolean
	 */
	public function updateLastLogin()
	{
		$this->last_login = date('Y-m-d H:i:s');
		return $this->updateAttributes(['last_login']);
	}
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('Method "' . __CLASS__ . '::' . __METHOD__ . '" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
    
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
    
    /**
     * return boolean whether status active or not.
     * 
     * @return boolean
     */
    public function isActive()
    {
        return $this->status === self::STATUS_ACTIVE;
    }
}
