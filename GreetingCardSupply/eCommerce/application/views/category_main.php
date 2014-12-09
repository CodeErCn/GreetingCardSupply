
<!-- Home Page... -->
    
    <?php 
    foreach($lines as $line) {
    ?>

      <div class="categories">
        
        <h2><?= $lines['title']?></h2>
        <?=php 
          foreach($categories as $category) {
        ?>
        
        <div>
          <img src="/pix/category/<?= $category['id'] ?>_thumb.png" alt="<?= $category['title'] ?>">
          <h6><a href="/category/<?= $category['id'] ?>"><?= $category['title'] ?></a></h6>
        </div>
        
        <?=php 
          }
        ?>
        
      </div>
      
    <?php
      }
    ?>

<!-- ...Home Page -->
