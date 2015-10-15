<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Advert */
/* @var $buttons */

$this->title = $model->title;

echo '<div class="advert-view">';

echo '<div><h4>' . $model->category->name . ' » ' . $model->subcategory->name . '</h4></div>';

echo '<h2>' . $model->title . '</h2>';

echo '<h4>' . $model->region->name . ', ' . $model->city->name . '</h4>';

echo 'Last update: ' . date(Yii::$app->params['dateFormat'], $model->updated_at);

echo '<div>';
$pics = $model->renderAllPics($model->id);
foreach ($pics as $pic) {
    echo Html::img(Yii::$app->urlManager->createAbsoluteUrl('img/page_' . $model->id . '/' . $pic));
}
echo '</div>';

echo '<div>';
echo $model->text;
echo '</div>';

echo '<p>';
$url = Url::toRoute('bookmark/add-to-bookmarks?id=') . $model->id;
echo Html::button('Add to bookmarks', [
    'type' => 'button',
    'class' => 'btn btn-info',
    'onclick' => '
                                $.ajax({
                            url: "' . $url . '",
                            success: function() {
                                alert("This advert was added to your bookmarks");
                            }
                        });
                    ',
]);
echo '</p>';

echo '</div>';