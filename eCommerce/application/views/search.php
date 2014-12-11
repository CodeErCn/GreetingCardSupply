<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/assets/css/search.css">
  </head>
  <body>
    <h2>Search Result</h2>
    <div class="search-result">
       <?php  
        foreach($result AS $val) {
      ?>
        <div class="each-result">
          <a href="/item/<?=$val['id']?>">
          <img class="imgsize" src="/assets/file/pix/icons/<?=$val['id']?>_icon.png" alt="<?=$val['id']?>"/>
            <div class="each-result-desc">
              <p>Type: <span><?=$val['type']?></span></p>
              <p>Density: <span><?=$val['density']?></span></p>
              <p>Color: <span><?=$val['color']?></span></p>
              <p>Material: <span><?=$val['material']?></span></p>
              <p>$<?=number_format($val['price']*$val['unitqty'], 2,'.',',')?></p>
            </div>
          </a>
        </div>
      <?php
        }
      ?>
    </div>
  </body>
</html>