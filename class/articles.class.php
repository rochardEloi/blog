<?php
include $_SERVER['DOCUMENT_ROOT'].'/blog/class/database.class.php';
class Article extends Database{
    
    public function createArticle($title, $content, $description, $user_id, $status )
    {
            $conn=Database::DatabaseConnection();
            $data=$conn->prepare("INSERT INTO `articles`(`title`, `content`, `description`, `user_id`, `status`) VALUES (?,?,?,?,?)");
            $data->execute(array(
              $title, $content, $description, $user_id, $status              
            ));
            return "SUCCESS"; 
    }


    public function updateArticle($title, $content, $description, $user_id, $status, $article_id )
    {
            $conn=Database::DatabaseConnection();
            $data=$conn->prepare("INSERT INTO `UPDATE `articles` SET `title`=?,`content`=?,`description`=?,`user_id`=?,`status`= ? WHERE id = ?");
            $data->execute(array(
              $title, $content, $description, $user_id, $status, $article_id             
            ));
            return "SUCCESS"; 
    }

    
}

?>