<html>

    <head>
        <link rel="stylesheet" href="../../Style/bootstrap.css">
        <link rel="stylesheet" href="../../Style/OrderPageStyles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="../../Script/OrderPageScripts/OrderInCart.js"></script>

        <!-- Calls and displays navbar -->
        <?php
            include('../Component/Navbar.php');
        ?>

        <div class="card box-card total-card">
            <h1>Subtotal</h1>
            <table>
                <tr>
                    <th>Subtotal:</th>
                    <td id="subTotal"></td>
                </tr>
            </table>
            <form action="#">
                <submit value="submit" type="button" style="background-color: #F5F5DC;">Check Out</submit>
            </form>
        </div>

        <div class ="v-align">
            
            <div id="my-table"></div>
           
        </div>
          

    </body>

    <footer>

    </footer>

</html>