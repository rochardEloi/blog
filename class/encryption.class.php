<?php
include './config/cryptconfig.php';
class Encryption{

    var $ENCRYPTION_KEY = ENCRYPTION_CODE;
    var $ENCRYPTION_ALGORITHM = 'AES-256-CBC';
    
    public function EncryptData($ClearTextData) {
    
    global $ENCRYPTION_KEY;
    global $ENCRYPTION_ALGORITHM;
    $EncryptionKey = base64_decode($this->ENCRYPTION_KEY);
    $InitializationVector  = openssl_random_pseudo_bytes(openssl_cipher_iv_length($this->ENCRYPTION_ALGORITHM));
    $EncryptedText = openssl_encrypt($ClearTextData, $this->ENCRYPTION_ALGORITHM, $EncryptionKey, 0, $InitializationVector);
    return base64_encode($EncryptedText . '::' . $InitializationVector);
    }
    
    public function DecryptData($CipherData) {
    
    global $ENCRYPTION_KEY;
    global $ENCRYPTION_ALGORITHM;
    $EncryptionKey = base64_decode($this->ENCRYPTION_KEY);
    list($Encrypted_Data, $InitializationVector ) = array_pad(explode('::', base64_decode($CipherData), 2), 2, null);
    return openssl_decrypt($Encrypted_Data, $this->ENCRYPTION_ALGORITHM, $EncryptionKey, 0, $InitializationVector);
    }
}


?>