<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* This is the user index page. */

$this->title = 'Weight Conversions';
?>
<div class="conversion-weight container">
    <?= Html::beginForm(['conversion/weight'], 'post', ['class' => 'conversionForm']) ?>
    <span>Convert</span>
    <?= Html::input('number', 'quantity') ?>
    <?= Html::dropDownList('unitFrom', null, [ 1 => 'ounces' , 2 => 'pounds', 3 => 'grams', 4 => 'kilograms']) ?>
    <span>to</span>
    <?= Html::dropDownList('unitTo', null, ['ounces' => 'ounces', 'pounds' => 'pounds', 'grams' => 'grams', 'kilograms' => 'kilograms']) ?>
    <?= Html::submitButton('Convert') ?>
    <?= Html::endForm() ?>

</div>
