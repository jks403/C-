<?php
require_once('../db_config.php');



if(!isset($_POST['updateRecord'])){
    header('Location: edit.php');
    die();
}else{
    if(!isset($_POST['id'])){
        header('Location: edit.php');
    die();
    }else{
        $id = filter_var($_POST['id']);
        $height = filter_var($_POST['height']);
        $title = filter_var($_POST['title']);
        $author = filter_var($_POST['author']);
        $genre = filter_var($_POST['genre']);
        $publisher = filter_var($_POST['publisher']);
        
        // now we do the query -->
        $query = "UPDATE books 
                  SET title = :title,
                  author    = :author,
                  genre     = :genre,
                  height    = :height,
                  publisher = :publisher
                  WHERE id  = :id";
                  
                  $result = $db_conn ->prepare($query);
                  $result ->execute([
                            'title'  =>    $title,
                            'author' =>    $author,
                            'genre'  =>    $genre,
                            'height' =>    $height,
                            'publisher' => $publisher,
                            'id'     =>    $id
                      
                      
                      
                      ]);

    }
    
}
