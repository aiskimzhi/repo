<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "views".
 *
 * @property integer $user_id
 * @property integer $advert_id
 *
 * @property Advert $advert
 * @property User $user
 */
class Views extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'views';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'advert_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'advert_id' => 'Advert ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvert()
    {
        return $this->hasOne(Advert::className(), ['id' => 'advert_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function countViews($id)
    {
        $views = Views::find()
            ->where(['user_id' => Yii::$app->user->identity->getId(), 'advert_id' => $id])
            ->all();

        return $views;
    }
}
