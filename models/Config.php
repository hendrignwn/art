<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property string $name
 * @property string $value
 * @property string $label
 * @property string $notes
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'value'], 'required'],
            [['value'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['label', 'notes'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Name'),
            'value' => Yii::t('app', 'Value'),
            'label' => Yii::t('app', 'Label'),
            'notes' => Yii::t('app', 'Notes'),
        ];
    }
    
    /**
     * Return name-value pair of settings by its name
     *
     * @param array $names
     * @return array
     */
    public static function getByNames($names)
    {
        $results = self::find()
            ->select(['value', 'name'])
            ->where(['name' => $names])
            ->indexBy('name')
            ->column();
        return $results;
    }
    
    /**
     * find one by names
     * 
     * @param type $name
     * @return type
     */
    public static function findByName($name)
    {
        return self::findOne(['name'=>$name]);
    }
	/**
     * Return value of setting by its name
     *
     * @param string $name
     * @return string
     */
    public static function getValueByName($name)
    {
        $result = self::find()
            ->select('value')
            ->where(['name' => $name])
            ->limit(1)
            ->scalar();
        return $result;
    }

    /**
     * Get setting with boolean value by its name.
     * The value will be returned as boolean.
     *
     * @param string $name
     * @return bool
     */
    public static function getBooleanValueByName($name)
    {
        $val = self::getValueByName($name);

        return ($val == 'true');
    }
    
    /**
     * Get setting with explodable value by its name.
     * The php explode method then run against value.
     *
     * @param string $name
     * @param string $delimiter
     * @return array
     */
    public static function getExplodeValueByName($name, $delimiter)
    {
        $value = self::getValueByName($name);

        if (!$value) {
            return [];
        }

        $values = explode($delimiter, $value);
        $results = [];

        foreach ($values as $key => $value) {
            $value = trim($value);

            if (!empty($value)) {
                $results[] = $value;
            }
        }

        return $results;
    }
    
    /**
     * return value array or object of setting by its name
     * 
     * @param type $name
     * @param type $isArray
     * @return type
     */
    public static function getValueJsonByName($name, $isArray = true)
    {
        $result = self::getValueByName($name);

        return json_decode($result, $isArray);
    }
    
    /**
     * return bool whether value is successfully saved or not
     * 
     * @param type $name
     * @param type $value
     * @return type
     */
    public static function setValueByName($name, $value)
    {
        $query = self::findByName($name);
        $query->value = $value;
        
        return $query->save();
    }
    
    /**
     * return app name
     * 
     * @return type
     */
    public static function getAppName()
    {
        return self::getValueByName('app_name');
    }
    /**
     * return app motto
     * 
     * @return type
     */
    public static function getAppMotto()
    {
        return self::getValueByName('app_motto');
    }
    
    /**
     * return app copyright
     * 
     * @return type
     */
    public static function getAppCopyright()
    {
        return self::getValueByName('app_copyright');
    }
    
    /**
     * return app contact address
     * 
     * @return type
     */
    public static function getAppContactAddress()
    {
        return self::getValueByName('app_contact_address');
    }
    
    /**
     * return app contact email
     * 
     * @return type
     */
    public static function getAppContactEmail()
    {
        return self::getValueByName('app_contact_email');
    }
    
    /**
     * return app contact phone
     * 
     * @return type
     */
    public static function getAppContactPhone()
    {
        return self::getValueByName('app_contact_phone');
    }
    
    /**
     * return app account facebook
     * 
     * @return type
     */
    public static function getAppAccountFacebook()
    {
        return self::getValueByName('app_account_facebook');
    }
    
    /**
     * return app account twitter
     * 
     * @return type
     */
    public static function getAppAccountTwitter()
    {
        return self::getValueByName('app_account_twitter');
    }
    
    /**
     * return app account google plus
     * 
     * @return type
     */
    public static function getAppAccountGooglePlus()
    {
        return self::getValueByName('app_account_googleplus');
    }
    
    /**
     * return counter year of experience
     * 
     * @return type
     */
    public static function getCounterYearOfExperience()
    {
        return self::findByName('counter_year_of_experience');
    }
    
    /**
     * set value of counter year of experience
     * 
     * @param type $value
     * @return type
     */
    public static function setValueConterYearOfExperience($value)
    {
        return self::setValueByName('counter_year_of_experience', $value);
    }
    
    /**
     * return counter project completed
     * 
     * @return type
     */
    public static function getCounterProjectCompleted()
    {
        return self::findByName('counter_project_completed');
    }
    
    /**
     * set value of counter year of experience
     * 
     * @param type $value
     * @return type
     */
    public static function setValueConterProjectCompleted($value)
    {
        return self::setValueByName('counter_project_completed', $value);
    }
    
    /**
     * return counter happy customer
     * 
     * @return type
     */
    public static function getCounterHappyCustomer()
    {
        return self::findByName('counter_happy_customers');
    }
    
    /**
     * set value of counter happy customer
     * 
     * @param type $value
     * @return type
     */
    public static function setValueConterHappyCustomer($value)
    {
        return self::setValueByName('counter_happy_customers', $value);
    }
    
    /**
     * return counter our employee
     * 
     * @return type
     */
    public static function getCounterOurEmployee()
    {
        return self::findByName('counter_our_employees');
    }
    
    /**
     * set value of counter our employee
     * 
     * @param type $value
     * @return type
     */
    public static function setValueCounterOurEmployee($value)
    {
        return self::setValueByName('counter_our_employees', $value);
    }
    
    /**
     * return value email admin
     * 
     * @return type
     */
    public static function getEmailAdmin()
    {
        return self::getValueByName('email_admin');
    }
    
    /**
     * return value email web support
     * 
     * @return type
     */
    public static function getEmailWebSupport()
    {
        return self::getValueByName('email_web_support');
    }
    
    /**
     * return value email no reply
     * 
     * @return type
     */
    public static function getEmailNoReply()
    {
        return self::getValueByName('email_noreply');
    }
    
    /**
     * return value email developers
     * 
     * @return type
     */
    public static function getEmailDevelopers()
    {
        return self::getExplodeValueByName('email_developers', ',');
    }
    
    /**
     * returns array administrator public url
     * 
     * @return array
     */
    public static function getAdministratorPublicUrl()
    {
        return self::getValueJsonByName('administrator_public_url');
    }
}