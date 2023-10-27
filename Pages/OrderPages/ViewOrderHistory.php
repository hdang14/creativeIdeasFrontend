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

        <!-- Calls and displays navbar -->
        <?php
            include('Navbar.php');
        ?>

        <!-- Displays Order Items -->
        <div class ="v-align">
            <div class="card box-card order-card">

                <h3 class="align-text" id="name1"><Strong>Order 1</Strong></h3>
                <table>
                    <tr>
                        <td class="name" id="itemName1"></td>
                        <td class="col-size label">QTY:</td>
                        <td class="col-size" id="itemQty1"></td>
                        <td class="col-size label">Price:</td>
                        <td class="col-size" id="itemPrice1"></td>
                        <td class="col-size label">Status:</td>
                        <td class="col-size" id="itemStatus1"></td>
                    </tr>
                    <tr>
                        <td class="name" id="itemName2"></td>
                        <td class="col-size label">QTY:</td>
                        <td class="col-size" id="itemQty2"></td>
                        <td class="col-size label">Price:</td>
                        <td class="col-size" id="itemPrice2"></td>
                        <td class="col-size label">Status:</td>
                        <td class="col-size" id="itemStatus2"></td>
                    </tr>
                </table>
            </div>
        
            <div class="card box-card order-card">
                <h3 class="align-text" id="name1"><Strong>Order 2</Strong></h3>
                <table>
                    <tr>
                        <td class="name" id="itemName3"></td>
                        <td class="col-size label">QTY:</td>
                        <td class="col-size" id="itemQty3"></td>
                        <td class="col-size label">Price:</td>
                        <td class="col-size" id="itemPrice3"></td>
                        <td class="col-size label">Status:</td>
                        <td class="col-size" id="itemStatus3"></td>
                    </tr>
                    <tr>
                        <td class="name" id="itemName4"></td>
                        <td class="col-size label">QTY:</td>
                        <td class="col-size" id="itemQty4"></td>
                        <td class="col-size label">Price:</td>
                        <td class="col-size" id="itemPrice4"></td>
                        <td class="col-size label">Status:</td>
                        <td class="col-size" id="itemStatus4"></td>
                    </tr>
                </table>
            </div>
        </div>
          

    </body>

    <footer>

    </footer>

</html>