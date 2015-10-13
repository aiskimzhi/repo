<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Advert */
/* @var $buttons */

$this->title = $model->title;

echo '<div class="advert-view">';

echo '<div><h4>' . $model->category->name . ' » ' . $model->subcategory->name . '</h4></div>';

echo '<h2>' . $model->title . '</h2>';

echo '<h4>' . $model->region->name . ', ' . $model->city->name . '</h4>';

$format = 'd M Y, H:i';
echo 'Last update: ' . date($format, $model->updated_at);

$url = 'img/page_' . $model->id . '/img_01.PNG';
echo '<div>';
echo Html::img(Yii::$app->urlManager->createAbsoluteUrl('img/page_' . $model->id . '/img_01.PNG'), []);
echo '</div>';

echo '<div>';
echo $model->text;
echo '</div>';

echo '<p>';

foreach ($buttons as $b) {
    echo $b . ' ';
}

//echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
//echo Html::a('Delete', ['delete', 'id' => $model->id], [
//    'class' => 'btn btn-danger',
//    'data' => [
//        'confirm' => 'Are you sure you want to delete this advert?',
//        'method' => 'post',
//    ],
//]);
echo '</p>';

echo '</div>';
