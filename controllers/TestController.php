<?php

namespace app\controllers;

use app\models\MyForm;

class TestController extends \yii\web\Controller
{
    public function actionHello()
    {
        return'Hello world!';
    }
    public function actionForm(){
        $model = new MyForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()){
            var_dump($model);
        }
        return $this->render('form', [
            'model' => $model
        ]);
    }
}