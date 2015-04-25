<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Weight;
use app\models\Volume;
use app\models\Height;

class ConversionController extends Controller
{
    public function actionWeight()
    {
        $request = Yii::$app->request;

        if($request->isPost) {
            $quantity = $request->post('quantity');
            $unitFrom = $request->post('unitFrom');
            $unitTo = $request->post('unitTo');
            $labels = ['ounces', 'pounds', 'grams', 'kilograms'];
            $ufText = $labels[$unitFrom -1];

            $weight = Weight::findById($unitFrom);

            $formula = floatval($weight->$unitTo);

            $result = round(($quantity * $formula), 2);

            $weightString = "$quantity $ufText equals $result $unitTo";

            return $this->render('weight', ['result' => $weightString]);


        } else {
            return $this->render('weight');
        }
    }

    public function actionVolume()
    {
        $request = Yii::$app->request;

        if($request->isPost) {
            $quantity = $request->post('quantity');
            $unitFrom = $request->post('unitFrom');
            $unitTo = $request->post('unitTo');
            $labels = ['teaspoons', 'tablespoons', 'fluid ounces', 'cups', 'pints', 'milliliters', 'liters'];
            $ufText = $labels[$unitFrom -1];

            $volume = Volume::findById($unitFrom);

            $formula = floatval($volume->$unitTo);

            $result = round(($quantity * $formula), 2);

            $volumeString = "$quantity $ufText equals $result $unitTo";

            return $this->render('volume', ['result' => $volumeString]);

        } else {
            return $this->render('volume');
        }
    }

    /*public function actionTemperature()
    {
        return $this->render('temperature');
    }*/

    public function actionHeight()
    {
        $request = Yii::$app->request;

        if($request->isPost) {
            $quantity = $request->post('quantity');
            $unitFrom = $request->post('unitFrom');
            $unitTo = $request->post('unitTo');
            $labels = ['inches', 'feet', 'millimeters', 'centimeters', 'meters'];
            $ufText = $labels[$unitFrom -1];

            $height = Height::findById($unitFrom);

            $formula = floatval($height->$unitTo);

            $result = round(($quantity * $formula), 2);

            $volumeString = "$quantity $ufText equals $result $unitTo";

            return $this->render('height', ['result' => $volumeString]);

        } else {
            return $this->render('height');
        }
    }
}
