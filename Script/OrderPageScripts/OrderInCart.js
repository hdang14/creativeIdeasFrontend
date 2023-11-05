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
}

// fetch("../../Script/OrderPageScripts/OrderInCart.json")

//     .then(response => response.json())
//     .then(data =>{
//         console.log(data)

//         buildTable(data);

//     const element = document.getElementById("Order");

//     function onDeleteRow(e) {
//         if(!e.target.classList.contains("removeBtn")){
//             return;
//         }
//         element.closest("div").remove();
//         console.log(e);
//     }
//     element.addEventListener('click', onDeleteRow);
//     })

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
                        <td class="col-size"><p class="align-text">${parseFloat(data[i].itemPrice).toFixed(2)}</p></td>
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
    

    
    
    

    