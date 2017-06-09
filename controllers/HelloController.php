<?php
/**
 * Created by PhpStorm.
 * User: mackie
 * Date: 17-6-8
 * Time: 上午9:37
 */

namespace app\controllers;


use app\models\Debt;
use yii\web\Controller;

class HelloController extends Controller
{

    public function actionHello()
    {
        \Yii::info("mouqi is an idiot");
        echo 'sb...........';
    }
    public function actionInsert()
    {
        $debt = new Debt;
        $debt->uuid = '123';
        $debt->amount = 100;
        $debt->insert();
    }
}