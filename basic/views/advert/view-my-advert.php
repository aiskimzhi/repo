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
    <td style="<?= $pic->visibility($model->id)[0] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[0] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(0, $model->id);
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
    <td style="<?= $pic->visibility($model->id)[1] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[1] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(1, $model->id);
                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[1]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
    <td style="<?= $pic->visibility($model->id)[2] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[2] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(2, $model->id);
                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[2]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
    <td style="<?= $pic->visibility($model->id)[3] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[3] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(3, $model->id);
                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[3]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
    <td style="<?= $pic->visibility($model->id)[4] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[4] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(4, $model->id);
                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[4]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
</tr>
<tr id="line-two"> <!-- here is what I need -->
    <td style="<?= $pic->visibility($model->id)[5] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[5] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(5, $model->id);
                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[5]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
    <td style="<?= $pic->visibility($model->id)[6] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[6] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(6, $model->id);
                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[6]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
    <td style="<?= $pic->visibility($model->id)[7] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[7] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(7, $model->id);
                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[7]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
    <td style="<?= $pic->visibility($model->id)[8] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[8] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(8, $model->id);
                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[8]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
    <td style="<?= $pic->visibility($model->id)[9] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
        <?= $pic->image($model->id)[9] ?>
        <br><br><br>
        <div>
            <div style="position: relative; width: 30px; height: 30px;">
                <?php Modal::begin([
                    'header' => 'Picture',
                    'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                ]);

                $items = $pic->carouselItems(9, $model->id);
                echo Carousel::widget([
                    'items' => $items,
                ]);

                Modal::end(); ?>
            </div>

            <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                <?php $value = $pic->value($model->id)[9]; ?>
                <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                <form action="" method="post" style="position: relative">
                    <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                </form>
            </div>
        </div>
    </td>
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