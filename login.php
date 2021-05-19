<?php
session_start();

$_SESSION['loginErreur'] = false;


$username = $_POST['username'];
$password = $_POST['password'];

if($username === "g.roucher" && "MV3D6wgc3" === $password){
    header('Location: index.php');
    $_SESSION['userLogin'] = true;
}else if($username === "canonne" && "21232f297a57a5a743894a0e4a801fc3" === md5($password)){
    header('Location: client.php');
    $_SESSION['adminLogin'] = true;
}else{
    $_SESSION['loginErreur'] = true;
    $_SESSION['loginmsg'] = "Email ou password incorrect";
    header('Location: login_view.php');
}
