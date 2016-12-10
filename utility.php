<?php

class Utility{



    /**
     * 再帰的なmkdir
     */
    public static function mkdir_r($dir_name, $mode = 0777){
        if( is_dir($dir_name) ){return true;}
        if( !is_dir(dirname($dir_name)) ){
            if( !Utility::mkdir_r(dirname($dir_name))){return false;}
        }
        return ( mkdir($dir_name) && chmod($dir_name, $mode) );
    }



}
