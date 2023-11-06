window.onload = function () {
    updateCartSize();
};
// Get the cart data from local storage
const cart = JSON.parse(localStorage.getItem('cart')) || [];

// Display the items in the cart
const cartList = document.getElementById('my-table');

if (cart.length === 0) {
    cartList.innerHTML = 'Your cart is empty.';
    document.getElementById("total").innerHTML = '$ ' + 0;
} else {
    buildTable(cart);
    placeOrder();
}

function placeOrder(){
    const items = [];
    const price = [];
    const ids = [];
    for (var i = 0; i < cart.length; i++){
        ids[i] = cart[i].invId;
        items[i] = cart[i].itemQTY;
        price[i] = cart[i].itemPrice + "";
    }

    document.getElementById('idList').value = ids;
    document.getElementById('qtyList').value = items;
    document.getElementById('itemPrice').value = price;
    
}

function removeOrder(orderNum) {
    // Get the cart data from local storage
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    cart.splice(orderNum, 1);

    localStorage.setItem('cart', JSON.stringify(cart));

    // Display the items in the cart
    const cartList = document.getElementById('my-table');

    if (cart.length === 0) {
        cartList.innerHTML = '  Your cart is empty.';
        document.getElementById("total").innerHTML =  '$ ' + 0;
    } else {
        cartList.innerHTML = "";
        buildTable(cart);
    }

    updateCartSize();
}

function buildTable(data){

    var li = document.createElement('li');
    var total = 0;
    for(var i = 0; i < data.length; i++){

        var row =   
            `<div class="card box-card order-card" id="Order">
                <table>
                    <tr>
                        <td class="name"><h3 class="align-text">${data[i].itemName}</h3></td>
                        <td class="col-size">QTY: </td>
                        <td class="col-size">${data[i].itemQTY}</td>
                        <td class="col-size"><label class="align-text">Price: </label></td>
                        <td class="col-size"><p class="align-text">$ ${parseFloat(data[i].itemPrice).toFixed(2)}</p></td>
                    </tr>
                </table>
                <button onclick="removeOrder(${i})" class="Order">Remove</button></td>
            </div>`
        total += parseFloat(data[i].itemPrice);
        li.innerHTML += row; 
    }
   
    document.getElementById("total").innerHTML =  '$ ' + total.toFixed(2);
    document.getElementById("my-table").appendChild(li);
}

function updateCartSize() {
    const cartSizeElement = document.getElementById('cart-size');
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartSizeElement.textContent = cart.length;
}
    

    
    
    

    