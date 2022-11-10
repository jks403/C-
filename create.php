<?php
require_once('../db_config.php');

if(isset($_POST['addRecord'])){
    
     $title = filter_var($_POST['title']);
     $author = filter_var($_POST['author']);
     $genre = filter_var($_POST['genre']);
     $height = filter_var($_POST['height']);
     $publisher = filter_var($_POST['publisher']);     
     $query = "INSERT INTO  books ( title, author, genre, height, publisher)
                VALUES (:title, :author, :genre, :height, :publisher)";      // passed in from the create.php script URL
    $result = $db_conn -> prepare($query);
    $result ->execute([
                         'title'       =>  $title,
                         'author'      =>  $author,
                         'genre'       =>  $genre,
                         'height'      =>  $height,
                         'publisher'   =>  $publisher,
                        
                        
                        ]);
                        
                      
                        
                 }
                 

?>


<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Add a Record</title>
     <style type="text/css">
                     
                     body {
                         background-image: url("books.jpg");
                         background-position: bottom left;
                         background-repeat: repeat-x;
                         background-size: 3600px;
                          }
                     
                      p {
                             color: white; 
                             text-align: center;
                             text-size: 500px;
                             
                         }
                     
                     
                     label {
                         Background-color: beige;
                         height: 100px;
                         width: 100px;
                         text-align: center;
                           
                         }
                         
     </style>
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
   <body>
       <br>
       <br>
       <br>
       <br>
       
 <p> Add a Book to the database! </p> 
       <br>
       <br>
       <br>
       <br>
    
    <div class="container">
      <form method="post" action=""> <!-- WE must send the all of the form information here to itself to the top of the code-->   
        
        <div class="form-group row">
          <label for="title" class="col-sm-2 col-form-label">Title</label>   <!-- sending the title to the top of this code --> 
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" value="">
          </div>
        </div>
        
          <div class="form-group row">
          <label for="author" class="col-sm-2 col-form-label">Author</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="author" name="author" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="genre" class="col-sm-2 col-form-label">genre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="genre" name="genre" value="">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="height" class="col-sm-2 col-form-label">height</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="height" name="height" value="">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="publisher" class="col-sm-2 col-form-label">publisher </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="publisher" name="publisher" value="">
          </div>
        </div>

        <button type="submit" name="addRecord" class="btn btn-success">Add Record</button>

      </form>
    </div>
 
  
    
   
    </body>
    <br>
    <br>
    


  </html>



