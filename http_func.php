<?php

function get_d(){
    if (isset($_GET['d'])){
        $dir = $_GET['d'];
        //echo __LINE__ ; var_dump($dir);
    }else if (isset($_POST['d'])){
        $dir = $_POST['d'];
        //echo __LINE__ ; var_dump($dir);
    }else{ 
        //   echo __LINE__ ; var_dump($dir);
        $dir = ""; 
    }
    return $dir;
}

function parse_dir($get_dir,$conf_depth){
    $dirlevel="";
    $dir="";

    $config['enable_folder_maxdepth'] = $conf_depth;
    $config['storage_path'] = STORAGE_PATH;

    //echo __LINE__ . __FILE__ ;  var_dump($get_dir);
    //echo __LINE__ . __FILE__ ;  var_dump($config["enable_folder_maxdepth"]);

    if ($get_dir && $config['enable_folder_maxdepth']){
        $dir= explode("/",$get_dir);
        //echo __LINE__ ; var_dump($dir);
        foreach ($dir as $k => $v) {
            if (($v == "..") || ($v == ".") || ($v == "")) unset($dir[$k]);
        }
        $path = $config['storage_path'];
        //echo __LINE__ ; var_dump($dir);
        //echo __LINE__ ; var_dump($path);
        foreach ($dir as $k => $v) {
            //echo __LINE__ ; var_dump($v);
            //echo __LINE__ ; var_dump($path."/$v");
            if (!file_exists($path."/$v")){
                unset($dir[$k]);
                //echo __LINE__ ; var_dump($dir);
            }else{
                $path .= "/$v";
                //echo __LINE__ ; var_dump($path);
            }
        }
        $config['storage_path'] .= "/".join("/",$dir);

        //echo __LINE__ ; var_dump($config['storage_path']);
        //echo __LINE__ ; var_dump($dir);
        if (isset($dir)){ 
            $dirlevel = sizeof($dir); 
            //echo __LINE__ ; var_dump($dirlevel);
        }else{ 
            $dirlevel = 0;
        }
    } else {
        //echo __LINE__ ."[dir]"; var_dump($dir);
        unset($dir);
        $dir="";
    }

    $arr["dirlevel"] = $dirlevel;
    $arr["conf_storage_path"] = $config['storage_path'];
    $arr["dir"] = $dir;

    return $arr;

}



