<?php
/*

    ./app/vues/posts/index.php

      Variables disponnibles :
      - $posts = ARRAY(ARRAY(postId, postTitle, postText, postDate, postQuote, postCatagorieId, categorieId, categorieName, categorieDate))

*/
?>
<!--  -->
              <div class="row">
                <div class="col-md-12 content-page">
                  <!-- ADD A POST -->
                  <div>
                    <a href="posts/add/form.html" type="button" class="btn btn-primary">Add a Post</a>
                  </div>
                  <!-- ADD A POST END -->

                  <!-- Blog Post Start -->
                  <div class="col-md-12 blog-post">
                    <?php foreach ($posts as $post): ?>
                        <div class="post-title">
                          <a href="posts/<?php echo $post['postId']; ?>/<?php echo \Noyau\Fonctions\slugify($post['postTitle']); ?>.html"><h1><?php echo $post['postTitle']; ?></h1></a>
                        </div>
                        <div class="post-info">
                          <span><?php echo Noyau\Fonctions\formater_date($post['postDate']); ?> </span> | <span> <?php echo $post['categorieName']; ?></span>
                        </div>
                        <p><?php echo Noyau\Fonctions\strCut($post['postText']); ?></p>
                        <a href="single.html" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                    <?php endforeach; ?>
                  </div>
                  <!-- Blog Post End -->
                </div>
              </div>
