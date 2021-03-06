<?php


use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdvertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Bookmarks';

echo '<h2>My Bookmarks</h2>';

echo '<br>';

echo '<div id="gridVew">';
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'showHeader' => false,
    'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '0'],
    'columns' => [
        [
            'label' => 'image',
            'format' => 'raw',
            'value' => function($searchModel) {
                $url = 'img/page_' . $searchModel->advert_id . '/img_01.PNG';
                return Html::img(Yii::$app->urlManager->createAbsoluteUrl($url));
            },
            'options' => ['style' => 'width: 130px; max-width: 130px;'],
        ],
        [
            'label' => 'data',
            'format' => 'html',
            'value' => function($searchModel) {
                $href = Url::toRoute('advert/view?id=') . $searchModel->advert_id;
                $text = '<div><strong><a href="' . $href . '"> ' . $searchModel->advert->title . '</a></strong></div>';
                $text .= '<div>' . $searchModel->advert->category->name . ' » ' . $searchModel->advert->subcategory->name . '</div>';
                $text .= '<br>';
                $text .= '<br>';
                $text .= '<div>' . $searchModel->advert->region->name . ', ' . $searchModel->advert->city->name . '</div>';
                $format = 'd M Y, H:i';
                $text .= date($format, $searchModel->advert->updated_at);

                return $text;
            }
        ],
        [
            'attribute' => 'price',
            'format' => 'html',
            'value' => function($searchModel) {
                $value = '<h4><strong>' . $searchModel->advert->price . ' USD</strong></h4>';
                return $value;
            },
            'options' => ['style' => 'width: 130px; max-width: 130px;'],
        ],
        [
            'class' => ActionColumn::className(),
            'template' => '{delete}',
            'options' => ['style' => 'width: 50px; max-width: 50px;'],
        ],
    ],
]);
echo '</div>';