<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Карточка товара';
?>
<div class="row">
    <div class="col-lg-12 contant_wrap">
        <div class="navigation">
            <ul>
                <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                <li><a href="#"><?php echo $products_array['name'];?></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
    <div class="img_prod">
        <img src="images/<?php echo $products_array['img'];?>">
    </div>
</div>

<div class="col-lg-5 col-md-8 col-sm-7 col-xs-12">
    <div class="content_prod">
        <h1><?php echo $products_array['name'];?></h1>
        <p><span>Артикул:</span> <?php echo $products_array['code'];?></p>

        <?php
            if($products_array['count'] > 0):
        ?>
            <p>В наличии - <strong class="count_prod"><?php echo $products_array['count'];?></strong></p>
        <?php
            else:
        ?>
                <p>Нет в наличии</p>
        <?php
            endif;
        ?>
        <p><?php echo $products_array['description'];?></p>
    </div>
</div>

<div class="col-lg-3 col-md-8 col-sm-7 col-sm-offset--5 col-xs-12">
    <div class="order_prod">
        <p class="price_prod"><?php echo $products_array['price'];?> руб</p>

        <?php
            if(!empty($products_array['price_old'])):
        ?>
            <p class="price_old_prod"><?php echo $products_array['price_old'];?> руб</p>
        <?php
            endif;
        ?>

        <?php
            $class = "";
            if($products_array['count'] > 0):
        ?>
        <p>Количество:</p>
        <form class="form_count_prod">

            <button type="button" class="minus">-</button>
            <input type="text" name="" value="1" class="input_text">
            <button type="button" class="plus">+</button>
        </form>
        <?php
            else:
            $class = "disabled";
        ?>
            <p>Нет в наличии</p>
        <?php
            endif;
        ?>
        <a href="<?=Url::toRoute('page/cart');?>" class="add_cart_prod <?php echo $class;?>"><i class="glyphicon glyphicon-shopping-cart"></i> В корзину</a>
        <a href="#" class="add_mylist_prod <?php echo $class;?>"><i class="glyphicon glyphicon-heart"></i>В список желаний</a>
    </div>
</div>


    <div class="r_prod">
        <h3>Отзывы:</h3>
        <div class="reviews">
            <div class="reviews_img">
                <img src="images/avatar.png">
            </div>
            <div class="reviews_contant">
                <p class="reviews_title">Иван <span><?php echo date("d.m.y");?></span></p>
                <div class="reviews_rating">
                    <i class="glyphicon glyphicon-star active"></i>
                    <i class="glyphicon glyphicon-star active"></i>
                    <i class="glyphicon glyphicon-star active"></i>
                    <i class="glyphicon glyphicon-star active"></i>
                    <i class="glyphicon glyphicon-star no_active"></i>
                </div>
                <p class="reviews_text"><?php echo $products_array['description'];?></p>
            </div>
        </div>
        <div class="reviews_form">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>Отзыв о товаре:</p>
            </div>
            <form action="/" method="post">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="name" placeholder="Имя">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="col-lg-12">
                    <textarea name="text" placeholder="Отзыв"></textarea>
                </div>
                <div class="col-lg-12">
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                </div>
                <div class="col-lg-12">
                    <button>Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>
