<?php

class Utility{



    /**
     * 再帰的なmkdir
     */
    public function mkdir_r($dir_name, $mode = 0777){
        if( is_dir($dir_name) ){return true; }
        if( is_dir(dirname($dir_name)) ){
            return (mkidr($dir_name) && chmod($dir_name, $mode) );
        }else{
            return mkdir_r(dirname($dir_name));
        }
    }



}
