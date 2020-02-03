<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
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
        $this->layout = 'default';
        return $this->render('listproduct');
    }
    /**
     * Для страницы новостей
     */
    public function actionNews()
    {
        $this->layout = 'default';
        return $this->render('news');
    }
    /**
    * Для страницы контактов
    */
   public function actionContacts()
   {
       $this->layout = 'default';
       return $this->render('contacts');
   }
   /**
   * Для страницы входа
   */
  public function actionLogin()
  {
      $this->layout = 'default';
      return $this->render('login');
  }

}
