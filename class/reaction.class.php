<?php

class Reaction extends Database{


    public function getReaction()
    {
      $conn=Database::DatabaseConnection();
      $data=$conn->query("select * from reaction");
      $dataArray = array();
      $i = 0;
      while($datas = $data->fetch(PDO::FETCH_ASSOC)){
          $dataArray[$i] = $datas;
          $i++;
      }
      return $dataArray;
    }

    public function getSomeReaction($column, $value)
    {
      $conn=Database::DatabaseConnection();
      $data=$conn->query("select * from reaction $column='$value'");
      $row = $data->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    
    public function createReaction($article_id, $reaction,$status, $user_id)
    {
      try {
        //code...
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("INSERT INTO `reactions`( `article_id`, `reaction`,`status`, `user_id`) VALUES ('?,?,?)");
            $data->execute(array(
                $article_id, $reaction,$status, $user_id          
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
            
    }


    public function updateReaction($status, $user_id, $article_id)
    {
      try {
        //code... 
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("UPDATE `reactions` SET `status`=? WHERE `user_id`=? and `article_id`=?");
            $data->execute(array(
               $status, $user_id, $article_id       
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
           
    }

    public function updateReactionStatus($status, $comment_id )
    {
      try {
        //code... 
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("UPDATE `comments` SET `status`=? WHERE id=?");
            $data->execute(array(
              $status, $comment_id          
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
           
    }

    
}

?>