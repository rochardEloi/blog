<?php

class Comment extends Database{

    public function getComment()
    {
      $conn=Database::DatabaseConnection();
      $data=$conn->query("select * from comment");
      $dataArray = array();
      $i = 0;
      while($datas = $data->fetch(PDO::FETCH_ASSOC)){
          $dataArray[$i] = $datas;
          $i++;
      }
      return $dataArray;
    }

    public function getSomeComment($column, $value)
    {
      $conn=Database::DatabaseConnection();
      $data=$conn->query("select * from comment $column='$value'");
      $row = $data->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    
    public function createComment($article_id, $user_id, $comment, $status)
    {
      try {
        //code...
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("INSERT INTO `comments`( `article_id`, `user_id`, `comment`, `status`) VALUES (?,?,?,?)");
            $data->execute(array(
                $article_id, $user_id, $comment, $status          
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
            
    }


    public function updateComment($comment, $comment_id )
    {
      try {
        //code... 
        $conn=Database::DatabaseConnection();
            $data=$conn->prepare("UPDATE `comments` SET `comment`=? WHERE id=?");
            $data->execute(array(
              $comment, $comment_id          
            ));
            return "SUCCESS"; 
      } catch (Throwable $th) {
        throw $th;
      }
           
    }

    public function updateCommentStatus($status, $comment_id )
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