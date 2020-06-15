<!DOCTYPE html>

<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <?php include 'includes/header.inc.php'; ?>

    <form class="form_register" method="POST" action="includes/login.inc.php">
        <input type="text" name="username" placeholder="Username" class="form__input">
        <input type="password" name="password" placeholder="Password" class="form__input">
        <button class="form__button__register" name="login">Login</button>
    </form>

    <?php
        //tā kā mēs header location uzlikām url "..login=empty"
        //tad neaizpild[ītu lauku gadījumā mēs šīm vērtībām piekļūstam ar $_GET utml.
        if (!isset($_GET['login'])) {
            //ja register poga nav nospiesta, tad nedaram neko
        } else {
            //citādi pārbaudām vai nav kādi errori
            $reg_value = $_GET['login'];
            if ($reg_value == "empty") {
                echo "<p class=\"register_error\">You left password or username empty!<p>";
            } else if ($reg_value == "user_not_exists") {
                if (isset($_GET['username'])) {
                    $username = $_GET['username'];
                }
                echo "<p class=\"register_error\">Username <b>$username</b> doesn't exist!<p>";
            } else if ($reg_value == "wrong_password") {
                echo "<p class=\"register_error\">Wrong password, try again!<p>";
            }
        }
    ?>

    <?php include 'includes/footer.inc.php'; ?>

</body>

</html>