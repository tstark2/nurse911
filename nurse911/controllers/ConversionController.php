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
    //Controller for the Weight Conversions
    public function actionWeight()
    {
        $request = Yii::$app->request;

        if($request->isPost) { //If information has been posted
            //assign all the posted information to variables
            $quantity = $request->post('quantity');
            $unitFrom = $request->post('unitFrom');
            $unitTo = $request->post('unitTo');
            $labels = ['ounces', 'pounds', 'grams', 'kilograms'];
            $ufText = $labels[$unitFrom -1];

            $weight = Weight::findById($unitFrom); //query the database for the conversion formulas

            //convert the formula to a float from a string (MySQL doesn't store floats very well, using strings kept things accurate)
            $formula = floatval($weight->$unitTo);

            $result = round(($quantity * $formula), 2); //round the result to two decimal places

            $weightString = "$quantity $ufText equals $result $unitTo"; //compile the results string

            return $this->render('weight', ['result' => $weightString]); //return it to the view


        } else { //otherwise, just render the view
            return $this->render('weight');
        }
    }

    //Controller for the Volume Conversions. Does exactly the same thing as the weight controller, just with the volume model.
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

    //I decided not to do temperatutre.
    /*public function actionTemperature()
    {
        return $this->render('temperature');
    }*/

    //The controller for Height Conversions. Does exactly the same thing as the other two controllers, just to the height model.
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
