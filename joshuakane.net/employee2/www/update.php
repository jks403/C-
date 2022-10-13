<?php

require_once('../db_config.php');

$query = "UPDATE teachers
            SET firstname = 'Adam', surname = 'Carter'
            WHERE id = 3";
if($db_connection-> exec($query))
{
    echo"success";
}

else
{
    echo "failed";
}
