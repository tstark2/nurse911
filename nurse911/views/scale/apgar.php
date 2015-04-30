<?php

use yii\helpers\Html;

$this->title = 'APGAR Score';
?>
<div class="scale-apgar container">
    <h1>APGAR Score</h1>
    <?php if(isset($result)): ?>
        <div class="scale col-xs-8">
            <?php
                echo "<h2>APGAR Score: $result </h2>";
            ?>
            <?= Html::a('Another Assesment?', ['scale/apgar']) ?>
        </div>
    <?php else: ?>
    <?= Html::beginForm(['scale/apgar'], 'post', ['class' => 'scale col-xs-8']) ?>
           <h3>Appearance/Complexion</h3>
            <?= Html::radioList('appearance', null, [
                0 => '0: Blue or pale all over',
                1 => '1: Blue at extremities, body pink (acrocyanosis)',
                2 => '2: Body and extremities pink (no cyanosis)'
            ]) ?>
            <h3>Pulse Rate</h3>
            <?= Html::radioList('pulse', null, [
                0 => '0: Pulse Absent',
                1 => '1: Less than 100 beats per minute',
                2 => '2: 100 beats per minute or more',
            ]) ?>
            <h3>Grimace (Reflex Irritability)</h3>
            <?= Html::radioList('grimace', null, [
                0 => '0: No response to stimulation',
                1 => '1: Grimace on suction or aggressive stimulation',
                2 => '2: Cry on stimulation'
            ]) ?>
            <h3>Activity</h3>
            <?= Html::radioList('activity', null, [
                0 => '0: No Activity',
                1 => '1: Some flexion',
                2 => '2: Flexes arms and legs that resist extension'
            ]) ?>
            <h3>Respiratory Effort</h3>
            <?= Html::radioList('respiratory', null, [
                0 => '0: Respiration Absent',
                1 => '1: Weak, irregular, or gasping respiration',
                2 => '2: Strong, lusty cry'
            ]) ?>
            <?= Html::submitButton('Calculate', ['class' => 'btn btn-red']) ?>
    <?= Html::endForm() ?>
    <?php endif ?>

    <div class="col-xs-4">
    <?= Html::img('@web/images/nurse7.jpg', ['alt' => 'A Nurse', 'class' => 'img-responsive']) ?>
    </div>
</div>
