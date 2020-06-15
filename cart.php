<!DOCTYPE html>

<html>

<head>
    <title>My Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <?php
        include 'includes/header.inc.php';

        //izvietojam produktus, ja tie ir peivienoti grozam
        //lai to izdarītu, pārbaudam sesijas mainīgos 
        $total_price = 0;
        if (isset($_SESSION['Hamburger'])) {
            $total_price += $_SESSION['Hamburger'];
            echo '<figure >
            <img  src="images/hamburger.png">
            <figcaption >
                <p>Hamburger <b>$1.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Hamburger" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }
        if (isset($_SESSION['Pizza'])) {
            $total_price += $_SESSION['Pizza'];
            echo '<figure >
            <img  src="images/pizza.png">
            <figcaption >
                <p>Pizza <b>$9.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Pizza" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }
        if (isset($_SESSION['Hot Dog'])) {
            $total_price += $_SESSION['Hot Dog'];
            echo '<figure >
            <img  src="images/hotdog.png">
            <figcaption >
                <p>Hot Dog <b>$3.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Hot Dog" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }
        if (isset($_SESSION['French Fries'])) {
            $total_price += $_SESSION['French Fries'];
            echo '<figure >
            <img  src="images/french_fries.png">
            <figcaption >
                <p>French Fries <b>$1.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="French Fries" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }
        if (isset($_SESSION['Donut'])) {
            $total_price += $_SESSION['Donut'];
            echo '<figure >
            <img  src="images/donut.png">
            <figcaption >
                <p>Donut <b>$2.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Donut" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }
        if (isset($_SESSION['Cola'])) {
            $total_price += $_SESSION['Cola'];
            echo '<figure >
            <img  src="images/cola.png">
            <figcaption >
                <p>Cola <b>$1.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Cola" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }
        if (isset($_SESSION['Fanta'])) {
            $total_price += $_SESSION['Fanta'];
            echo '<figure >
            <img  src="images/fanta.png">
            <figcaption >
                <p>Fanta <b>$1.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Fanta" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }
        if (isset($_SESSION['Nachos'])) {
            $total_price += $_SESSION['Nachos'];
            echo '<figure >
            <img  src="images/nachos.png">
            <figcaption >
                <p>Nachos <b>$3.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Nachos" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }
        if (isset($_SESSION['Taco'])) {
            $total_price += $_SESSION['Taco'];
            echo '<figure >
            <img  src="images/taco.png">
            <figcaption >
                <p>Taco <b>$5.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Taco" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }
        if (isset($_SESSION['Potato Chips'])) {
            $total_price += $_SESSION['Potato Chips'];
            echo '<figure >
            <img  src="images/potato_chips.png">
            <figcaption >
                <p>Potato Chips <b>$1.99</b></p>
            </figcaption>
            <figcaption >
            <form action="includes/remove_from_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Potato Chips" class="form__button__add__to__cart">REMOVE FROM CART</button>
            </form>
            </figcaption>
            </figure>';
        }

        if (!isset($_GET['buy_now'])) {
            //ja neviens produkts nav grozā (neeksistē sesijas mainīgie ar nevienu produktu)
            //tad attēlojam attēlu ar tekstu par tukšu grozu
            if (!isset($_SESSION['Hamburger']) && !isset($_SESSION['Hot Dog']) && !isset($_SESSION['French Fries'])
                && !isset($_SESSION['Pizza']) && !isset($_SESSION['Donut']) && !isset($_SESSION['Cola'])
                && !isset($_SESSION['Fanta']) && !isset($_SESSION['Nachos']) && !isset($_SESSION['Taco'])
                && !isset($_SESSION['Potato Chips'])) {
                    echo '<h1 class="cart">Your cart is empty!</h1>
                    <img class="cart" src="images/empty_cart.png">';
            } else { // citādāk attēlojam cenu un pogu "BUY NOW"
                if (!isset($_SESSION['username'])) {
                    echo '<h1 class="cart__tprice">Total price: '.$total_price.'$</h1><br>';
                } else { //kā arī, ja esam ielogojušies, tad attēlojam atlaides cenu -10%
                    $discount_price = round($total_price * 0.9, 2);
                    echo '<h1 class="cart__tprice">Total price: <s>'.$total_price.'$</s>    '.$discount_price.'$</h1><br>';
                }
                echo '<form action="includes/buy_now.inc.php">
                        <button name="buy_now" type="submit" class="form__button__buy__now">BUY NOW</button>
                    </form>';
            }
        } else { //ja esam nospieduši pogu BUY NOW, tad attēlojam tekstu ar pateicību par pirkumu
            $buy_now = $_GET['buy_now'];
            if ($buy_now == "pressed") {
                echo '<h1 class="cart">Thanks for purchase!</h1>';
            }
        }

        include 'includes/footer.inc.php';
    ?>

</body>

</html>