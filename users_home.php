<?php include_once 'User.php'; ?>
<!doctype html>
<html>
    <head></head>
    <body>
      <table>
     <tr>
       <td>name</td>
       <td>age</td>
       <td>gender</td>
       <td>email</td>
     </tr>
     <?php 
        $user = new User();
        $users = $user->getusers();
        
     foreach ($users as $row) : ?>
     <tr>
       <td><?php echo $row['name']; ?></td>
       <td><?php echo $row['age']; ?></td>
       <td><?php echo $row['gender']; ?></td>
       <td><?php echo $row['email']; ?></td>
     </tr>
     <?php endforeach; ?>
   </table>
        
        
            </body>
</html>