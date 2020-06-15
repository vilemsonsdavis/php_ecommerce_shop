<!DOCTYPE html>

<html>

<head>
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <?php include 'includes/header.inc.php'; ?>

    <p class="register"><b>Register and receive 10% discount on checkout!</b></p>

    <form class="form_register" method="POST" action="includes/register.inc.php">
        <input type="text" name="username" placeholder="Username" class="form__input">
        <input type="password" name="password" placeholder="Password" class="form__input">
        <input type="text" name="email" placeholder="E-mail" class="form__input">
        <button class="form__button__register" name="register">Register</button>
    </form>

    <?php
        //tā kā mēs header location uzlikām url "..register=empty"
        //tad neaizpild[ītu lauku gadījumā mēs šīm vērtībām piekļūstam ar $_GET utml.
        if (!isset($_GET['register'])) {
            //ja register poga nav nospiesta, tad nedaram neko
        } else {
            //citādi pārbaudām vai nav kādi errori
            $reg_value = $_GET['register'];
            if ($reg_value == "empty") {
                echo "<p class=\"register_error\">You left some fields empty! Fill them, please!<p>";
            } else if ($reg_value == "user_exists") {
                echo "<p class=\"register_error\">This username already exists, use different one!<p>";
            }
        }
    ?>

    <?php include 'includes/footer.inc.php'; ?>

</body>

</html>