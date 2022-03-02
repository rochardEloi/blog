<?php

include $_SERVER['DOCUMENT_ROOT'].'/blog/class/signup.class.php';
include $_SERVER['DOCUMENT_ROOT'].'/blog/class/encryption.class.php';
include $_SERVER['DOCUMENT_ROOT'].'/blog/class/utils.class.php';
class Authentificator extends Database{
      var $username;
      var $password;
      public function Authentification($username, $password) {
            $this->username = $username;
            $this->password= $password;

          $conn=Database::DatabaseConnection();
          $data=$conn->query("select * from users where email=$this->username");
            if($data->rowCount()==1){
                $row = $data->fetch(PDO::FETCH_ASSOC);
                $valid = password_verify($this->password, $row['password']);
                
                if($valid == '1'){
                   $this->createSessionVariable($row['id_user'], $conn);
                   return "SUCCESS";
                }
                else
                return "INCORRECT PASSWORD";
            }else
             return "INCORRECT EMAIL";
         
     }

     public function createSessionVariable($user_id, $conn){
        $encryption= new Encryption();
        $utils = new Utils();
        //$mac = $utils->getMacAddress($_SERVER['REMOTE_ADDR']);
        //$utils->getMacAddress($_SERVER['SERVER_ADDR']);
        //$device = $utils->getUserDevice($_SERVER['REMOTE_ADDR']);
        $user=$user_id;
        $token = $utils->createUniqueToken();
        $time=time();
        $begin_date=(date("Y-m-d H:i:s",$time));
        $expiration_date=(date("Y-m-d H:i:s",$time+86400));
        $session_array = array(
            "user"=>$user,
            "token"=>$token,
            "startDate" => $begin_date,
            "expirationDate" => $expiration_date
        );
        $session_json=json_encode($session_array);
        $encrypt_session=$encryption->EncryptData($session_json);
        $_SESSION['auth_token_']=$encrypt_session;
        
        //echo $_SESSION['auth_token']."</br>";
     }

     public function verifySession($redirect_url)
     {
         if(isset($_SESSION['auth_token_'])){
            $encrypt_session=$_SESSION['auth_token_'];
            $encryption= new Encryption();
            $utils = new Utils();
            $decrypt_session=$encryption->DecryptData($encrypt_session);
            $data=json_decode($decrypt_session,true);
            $user_id=$data['user'];
            //$mac_address=$data['macAddress'];
            $token = $data['token'];
            $expirationDate = $data["expirationDate"];
            $verifyDate=strtotime($expirationDate)-time();
            if($verifyDate<=0){
              //Expired Token
              header("location:$redirect_url");

            }else{
                //Auth
                //echo "OK OK";
                return $user_id;
            }       
         }else{
            // echo "No session";
             header("location:$redirect_url");
         }
          
     }
                      
}

?>