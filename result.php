<?php
      session_start();
      $_password = $_SESSION['password'];
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
                                                Risultato - PHP Strong Password Generator
                                          </h1>
                                    </div>
                              </div>
                        </div>
                  </h1>
            </header>
            <main>
                  <div class="container">
                        <?php
                              if (strlen($password) > 0) {
                        ?>
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
                        <?php
                              }
                        ?>
                  </div>
            </main>
            <footer>
            </footer>
      </body>
</html>