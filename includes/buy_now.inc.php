<?php
    session_start();
    //include uz db konekcijas izveidi
    include_once 'dbh.inc.php';

    //iegūstam username
    $username = $_SESSION['username'];
    /*iterējam cauri visiem sesijas pieglabātajiem mainīgajiem
    skipojam username mainīgo, jo tas mums neinteresē, bet pārējie ir
    produkti, kas ir pieglabāti kā - product(key): price(value)
    un tos insertējam nopirkto produktu tabulā, kā arī izdzēšam no sesija jeb groza*/
    foreach ($_SESSION as $key=>$val) {
        if ($key != username) {
            $sql_insert = "insert into products_bought (product, price, username) VALUES ('$key', '$val', '$username');";
            mysqli_query($conn, $sql_insert);
            unset($_SESSION[$key]);
        }
    }

    //ar šo mēs norādām kurā lapā atgriezties pēc augstāk esošā koda izpildes
    header("Location: ../cart.php?buy_now=pressed");