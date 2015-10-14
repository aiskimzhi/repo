<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Advert */
/* @var $imgModel app\models\UploadForm */

$this->title = $model->title;

echo '<div class="advert-view">';

echo '<div><h4>' . $model->category->name . ' » ' . $model->subcategory->name . '</h4></div>';

echo '<h2>' . $model->title . '</h2>';

echo '<h4>' . $model->region->name . ', ' . $model->city->name . '</h4>';

$format = 'd M Y, H:i';
echo 'Last update: ' . date($format, $model->updated_at);

echo '<div>';
$pics = $model->renderAllPics($model->id);
foreach ($pics as $pic) {
    $e = '<div>';
    $e .= Html::beginForm('', 'post');
    $e .= Html::img(Yii::$app->urlManager->createAbsoluteUrl('img/page_' . $model->id . '/' . $pic));
    $e .= Html::submitButton('Delete picture', ['class' => 'btn btn-dangeer', 'name' => 'delete', 'value' => $pic]);
    $e .= Html::endForm();
    $e .= '</div>';
    echo $e;
}
echo '</div>';

echo '<div>';
echo $model->text;
echo '</div>';

echo '<p>';
$form = ActiveForm::begin(['id' => 'add-picture', 'options' => ['enctype' => 'multipart/form-data']]);

echo $form->field($imgModel, 'imageFile')->fileInput(['value' => 'choose']);

echo Html::submitButton('Add picture', ['class' => 'btn btn-success']);

ActiveForm::end();
echo '</p>';

echo '<p>';
echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
echo Html::a('Delete', ['delete', 'id' => $model->id], [
    'class' => 'btn btn-danger',
    'data' => [
        'confirm' => 'Are you sure you want to delete this advert?',
        'method' => 'post',
    ],
]);
echo '</p>';

echo '</div>';
