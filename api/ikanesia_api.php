<?php
require_once "../_config/config.php";
   if(function_exists($_GET['function'])) {
      $_GET['function']();
      }   
   function get_ikan()
   {
      global $con;      
      $query = $con->query("SELECT * FROM ikan");            
      while($row=mysqli_fetch_object($query))
      {
         $data[] =$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Success',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }   
 ?>