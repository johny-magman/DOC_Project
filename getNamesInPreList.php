<?php 

    include "/connectToDb.php";
    //get values needed first (name,fam name, codeP)
    $query="SELECT $att1,$att2,$att3 FROM $table_name";
    $result=array();
    $ans=array();
    $item=array(); //to add the item to the list
    if($stmt=$con->prepare($query)){
      $stmt->execute();
      $stmt->bind_result($id,$name,$famname);
      while($stmt->fetch()){
        $item["id"]=$id;
        $item["name"]=$name;
        $item["fam"]=$famname;
        $result[]=$item;
      }
      $stmt->close();
      $ans["msg"]="SUCCESS";
    }else{
      $ans["msg"]="FAILED, ERROR has occured somewhere";
    }
    echo json_encode($response);
 ?>
