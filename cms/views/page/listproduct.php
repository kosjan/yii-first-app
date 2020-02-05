<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
$this->title = 'Список товаров';
?>
<div class="row">
    <div class="col-lg-12 contant_wrap">
        <div class="navigation">
            <ul>
                <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                <li><a href="#"><?php echo $categories['name'];?></a></li>
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
        <?php
          //echo "<pre>";
          //print_r($products_array);
          //echo "</pre>";
        ?>
        <img src="images/<?php echo $categories['img'];?>">
        <div>
          <h2><?php echo $categories['name'];?></h2>
          <p><?php echo $categories['description'];?></p>
        </div>
    </div>
<div class="row content">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header_list_prod">
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h1><?php echo $categories['name'];?></h1>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 value_prod">
    <p>В наличии: <?php echo $count_prod;?></p>
  </div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="row">
  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 sortirovka_and_number_prod">
    <?php $form = ActiveForm::begin();?>
    <p><strong>Сортировка по:</strong><?= $form->field($model, 'rule')->dropDownList([
                                                    '0' => 'Цене, по возрастанию',
                                                    '1' => 'Цене, по убыванию',
                                                    '2' => 'Названию товара, от А до Я',
                                                    '3' => 'Названию товара, от Я до А'],
                                    $params = [
                                        'prompt' => '--',
                                    ]
              );?></p>
    <p><strong>Показать:</strong><?= $form->field($model, 'number')->dropDownList(['3' => '3', '24' => '24', '48' => '48'], $params = [
                                      'options' => ['3' => ['Selected' => true]],
                                    ]
              );?></p>
      <?php echo Html::submitButton('Вперед');?>
    <?php ActiveForm::end();?>
  </div>
</div>
</div>
    <?php foreach ($products_array as $product_array):?>

    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
      <div class="product">
        <a href="<?=Url::toRoute(['page/product','id' => $product_array['id']]);?>" class="product_img">
          <?php if ($product_array['price'] != 0):?>
          <span>-<?php echo round(100 - $product_array['price_old']*100/$product_array['price']);?>%</span>
          <?php endif;?>
          <img src="images/<?php echo $product_array['img'];?>">
        </a>
        <a href="<?=Url::toRoute(['page/product','id' => $product_array['id']]);?>" class="product_title"><?php echo $product_array['name'];?></a>
        <div class="product_price">
          <span class="price"><?php echo $product_array['price_old'];?> руб</span>
          <?php if ($product_array['price'] != 0):?>
          <span class="price_old"><?php echo $product_array['price'];?> руб</span>
        <?php endif;?>

        </div>
        <div class="product_btn">
          <a href="<?=Url::toRoute(['page/cart','id' => $product_array['id']]);?>" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
          <a href="<?=Url::toRoute(['page/listorder','id' => $product_array['id']]);?>" class="mylist">Список желаний</a>
        </div>
      </div>
    </div>

    <?php endforeach;?>
</div>
<?php LinkPager::widget(['pagination' => $pagination]) ?>
</div>
