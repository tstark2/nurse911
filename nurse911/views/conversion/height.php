<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* This is the user index page. */

$this->title = 'Height Conversions';
?>
<div class="conversion-height container">
    <h1>Height Conversions</h1>
    <?php if(isset($result)): ?>
        <div class="col-xs-8 conversionForm">
           <?php echo $result; ?>
           <?= Html::a('Another Conversion?', ['conversion/height']) ?>
        </div>
    <?php else: ?>
        <?= Html::beginForm(['conversion/height'], 'post', ['class' => 'conversionForm col-xs-8']) ?>
        <span>Convert</span>
        <?= Html::input('number', 'quantity', null, ['placeholder' => 'number']) ?>
        <?= Html::dropDownList('unitFrom', null, [ 1 => 'inches' , 2 => 'feet', 3 => 'millimeters', 4 => 'centimeters', 5 => 'meters']) ?>
        <br/>
        <span>to</span>
        <?= Html::dropDownList('unitTo', null, ['inches' => 'inches', 'feet' => 'feet', 'millimeters' => 'millimeters', 'centimeters' => 'centimeters', 'meters' => 'meters']) ?>
        </br>
        <?= Html::submitButton('Convert', ['class' => 'btn btn-red']) ?>
        <?= Html::endForm() ?>
    <?php endif ?>

    <div class="col-xs-4">
    <?= Html::img('@web/images/nurse5.jpg', ['alt' => 'A Nurse', 'class' => 'img-responsive conversionImg']) ?>
    </div>

</div>
