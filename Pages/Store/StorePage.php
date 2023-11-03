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
    window.onload = getItems();
async function getItems() {
    const response = await fetch("../../Script/OrderPageScripts/OrderInCart.json");
    
    if(response) {
        responseData = await response.json();
        console.log(responseData);

        var div = document.getElementById("shop");

        for(var i in responseData){

            var row = 
                `
                    
                        <div class="box">
                                        <img
                                src="placeholder.jpg" style="width:100px; height:100px;"/>
                                <h4 id="item${i}">${responseData[i].itemName}</h4>
                                <h5 id="price${i}">${responseData[i].itemPrice}</h5>
                                <div class="cart">
                                    <a onclick="addOrder(${i})"><i class="bi bi-cart"></i></a>
                                </div>
                            </div>

                        </div>
                    
               `
                    
            div.innerHTML += row;
        }
    

    }
}
</script>
<div id="snackbar">Added to cart</div>

    <!-- Calls and displays navbar -->
    <?php
            include('../OrderPages/Navbar.php');
    ?>

   
<section class="shop"> 
    <div class="container" id="shop">
                      
    </div>
</section>

    <footer>
        
    </footer>

    
</body>
</html>

<script>
    function addOrder(orderNum) {
        console.log(document.getElementById("item" + orderNum).innerHTML);
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
