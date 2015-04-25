<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* This is the user index page. */

$this->title = 'Volume Conversions';
?>
<div class="conversion-volume container">
   <h1>Volume Conversions</h1>
    <?php if(isset($result)): ?>
      <div class="col-xs-8 conversionForm">
           <?php echo $result; ?>
           <?= Html::a('Another Conversion?', ['conversion/volume']) ?>
       </div>
    <?php else: ?>
        <?= Html::beginForm(['conversion/volume'], 'post', ['class' => 'conversionForm col-xs-8']) ?>
        <span>Convert</span>
        <?= Html::input('number', 'quantity', null, ['placeholder' => 'number']) ?>
        <?= Html::dropDownList('unitFrom', null, [ 1 => 'teaspoons' , 2 => 'tablespoons', 3 => 'ounces', 4 => 'cups', 5 => 'pints', 6 => 'milliliters', 7 => 'liters']) ?>
        <br/>
        <span>to</span>
        <?= Html::dropDownList('unitTo', null, ['teaspoons' => 'teaspoons', 'tablespoons' => 'tablespoons', 'ounces' => 'ounces', 'cups' => 'cups', 'pints' => 'pints', 'milliliters' => 'milliliters', 'liters' => 'liters']) ?>
        <br/>
        <?= Html::submitButton('Convert', ['class' => 'btn btn-red']) ?>
        <?= Html::endForm() ?>
    <?php endif ?>

    <div class="col-xs-4">
    <?= Html::img('@web/images/nurse4.jpg', ['alt' => 'A Nurse', 'class' => 'img-responsive conversionImg']) ?>
    </div>
</div>


