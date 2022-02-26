<?php
include_once("templates/header.php");

if (isset($_GET['category'])) {
   $currentCategory = $_GET['category'];
}
?>
<main>
   <div id="title-container">
      <h1><?php echo $currentCategory ?></h1>
   </div>
   <div id="posts-container">

   <!-- VERIFICANDO EM CATEGORIES, TODAS AS CATEGORIAS QUE PERTENCEM A QUE FOI SELECIONADA -->
      <?php foreach ($posts as $post) : ?>
         <?php if ($post['categories'] == $currentCategory) : ?>

            <div class="post-box">
               <img src="<?php $BASE_URL ?>img/<?php echo $post['img'] ?>" alt="<?php echo $post['title'] ?>">
               <h2 class="post-title">
                  <a href="<?php $BASE_URL ?>post.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a>
               </h2>
               <p class="post-description"><?php echo $post['description'] ?></p>
               <div class="tags-container">
                  <?php foreach ($post['tags'] as $tag) : ?>
                     <a href="#"><?php echo $tag ?></a>
                  <?php endforeach; ?>
               </div>
            </div>

         <?php endif; ?>
      <?php endforeach; ?>

   </div>
</main>
<?php
include_once("templates/footer.php");
?>