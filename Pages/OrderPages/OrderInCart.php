<html>

    <head>
        <link rel="stylesheet" href="../../Style/bootstrap.css">
        <link rel="stylesheet" href="../../Style/OrderPageStyles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        

        <!-- Calls and displays navbar -->
        <?php
            include('../Component/Navbar.php');
        ?>
  
        <div class="keywords--block custom-card" style="top: 90px">
            <h1><Strong>Total</Strong></h1>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 45%;">Total:</th>
                    <td id="total" style="width 30%;"></td>
                </tr>
            </table>
            <form action="./MakeOrder.php" method="POST">
                <input type="hidden" name="customerID" value="1000">
                <input type="hidden" name="price[]" id="itemPrice">                
                <input type="hidden" name="qty[]" id="qtyList">
                
                
                <input onclick="localStorage.clear()" value="Check Out" type="submit" style="background-color: #F5F5DC; margin-top: 75px; font-size: 20px; width: 125px"></input>
            </form>
        </div>

        <div class ="v-align">
            
            <div id="my-table" style="margin-left: 20px"></div>
           
        </div>

        <script src="../../Script/OrderPageScripts/OrderInCart.js"></script>

    </body>

    <footer>

    </footer>

</html>