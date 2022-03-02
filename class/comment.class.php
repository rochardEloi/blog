<?php

class Type extends Database{
    
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