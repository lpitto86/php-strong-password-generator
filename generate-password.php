<?php

      session_start();

      require __DIR__.'functions.php';

      $password = '';
      if (isset($_GET['lenght'])) {
            $passLeght = intval($_GET['lenght']);
      }

      $_SESSION['password'] = $password;

      // var_dump($password);
      header('Location: ./result.php');
?>