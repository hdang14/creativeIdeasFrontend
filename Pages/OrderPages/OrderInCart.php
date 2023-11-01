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
        
        <div class="keywords--block custom-card">
            <h1><Strong>Total</Strong></h1>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 45%;">Total:</th>
                    <td id="total" style="width 30%;"></td>
                </tr>
            </table>
            <form action="" method="POST">
                <input type="hidden" name="inventoryID" value="10">
                <input type="hidden" name="customerID" value="1000">
                <input type="hidden" name="qty" value="3">
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
<?php
    

        $invID      = $_POST["inventoryID"];
        $customerID = $_POST["customerID"];
        $qty        = $_POST["qty"];

        echo $invID . " " . $customerID . " " . $qty . "</br>";

        $data = array(
            'invID'      => $invID,
            'customerID' => $customerID,
            'qty'        => $qty
        );

        $jsonFilePath = './PlaceOrder.json';

        if(file_exists($jsonFilepath)){
            $existingData = json_decode(file_get_contents($jsonFilePath), true);
            $existingData[] = $data;
        }else{
            $existingData = array($data);
        }

        $jsonData = json_encode($existingData, JSON_PRETTY_PRINT);
        file_put_contents($jsonFilePath, $jsonData);

    
?>