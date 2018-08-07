<?php
  // include_once 'includes/parentclass.inc.php';
  // include_once 'includes/newclass.inc.php';
  include_once 'includes/usersclass.inc.php';
  // $object = new NewClass;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learn OOP</title>
  </head>
  <body>
    <?php
      $users = new Users('Cris', 'Vergara', 'Black', 'Black');
      echo $users->fullName();
    ?>
  </body>
</html>
