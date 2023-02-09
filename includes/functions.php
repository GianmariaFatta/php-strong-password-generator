<?php
function createPassword($length){

$password="" ;

$elements=[
    "abcdefghilmnopqrstuvzjkwxy",
    "ABCDEFGHILMNOPQRSTUVZJKWXY",
    "0123456789",
    "!£$%&/?#@*"
];

if(empty($length)) return "Non è stata inserita la lunghezza della password";

for($i = 0; $i < $length; $i++){
    $select = rand(0,3);
    $last = strlen($elements[$select] ) -1;
    $password .= $elements[$select][rand(0,$last)];
};

session_start();
$_SESSION['password'] = $password;

return $password ;

};
?>