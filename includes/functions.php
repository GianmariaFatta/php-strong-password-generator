<?php 
$length = $_GET["password_length"];
$password="";

function createPassword($length,$password){
    $elements=[
        "abcdefghilmnopqrstuvzjkwxy",
        "ABCDEFGHILMNOPQRSTUVZJKWXY",
        "0123456789",
        "!£$%&/?#@*"
    ];
    for($i = 0; $i < $length; $i++){
        $select = rand(0,3);
        $last = strlen($elements[$select] ) -1;
        $password .= $elements[$select][rand(0,$last)];
    };
    session_start();
    return $password ;
}

?>