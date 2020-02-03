<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\DefaultAsset;

DefaultAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


    <header>
      <div class="container">
        <div class="row header_top">
          <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="/"><img src="images/logo.png"></a>
          </div>
          <div class="btn_top_wrap col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="btn_and_search">
              <div class="btn_top">
                <a href="#"><i class="glyphicon glyphicon-map-marker"></i>Обратная связь</a>
                <a href="#"><i class="glyphicon glyphicon-user"></i>Личный кабинет</a>
                <a href="#"><i class="glyphicon glyphicon-lock"></i>Войти</a>
              </div>
              <div class="search_top">
                <form>
                    <input placeholder="Поиск" type="text">
                    <button type="submit" name="submit_search">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                </form>
              </div>
            </div>
            <div class="cart_top">
              <a href="#">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <span>0</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid menu_top">
        <div class="container">
          <div class="row">

                <?php

                    NavBar::begin([
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => ' ',
                        ],
                    ]);
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav'],
                        'items' => [
                            ['label' => 'Главная', 'url' => ['/site/index']],
                            ['label' => 'Список товаров', 'url' => ['/page/listproducts']],
                            ['label' => 'Contact', 'url' => ['/site/contact']],
                            Yii::$app->user->isGuest ? (
                                ['label' => 'Login', 'url' => ['/site/login']]
                            ) : (
                                '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>'
                            )
                        ],
                    ]);
                    NavBar::end();

                    ?>
<!--

                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                  </div>


                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Одежда</a></li>
                      <li><a href="#">Обувь</a></li>
                      <li><a href="#">Снаряжение</a></li>
                      <li><a href="#">Амуниция</a></li>
                      <li><a href="#">Сувениры</a></li>
                    </ul>
                  </div>
-->


          </div>
        </div>
      </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 contant_wrap">
                <div class="navigation">
                    <ul>
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                        <li><a href="#">Синглы</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 filter">
                <h3>Фильтры</h3>
                <form>
                    <label>Цена / руб</label>
            <div class="filter_price">
              <input type="text" value="0">
              -
              <input type="text" value="10000">
            </div>
                    <label>Сет</label>
            <div class="filter_check">
              <p><input type="checkbox"/>Theros</p>
              <p><input type="checkbox"/>Eldraine</p>
              <p><input type="checkbox"/>War of the Spark</p>
            </div>

                    <button type="submit">Подобрать</button>
                </form>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="short_description">
                    <img src="images/prod1.jpg">
                    <div>
                        <h2>Сингловая продукция</h2>
                        <p>Очень часто различного рода игроки сталкиваются с надобностью купить карточки определенного типа. Но как их найти? Наш магазин поможет вам с этим и подберет лучшую сингловую продукцию по вашим пребованиям!</p>
                    </div>
                </div>
          <div class="row content">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header_list_prod">
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Синглы</h1>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 value_prod">
                    <p>В наличии: 4</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 sortirovka_and_number_prod">
                    <form action="#">
                      <p><strong>Сортировка по:</strong>
                        <select name="sortirovka_prod">
                          <option selected="selected">--</option>
                          <option value="0">Цене, по возрастанию</option>
                          <option value="1">Цене, по убыванию</option>
                          <option value="2">Названию товара, от А до Я</option>
                          <option value="3">Названию товара, от Я до А</option>
                         </select>
                      </p>
                      <p><strong>Показать:</strong>
                        <select name="number_prod_str">
                          <option selected="selected">12</option>
                          <option value="0">24</option>
                          <option value="1">48</option>
                         </select>
                      </p>
                      <button type="submit">Вперед</button>
                    </form>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs view_list_prod">
                    <p><strong>Вид:</strong>
                      <a href="#"><i class="glyphicon glyphicon-th"></i><span>Сетка</span></a>
                      <a href="#"><i class="glyphicon glyphicon-th-list"></i><span>Список</span></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                  <a href="#" class="product_img">
                    <span>-10%</span>
                    <img src="images/prod4.jpg">
                  </a>
                  <a href="#" class="product_title">Нечестивый алтарь</a>
                  <div class="product_price">
                    <span class="price">600 руб</span>
                    <span class="price_old">700 руб</span>
                  </div>
                  <div class="product_btn">
                    <a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                    <a href="#" class="mylist">Список желаний</a>
                  </div>
                </div>
              </div>
                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                  <a href="#" class="product_img">
                    <span>-10%</span>
                    <img src="images/prod1.jpg">
                  </a>
                  <a href="#" class="product_title">Всадник ночи</a>
                  <div class="product_price">
                    <span class="price">420 руб</span>
                    <span class="price_old">450 руб</span>
                  </div>
                  <div class="product_btn">
                    <a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                    <a href="#" class="mylist">Список желаний</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                  <a href="#" class="product_img">
                    <span>-10%</span>
                    <img src="images/prod2.jpg">
                  </a>
                  <a href="#" class="product_title">Оракл Тассы</a>
                  <div class="product_price">
                    <span class="price">170 руб</span>
                    <span class="price_old">200 руб</span>
                  </div>
                  <div class="product_btn">
                    <a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                    <a href="#" class="mylist">Список желаний</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                  <a href="#" class="product_img">
                    <span>-10%</span>
                    <img src="images/prod3.jpg">
                  </a>
                  <a href="#" class="product_title">Пастырь кошмаров</a>
                  <div class="product_price">
                    <span class="price">230 руб</span>
                    <span class="price_old">250 руб</span>
                  </div>
                  <div class="product_btn">
                    <a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                    <a href="#" class="mylist">Список желаний</a>
                  </div>
                </div>
              </div>
          </div>
            </div>
        </div>
    </div>

    <div class="container-fluid write_email_and_sseti">
      <div class="container">
        <div class="row write_email_and_sseti_wrap">
          <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 write_email">
            <p>Рассылка</p>
            <form>
              <button type="submit">
                      <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
              <input type="text" placeholder="Введите E-mail">
            </form>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-5 hidden-xs sseti_wrap">
            <div>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-vk"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid footer">
      <div class="container">
        <div class="row menu_footer_and_contact">
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="footer_menu">
              <h3>Категории</h3>
              <ul>
                <li><a href="#">Синглы</a></li>
                <li><a href="#">Запечатанная продукция</a></li>
                <li><a href="#">Аксессуары</a></li>
                <li><a href="#">Мерч TradeCard</a></li>
              </ul>
            </div>
            <div class="footer_menu">
              <h3>Информация</h3>
              <ul>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Оплата</a></li>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Скидки</a></li>
                <li><a href="#">Карта сайта</a></li>
              </ul>
            </div>
            <div class="footer_menu">
              <h3>Учетная запись</h3>
              <ul>
                <li><a href="#">Войти</a></li>
                <li><a href="#">Зарегистрироваться</a></li>
                <li><a href="#">Мои заказы</a></li>
                <li><a href="#">Список желаний</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 contacts">
            <h3>Контакты</h3>
            <p><i class="glyphicon glyphicon-map-marker"></i>Адрес: ул. Канунникова, 9 г. Волгоград, 400011</p>
            <p><i class="glyphicon glyphicon-phone-alt"></i>Служба поддержки: 8 (800) 000-00-00</p>
            <p><i class="glyphicon glyphicon-envelope"></i>E-mail: info@myshop.ru</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 copy">
            <p>© 2017 не является действующим интернет-магазином</p>
          </div>
        </div>
      </div>
    </div>

















    <?php
    /*
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    */
    ?>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
