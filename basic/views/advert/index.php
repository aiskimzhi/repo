<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdvertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adverts';
?>
<div class="advert-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Advert', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php


    echo 'form with calender<br>';
    echo Html::beginForm("", 'get');

    echo DatePicker::widget(['name' => 'before']);
    echo DatePicker::widget(['name' => 'after']);

    echo Html::submitButton('send', ['name' => 'send', 'value' => 'send']);

    echo Html::endForm();

    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'user_id',
            'region_id',
            'city_id',
            'category_id',
            'price',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
