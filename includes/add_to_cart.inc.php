<?php
    session_start();
    //include uz db konekcijas izveidi
    include_once 'dbh.inc.php';

    //izvelkam produkta nosaukumu ar metodi GET, kas ir norādīts pie button zem "value"
    $product = $_GET['product'];

    //select skripts, kas atrod nopirktā produkta informāciju
    $sql_select = "SELECT product_id, product, price FROM products WHERE product = '$product';";
    //palaižam skriptu uz db un seivojam atgrieztās rindas mainīgajā
    $result = mysqli_query($conn, $sql_select);
    //pārbaudām vai skripts ir ko atgriezis
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        //ja skripts ir ko atrgiezis, tad skrienam cauri visāma tgrieztajām rindām
        //mūsu gadījumā gan tā vienmēr būs 1, jo produktu tabulā katram produktam ir 1 ieraksts
        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['product_id'];
            $price = $row['price'];
        }
        $_SESSION[$product] = $price;
    }

    //ar šo mēs norādām kurā lapā atgriezties pēc augstāk esošā koda izpildes
    header("Location: ../products.php");