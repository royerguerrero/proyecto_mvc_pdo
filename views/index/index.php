<section>
  <div class="post container m-auto">
    <h1 class="text-center mt-3">Publicaciones</h1>
    <?php foreach(Post::all() as $post):  ?>
    <div class="w-75 m-auto rounded shadow-lg mb-5 bg-white rounded">
      <div class="content-img">
        <img src="<?= $post->url ?>" alt="" class="img-fluid">
      </div>
      <div class="content-post px-5">
        <h3><?= $post->title ?></h3>
        <p><?= $post->description ?></p>
      </div>
      <div class="bg-primary px-5 py-2">
        <span>Autor: Pepito</span>
      </div>
    </div><br>
  <?php endforeach; ?>
  </div>
</section>
