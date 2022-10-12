<?php
require_once('../db_config.php');
$query = "SELECT * FROM books"; // query the books table for all fields
$results = $db_conn->query($query);



?>

  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>List of Books      </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    
    <!--     joshuakane.net/books/www/list-books.php         -->
       
    </head>

    <body>
        <div class="container">
    <table class='table'>
        <thead>
        <tr>
             
             <th>Title</th>
             <th>Author</th>
             <th>Genre</th>
             <th>Publisher</th>
             <th>Edit</th>

             
        </tr>
        </thead>
        <tbody>
            <?php
            foreach($results as $result){
                ?>
                
                <tr>
                     
                     <td><?php echo$result['title']?></td>
                     <td><?php echo $result['author']?></td> 
                     <td><?php echo $result['genre']?></td>
                    <td><?php echo $result['publisher']?></td>
                     <td><a href="edit.php?id=<?php echo $result['id'] ?>"><i class="fas fa-edit"></i></a></td>
                </tr>
            <?php
                
            }
            ?>
             </tbody>
    </table>
    </div>
    </body>
</html>
