<?php
include "auth.class.php";
//include "signup.class.php";

$auth = new Authentificator("50948620863", "12345678");
$response=$auth->Authentification();

//$hash = password_hash($auth->password, PASSWORD_DEFAULT);

echo $response;

/*$account= new Signup("Jean", "Maxime", "50948620863", "", "", "12345678", "ACTIVATE", "119902", "", "100", "0", "0" ,"current_date()");
$response=$account->CreateAccount();
echo $response;*/


include 'encryption.class.php';
/*
$ENCRYPTION_KEY = 'MY-ENCRYPTION-KEY';
$ENCRYPTION_ALGORITHM = 'AES-256-CBC';

function EncryptThis($ClearTextData) {

global $ENCRYPTION_KEY;
global $ENCRYPTION_ALGORITHM;
$EncryptionKey = base64_decode($ENCRYPTION_KEY);
$InitializationVector  = openssl_random_pseudo_bytes(openssl_cipher_iv_length($ENCRYPTION_ALGORITHM));
$EncryptedText = openssl_encrypt($ClearTextData, $ENCRYPTION_ALGORITHM, $EncryptionKey, 0, $InitializationVector);
return base64_encode($EncryptedText . '::' . $InitializationVector);
}

function DecryptThis($CipherData) {

global $ENCRYPTION_KEY;
global $ENCRYPTION_ALGORITHM;
$EncryptionKey = base64_decode($ENCRYPTION_KEY);
list($Encrypted_Data, $InitializationVector ) = array_pad(explode('::', base64_decode($CipherData), 2), 2, null);
return openssl_decrypt($Encrypted_Data, $ENCRYPTION_ALGORITHM, $EncryptionKey, 0, $InitializationVector);
}

echo DecryptThis('V0JoVkhrUW5nRTFCbm53MUI1OVBwM3VGNmVqMlFRSS9McFpmM3BqM1hRMD06On3VllzazwekuajvAKxtzK0=');
*/

//$crypt_= new Encryption();
//echo $crypt_->DecryptData("bis4MlFyQVRBSUR0aVYzMGlMYXpkdz09OjpO/+Xj7gq6DJao8l9rgHqS");
// PHP code to get the MAC address of Client
//$MAC = exec('getmac');
  
// Storing 'getmac' value in $MAC
//$MAC = strtok($MAC, ' ');
  
// Updating $MAC value using strtok function, 
// strtok is used to split the string into tokens
// split character of strtok is defined as a space
// because getmac returns transport name after
// MAC address   
// echo "MAC address of client is: $MAC";

$ipAddress=$_SERVER['REMOTE_ADDR'];
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

echo "mac  ".$macAddr;


echo gethostbyaddr($_SERVER['REMOTE_ADDR']); // may output e.g,: sandie
$_SERVER['DOCUMENT_ROOT'];


$t=time();
echo($t . "<br>");
echo(date("Y-m-d H:i:s",$t));
//echo date('Y/m/d H:i:s')

$t=1628999988;
echo($t . "<br>");
echo(date("Y-m-d H:i:s",$t). "<br>");
echo strtotime('2021-08-15 05:59:48');

?>
