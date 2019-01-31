<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Compagnie de vol</title>
    </head>

    <header>
        <?php
        echo '<h1>Paperplane Airline</h1>';
        ?>
    </header>

    <body>
    <?php
    echo '<form method="post">';
    echo '<h1>CHING CHONG 2000</h1>';
    echo '<label for="username">Username</label><br>';
    echo '<input type="text" name="username"><br>';
    echo '<label for="password">Password</label><br>';
    echo '<input type="password" name="password">';
    echo '';
    echo '<button type="button">Inscription</button>';
    echo '<button type="submit">Se connecter</button>';
    echo '';
    echo '</form>';
    ?>
    </body>

    <footer>
        <?php
        echo '<p>Fait par Sacha Tremblay</p>';
        echo '<p>Contactez-nous: tresa1831788@etu.cegepjonquiere.ca</p>';
        ?>
    </footer>

</html>