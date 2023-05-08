
<?php

 $db_host = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_name = "waste_manage";

 $connect = new mysqli($db_host, $db_user, $db_password, $db_name);

 if($connect->connect_error){
  echo "Fail";
 }
//  else{
//   echo "Connect";
//  }

?>