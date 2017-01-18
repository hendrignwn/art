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
            [['email', 'username', 'password_hash', 'auth_key'], 'required'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['last_login', 'join_at', 'blocked_at', 'created_at', 'updated_at'], 'safe'],
            [['email', 'username'], 'string', 'max' => 100],
            [['password_hash', 'auth_key'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['username'], 'unique'],
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
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
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
}
