<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Categories;
use app\models\Products;
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

        if(isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT))
        {

          $categories = Categories::find()->where(['id' => $_GET['id']])->asArray()->one();
          if(count($categories) > 0)

          {
            $products_array = Products::find()->where(['category' => $_GET['id']])->asArray()->all();
            $count_prod = count($products_array);
            return $this->render('listproduct', compact('categories', 'products_array','count_prod'));
          }
        }
        return $this->redirect(['page/catalog']);

    }
    /**
     * Для страницы каталога
     */
   public function actionCatalog()
   {
       $this->layout = 'default';

       $categories = Categories::find()->asArray()->all();

       return $this->render('catalog', compact('categories'));
   }

   /**
    * Для страницы товаров
    */
  public function actionProduct()
  {
      $this->layout = 'default';

      //$categories = Categories::find()->asArray()->all();

      return $this->render('product');
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
  /**
  * Для страницы корзины
  */
 public function actionCart()
 {
     $this->layout = 'default';
     return $this->render('cart');
 }
 /**
 * Для страницы списка желаний
 */
public function actionListorder()
{
    $this->layout = 'default';
    return $this->render('listorder');
}

}
