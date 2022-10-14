<?php
require_once('../db_config.php');

if(!isset($_GET['id'])){
   header('Location: list-books.php');
   die();
} else{
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
  if(!$id){
      header('Location: list-books.php');
   die();
  } else{
       // is this ok? 
      $query = "SELECT * FROM books WHERE id = :id LIMIT 1"; // :id is a placeholder
      $result= $db_conn->prepare($query);                    // because we use a placeholder, we must prepare teh statetement and store this into a Result
      $result->execute([                                     // now we take the result and operate on this ARRAY [ ]  Split open the Array and take the placeholder id and assign it the value from the URL
        'id'  => $id
        ]);
$result = $result->fetch();

    }
}

 ?>
<!-- 10 - 12-2022 left on ch 22 joshuakane.net/books/www/edit.php --> 



<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Edit a Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>

  <body>

    <br>
    <div class="container">
      <form method="post" action="update.php">
        <div class="form-group row">
          <label for="id" class="col-sm-2 col-form-label">ID</label>
          <div class="col-sm-10">
            <input type="number" readonly class="form-control" id="id" name="id" value="<?php echo $result['id'] ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="title" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $result['title']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="author" class="col-sm-2 col-form-label">Author</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="author" name="author" value="<?php echo $result['author']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="genre" class="col-sm-2 col-form-label">Genre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $result['genre']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="height" class="col-sm-2 col-form-label">Height</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="height" name="height" value="<?php echo $result['height']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
          <div class="col-sm-10">
        <input type="text" class="form-control" id="publisher" name="publisher" value="<?php echo $result['publisher']?>">
          </div>
        </div>

        <button type="submit" name="updateRecord" class="btn btn-success">Update Record</button>

      </form>
    </div>


  </body>


  </html>
