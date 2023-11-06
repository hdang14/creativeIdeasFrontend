<html>
    
    <head>
        <link rel="stylesheet" href="../../Style/bootstrap.css">
        <link rel="stylesheet" href="../../Style/StorePageStyle/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    </head>

<header class="navbar nav-background" style="position: sticky">
        
          <a class="navbar-brand logo" href="../Store/StorePage.php">Creative Ideas</a>

            <form class="d-flex">
                <input id="search-input" class="form-control me-sm-2" type="search" placeholder="Search" style="margin-left: 50px; width: 100%">
                <button onclick="window.location.href = '../Store/StorePage.php';" id="search-button" class="btn btn-secondary" type="button"><i class="bi bi-search"></i></button>
            </form>

            <div class="icons" style="font-size: 24px;">
                <a href="https://github.com/hdang14/creativeIdeasFrontend/tree/main"><i style="color: black;" class="bi bi-github"></i></a>
                <li class="nav-item dropdown" style="padding-left: 30px;">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="bi bi-person"></i></a>
                    <div class="dropdown-menu" style="background-color: #F5F5DC;">
                      <h6 style="font-size: 17px;" class="dropdown-header">Hi, John Smith!</h6>

                      <a style="font-size: 14px;" class="dropdown-item" href="../Store/AddItemPage.php">Add Item</a>
                      <a style="font-size: 14px;" class="dropdown-item" href="../OrderPages/ViewOrderHistory.php">View Order History</a>
                      <a style="font-size: 14px;" class="dropdown-item" href="../Authentication/Login.html">Logout</a>                    

                    </div>
                </li>
                <a class="cartDisplay" href="../OrderPages/OrderInCart.php"><i  style="margin-left:25px; color: black;" class="bi bi-cart"></i> <p class='badge badge-warning' id='cart-size'> 0 </p></a>

            </div>
          </div>
      </header>
</html>

<style>
.cartDisplay:visited {
color: #C6F4BA;
}

#cart-size {
    font-size: 12px;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px; 
}
</style>