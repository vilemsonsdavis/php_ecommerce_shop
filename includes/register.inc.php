<?php

    //pārbaudam vai poga "register" ir nospiesta
    if (isset($_POST['register'])) {
        //include uz db konekcijas izveidi
        include_once 'dbh.inc.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if (empty($username) || empty($password) || empty($email) ){
            header("Location: ../registration.php?register=empty");
        } else {
            //select skripts, kas atrod vai eksistē šāds username
            $sql_select = "SELECT * FROM users WHERE username = '$username';";
            //palaižam skriptu uz db un seivojam atgrieztās rindas mainīgajā
            $result = mysqli_query($conn, $sql_select);
            //pārbaudām vai skripts ir ko atgriezis, ja jā tad username jau eksistē
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                header("Location: ../registration.php?register=user_exists");
            } else { // ja username neeksistē, tad veiksmīgi piereģistrējam to
                $sql_reg = "INSERT INTO users (username, password, email)
                VALUES ('$username', '$password', '$email');";
                mysqli_query($conn, $sql_reg);
                header("Location: ../home.php");
            }
        }
    }
