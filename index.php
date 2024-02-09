<?php
      // var_dump($_GET);

      $password = '';
      if (isset($_GET['lenght'])) {
            $passLenght = intval($_GET['lenght']);

            // var_dump($passLenght);

            if($passLenght >=3 && $passLenght <= 18) {
                  $validCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!$%&()=?^_-[]';
                  $min = 0;
                  $max = strlen($validCharacters) - 1;

                  for ($i = 0; $i < $passLenght; $i++) {
                        $randomCharacters = $validCharacters[mt_rand($min, $max)];
                        // var_dump($randomCharacters);

                        $password .= $randomCharacters;
                  }

                  // var_dump($password);
            }
      }
?>

<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Password Generator</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      </head>
      <body>
            <header>
                  <h1>
                        <div class="container">
                              <div class="row">
                                    <div class="col">
                                          <h1>
                                                PHP Strong Password Generator
                                          </h1>
                                    </div>
                              </div>
                        </div>
                  </h1>
            </header>
            <main>
                  <div class="container">
                        <div class="row">
                              <div class="col">
                                    <form action="" method="GET">
                                          <div class="mb-3">
                                                <label for="lenght" class="visually-hidden">Lunghezza Password</label>
                                                <input id="lenght" name="lenght" type="number" class="form-control" required min="3" max="10" placeholder="Inserisci la lunghezza della Password...">
                                          </div>
                                          <div>
                                                <button type="submit" class="btn btn-primary mb-3">
                                                      Genera Password
                                                </button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col">
                                    <h2>
                                          La password generata è:
                                          <strong>
                                                <?php
                                                      echo $password;
                                                ?>
                                          </strong>
                                    </h2>
                              </div>
                        </div>
                  </div>
            </main>
            <footer>
            </footer>
      </body>
</html>