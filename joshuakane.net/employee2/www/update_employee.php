<?php
require_once('../db_config.php');
if(!isset($_POST['updateRecord'])){
    header('Location: edit.php');
    die();
}else{
    if(!isset($_POST['emp_id'])){
        header('Location: edit.php');
    die();
    }else{
        $emp_id = filter_var($_POST['emp_id']);
        $emp_name = filter_var($_POST['emp_name']);
        $emp_dept = filter_var($_POST['emp_dept']);
        $dept_name = filter_var($_POST['dept_name']);
        $start_date = filter_var($_POST['start_date']);
        $date_birth = filter_var($_POST['date_birth']);
        
        // now we do the query -->
        $query = "UPDATE employee 
                  SET emp_name =      :emp_name,
                  emp_dept    =       :emp_dept,
                  dept_name     =     :dept_name,
                  start_date    =     :start_date,
                  date_birth    =     :date_birth
                  WHERE emp_id  =     :emp_id";
                  
                  $result = $db_conn ->prepare($query);
                  $result ->execute([
                            'emp_name'  =>    $emp_name,
                            'emp_dept' =>    $emp_dept,
                            'dept_name'  =>    $dept_name,
                            'start_date' =>    $start_date,
                            'date_birth' =>    $date_birth,
                            'emp_id'     =>    $emp_id
                      
                      
                      
                      ]);

    }
    
}
