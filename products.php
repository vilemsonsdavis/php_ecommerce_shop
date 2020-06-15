<!DOCTYPE html>

<html>

<head>
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <?php include 'includes/header.inc.php'; ?>

    <!-- izvietojam visus produktus -->
    <figure>
        <img src='images/hamburger.png' alt='hamburger' />
        <figcaption>
            <p>Hamburger <b>$1.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Hamburger" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>

    <figure>
        <img src='images/pizza.png' alt='pizza' />
        <figcaption>
            <p>Pizza <b>$9.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Pizza" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>

    <figure>
        <img src='images/hotdog.png' alt='hotdog' />
        <figcaption>
            <p>Hot Dog <b>$3.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Hot Dog" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>

    <figure>
        <img src='images/french_fries.png' alt='french_fries' />
        <figcaption>
            <p>French Fries <b>$1.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="French Fries" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>

    <figure>
        <img src='images/donut.png' alt='donut' />
        <figcaption>
            <p>Donut <b>$2.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Donut" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>

    <figure>
        <img src='images/cola.png' alt='cola' />
        <figcaption>
            <p>Cola <b>$1.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Cola" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>

    <figure>
        <img src='images/fanta.png' alt='fanta' />
        <figcaption>
            <p>Fanta <b>$1.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Fanta" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>

    <figure>
        <img src='images/nachos.png' alt='nachos' />
        <figcaption>
            <p>Nachos <b>$3.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Nachos" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>

    <figure>
        <img src='images/taco.png' alt='taco' />
        <figcaption>
            <p>Taco <b>$4.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Taco" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>

    <figure>
        <img src='images/potato_chips.png' alt='potato_chips' />
        <figcaption>
            <p>Potato Chips <b>$1.99</b></p>
        </figcaption>
        <figcaption>
            <form action="includes/add_to_cart.inc.php" method="$_GET" class="form_products">
                <button name="product" type="submit" value="Potato Chips" class="form__button__add__to__cart">ADD TO CART</button>
            </form>
        </figcaption>
    </figure>
    
    <?php include 'includes/footer.inc.php'; ?>

</body>

</html>