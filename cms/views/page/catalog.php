<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Каталог';
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
    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 left_banner_menu">
        баннерное меню
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 catalog">

      <div class="row content">
        <?php foreach ($categories as $category):?>
          <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 catalog_category">
            <a href="<?=Url::toRoute(['page/listproduct','id' => $category['id']]);?>"><img src="images/<?php echo $category['img'];?>"></a>
            <a href="<?=Url::toRoute(['page/listproduct','id' => $category['id']]);?>"><?php echo $category['name'];?></a>
          </div>
            <?php endforeach; ?>
      </div>
    </div>
