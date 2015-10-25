<?php

use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\widgets\DetailView;
use app\models\UploadForm;
use yii\bootstrap\Modal;
use yii\bootstrap\Tabs;
use app\models\Pictures;

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

//echo '<div>';
//$pics = $model->renderAllPics($model->id);
//foreach ($pics as $pic) {
//    $e = '<div>';
//    $e .= Html::beginForm('', 'post');
//    $e .= Html::img(Yii::$app->urlManager->createAbsoluteUrl('img/page_' . $model->id . '/' . $pic));
//    $e .= Html::submitButton('Delete picture', ['class' => 'btn btn-danger', 'name' => 'delete', 'value' => $pic]);
//    $e .= Html::endForm();
//    $e .= '</div>';
//    echo $e;
//}
//echo '</div>';

echo '<div>';
echo $model->text;
echo '</div>';


$items = $pic->carouselItems($model->id);
//echo "<pre>";
//var_dump($items);
//echo "</pre>";

echo '</div>';

?>

<div id="for-table">
<table style="max-width: 650px; <?= $pic->visibility($model->id)[0] ?>;">
<tr id="header-line" style="height: 50px; max-height: 50px;">
    <td colspan="5" style="height: 50px; max-height: 50px; min-width: 400px;">
        <div style="position: relative; margin-left: 20px; margin-top: 20px; max-height: 40px;">
            <?php $form = ActiveForm::begin(['id' => 'add-picture', 'options' => ['enctype' => 'multipart/form-data']]); ?>
            <?= $form->field($imgModel, 'imageFile')->fileInput([
                'value' => 'choose',
                'style' => 'opacity: 0; z-index: 3; position: relative;',
            ])->label(false) ?>
            <div class="btn btn-success" style="position: relative; margin-top: -120px; margin-left: -12px; z-index: 1;">
                Choose a picture
            </div>
            <?= Html::submitButton('Add picture', [
                'class' => 'btn btn-success',
                'style' => 'position: relative; margin-top: -120px; margin-left: 100px;'
            ]) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </td>
</tr>
<tr id="line-one">

    <?php foreach ($items as $key => $val ) : ?>
    <td style="<?= $pic->visibility($model->id)[0] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $val ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[0]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
    <?php endforeach; ?>
</tr>
</table>
</div>
<br><br>

<?php

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
