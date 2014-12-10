<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Product Detail</title>
    <link rel="stylesheet" href="/assets/css/products_show_item.css">
  </head>
  <body>
    <div class="top">
      <a href="/">Back to Category</a>
    </div>
  <!-- END top div -->
    <div class="body-left">
      <img src="/assets/file/pix/zoom/<?=$products['id']?>_zoom.png" alt="<?=$products['id']?>"/>
    </div>
  <!-- END body left div -->
    <div class="body-right">
      <div class="body-right-thumb">
        <img src="/assets/file/pix/thumb/<?=$products['id']?>_thumb.png" alt="<?=$products['id']?>"/>
      </div>
    <!-- END body-right-thumb div -->
      <p><?=$products['description']?></p>
      <p>Type: <span><?=$products['type']?></span></p>
      <p>Density: <span><?=$products['density']?></span></p>
      <p>Color: <span><?=$products['color']?></span></p>
      <p>Material: <span><?=$products['material']?></span></p>
      
      <form action="#" method="">
        <select>
          <option value="opt1">option1</option>
          <option value="opt2">option2</option>
          <option value="opt3">option3</option>
        </select>
        <input type="submit" name="submit-buy" value="Buy">
      </form>
    </div>
  <!-- END body right div -->
    <div class="similar">
      <h3>Similar Items</h3>
      <div class="similar-images">
      <?php  
        for($i=0; $i<6; $i++) {
      ?>
        <div>
          <a href="/item/<?=$similar[$i]['pid']?>">
            <img src="/assets/files/pix/thumb/<?=$similar[$i]['pid']?>_thumb.png" alt="<?=$similar[$i]['pid']?>"/>
            <p>$<?=number_format($similar[$i]['price']*$similar[$i]['unitqty'], 2,'.',',')?></p>
          </a>
        </div>
      <?php
        }
      ?>
      </div>
    </div>
  <!-- END similar div-->
  </body>
</html>