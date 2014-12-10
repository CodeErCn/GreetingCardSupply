<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Categories Main</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/products_category_main.css">
  </head>
  <body>
    <div class="categories">
       <!-- Products Category Main Page... -->
            <?php 
            foreach($lines AS $line => $val) {
            ?>  
                <h2><?=$line?></h2>
                <?php 
                  foreach($val AS $category => $title) {

                  if($line=="Cards & Envelopes")
                    $category=$category+1;
                  else if($line=="Packaging Solutions")
                    $category=$category+14;
                  else if($line=="Accessories")
                    $category=$category+22;
                  else if($line=="Shipping & Retail")
                    $category=$category+26;
                ?>
                <div>
                  <a href="/category/<?=$category?>/1">
                    <img src="/assets/file/pix/category/<?=$category?>_thumb.png" alt="<?=$title?>">
                    <h6><?=$title?></h6>
                  </a>
                </div>  
                <?php 
                  }
                ?>      
            <?php
              }
            ?>
        <!-- END of lines-categories -->
      <!-- ...Products Category Main Page --> 
    </div>
  <!-- END of categories -->
  </body>
</html>