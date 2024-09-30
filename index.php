<?php
    session_start();

    var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>42 LC PHP Session</title>
    </head>
    <body>

        <header>
            <h1>
                42 LC PHP Session
            </h1>
        </header>

        <main>
            <?php
                // if (isset($_SESSION['user']) == false) {
                if (!isset($_SESSION['user'])) {
            ?>
                <form action="./do_login.php" method="post">
                    <div>
                        <div>
                            <label for="username">
                                Username
                            </label>
                        </div>
                        <input type="text" name="username" id="username" placeholder="Inserisci il tuo username...">
                    </div>

                    <div>
                        <div>
                            <label for="password">
                                Password
                            </label>
                        </div>
                        <input type="password" name="password" id="password" placeholder="Inserisci la tua password...">
                    </div>

                    <div>
                        <button type="submit">
                            Accedi
                        </button>
                    </div>
                
                </form>
            <?php
                }
                else {
                    echo '<h3>Sei già loggato come <a href="./profile.php">'.$_SESSION['user']['username'].'</a></h3>';
                }
            ?>
        </main>
        
    </body>
</html>