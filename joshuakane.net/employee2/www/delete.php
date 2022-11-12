<?php
require_once('../db_config.php');
if(!isset($_GET['id'])){                                    // checking that the 'id' was passed in from the list-books.php URL
   header('Location: list-books.php');                      // if we didn't get the 'ID', we direct user back to List_books.php
   die();
} else{
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);     // We know it was passed in now.. Now we Validate it was an INTEGER And NOT some SQL injection
  if(!$id){
      header('Location: list-books.php');
   die();
  } else{
        
      $query = "DELETE  FROM books WHERE id = :id LIMIT 1"; // :id is a placeholder
      $result= $db_conn->prepare($query);                    // because we use a placeholder, we must prepare the statetement and store this into a Result
      $result->execute([                                     // now we take the result and operate on this ARRAY [ ]  Split open the Array and take the placeholder id and assign it the value from the URL
        'id'  => $id
        ]);
    $rowsDeleted = $result-> rowCount();                         // operate on the rowcount and retrieve the number of rows deleted
    if($rowsDeleted == 1){
        echo "successfully deleted your book. Check the database now and you won't find it";
    }else{
        echo "failed";
    }

    }
}
    
