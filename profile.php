<?php

    session_start();

    var_dump($_SESSION);

    if (!isset($_SESSION['user'])) {
        header('Location: ./index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profilo</title>
    </head>
    <body>

        <header>
            <h1>
                Profilo
            </h1>

            <div>
                <a href="./index.php">
                    Torna alla home
                </a>
            </div>
        </header>

        <main>
            <?php
                if (isset($_SESSION['user'])) {
            ?>
                <h2>
                    <?php echo $_SESSION['user']['username']; ?>
                </h2>

                <ul>
                    <li>
                        ID: <?php echo $_SESSION['user']['id']; ?>
                    </li>
                    <li>
                        Email: <?php echo $_SESSION['user']['email']; ?>
                    </li>
                </ul>

                <div>
                    <a href="./logout.php">
                        Esci
                    </a>
                </div>
            <?php
                }
            ?>
        </main>
        
    </body>
</html>