<?php

class Type extends Database{
    
    public function createType($title, $status)
    {
      try {
        //code...
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("INSERT INTO `type`(`title`,`status`) VALUES (?,?)");
            $data->execute(array(
              $title, $status            
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
            
    }


    public function updateType($title,  $status, $type_id )
    {
      try {
        //code... 
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("UPDATE `type` SET `title`=?,`status`=? WHERE id = ?");
            $data->execute(array(
              $title, $status, $type_id             
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
           
    }

    public function updateTypeStatus( $status, $type_id )
    {
      try {
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("UPDATE `type` SET `status`= ? WHERE id = ?");
            $data->execute(array(
              $status, $type_id             
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
            
    }

    
}

?>