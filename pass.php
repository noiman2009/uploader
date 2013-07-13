<?php
//unset($_SERVER['PHP_AUTH_USER']);

$invalid=true;
if (!isset($_SERVER['PHP_AUTH_USER'])) {
echo __LINE__."true\n";
    $invalid=true;
} else {
    $u=$_SERVER['PHP_AUTH_USER'];
    $pw=$_SERVER['PHP_AUTH_PW'];

    //if($u=="e") $invalid=false; 
    if($pw=="gozassive") $invalid=false;
}

if($invalid){
    header("WWW-Authenticate: Basic realm=\"My Realm\"");
    header("HTTP/1.0 401 Unauthorized");
    echo "(;´Д`)\n";
    exit();
}else{
    //echo "<p>こんにちは、{$_SERVER['PHP_AUTH_USER']} さん。</p>"; echo "<p>{$_SERVER['PHP_AUTH_PW']} </p>";
    //echo "auth ok";

}
?>
