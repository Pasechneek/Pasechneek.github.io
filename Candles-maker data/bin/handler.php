<?php




echo htmlspecialchars($_POST['username']);

echo htmlspecialchars($_POST['password']);


$users = [];

$userName = $_POST['username'];
$userPassword = $_POST['password'];

$users[] = [$userName, $userPassword];


var_dump($users);


?>