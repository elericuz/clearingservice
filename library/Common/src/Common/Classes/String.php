<?php
namespace Common\Classes;

class String
{
    static public function fileSizeToHuman($filesize = 0, $index = 0)
    {
        $units = array(
            'Bytes',
            'Kb',
            'Mb',
            'Gb',
            'Tb',
            'Pb'
        );
        if (! is_numeric($filesize))
            return false;
        if ($filesize < 1024)
            return "$filesize {$units[$index]}";
        else {
            $index ++;
            return self::fileSizeToHuman(round($filesize / 1024, 1), $index);
        }
    }

    static public function text2url($string)
    {
        $string = utf8_decode($string);
        $string = mb_strtolower($string);
        $search = array(' ','á','à','â','ã','ª','Á','À',
            'Â','Ã', 'é','è','ê','É','È','Ê','í','ì','î','Í',
            'Ì','Î','ò','ó','ô', 'õ','º','Ó','Ò','Ô','Õ','ú',
            'ù','û','Ú','Ù','Û','ç','Ç','Ñ','ñ');
        $replace = array('-','a','a','a','a','a','A','A',
            'A','A','e','e','e','E','E','E','i','i','i','I','I',
            'I','o','o','o','o','o','O','O','O','O','u','u','u',
            'U','U','U','c','C','N','n');
        $string = trim(str_replace($search, $replace, $string));
        $string	= preg_replace('/([^-\.,@0-9a-z-A-Z' . chr(0xbf) . '-' . chr(0xff) . chr(0x9a) . chr(0x9e) . '\s])/', '', $string);
        $string = preg_replace("(:|;|\?|!)", '', $string);
        $string = preg_replace('/&([a-zA-Z])(uml|acute|grave|circ|tilde);/','$1',$string);
        return preg_replace('[^A-Za-z0-9\_\.\-]', '', $string);
    }
}
?>