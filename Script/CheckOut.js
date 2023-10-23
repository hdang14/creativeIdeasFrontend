fetch("../Script/OrderInCart.json")
    .then(response => response.json())
    .then(data =>{
        console.log(data)

        document.getElementById("subTotal").innerHTML = data[0].itemPrice + data[1].itemPrice;
        document.getElementById("tax").innerHTML = ((data[0].itemPrice + data[1].itemPrice) * 0.05);
        document.getElementById("total").innerHTML = (data[0].itemPrice + data[1].itemPrice)+((data[0].itemPrice + data[1].itemPrice) * 0.05);
    })