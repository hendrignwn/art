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
    
    public static function getAppName()
    {
        return self::getValueByName('app_name');
    }

    public static function getAppMotto()
    {
        return self::getValueByName('app_motto');
    }
    
    public static function getAppContactAddress()
    {
        return self::getValueByName('app_contact_address');
    }
    
    public static function getAppContactEmail()
    {
        return self::getValueByName('app_contact_email');
    }
    
    public static function getAppCopyright()
    {
        return self::getValueByName('app_contact_copyright');
    }
    
    public static function getAppContactPhone()
    {
        return self::getValueByName('app_contact_phone');
    }
    
    public static function getAppAccountFacebook()
    {
        return self::getValueByName('app_account_facebook');
    }
    
    public static function getAppAccountTwitter()
    {
        return self::getValueByName('app_account_twitter');
    }
    
    public static function getAppAccountGooglePlus()
    {
        return self::getValueByName('app_account_googleplus');
    }
}
