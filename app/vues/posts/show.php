<?php
/*

    ./app/vues/posts/index.php

      Variables disponnibles :
      - $post = ARRAY(ARRAY(postId, postTitle, postText, postDate, postQuote, postCatagorieId, categorieId, categorieName, categorieDate))

*/
?>
<!--  -->
<div class="row">
  <div class="sub-title">
    <a href="<?php echo BASE_URL_PUBLIC ?>" title="Go to Home Page"><h2>Back Home</h2></a>
    <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
  </div>
  <div class="col-md-12 content-page">
    <div class="col-md-12 blog-post">
      <!-- Post Headline Start -->
      <div class="post-title">
        <h1><?php echo $title; ?></h1>
      </div>
      <!-- Post Headline End -->
      <!-- Post Detail Start -->
      <div class="post-info">
        <span><?php echo Noyau\Fonctions\formater_date($post['postDate'], DATE_POSTS_SHOW); ?></span> | <span><?php echo $post['name']; ?></span>
      </div>
      <!-- Post Detail End -->
      <p><?php echo $post['text']; ?></p>
      <!-- Post Blockquote (Italic Style) Start -->
      <blockquote class="margin-top-40 margin-bottom-40">
        <p><?php echo $post['quote']; ?></p>
      </blockquote>
      <!-- Post Blockquote (Italic Style) End -->
      <!-- Post Buttons -->
      <div>
        <a href="posts/<?php echo $post['postId']; ?>/<?php echo \Noyau\Fonctions\slugify($post['title']); ?>/edit/form.html" type="button" class="btn btn-primary">Edit Post</a>
        <a href="posts/<?php echo $post['postId']; ?>/<?php echo \Noyau\Fonctions\slugify($post['title']); ?>/delete.html" type="button" class="delete btn btn-secondary" role="button">Delete Post</a>
      </div>
      <!-- Post Buttons End -->
    </div>
  </div>
</div>
