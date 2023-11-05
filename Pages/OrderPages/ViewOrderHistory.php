<html>

    <head>
        <link rel="stylesheet" href="../../Style/bootstrap.css">
        <link rel="stylesheet" href="../../Style/OrderPageStyles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="../../Script/OrderPageScripts/OrderHistory.js"></script>
        <script>
             window.onload = function () {
                const cartSizeElement = document.getElementById('cart-size');
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                cartSizeElement.textContent = cart.length;
            }
        </script>

        <!-- Calls and displays navbar -->
        <?php
            include('../Component/Navbar.php');
        ?>

        <!-- Displays Order Items -->

        <div class ="v-align">
            <div id="my-order"></div>
        </div>
          

    </body>

    <footer>

    </footer>

</html>