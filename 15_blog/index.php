<?php
   include_once("templates/header.php");
?>
<main>
   <div id="title-container">
      <h1>Blog Codar</h1>
      <p>O SEU BLOG DE PROGRAMAÇÃO</p>
   </div>
   <div id="posts-container">
      <?php foreach ($posts as $post) : ?>
         <div class="post-box">
            <img src="<?php $BASE_URL ?>img/<?php echo $post['img'] ?>" alt="<?php echo $post['title'] ?>">
            <h2 class="post-title">
               <a href="<?php $BASE_URL ?>post.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a>
            </h2>
            <p class="post-description"><?php echo $post['description'] ?></p>
            <div class="tags-container">
               <?php foreach ($post['tags'] as $tag) : ?>
                  <p><?php echo $tag ?></p>
               <?php endforeach; ?>
            </div>
         </div>
      <?php endforeach; ?>
   </div>
</main>
<?php
   include_once("templates/footer.php");
?>