<?php
    //piestartējam sesiju
    session_start();
?>

<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>Header Doc included</title>
</head>

<body>

<div class="header">
        <a href="home.php"><h1 class="homepage__title">SnackShop</h1></a>
        <a href="products.php"><h1 class="products__title">Products</h1></a>
        <!-- Paypal poga -->
        <form class="form__donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick" />
                <input type="hidden" name="hosted_button_id" value="FU3VKMPVVMBQ8" />
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/en_LV/i/scr/pixel.gif" width="1" height="1" />
        </form>
        <?php
                //ja neesam ielogojušies, tad headerī iekļaujam "Register" un "Login" pogas
                if (!isset($_SESSION['username'])) {
                        echo '<a href="login.php"><h1 class="login__title">Login</h1></a>';
                        echo '<a href="registration.php"><h1 class="registration__title">Register</h1></a>';
                }
                //citādi iekļaujam opciju "Logout" 
                else {
                        echo '<a href="includes/logout.inc.php"><h1 class="logout__title">Logout</h1></a>';
                }
        ?>
        <a href="cart.php"><h1 class="cart__title">Cart<img src="images/cart.png" width="20" height="20"></h1></a>
</div>
</body>
</html>