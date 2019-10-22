<?php

      include '/connectToDb.php'
      $ans=array();
      if(isset($_post["name"])){//here enter if all values were added by the user.
        $dbname //get the database name
        $attr1 // get the values of attributs in the table
$query="INSERT INTO $dbname ($attr1,$attr2) VALUES(?,?)"
      if($stmt=$con->prepare($query)){
        $stmt->bind_param("ssis",$val1,$val2,$va3);
        $stmt->execute();

        if($stmt->ibase_affected_rows==1){
          $response[0]="ADDED";
        }else{
            $response[0]="FAILED TO ADD";
        }
      }else{
          $response[0]="error while connecting to database";
      }
    }else{
        $response[0]="Missing parameters";
    }

 ?>
