<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Ideas</title>
    <link rel="stylesheet" href="../../Style/bootstrap.css">
    <link rel="stylesheet" href="../../Style/StorePageStyle/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
             window.onload = function () {
                const cartSizeElement = document.getElementById('cart-size');
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                cartSizeElement.textContent = cart.length;
            }
        </script>
        <script>
            async function addItem(){

                const itemName = document.getElementById("item_name").value;
                const itemDesc = document.getElementById("item_description").value;
                const itemPrice = document.getElementById("item_price").value;

                const request = {
                    name: itemName,
                    description: itemDesc,
                    price: itemPrice,
                    qty: 1,
                };


                const response = await fetch('http://localhost/CreativeIdeasBackend/InventoryApi/index.php/addItem', {
                    method: 'POST',
                    headers:{
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(request),

                });

                document.getElementById("item_name").value = "";
                document.getElementById("item_description").value = "";
                document.getElementById("item_price").value = "";

                showSuccess();
            }
            function showSuccess() {
                // Get the snackbar DIV
                var x = document.getElementById("snackbar");

                // Add the "show" class to DIV
                x.className = "show";

                // After 3 seconds, remove the show class from DIV
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

            }  
        </script>
   <?php include("../Component/Navbar.php") ?>

   <div id="snackbar">Added to store</div>

      <div class="center">
        <form class="addform">
            <div class="form-group">
                <label for="item_name">Name:</label>
                <input type="text" id="item_name" name="item_name" required>
            </div>
            <div class="form-group">
                <label for="item_description">Description:</label>
                <textarea id="item_description" name="item_description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="item_price">Price:</label>
                <input type="number" step="0.01" id="item_price" name="item_price" required>
            </div>
            <div style="text-align: right;">
                <button type="button" onclick="addItem()">Add Item</button>
            </div>
        </form>
    </div>

    <footer>
        
    </footer>

    
</body>
</html>
<style>
    .center{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(600px, auto));
        justify-content: center;
        align-items: center;
        gap: 2rem;
        padding-top: 2rem;
    }
    .addform {
        border: 1px solid #ccc;
        padding: 20px;
        background-color: #f9f9f9;
        width: 100%;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
    }

    input[type="text"],
    input[type="number"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #C6F4BA;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #b2f8a1;
    }

    

</style>
