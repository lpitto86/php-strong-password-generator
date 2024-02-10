<?php

function generateRandomPassword($lenght) {
      $password = '';

      if ($lenght >=3 && $lenght <= 18) {
            $validCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!$%&()=?^_-[]';
            $min = 0;
            $max = strlen($validCharacters) - 1;

            for ($i = 0; $i < $lenght; $i++) {
                  $randomCharacters = $validCharacters[mt_rand($min, $max)];
                  // var_dump($randomCharacters);

                  $password .= $randomCharacters;
            }

            // var_dump($password);
      }

      return $password;
}
?>