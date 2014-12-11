<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Categories Detail</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/products_category_detail.css">
  </head>
  <body>
      <div class="top">
        <h2><?=$product_category[0]['title']?> page <?=$start?> </h2>
   
        <div class="top-page-nav">
          <ul>
            <li><a href="/category/<?=$id?>/1">first</a></li>
            <?php 
              if(($start-1)>0){
            ?>
            <li><a href="/category/<?=$id?>/<?=$start-1?>">prev</a></li>
            <?php
              }
            ?>
            <li>page <?=$start?></li>
            <?php 
              if(($start+1)<=ceil($pc_count/5)){
            ?>
            <li><a href="/category/<?=$id?>/<?=$start+1?>">next</a></li>
            <?php
              }
            ?>
          </ul>
        </div>
      <!-- END top-page-nav -->
      </div>
    <!-- END Category Top -->

      <div class="body">
        <div class="body-top-detail">
          <img src="/assets/file/pix/category/<?=$product_category[0]['id']?>_full.png" alt="<?=$product_category[0]['title']?>"/>
          <p><?=$product_category[0]['cDescription']?></p>
        </div>
      <!-- END body top detail -->
      <?php  
        foreach($product_category AS $val) {
      ?>
        <div>
          <a href="/item/<?=$val['pid']?>">
            <img class="imgsize" src="/assets/file/pix/thumbs/<?=$val['pid']?>_thumb.png" alt="<?=$val['pid']?>"/>
            <p>$<?=number_format($val['price']*$val['unitqty'], 2,'.',',')?></p>
          </a>
        </div>
      <?php
        }
      ?>
      </div>
    <!-- END body -->
      
      <div class="product-page-nav">
        <ul>
      <?php  
        for($i=0, $j=ceil($pc_count/5); $i<$j; $i++) {
      ?>
          <li><a href="/category/<?=$id?>/<?=$i+1?>"><?=$i+1?></a></li>
      <?php 
        }
      ?>
        </ul>
      </div>
    <!-- END product page nav -->  
  </body>
</html>