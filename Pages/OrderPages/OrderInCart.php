<html>

    <head>
        <link rel="stylesheet" href="../../Style/bootstrap.css">
        <link rel="stylesheet" href="../../Style/OrderPageStyles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="../../Script/ShowSuccess.js"></script>
        <script>
            async function createOrder(){
                const custId = document.getElementById("customerId").value;
                const prices = document.getElementById("itemPrice").value.split(",");
                const qty = document.getElementById("qtyList").value.split(",");
                const ids = document.getElementById("idList").value.split(",");

                let items = [];
                for (var i = 0; i < ids.length; i++) {
                    items.push({
                        invID: parseInt(ids[i]),
                        qty: parseInt(qty[i]),
                    });
                }

                const request = {
                    items: items,
                    customerID: parseInt(custId),
                };

                const response = await fetch('http://localhost/CreativeIdeasBackend/OrdersApi/index.php/CreateOrder', {
                    method: 'POST',
                    headers:{
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(request),

                });

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                let responseData = await response.json();

                const cartSizeElement = document.getElementById('cart-size');
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
     
                // Set cart to empty
                cart = [];

                // Store the updated cart back in local storage
                localStorage.setItem('cart', JSON.stringify(cart));


                cartSizeElement.textContent = cart.length;

                const cartList = document.getElementById('my-table');
                cartList.innerHTML = '  Your cart is empty.';
                document.getElementById("total").innerHTML =  '$ ' + 0;


                showSuccess();
            }

            
        </script>

        <!-- Calls and displays navbar -->
        <?php
            include('../Component/Navbar.php');
        ?>

    <div id="snackbar">Successfully ordered</div>
  
        <div class="keywords--block custom-card" style="top: 90px">
            <h1><Strong>Total</Strong></h1>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 45%;">Total:</th>
                    <td id="total" style="width: 30%;"></td>
                </tr>
            </table>
            <form>
                <input type="hidden" id="customerId" value="1000">
                <input type="hidden" name="price[]" id="itemPrice">                
                <input type="hidden" name="qty[]" id="qtyList">
                <input type="hidden" name="id[]" id="idList">
                
                <input onclick="createOrder()" value="Check Out" type="button" style="background-color: #F5F5DC; margin-top: 75px; font-size: 20px; width: 125px"></input>
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