<?php

    session_start();

    //pārbaudam vai ir nospiesta poga "login"
    if (isset($_POST['login'])) {
        //include uz db konekcijas izveidi
        include_once 'dbh.inc.php';

        //izgūstam ievadīto paroli un username
        $username = $_POST['username'];
        $password = $_POST['password'];

        //ja kāds no laukiem ir tukšs, tad pārlecam uz to pašu lapu ar papildinājumu nosuakumā
        // "?login=empty", kuru izmantosim, laia ttēlotu erroru par neaizpildītu lauku
        if (empty($username) || empty($password) ){
            header("Location: ../login.php?login=empty");
        } else {
            //select skripts, kas atrod vai eksistē šāds username
            $sql_select = "SELECT username, password FROM users WHERE username = '$username';";
            //palaižam skriptu uz db un seivojam atgrieztās rindas mainīgajā
            $result = mysqli_query($conn, $sql_select);
            //pārbaudām vai skripts ir ko atgriezis
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $user_pw = $row['password'];
                    if ($user_pw == $password) {
                        //login successfully
                        $_SESSION['username'] = $username;
                        header("Location: ../home.php");
                    } else { //pie nepareizas paroles attēlosim erroru par to
                        header("Location: ../login.php?login=wrong_password");
                    }
                }
                
            } else { // ja username nav reģistrēts, tad attēlojam error arī par to
                header("Location: ../login.php?login=user_not_exists&username=$username");
            }
        }
    }
