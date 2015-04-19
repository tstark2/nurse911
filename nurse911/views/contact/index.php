<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* This is the contacts index page */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-red']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'class' => 'contactList',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'description',
            'phone',
            'extension',
            'email:email',
            'fax',
            //'userRef',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
