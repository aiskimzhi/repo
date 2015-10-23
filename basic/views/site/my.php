<?php

use app\models\Advert;
use app\models\UploadForm;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\bootstrap\Tabs;
use yii\helpers\Html;
use yii\bootstrap\Carousel;
use app\models\Pictures;

$this->title = 'Site/Index';
$imgModel = new UploadForm();
$id = 12;
$pic = new Pictures();

echo '<pre>';
echo 'COOKIES: <br>';
print_r($_COOKIE);
echo '</pre>';
//setcookie('views[11]', "");
?>

<div id="for-table">
    <table style="max-width: 650px;">
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
            <td style="<?= $pic->visibility($id)[0] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[0] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => [
                                'label' => '<span class="glyphicon glyphicon-search" style="color: #f3dc0f; background-color: #000000;"></span>',
                                'style' => 'background-color: #000000; border-color: #f3dc0f;',
                            ],
                        ]);

                        $items = $pic->carouselItems(0, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[0]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove" style="color: #f3dc0f; background-color: #000000;"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value, 'style' => 'background-color: #000000; border-color: #f3dc0f;']) ?>
                        </form>
                    </div>
                </div>
            </td>
            <td style="<?= $pic->visibility($id)[1] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[1] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                        ]);

                        $items = $pic->carouselItems(1, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[1]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                        </form>
                    </div>
                </div>
            </td>
            <td style="<?= $pic->visibility($id)[2] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[2] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                        ]);

                        $items = $pic->carouselItems(2, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[2]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                        </form>
                    </div>
                </div>
            </td>
            <td style="<?= $pic->visibility($id)[3] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[3] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                        ]);

                        $items = $pic->carouselItems(3, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[3]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                        </form>
                    </div>
                </div>
            </td>
            <td style="<?= $pic->visibility($id)[4] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[4] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                        ]);

                        $items = $pic->carouselItems(4, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[4]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        <tr id="line-two"> <!-- here is what I need -->
            <td style="<?= $pic->visibility($id)[5] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[5] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                        ]);

                        $items = $pic->carouselItems(5, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[5]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                        </form>
                    </div>
                </div>
            </td>
            <td style="<?= $pic->visibility($id)[6] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[6] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                        ]);

                        $items = $pic->carouselItems(6, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[6]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                        </form>
                    </div>
                </div>
            </td>
            <td style="<?= $pic->visibility($id)[7] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[7] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                        ]);

                        $items = $pic->carouselItems(7, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[7]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                        </form>
                    </div>
                </div>
            </td>
            <td style="<?= $pic->visibility($id)[8] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[8] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                        ]);

                        $items = $pic->carouselItems(8, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[8]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value]) ?>
                        </form>
                    </div>
                </div>
            </td>
            <td style="<?= $pic->visibility($id)[9] ?>; text-align: right; max-width: 130px; border: solid; border-color: #c0c0c0; border-width: thin">
                <?= $pic->image($id)[9] ?>
                <br><br><br>
                <div>
                    <div style="position: relative; width: 30px; height: 30px;">
                        <?php Modal::begin([
                            'header' => 'Picture',
                            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-eye-open"></span>'],
                        ]);

                        $items = $pic->carouselItems(9, $id);
                        echo Carousel::widget([
                            'items' => $items,
                        ]);

                        Modal::end(); ?>
                    </div>

                    <div style="position: relative; width: 30px; height: 30px; margin-top: -30px; margin-left: 30px;">
                        <?php $value = $pic->value($id)[9]; ?>
                        <?php $span = '<span class="glyphicon glyphicon-remove" style="color: #f3dc0f; background-color: #000000;"></span>'; ?>
                        <form action="" method="post" style="position: relative">
                            <?= Html::submitButton($span, ['name' => 'delete', 'value' => $value, 'style' => 'background-color: #000000; border-color: #f3dc0f;']) ?>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>

<br><br><br><br>
<?php $s = '<span class="glyphicon glyphicon-search" style="color: #f3dc0f; background-color: #000000;"></span>'; ?>
<?= Html::submitButton($s, ['name' => 'delete', 'value' => $value, 'style' => 'background-color: #000000; border-color: #f3dc0f;']) ?>
