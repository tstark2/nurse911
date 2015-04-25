<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* This is the user index page. */

$this->title = 'Weight Conversions';
?>
<div class="conversion-weight container">
   <h1>Weight Conversions</h1>
    <?php if(isset($result)): ?>
       <div class="col-xs-8 conversionForm">
           <?php echo $result; ?>
           <?= Html::a('Another Conversion?', ['conversion/weight']) ?>
        </div>
    <?php else: ?>
        <?= Html::beginForm(['conversion/weight'], 'post', ['class' => 'conversionForm col-xs-8']) ?>
        <span>Convert</span>
        <?= Html::input('number', 'quantity', null, ['placeholder' => 'number']) ?>
        <?= Html::dropDownList('unitFrom', null, [ 1 => 'ounces' , 2 => 'pounds', 3 => 'grams', 4 => 'kilograms']) ?>
        <br/>
        <span>to</span>
        <?= Html::dropDownList('unitTo', null, ['ounces' => 'ounces', 'pounds' => 'pounds', 'grams' => 'grams', 'kilograms' => 'kilograms']) ?>
        <br/>
        <?= Html::submitButton('Convert', ['class' => 'btn btn-red']) ?>
        <?= Html::endForm() ?>
    <?php endif ?>

    <div class="col-xs-4">
    <?= Html::img('@web/images/nurse3.jpg', ['alt' => 'A Nurse', 'class' => 'img-responsive conversionImg']) ?>
    </div>

</div>
