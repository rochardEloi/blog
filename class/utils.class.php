<?php

class Utils{

    public function getMacAddress($ipAddress)
    {
        $macAddr=false;
        #run the external command, break output into lines
        $arp=`arp -a $ipAddress`;
        $lines=explode("\n", $arp);

        #look for the output line describing our IP address
        foreach($lines as $line)
        {
        $cols=preg_split('/\s+/', trim($line));
        if ($cols[0]==$ipAddress)
        {
            $macAddr=$cols[1];
        }
        }
        if($macAddr=="")
        {
            $macAddr = exec('getmac');
            //Storing 'getmac' value in $MAC
            $macAddr = strtok($macAddr, ' ');
        }
        return $macAddr;
    }

    public function getUserDevice($ipAddress)
    {
        return gethostbyaddr($ipAddress);
    }

    public function createUniqueToken()
    {
        $length = 64;
        $token = bin2hex(random_bytes($length));
        return $token;
    }

    public function Variables($name)
    {
        $conn=Database::DatabaseConnection();
        $data=$conn->query("select value from variables where name='$name'");
          if($data->rowCount()==1){
              $row = $data->fetch(PDO::FETCH_ASSOC);
              return $row;
          }  
          return "fail";
    }
  
}

?>