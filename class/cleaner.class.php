<?php  

class Cleaner{
    public static function cleanVariable($variable)
    {
        return addslashes(htmlspecialchars(strip_tags($variable)));
    }
}

?>