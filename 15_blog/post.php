<?php
   include_once("templates/header.php");

   if(isset($_GET['id'])) {
      $postId = $_GET['id'];
      $currentPost;

      foreach($posts as $post) {

         if($post['id'] == $postId) {
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
         <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error recusandae cumque voluptatum quis nulla facilis, repudiandae nesciunt quae ipsa sunt non magnam sapiente eos autem voluptatibus saepe laborum necessitatibus fugit?
         Dolorem reiciendis, dolores, commodi impedit ea illo mollitia nisi cumque repellendus ullam saepe nam, nemo molestias id pariatur maxime? Dolorum earum aperiam amet doloribus, sapiente veritatis nam. Quia, tempora asperiores.
         Ad alias, voluptatibus porro nobis ex earum minus sunt quisquam velit esse minima odit sint doloremque deserunt perspiciatis! Similique voluptate odit porro. Praesentium qui exercitationem repellendus debitis dolorum enim illo!
         Impedit, est itaque maxime, recusandae et distinctio voluptatibus molestiae quo asperiores id beatae suscipit illum fugiat aperiam voluptates repudiandae sed. Delectus iste nostrum voluptatum magni alias. Atque nam est quia?
         Veniam consequatur commodi asperiores quia tempora quasi, voluptas reiciendis debitis ipsa itaque suscipit qui repellendus maxime corporis ea obcaecati unde, error modi! Reiciendis quisquam ad eaque fuga, repellat laudantium itaque.</p>
         <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia officiis, nulla velit vitae quis quaerat modi eos ex. Repellat deserunt illo delectus minus voluptatem qui, iure dolores laudantium modi culpa?
         Adipisci, dolorem vitae? Nobis autem iure illum unde, optio officia molestias, fuga nemo repellat laboriosam reprehenderit. Deleniti, odit voluptas, excepturi tempore accusamus animi dicta amet nisi ea iusto eius. Id.
         Facilis modi ratione aliquid rerum veniam dignissimos itaque, vel quasi, aspernatur nisi aliquam maxime quaerat laborum eos qui iste inventore error labore. Corrupti neque quis expedita ad, mollitia cumque exercitationem.
         Tempore, dolores quas similique error dicta perferendis voluptatem assumenda dignissimos maxime a. Aspernatur natus provident consectetur accusamus error, eum totam sequi. Qui nemo nulla sed, quo quae ea! Odit, dolorem.
         Velit eum, placeat quas porro aspernatur soluta corrupti reiciendis nostrum maiores aut quibusdam modi quo amet repellendus consequatur quidem sit iure autem delectus? Corrupti molestiae explicabo sed, atque deserunt itaque?</p>
      </div>
      <aside id="nav-container">
         <h3 id="tags-title">Tags</h3>
         <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
               <li><a href="#"><?php echo $tag ?></a></li>
            <?php endforeach; ?>
         </ul>
         <h3 id="categories-title">Categorias</h3>
         <ul id="categories-list">
            <?php foreach($categories as $category): ?>
               <li><a href="#"><?php echo $category ?></a></li>
            <?php endforeach; ?>
         </ul>
      </aside>
   </main>
<?php
   include_once("templates/footer.php");
?>