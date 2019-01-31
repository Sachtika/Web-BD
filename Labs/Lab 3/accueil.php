<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Compagnie de vol</title>
    </head>

    <header>
        <?php
        echo '<h2>Paperplane Airline</h2>';
        if(isset($_GET["nom"]) && isset($_GET["prenom"]))
        {
            echo 'Bonjour '.$_GET["prenom"].' '.$_GET["nom"].'!';
        }
        else {
            echo '<h1>MAIS QUI ÊTES VOUS BORDEL DE M$*%E?</h1>';
        }
        echo '<a href="index.php">Deconnexion</a>';
        ?>
    </header>

    <body>
    <?php
    echo '';
    echo '';
    echo '<div>';
    echo '<a href="">Hyperlien 1</a><br>';
    echo '<a href="">Hyperlien 2</a><br>';
    echo '<a href="">Hyperlien 3</a><br>';
    echo '</div>';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '<div>';
    echo '</div>';
    ?>
    </body>

    <footer>
        <?php
        echo '<p>Fait par Sacha Tremblay</p>';
        echo '<p>Contactez-nous: tresa1831788@etu.cegepjonquiere.ca</p>';
        ?>
    </footer>

</html>