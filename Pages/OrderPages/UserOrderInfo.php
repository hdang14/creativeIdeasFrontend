<html>

    <head>
        <link rel="stylesheet" href="../../Style/bootstrap.css">
        <link rel="stylesheet" href="../../Style/OrderPageStyles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="../../Script/OrderPageScripts/CheckOut.js"></script>
        
        <!-- Calls and displays navbar -->
        <?php
            include('../Component/Navbar.php');
        ?>

        <!-- Total Price Card -->
        <div class="card box-card total-card">
            <h1>Total</h1>
            <table>
                <tr>
                    <th>Subtotal:</th>
                    <td id="subTotal"></td>
                </tr>
                <tr>
                    <th>Tax:</th>
                    <td id="tax"></td>
                </tr>
                <tr>
                    <th>Total:</th>
                    <td id="total"></td>
                </tr>
            </table>
            <form action="#">
                <submit value="submit" type="button" style="background-color: #F5F5DC;">Place Order</submit>
            
        </div>

        <!-- Customer Infomation Card -->
        <div class ="v-align">
            <div class="card box-card order-card">

                <h3 class="align-text">Customer Information</h3>
                <input type="text" style="width:50%" placeholder="First Name">
                <input type="text" style="width:50%" placeholder="Last Name">
                <input type="text" style="width:50%" placeholder="Email">
            </div>

        </div>
        </form>

    </body>

    <footer>

    </footer>

</html>