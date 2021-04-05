<?php 


require_once('classes/Users.php');
require_once('classes/First.php');

$users = new Users();

   if(isset($_POST['user'])){  
      $message = $users->save_user($_POST);
   }

$all_user = $users->all_user();



//$first = new text\First();

//echo $first->first();
use text\First;

First::first();

?>





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="" method="post">
      <input type="text"  id=""placeholder="Name" name="name">
      <input type="email" id=""placeholder="Email" name="email">
      <input type="password"  id=""placeholder="Password" name="password">
      <input type="submit" value="Save User" name="user">
   </form>

   <h1><?php if(isset($_POST['user'])){  
      echo $message ;
   } ?></h1>

   <hr>
   <table border>
      <tr>
         <th>Name</th>
         <th>Email</th>
         <th>Action</th>
      </tr>
      <?php 
      
         while($row = mysqli_fetch_assoc($all_user)){  

            ?>
            
      <tr>
         <td><?php echo $row['name'] ?></td>
         <td><?php echo $row['email'] ?></td>
         <td>
            <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
            <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
         </td>
      </tr>
      <?php

         }
      ?>
   </table>


</body>
</html>
 







































