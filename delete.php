<?php 
require_once('classes/Users.php');

$users = new Users();

$id = $_GET['id'];

$users->delete_user($id);








?>