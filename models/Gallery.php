<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id
 * @property integer $portfolio_id
 * @property string $name
 * @property string $photo
 * @property string $description
 * @property string $metakey
 * @property string $metadesc
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * 
 * @property Portfolio[] $portfolio
 */
class Gallery extends \app\models\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['portfolio_id', 'name', 'photo', 'description'], 'required'],
            [['portfolio_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'metakey'], 'string', 'max' => 200],
            [['photo', 'metadesc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'portfolio_id' => Yii::t('app', 'Portfolio ID'),
            'name' => Yii::t('app', 'Name'),
            'photo' => Yii::t('app', 'Photo'),
            'description' => Yii::t('app', 'Description'),
            'metakey' => Yii::t('app', 'Metakey'),
            'metadesc' => Yii::t('app', 'Metadesc'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
    
    /**
     * @return yii\db\ActiveQuery
     */
    public function getPortfolio()
    {
        return $this->hasOne(Portfolio::className(), ['id'=>'portfolio_id']);
    }
}
