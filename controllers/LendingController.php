<?php

namespace app\controllers;

use yii\web\Controller;

class LendingController extends Controller
{
    public $layout = 'lending';
    public function actionFeatures(){
        return $this ->render('features');
    }
    public function actionAbout(){
        return $this ->render('about_us');
    }
    public function actionWhy(){
        return $this ->render('why');
    }
    public function actionTeam(){
        return $this ->render('team');
    }
    public function actionComment(){
        return $this ->render('Comment');
    }
    public function actionBlog(){
        return $this ->render('blog');
    }
    public function actionContact(){
        return $this ->render('contact');
    }
}