<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Advert;

/**
 * AdvertSearch represents the model behind the search form about `app\models\Advert`.
 */
class AdvertSearch extends Advert
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'region_id', 'city_id', 'category_id', 'subcategory_id', 'created_at', 'updated_at', 'views'], 'integer'],
            [['title', 'text'], 'safe'],
            [['price'], 'number'],
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
        $query = Advert::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 10],
            'sort' => ['defaultOrder' => ['updated_at' => SORT_DESC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        if (Yii::$app->request->get('search') !== null) {
            if(Yii::$app->request->get('before') !== '') {
                $before = strtotime(Yii::$app->request->get('before'));
            } else {
                $before = 0;
            }
            if(Yii::$app->request->get('after') !== '') {
                $after = strtotime(Yii::$app->request->get('after')) + 86399;
            } else {
                $after = time();
            }
            if ($before <= $after) {
                $query->andWhere('updated_at BETWEEN ' . $before . ' AND ' . $after);
            }
        }


        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'category_id' => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'price' => $this->price,
            'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
            'views' => $this->views,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'text', $this->text]);


        return $dataProvider;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'region_id' => 'Choose a region',
            'city_id' => 'Choose a city',
            'category_id' => 'Choose a category',
            'subcategory_id' => 'Choose a subcategory',
            'title' => 'Title',
            'text' => 'Text',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'views' => 'Views',
        ];
    }

    public function getMyAdverts()
    {
        $query = Advert::find()->andFilterWhere([
            'user_id' => Yii::$app->user->identity->getId(),
        ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $dataProvider;
    }
}
