<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Categories;
use app\models\SortForm;
use app\models\Products;
use app\models\Comments;
use yii\web\NotAcceptableHttpException;
use yii\data\Pagination;
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
          //id категории
          $id = $_GET['id'];


          $categories = Categories::find()->where(['id' => $id ])->asArray()->one();

          if(count($categories) > 0)

          {
            $model = new SortForm();

            $count_prod = count(Products::find()->where(['category' => $id ])->asArray()->all());

            $page = 1; // номер страницы
            $rule = null; // сортировка
            $number = 12; // кол-во товаров на странице
            if(isset($_GET['page']) && $_GET['page'] != "" && filter_var($_GET['page'], FILTER_VALIDATE_INT))
            {
              $page = $_GET['page'];

            }
            //Обработчик для формы сортировки
            if($model->load(Yii::$app->request->post()) && $model->validate())
            {
              if(isset($model->number) && !empty($model->number))
              {
                $number = $model->number;

              }
              if(isset($model->rule))
              {
                switch ($model->rule) {
                  case 0:

                    $products_array = $this->selectListProd($id , ['price_old' => SORT_ASC], $number, $page);
                    break;
                  case 1:
                    $products_array = $this->selectListProd($id , ['price_old' => SORT_DESC], $number, $page);
                    break;
                  case 2:
                    $products_array = $this->selectListProd($id , ['name' => SORT_ASC], $number, $page);
                    break;
                  case 3:
                    $products_array = $this->selectListProd($id , ['name' => SORT_DESC], $number, $page);
                    break;

                }
              }
              else {

                $products_array = $this->selectListProd($id , ['id' => SORT_ASC], $number, $page);
              }

            }
            else {

              $products_array = $this->selectListProd($id , ['id' => SORT_ASC], $number, $page);
            }

            //Колличество страниц
                $count_pages = ceil($count_prod / $number);
                $pagination = new Pagination([
                'defaultPageSize' => $number,
                'totalCount' => $count_pages,
]);

            return $this->render('listproduct', compact('categories', 'products_array','count_prod', 'model', 'count_pages', 'id', 'pagination'));
          }
        }
        return $this->redirect(['page/catalog']);

    }

    private function selectListProd($id, $field_sort, $limit, $page_start)
    {
      if($page_start == 1){
              $page_start = 0;}
      else{
        $page_start = ($page_start - 1) * $limit;}

      return Products::find()->where(['category' => $id])->asArray()->orderBy($field_sort)->limit($limit)->offset($page_start)->all();
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
      $this->layout = 'product';
      if (isset($_GET['id']) && !empty($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){

        $id = $_GET['id'];

      }
      else{
        throw new NotAcceptableHttpException;
      }
      $products_array = Products::find()->where(['id' => $id ])->asArray()->one();
      //$categories = Categories::find()->asArray()->all();

      return $this->render('product', compact('id', 'products_array'));
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
