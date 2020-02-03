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
     /**
      * Для страницы списка товаров
      */
    public function actionListproduct()
    {
        return $this->render('listproduct');
    }
    /**
     * Для страницы новостей
     */
    public function actionNews()
    {
        return $this->render('news');
    }
    /**
     * Для страницы контактов
     */
    public function actionContacts()
    {
        return $this->render('contacts');
    }


}
