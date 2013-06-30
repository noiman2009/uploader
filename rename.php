<?php

rename_image();

function rename_image(){

$dir=__DIR__;
$from=$dir."/data/image.jpg";
//var_dump($from);
$dest=$dir."/data/".date("Ymd-His").".jpg";
//var_dump($dest);
if(file_exists($from)){

    rename($from,$dest);
}

}
