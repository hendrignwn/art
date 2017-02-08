<?php

namespace app\models;

use app\helpers\MailHelper;
use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $subject;
    public $description;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['first_name', 'last_name', 'email', 'subject', 'description'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            [['phone'], 'integer'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'title_id' => Yii::t('app', 'Title'),
            'verifyCode' => Yii::t('app', 'Verification Code'),
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * 
     * @return bool whether the model passes validation
     */
    public function contact()
    {
        if ($this->validate()) {
            $model = new Contact();
            $model->attributes = $this->attributes;
            
            if ($model->validate()) {
                $model->save();
            }
            
            MailHelper::sendMail([
                'to' => Config::getEmailAdmin(),
                'subject' => 'New Contact | '.$this->subject.' from '. $this->first_name,
                'view' => ['html' => 'contact/new-contact-to-admin'],
                'viewParams' => ['model' => $model],
                'replyTo' => $this->email,
            ]);
            
            return true;
        }
        return false;
    }
}
