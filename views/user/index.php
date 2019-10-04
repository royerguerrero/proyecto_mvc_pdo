<section>
  <div class="container m-auto p-5">
    <h1 class="text-center">Dashboard</h1>
    <div class="create-post w-50 m-auto">
      <h3 class="text-center">Crear un post</h3>
      <form class="" action="index.html" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="File">Post Picture</label>
          <input type="file" class="form-control-file m-auto" id="File" name="file-post">
          <small id="fileHelp" class="form-text text-muted">Select a post picture.</small>
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" name="description" placeholder="Write here..."></textarea>
        </div>
        <button type="submit" name="button" class="btn btn-success">Crear post</button>
      </form>
    </div>
  </div>
</section>
