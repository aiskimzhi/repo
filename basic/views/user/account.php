<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'My Account';
?>

<div class="user-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'first_name',
            'last_name',
            'email:email',
            'skype',
            'phone',
        ],
    ]) ?>

    <p>
        <?= Html::a('Update data', [Url::toRoute('user/update-data')], ['class' => 'btn btn-primary']) ?>

        <?= Html::a('Change password', [Url::toRoute('user/change-password')], ['class' => 'btn btn-primary'])?>

        <?= Html::a('Delete account', ['delete-account'], [
            'class' => 'btn btn-default',
            'data' => [
                'confirm' => 'Are you sure you want to delete your account?',
                'method' => 'post',
            ],
        ]) ?>

        <?= Html::a('Create Advert', [Url::toRoute('advert/create')], ['class' => 'btn btn-warning']) ?>

        <?= Html::a('My Adverts', [Url::toRoute('advert/my-adverts')], ['class' => 'btn btn-info']) ?>

        <?= Html::a('My Bookmarks', [Url::toRoute('site/index')], ['class' => 'btn btn-info'])?>


    </p>
</div>