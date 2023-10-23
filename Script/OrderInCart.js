fetch("../Script/OrderInCart.json")
    .then(response => response.json())
    .then(data =>{
        console.log(data)
        document.getElementById("name1").innerHTML = data[0].itemName;
        document.getElementById("price1").innerHTML = data[0].itemPrice;
        document.getElementById("Qty1").innerHTML = data[0].itemQTY;

        document.getElementById("name2").innerHTML = data[1].itemName;
        document.getElementById("price2").innerHTML = data[1].itemPrice;
        document.getElementById("Qty2").innerHTML = data[1].itemQTY;

        document.getElementById("subTotal").innerHTML = data[0].itemPrice + data[1].itemPrice;
        document.getElementById("tax").innerHTML = ((data[0].itemPrice + data[1].itemPrice) * 0.05);
        document.getElementById("total").innerHTML = (data[0].itemPrice + data[1].itemPrice)+((data[0].itemPrice + data[1].itemPrice) * 0.05);
    })