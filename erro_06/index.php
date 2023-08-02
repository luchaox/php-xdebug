<?php 
class StringUtils {
    public static function concatenate($str1, $str2) {
        return $str1 . $str2;
    }
}

echo StringUtils::concatenate("Hello", "World"); // Output: Warning: Missing argument 2 for StringUtils::concatenate()

?>