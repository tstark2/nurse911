<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\models\Weight;

class ConversionController extends Controller
{
    public function actionWeight()
    {
        $request = Yii::$app->request;

        if($request->isPost) {
            $quantity = $request->post('quantity');
            $unitFrom = $request->post('unitFrom');
            $unitTo = $request->post('unitTo');

            $model = Weight::findById($unitFrom);

            print_r($model);

            echo "<p>Convert $quantity $unitFrom to $unitTo";
        } else {
            return $this->render('weight');
        }
    }

    public function actionVolume()
    {
        return $this->render('volume');
    }

    public function actionTemperature()
    {
        return $this->render('temperature');
    }

    public function actionHeight()
    {
        return $this->render('height');
    }
}
