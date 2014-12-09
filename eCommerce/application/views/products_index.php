<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Greeting Card Supply</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/products_index.css"/>
  </head>
  <body>
    <!-- heading Div -->
      <div class="heading">
      <h1>Greeting Card Supply</h1>
      <a href="#">Shopping Cart(?)</a>
      </div>
    <!-- End of heading -->
        
    <!-- menu Div -->
      <div id="menu">
        <!-- Loop Categories from database -->
        <h3>Cards & Envelops</h3>
        <ul>
      <?php
        if($cardEnvelope != null) {
          foreach ($cardEnvelope AS $value) {
      ?>
          <li><a href="#"><?=$value?></a></li>
      <?php    
          }
        }
      ?>
        </ul>
        <!-- End loop cards & evelops -->
        <h3>Packaging Solutions</h3>
        <ul>
          <?php
        if($pkgingSolution != null) {
          foreach ($pkgingSolution AS $value) {
      ?>
          <li><a href="#"><?=$value?></a></li>
      <?php    
          }
        }
      ?>
        </ul>
        <!-- End loop packaging solutions -->
        <h3>Accessories</h3>
        <ul>
      <?php
        if($accessories != null) {
          foreach ($accessories AS $value) {
      ?>
          <li><a href="#"><?=$value?></a></li>
      <?php    
          }
        }
      ?>
        </ul>
        <!-- End loop Accessories -->
        <h3>Shipping & Retail</h3>
        <ul>
      <?php
          if($shippingRetail != null) {
            foreach ($shippingRetail AS $value) {
      ?>
            <li><a href="#"><?=$value?></a></li>
      <?php    
          }
        }
      ?>
        </ul>
        <!-- End Shipping & Retail -->
      </div>
    <!-- End of menu -->

    <!-- products Div -->
      <div id="products">
        <h1>OUTLET FOR OTHER VIEWS HERE</h1>
      </div>
    <!-- End of products -->
    </div>
    <footer>Greeting Card Supply 2014</footer>
  </body>
</html>