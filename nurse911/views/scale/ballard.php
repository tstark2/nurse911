<?php

use yii\helpers\Html;

$this->title = 'Ballard Maturational Assesment';
?>
<div class="scale-ballard container">
    <h1>Ballard Maturational Assesment</h1>
       <?php if(isset($result)): ?>
       <div class="scale col-xs-12">
           <?php
                echo "<h3>Ballard Score: " . $result['score'] . "</h3>";
                echo "<h3>Aproximate Gestational Age: " . $result['age'] . " weeks</h3>";
           ?>
           <?= Html::a('Another Assesment?', ['scale/ballard']) ?>
       </div>
       <?php else: ?>
       <div class="row">
        <?= Html::beginForm(['scale/ballard'], 'post', ['class' => 'scale col-xs-12']) ?>
           <article class="col-xs-6">
               <h3>Skin</h3>
                <?= Html::radioList('skin', null, [
                    -1 => '-1: Skin is sticky, friable, and/or transparent',
                    0 => ' 0: Skin is gelatinous, red, and/or translucent',
                    1 => ' 1: Smooth pink skin with visible veins',
                    2 => ' 2: Skin has superficial peeling or rash, shows few veins',
                    3 => ' 3: Skin is cracking, has pale areas, rarely shows veins',
                    4 => ' 4: Skin like parchment, has deep cracks, shows no blood vessels',
                    5 => ' 5: Skin is leathery, cracked, and/or wrinkled'
                ]) ?>
                <h3>Lanugo</h3>
                <?= Html::radioList('lanugo', null, [
                    -1 => '-1: None',
                    0 => ' 0: Sparse',
                    1 => ' 1: Abundant',
                    2 => ' 2: Thinning',
                    3 => ' 3: Bald areas',
                    4 => ' 4: Mostly bald',
                    5 => ' 5: Sparse'
                ]) ?>
                <h3>Plantar Surface</h3>
                <?= Html::radioList('plantar', null, [
                    -2 => '-2: Heel to Toe measures less than 40 millimeters',
                    -1 => '-1: Heel to Toe measures between 40 and 50 millimeters',
                    0 => ' 0: Heel to Toe measures greater than 50 millimeters, surface has no crease',
                    1 => ' 1: Faint red marks on surface',
                    2 => ' 2: Anterior transverse crease only',
                    3 => ' 3: Creases over anterior two-thirds of sole',
                    4 => ' 4: Creases over entire sole'
                ]) ?>
            </article>

            <article class="col-xs-6 right">
                <h3>Breast</h3>
                <?= Html::radioList('breast', null, [
                    -1 => '-1: Imperceptible',
                    0 => ' 0: Barely perceptible',
                    1 => ' 1: Flat areola, no bud',
                    2 => ' 2: Stippled areola, 1 to 2 millimeter bud',
                    3 => ' 3: Raised areola, 3 to 4 millimeter bud',
                    4 => ' 4: Full areola, 5 to 10 millimeter bud'
                ]) ?>
                <h3>Eye and Ear</h3>
                <?= Html::radioList('eyeEar', null, [
                    -2 => '-2: Eyelids tightly fused',
                    -1 => '-1: Eyelids loosley fused',
                    0 => ' 0: Eyelids open, pinna flat and stay folded',
                    1 => ' 1: Slightly curved pinna, soft, slow recoil',
                    2 => ' 2: Well-curved pinna, soft but ready recoil',
                    3 => ' 3: Pinna formed and firm, instant recoil',
                    4 => ' 4: Thick cartilage, ear stiff',
                ]) ?>
                <h3>Genitalia</h3>
                <?= Html::radioList('genitalia', null, [
                    -1 => '-1: Male: Scrotum flat and smooth || Female: Clitoris prominent and labia flat',
                    0 => ' 0: Male: Scrotum empty, faint rugae || Female: Prominent clitoris and small labia minora',
                    1 => ' 1: Male: Testes in upper canal, rare rugae || Female: Prominent clitoris and enlarging minora',
                    2 => ' 2: Male: Testes descending, few rugae || Female: Labia majora and minora equally prominent',
                    3 => ' 3: Male: Testes down, good rugae || Female: Labia majora large, labia minora small',
                    4 => ' 4: Male: Testes pendulous, deep rugae || Female: Labia majora cover clitoris and labia minora'
                ]) ?>
            </article>
            <?= Html::submitButton('Calculate', ['class' => 'btn btn-red']) ?>
            </div>


    <?= Html::endForm() ?>
    <?php endif ?>
    <!--<div class="col-xs-4">
    <?= Html::img('@web/images/nurse10.jpg', ['alt' => 'A Nurse', 'class' => 'img-responsive']) ?>
    </div>-->
</div>
