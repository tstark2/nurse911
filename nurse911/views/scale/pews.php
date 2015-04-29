<?php

use yii\helpers\Html;

$this->title = 'Pediatric Early Warning Signs';
?>
<div class="scale-pews container">
    <h1>Pediatric Early Warning Signs</h1>
       <?= Html::beginForm(['scale/pews'], 'post', ['class' => 'scale col-xs-8']) ?>
           <h3>Behavior</h3>
            <?= Html::radioList('behavior', null, [
                0 => '0: Playing/Appropriate or sleeping comfortably',
                1 => '1: Irritable and consolable',
                2 => '2: Irritable and inconsolable',
                3 => '3: Lethargic, confused, or reduced response to pain'
            ]) ?>
            <h3>Cardiovascular</h3>
            <?= Html::radioList('cardio', null, [
                0 => '0: Pink or Capillary refill time 2 seconds or less',
                1 => '1: Pale or capillary refil time 3 seconds',
                2 => '2: Grey or capillary refill time 4 seconds or heart rate 20 above or below normal for age',
                3 => '3: Grey and mottled or capillary refill time greater than 4 seconds or heart reate 30 above or below normal for age',
            ]) ?>
            <h3>Respiratory</h3>
            <?= Html::radioList('respiratory', null, [
                0 => '0: Within normal rate, no retractions, SpO2 98-100% on Room Air',
                1 => '1: RR greater than 10 above normal or SpO2 98-100% on O2 device, or SpO2 94-97% on Room Air or using accessory muscles',
                2 => '2: RR greater than 20 above normal limits or SpO2 90-93% or Retractions',
                3 => '3: RR 5 below normal or SpO2 less than 90% or Retractions and/or grunting',
            ]) ?>
            <h3>Output</h3>
            <?= Html::radioList('output', null, [
                0 => '0: Reaching target urine output (0.5 to 1 mL/kg/hour) over last 4 hours and 1 or fewer BMs or emesis events in last 12 hours',
                1 => '1: 2 BMs or emesis events in last 12 hours',
                2 => '2: 3 BMs or emesis events in last 12 hours',
                3 => '3: Urine output less than 0.5 mL/kg/hour over last 4 hours, or more than 3 BMs or emesis events in last 12 hours',
            ]) ?>
            <?= Html::submitButton('Calculate', ['class' => 'btn btn-red']) ?>
    <?php Html::endForm() ?>
</div>
