<?php
require_once('../db_config.php');
$query = "SELECT * FROM books"; // query the books table for all fields
$results = $db_conn->query($query);





?>

  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>List of Books</title>
        <style type="text/css">
                     
                     body {
                         background-image: url("books.jpg");
                         background-position: bottom left;
                         background-repeat: repeat-x;
                         background-size: 3600px;
                     }
                     
                     
                     h1 {
                          background-color: beige;
                          text-align: center;
                           
                         }
                         h2{
                             color:azure;
                             text-align: banner;
                         }
                    
                    
                     table {
                         caption-side: center;
                        
                         
                         
                     }  
                       
                      td{
                          background-color: bisque;
                      }     
                         
                     
                   
        </style>
         
        
        

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--     joshuakane.net/books/www/list-books.php         -->
       
    </head>
       <body>
            <div class="container">
            <h1> Joshua's BookStore  </h1>
            <table class='table'>
            <thead>
             
        <tr>
             
             
             <th>Title</th>
             <th>Author</th>
             <th>Genre</th>
             <th>Publisher</th>
             <th>Edit</th>
             <th>Delete</th>
             

             
        </tr>
        </thead>
        <tbody>
            <?php
            foreach($results as $result){
            ?>
                <tr>
                     
                     <td><?php echo $result['title'] ?></td> 
                     <td><?php echo $result['author'] ?></td>
                     <td><?php echo $result['genre'] ?></td>
                     <td><?php echo $result['publisher'] ?></td>
                     <td><a href="edit.php?id=<?php echo $result['id'] ?>"><i class="fa fa-pencil"></i></a></td>
                     <td><a href="delete.php?id=<?php echo $result['id'] ?>"><i class="fa-duotone fa-trash"></i></i></a></td>
                     
                     <!-- this passes into the delete.php page above-->

                </tr>
                 <?php
    
                }
               
                ?>

            
             </tbody>
    </table>
     
   
      
    </div>
   
        
            <a href="create.php" </a>
         <button type="submit" name="addRecord" class="btn btn-success">Add Record</button>
          
    
    </body>
</html>
