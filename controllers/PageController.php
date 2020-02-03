<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
/*Контроллер страниц сайта*/
class PageController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionListproduct()
    {
        $this->layout = 'default';
        return $this->render('listproduct');
    }


}
