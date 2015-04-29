<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ScaleController extends Controller
{
    public function actionGcs()
    {
        $request = Yii::$app->request;
        if($request->isPost) {
            $eye = $request->post('eye');
            $verbal = $request->post('verbal');
            $motor = $request->post('motor');
            $total = $eye + $verbal + $motor;

            if($total < 9) {
                $string = "Severe Brain Injuries";
            } else if($total >= 9 && $total < 13) {
                $string = "Moderate Brain Injuries";
            } else {
                $string = "Minor Brain Injuries";
            }

            $result = ['eye' => $eye, 'verbal' => $verbal, 'motor' => $motor, 'total' => $total, 'text' => $string];
            return $this->render('gcs', ['result' => $result]);
        } else {
            return $this->render('gcs');
        }
    }

    public function actionApgar()
    {
        $request = Yii::$app->request;
        if($request->isPost) {
            $appearance = $request->post('appearance');
            $pulse = $request->post('pulse');
            $grimace = $request->post('grimace');
            $activity = $request->post('activity');
            $respiratory = $request->post('respiratory');
            $total = $appearance + $pulse + $grimace + $activity + $respiratory;
            return $this->render('apgar', ['result' => $total]);
        } else {
            return $this->render('apgar');
        }
    }

    public function actionBallard()
    {
        $request = Yii::$app->request;
        if($request->isPost) {
            $skin = $request->post('skin');
            $lanugo = $request->post('lanugo');
            $plantar = $request->post('plantar');
            $breast = $request->post('breast');
            $eyeEar = $request->post('eyeEar');
            $genitalia = $request->post('genitalia');
            $total = $skin + $lanugo + $plantar + $breast + $eyeEar + $genitalia;
            $age = (2 * $total + 120) / 5;
            $result = ['score' => $total, 'age' => $age];
            return $this->render('ballard', ['result' => $result]);
        } else {
            return $this->render('ballard');
        }
    }

    public function actionPews()
    {
        return $this->render('pews');
    }

    public function actionFlacc()
    {
        return $this->render('flacc');
    }

    public function actionWbf()
    {
        return $this->render('wbf');
    }
}
