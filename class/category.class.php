<?php

class Category extends Database{
    
    public function createCategory($title, $status)
    {
      try {
        //code...
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("INSERT INTO `category`(`title`,`status`) VALUES (?,?)");
            $data->execute(array(
              $title, $status            
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
            
    }


    public function updateCategory($title,  $status, $type_id )
    {
      try {
        //code... 
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("UPDATE `category` SET `title`=?,`status`=? WHERE id = ?");
            $data->execute(array(
              $title, $status, $type_id             
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
           
    }

    public function updateCategoryStatus( $status, $type_id )
    {
      try {
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("UPDATE `category` SET `status`= ? WHERE id = ?");
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