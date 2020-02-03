<?php

/* @var $this yii\web\View */

$this->title = 'Список товаров';
?>
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
