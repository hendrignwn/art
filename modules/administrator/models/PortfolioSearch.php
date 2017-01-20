<?php

namespace app\modules\administrator\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Portfolio;

/**
 * PortfolioSearch represents the model behind the search form about `app\models\Portfolio`.
 */
class PortfolioSearch extends Portfolio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'service_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['name', 'slug', 'completed_on', 'client', 'website', 'description', 'metakey', 'metadesc', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Portfolio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'service_id' => $this->service_id,
            'completed_on' => $this->completed_on,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'client', $this->client])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'metakey', $this->metakey])
            ->andFilterWhere(['like', 'metadesc', $this->metadesc]);

        return $dataProvider;
    }
}
