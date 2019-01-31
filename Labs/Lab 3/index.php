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

    <form method="post">
    <h1>CHING CHONG 2000</h1>
    <label for="username">Username</label><br>
    <input type="text" name="username"><br>
    <label for="password">Password</label><br>
    <input type="password" name="password">
    <button type="button">Inscription</button>
        <button id="bouttonConnexion" type="submit" onclick="location.href='accueil.php'";>Se connecter</button>

    </form>

    </body>

    <footer>
        <?php
        echo '<p>Fait par Sacha Tremblay</p>';
        echo '<p>Contactez-nous: tresa1831788@etu.cegepjonquiere.ca</p>';
        ?>
    </footer>
<script type="text/javascript" src="traitement.js">
</html>