<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main_menu".
 *
 * @property integer $id
 * @property string $name
 * @property string $category
 * @property integer $parent
 * @property string $route
 * @property integer $order
 * @property resource $data
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property MainMenu $parent0
 * @property MainMenu[] $mainMenus
 */
class MainMenu extends \app\models\BaseActiveRecord
{
    const CATEGORY_LANDING = 'landing';
    const CATEGORY_MAIN = 'main';
    const CATEGORY_ADMIN = 'admin';
    const CATEGORY_FOOTER = 'front-footer';
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category', 'route'], 'required'],
            [['parent', 'order', 'status', 'created_by', 'updated_by'], 'integer'],
            [['data'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 128],
            [['category'], 'string', 'max' => 20],
            [['route'], 'string', 'max' => 255],
            [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => MainMenu::className(), 'targetAttribute' => ['parent' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'category' => Yii::t('app', 'Category'),
            'parent' => Yii::t('app', 'Parent'),
            'route' => Yii::t('app', 'Route'),
            'order' => Yii::t('app', 'Order'),
            'data' => Yii::t('app', 'Data'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuParent()
    {
        return $this->hasOne(MainMenu::className(), ['id' => 'parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMainMenus()
    {
        return $this->hasMany(MainMenu::className(), ['parent' => 'id']);
    }
}
