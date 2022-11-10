<?php
require_once('../db_config.php');

if(isset($_POST['addemplRecord'])){
    
     
     $empl_name  = filter_var($_POST['empl_name']);
     $dept_no    = filter_var($_POST['dept_no']);
     $dept_name  = filter_var($_POST['dept_name']);
     $dob        = filter_var($_POST['dob']); 
     $start_date = filter_var($_POST['start_date']);     
     $query = "INSERT INTO  empl(empl_name, dept_no, dept_name, dob, start_date)
                          VALUES(:empl_name, :dept_no, :dept_name, :dob, :start_date)";      // passed in from the create.php script URL
    $result = $db_conn -> prepare($query);
    $result ->execute([
                         'empl_name'       =>  $empl_name,
                         'start_date'      =>  $start_date,
                         'dept_name'       =>  $dept_name,
                         'dob'             =>  $dob,
                         'dept_no'         =>  $dept_no,
                        
                        
                        ]);
                 }
                 

?>

<!--     joshuakane.net/emp/www/create_empl.php       -->

<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Create new Employee </title>
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
     
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>

  <body>

    <br>
    <div class="container">
      <form method="post" action="create_empl.php">       <!-- WE must send the all of the form information here to itself to the top of the code-->   
        
        <div class="form-group row">
          <label for="empl_name" class="col-sm-2 col-form-label">empl_name</label>   <!-- sending the title to the top of this code --> 
          <div class="col-sm-10">
            <input type="text" class="form-control" id="empl_name" name="empl_name" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="dept_no" class="col-sm-2 col-form-label">dept_no</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="dept_no" name="dept_no" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="dept_name" class="col-sm-2 col-form-label">dept_name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="dept_name" name="dept_name" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="dob" class="col-sm-2 col-form-label">dob</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="dob" name="dob" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="start_date" class="col-sm-2 col-form-label">start_date </label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="start_date" name="start_date" value="">
          </div>
        </div>

        <button type="submit" name="addemplRecord" class="btn btn-success">Add Employee</button>

      </form>
    </div>


  </body>


  </html>
