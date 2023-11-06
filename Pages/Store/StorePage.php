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
    <script type="text/javascript">
    window.onload = function () {
        getItems();
        const searchInput = document.getElementById('search-input');
        const searchButton = document.getElementById('search-button');

        searchButton.addEventListener('click', performSearch);
        searchInput.addEventListener('input', performSearch);

        const cartSizeElement = document.getElementById('cart-size');
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        cartSizeElement.textContent = cart.length;
    }
async function getItems() {
    const response = await fetch("../../Script/OrderPageScripts/OrderInCart.json");
    
    if(response) {
        responseData = await response.json();

        var div = document.getElementById("shop");

        for(var i in responseData){

            var row = 
                `
                    
                        <li class="box">
                                        <img
                                src="placeholder.jpg" style="width:100px; height:100px;"/>
                                <h4 id="item${i}">${responseData[i].itemName}</h4>
                                <h5 id="price${i}">$ ${responseData[i].itemPrice}</h5>
                                <h5 id="desc${i}">${responseData[i].itemDesc}</h5>
                                <div class="cart">
                                    <a onclick="addOrder(${i})"><i class="bi bi-cart"></i></a>
                                </div>
                                <div class="edit">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="bi bi-pencil-square"></i></a>
                                </div>
                            </li>
                    
               `
                    
            div.innerHTML += row;
        }
    

    }
}
function performSearch() {
        const searchInput = document.getElementById('search-input').value.toLowerCase();
        const items = document.querySelectorAll('.shop .box');

        items.forEach(function (item, index) {
            const itemName = document.getElementById(`item${index}`).textContent.toLowerCase();

            if (itemName.includes(searchInput)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>

<div id="snackbar">Added to cart</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
        <button class="btn" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Item Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Item Price:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

    <!-- Calls and displays navbar -->
    <?php
            include('../Component/Navbar.php');
    ?>

   
<section class="shop"> 
    <ul class="container" id="shop" style="margin-top: 20px">
                      
    </ul>
</section>

    <footer>
        
    </footer>

</body>
</html>

<script>
    function addOrder(orderNum) {
        let name = document.getElementById("item" + orderNum).innerHTML;
        let price = document.getElementById("price" + orderNum).innerHTML;
        price = price.split(" ")[1];

        // Get the existing cart from local storage (or create an empty cart)
        const cart = JSON.parse(localStorage.getItem('cart')) || [];

        const cartSizeElement = document.getElementById('cart-size');
        cartSizeElement.textContent = cart.length;

        // Add the selected item to the cart
        cart.push({ itemName: name, itemPrice: price, itemQTY: 1 });

        // Store the updated cart back in local storage
        localStorage.setItem('cart', JSON.stringify(cart));

        // Update the cart size
        cartSizeElement.textContent = cart.length;

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
