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
        $request = Yii::$app->request;
        if($request->isPost) {
            $behavior = $request->post('behavior');
            $cardio = $request->post('cardio');
            $respiratory = $request->post('respiratory');
            $output = $request->post('output');
            $total = $behavior + $cardio + $respiratory + $output;

            if($total <= 3) {
                $color = "#008800";
                $action = "No action needed, reassess as per order";
            } else if($total > 3 && $total < 7) {
                $color = "#ffcc00";
                $action = "Notify charge nurse, call junior resident, and notify staff physician";
            } else {
                $color = "#ff0000";
                $action = "Call the Rapid Response Team, call staff physician and junior resident";
            }

            $result = ['total' => $total, 'color' => $color, 'action' => $action];

            return $this->render('pews', ['result' => $result]);

        } else {
            return $this->render('pews');
        }
    }

    public function actionFlacc()
    {
        $request = Yii::$app->request;
        if($request->isPost) {
            $face = $request->post('face');
            $legs = $request->post('legs');
            $activity = $request->post('activity');
            $cry = $request->post('cry');
            $consolability = $request->post('consolability');
            $total = $face + $legs + $activity + $cry + $consolability;

            if($total < 1) {
                $pain = "no pain";
            } else if ($total >= 1 && $total < 4) {
                $pain = "mild pain";
            } else if ($total > 3 && $total < 7) {
                $pain = "moderate pain";
            } else {
                $pain = "severe pain";
            }

            $result = ['score' => $total, 'pain' => $pain];

            return $this->render('flacc', ['result' => $result]);
        } else {
            return $this->render('flacc');
        }
    }

    public function actionWbf()
    {
        return $this->render('wbf');
    }
}
