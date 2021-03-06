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
        <h1><a href="/">Greeting Card Supply</a></h1>
        <form action="/search" method="POST">
          <input class="search" type="text" name="search-result" placeholder="Search.."/>
          <input type="submit" name="search" value="Search"/>
        </form>
        <a class="cart" href="/cart">Shopping Cart (<?php echo count($this->session->userdata('cart')); ?>)</a>
      </div>
    <!-- End of heading -->
        
    <!-- menu Div -->
      <div id="menu">
        <!-- Loop Categories from database -->
        <h3>Cards & Envelops</h3>
        <ul>
      <?php
        if($main['cardEnvelope'] != null) {
          foreach ($main['cardEnvelope'] AS $category => $value) {
          $category=$category+1;
      ?>
          <li><a href="/category/<?=$category?>/1"><?=$value?></a></li>
      <?php    
          }
        }
      ?>
        </ul>
        <!-- End loop cards & evelops -->
        <h3>Packaging Solutions</h3>
        <ul>
          <?php
        if($main['pkgingSolution'] != null) {
          foreach ($main['pkgingSolution'] AS $category => $value) {
          $category=$category+14;
      ?>
          <li><a href="/category/<?=$category?>/1"><?=$value?></a></li>
      <?php    
          }
        }
      ?>
        </ul>
        <!-- End loop packaging solutions -->
        <h3>Accessories</h3>
        <ul>
      <?php
        if($main['accessories'] != null) {
          foreach ($main['accessories'] AS $category => $value) {
          $category=$category+22;
      ?>
          <li><a href="/category/<?=$category?>/1"><?=$value?></a></li>
      <?php    
          }
        }
      ?>
        </ul>
        <!-- End loop Accessories -->
        <h3>Shipping & Retail</h3>
        <ul>
      <?php
          if($main['shippingRetail'] != null) {
            foreach ($main['shippingRetail'] AS $category => $value) {
            $category=$category+26;
      ?>
            <li><a href="/category/<?=$category?>/1"><?=$value?></a></li>
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
        <?=$outlet?>
      </div>
    <!-- End of products -->
    </div>
    <footer>Greeting Card Supply 2014</footer>
  </body>
</html>