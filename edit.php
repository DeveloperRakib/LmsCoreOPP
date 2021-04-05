<?php

require_once('classes/Users.php');

$users = new Users();

$id = $_GET['id'];

$data=$users->edit_user($id);

$data= mysqli_fetch_assoc($data);

if(isset($_POST['user'])){
 $users->update_user($_POST);
}









?>
<form action="" method="POST">
      <input type="hidden" name="id" value="<?php echo $data['id'];?>">
      <input type="text"  id="" value="<?php echo $data['name']; ?>" name="name">
      <input type="email" id="" value="<?php echo $data['email']; ?>" name="email">
      
      <input type="submit" value="Upsate User" name="user">
   </form>