<?php 



class Users{  
 public function __construct()
 {
  
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "oop";

  $this->dbcon= mysqli_connect($host,$user,$password,$database);
  
  
 }

 public function save_user($data){  
  $name = $data['name'];
  $email = $data['email'];
  $password = $data['password'];
  $query = "INSERT INTO users(`name`,`email`,`password`) VALUES('$name','$email','$password')";
  $result = mysqli_query($this->dbcon,$query);
  $message = "Data Insert Successfully";
  return $message;
 }




public function all_user(){  
 return mysqli_query($this->dbcon, "SELECT * FROM `users`");

}

public function delete_user($id){
 mysqli_query($this->dbcon, "DELETE FROM `users` WHERE `id`= '$id'");
 header("location:index.php");
}



public function edit_user($id){ 
 return mysqli_query($this->dbcon, "SELECT * FROM `users` WHERE `id` = '$id'");


}

public function update_user($data){ 
 $id = $data['id'];
 $name = $data['name'];

 $email = $data['email'];
 mysqli_query($this->dbcon, "UPDATE `users` SET `name`='$name',`email`='$email' WHERE `id`='$id'");
 header("Location:index.php");
}






}









?>