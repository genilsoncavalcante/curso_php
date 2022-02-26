<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {
   $postId = $_GET['id'];
   $currentPost;

   foreach ($posts as $post) {

      if ($post['id'] == $postId) {
         $currentPost = $post;
      }
   }
}
?>

<main id="post-container">
   <div class="content-container">
      <h1 id="main-title"><?php echo $currentPost['title'] ?></h1>
      <p id="post-description"><?php echo $currentPost['description'] ?></p>
      <div class="img-container">
         <img src="<?php $BASE_URL ?>img/<?php echo $currentPost['img'] ?>" alt="<?php echo $currentPost['title'] ?>">
      </div>
      <?php foreach ($currentPost['p'] as $paragraph) : ?>
         <p class="post-content"><?php echo $paragraph ?></p>
      <?php endforeach; ?>
   </div>
   <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
         <?php foreach ($currentPost['tags'] as $tag) : ?>
            <li><a href="#"><?php echo $tag ?></a></li>
         <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
         <?php foreach ($categories as $category): ?>
            <li><a href="<?php $BASE_URL ?>category.php?category=<?php echo $category ?>"><?php echo $category ?></a></li>
         <?php endforeach; ?>
      </ul>
   </aside>
</main>
<?php
include_once("templates/footer.php");
?>