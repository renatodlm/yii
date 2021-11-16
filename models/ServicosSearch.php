<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Servicos;

/**
 * ServicosSearch represents the model behind the search form of `app\models\Servicos`.
 */
class ServicosSearch extends Servicos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'SKILL_ID'], 'integer'],
            [['NOME', 'DESCRICAO', 'FEATURED_IMG'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Servicos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'SKILL_ID' => $this->SKILL_ID,
        ]);

        $query->andFilterWhere(['like', 'NOME', $this->NOME])
            ->andFilterWhere(['like', 'DESCRICAO', $this->DESCRICAO])
            ->andFilterWhere(['like', 'FEATURED_IMG', $this->FEATURED_IMG]);

        return $dataProvider;
    }
}
