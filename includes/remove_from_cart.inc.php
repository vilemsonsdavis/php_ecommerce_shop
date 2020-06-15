<?php
    session_start();

    //izvelkam produkta nosaukumu ar metodi GET, kas ir norādīts pie button zem "value"
    //un izdzēšam to mainīgo, kā rezultātā grozā nebūs vairs šis produkts
    $product = $_GET['product'];
    unset($_SESSION[$product]);
    header("Location: ../cart.php");