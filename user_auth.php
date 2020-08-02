<?php
#---認証機能---
function user_auth(){
    global $in;
    global $admin_id;
    global $md5_pw;

    session_start();
    $input_id = $in["input_id"];
    $input_pw = $in["input_pw"];
    if($input_id == $admin_id && crypt($input_pw, $crypt_key) == $crypt_pw){
        $_SESSION["input_id"] = $input_id;
        $_SESSION["input_id"] = $input_id;
        $in["mode"] = "item";
    }
}