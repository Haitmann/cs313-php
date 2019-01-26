<?php
    session_start();

    if(!isset($_SESSION['itemQtys'])) {
        $_SESSION['itemQtys'] = [
            '001' => 0,
            '002' => 0,
            '003' => 0,
            '004' => 0,
            '005' => 0,
            '006' => 0,
            '007' => 0,
            '008' => 0,
            '009' => 0,
            '010' => 0,
            '011' => 0,
            '012' => 0
        ];
    }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' href='css/styles.css'>
    <title>Browse | Outdoor Sports</title>

</head>
<body>

    <div id='top-bar'>
        <a href='index.php'><img src='images/logo.png' alt='main logo' title='nav logo' id="logo-icon"></a>
        <p id='page-heading'>Outdoor Gear</p>

        <a href='view-cart.php'><img src='images/cart.png' alt='shopping cart icon' title='View cart' id='cart-icon'></a>

    </div>
    <div id='container'>
        <div>
            <figure>
                <img src='images/t-shirt-001.jpg' alt='Blue Backpack'>
                <figcaption>Cool backpack, Price: $10.50</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='001'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-002.jpg' alt='backpack'>
                <figcaption>Black backpack, Price: $12.25</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='002'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-003.jpg' alt='glove'>
                <figcaption>Men's glove, Size: M, Price: $11.35</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='003'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-004.jpg' alt='shoes'>
                <figcaption>Men's hiking shoes, Size: 9, Price: $15.40</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='004'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-005.jpg' alt='pants'>
                <figcaption>Men's pants , Size: L, Price: $8.92</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='005'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-006.jpg' alt='sunglass'>
                <figcaption>Men's sunglass, Price: $13.11</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='006'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-007.jpg' alt='tent'>
                <figcaption>Camping tent, Price: $9.73</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='007'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-008.jpg' alt='bracelet'>
                <figcaption>Men's survival bracelet, Price: $10.38</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='008'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-009.jpg' alt='balaclava'>
                <figcaption>Men's balaclava, Size: L, Price: $12.22</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='009'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-010.jpg' alt='icestick'>
                <figcaption>Ice Stick, Size: M, Price: $14.71</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='010'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-011.jpg' alt='granite gear'>
                <figcaption>Granite Gear, Price: $15.87</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='011'>
            </form>
        </div>
        <div>
            <figure>
                <img src='images/t-shirt-012.jpg' alt='helmet'>
                <figcaption>Helmet Size: M, Price: $14.88</figcaption>
            </figure>
            <form action='add.php' method='post'>
                <input class='button' type='submit' title='Add item to your cart' value='Add To Cart'>
                <input type='hidden' name='item' value='012'>
            </form>
        </div>
    </div>
</body>
</html>
