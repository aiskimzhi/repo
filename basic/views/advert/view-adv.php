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
?>
<div class="advert-view">

<div><h4><?= $model->category->name ?>  » <?= $model->subcategory->name ?></h4></div>

<h2><strong><?= $model->title ?></strong></h2>

<h4><?= $model->region->name ?>, <?= $model->city->name ?></h4>

<p><em>Last update: <?= date(Yii::$app->params['dateFormat'], $model->updated_at) ?></em></p>

<div>
    <?= $model->text ?>
</div>


<div id="for-table">
<table style="max-width: 650px; <?= $pic->visibility($model->id)[0] ?>;">
    <tr id="line-one" style="min-height: 189px; height: 189px;">
        <td style="<?= $pic->visibility($model->id)[0] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
            <?= $pic->image($model->id)[0] ?>
            <br><br><br>
            <div>
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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
                <div style="position: relative; width: 30px; height: 30px; margin-left: 60px;">
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

                <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 90px;">
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



<p><em>Contact the author: </em></p>
<p><strong>E-mail: </strong> <?= $model->user->email ?></p>
<p><strong>Phone: </strong> <?= $model->user->phone ?></p>
<p><strong>Skype: </strong> <?= $model->user->skype ?></p>


<p>
<?php $url = Url::toRoute('bookmark/add-to-bookmarks?id=') . $model->id; ?>
<?= Html::button('Add to bookmarks', [
    'type' => 'button',
    'class' => 'btn btn-create',
    'onclick' => '
                                $.ajax({
                            url: "' . $url . '",
                            success: function() {
                                alert("This advert was added to your bookmarks");
                            }
                        });
                    ',
]) ?>
</p>

</div>

<?php
setcookie('views[1]', "");
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

