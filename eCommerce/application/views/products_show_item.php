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
      <img src="/assets/file/pix/zooms/<?=$products['id']?>_zoom.png" alt="<?=$products['id']?>"/>
    </div>
  <!-- END body left div -->
    <div class="body-right">
      <div class="body-right-thumb">
        <img src="/assets/file/pix/thumbs/<?=$products['id']?>_thumb.png" alt="<?=$products['id']?>"/>
      </div>
    <!-- END body-right-thumb div -->
      <p><?=$products['description']?></p>
      <p>Type: <span><?=$products['type']?></span></p>
      <p>Density: <span><?=$products['density']?></span></p>
      <p>Color: <span><?=$products['color']?></span></p>
      <p>Material: <span><?=$products['material']?></span></p>
      
      <form action="/cart/update" method="post">
      	<input type="hidden" name="id" value="<?=$products['id']?>">
        <select name="qty">
        <?php
        	$checked1 = "";
        	$checked2 = "";
        	$checked3 = "";
        	if($qty == 1) {
        		$checked1 = " selected";
        	} else if($qty == 2) {
        		$checked2 = " selected";
        	} else if($qty == 3) {
        		$checked3 = " selected";
        	}
        ?>
          <option value="<?= 1 * $products['unitqty'] ?>"<?= $checked1 ?>><?= 1 * $products['unitqty'] ?> ($<?= number_format(1 * $products['unitqty'] * $products['price'], 2); ?>)</option>
          <option value="<?= 2 * $products['unitqty'] ?>"<?= $checked2 ?>><?= 2 * $products['unitqty'] ?> ($<?= number_format(2 * $products['unitqty'] * $products['price'], 2); ?>)</option>
          <option value="<?= 3 * $products['unitqty'] ?>"<?= $checked3 ?>><?= 3 * $products['unitqty'] ?> ($<?= number_format(3 * $products['unitqty'] * $products['price'], 2); ?>)</option>
        </select>
        <input type="submit" name="submit-buy" value="Buy">
      </form>
    </div>
  <!-- END body right div -->
    <div class="similar">
      <h3>Similar Items</h3>
      <div class="similar-images">
      <?php  
        for($i=0, $j=count($similar); $i<6 && $i<$j; $i++) {
      ?>
        <div>
          <a href="/item/<?=$similar[$i]['pid']?>">
            <img src="/assets/file/pix/thumbs/<?=$similar[$i]['pid']?>_thumb.png" alt="<?=$similar[$i]['pid']?>"/>
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