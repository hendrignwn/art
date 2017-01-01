<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models\queries;

use yii\db\ActiveQuery;
use app\models\BaseActiveRecord;

/**
 * Description of BaseActiveRecordQuery
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class BaseActiveRecordQuery extends ActiveQuery {
	
	public function orderCreated()
	{
		return $this->addOrderBy(['created_at'=>SORT_DESC]);
	}
	
    public function active()
    {
        $this->andWhere(['status'=>  BaseActiveRecord::STATUS_ACTIVE]);
        return $this;
    }
    
    public function ordered()
    {
        return $this->addOrderBy(['order'=>SORT_ASC]);
    }

    /**
     * @inheritdoc
     * @return Product[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Product|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
	
}
