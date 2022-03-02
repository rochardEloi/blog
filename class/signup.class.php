<?php
include $_SERVER['DOCUMENT_ROOT'].'/blog/class/database.class.php';
class Signup extends Database{
    var $last_name ;
    var $first_name ;
    var $phone_number ;
    var $email ;
    var $password ;
    var $type;
    var $status ;
    
    public function __construct($last_name, $first_name, $email,  $password,$type, $status,$openning_date, $phone_number) {
        $this-> last_name= $last_name ;
        $this-> first_name= $first_name ;       
        $this-> email= $email ;
        $this-> password= $password ;
        $this->type = $type;
        $this-> status= $status ;
        $this-> openning_date= $openning_date ;
        $this-> phone_number= $phone_number ;
    }
    
    public function CreateAccount()
    {
        $hash = password_hash($this->password, PASSWORD_DEFAULT);
        if($this->verifyData()==0){
         return "Email Already exist";
        }
        else
        {
            $conn=Database::DatabaseConnection();
            $data=$conn->prepare("INSERT INTO `users`( `lastname`, `firstname`, `email`, `password`, `type`, `status`, `phone`) VALUES (?,?,?,?,?,?,?)");
            $data->execute(array(
                $this-> last_name,
                $this-> first_name,
                $this-> email,
                $hash,
                $this-> type,
                $this-> status,
                $this-> phone_number,   
                
            ));
            return "SUCCESS";
        }

        
    }


    public function verifyData()
    {
         $conn=Database::DatabaseConnection();
         $data=$conn->query("select * from users where email=$this->phone_number");
         if($data->rowCount()!=0){
             //echo $data->rowCount();
             return 0;
         }
         else
         {
             echo $data->rowCount();
             return 1;
         }
         
         
    }
}

?>