<?php

use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
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

//echo '<div>';
//$pics = $model->renderAllPics($model->id);
//foreach ($pics as $pic) {
//    echo Html::img(Yii::$app->urlManager->createAbsoluteUrl('img/page_' . $model->id . '/' . $pic));
//}
//echo '</div>';

echo '<div>';
echo $model->text;
echo '</div>';
?>

    <div id="for-table">
    <table style="max-width: 650px;">
    <tr id="line-one" style="min-height: 189px; height: 189px;">
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

echo 'Contact the author: <br>';
echo 'E-mail: ' . $model->user->email . '<br>';
echo 'Phone: ' . $model->user->phone . '<br>';
echo 'Skype: ' . $model->user->skype . '<br>';


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

