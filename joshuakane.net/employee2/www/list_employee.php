


<?php
require_once('../db_config.php');
$query = "SELECT * FROM employee";
$results = $db_conn->query($query);
// this sequence of the web application is List_employee first Second ----> Edit.php---> third is the Update.php. Then the database can be updated

?>

  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> List of Employees </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    
    <!--     joshuakane.net/employee2/www/list_employee.php         -->
    
    <style type="text/css">
                body {
                         background-image: url("PPN.jpg");
                         background-position: center left ;
                         background-repeat: repeat-x;
                         background-size: 90px;
                     }
                     
                      h1 {
                          background-color: beige;
                          text-align: center;
                           
                         }
       
                         th{
                             color:green;
                                 height:20;
                         }
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
    </style>
    <style type="text/css">
        tr{
            color:orange;
            
        }
    </style>
    </head>
    
    

    <body>
        <h1> Planned Parenthood Employees </h1>
       
        
        
        
        <div class="container">
    <table class='table'>
        <thead>
             <th>emp_id</th>
             <th>emp_name</th>
             <th>emp_dept</th>
             <th>dept_name</th>
             <th>start_date</th>
             <th>date_birth</th>
             <th>Edit</th>

        </thead>
        <tbody>
            <?php
            foreach($results as $result){
             ?>
                
                <tr>
                    
                     <td><?php echo$result['emp_id']?> </td> 
                     <td><?php echo $result['emp_name']?></td> 
                     <td><?php echo $result['emp_dept']?></td>
                     <td><?php echo $result['dept_name']?></td>
                     <td><?php echo $result['start_date']?></td>
                     <td><?php echo $result['date_birth']?></td>
                    
                     <td><a href="edit.php?emp_id=<?php echo $result['emp_id'] ?>" <i class="fas fa-edit"></i></a></td>  <!-- This is sending this data to the "edit.php form with the emp_id as the identifier -->
                </tr>
            <?php
                
            }
            ?>
             </tbody>
    </table>
    <form method="post" action="create_emp.php">
    <button type="submit" name="addEmpRecord" class="btn btn-success">Add Employee Record</button>
      </form>
        
    </div>
    </body>
</html>
