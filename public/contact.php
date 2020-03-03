<?php
  mail('culturasariri@gmail.com', $_POST['name'], $_POST['email'], $_POST['mensaje']);
  header('location:contacto');
?>
