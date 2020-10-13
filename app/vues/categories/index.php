<?php
/*

    ./app/vues/categories/index.php

      Variables disponnibles :
      - $categories = ARRAY(ARRAY(postId, postTitle, postText, postDate, postQuote, postCatagorieId, categorieId, categorieName, categorieDate))

*/
?>
<!--  -->
<ul class="menu-link">
  <?php foreach ($categories as $categorie): ?>
    <li><a href="index.html"><?php echo $categorie['categorieName'] ?>[<?php echo $categorie['nbPostsId'] ?>]</a></li>
  <?php endforeach; ?>
</ul>
