fetch("../../Script/OrderPageScripts/OrderHistory.json")
    .then(response => response.json())
    .then(data =>{
        console.log(data)
        document.getElementById("itemName1").innerHTML = data[0].Order1[0].itemName;
        document.getElementById("itemQty1").innerHTML = data[0].Order1[0].itemQTY;
        document.getElementById("itemPrice1").innerHTML = data[0].Order1[0].itemPrice;
        document.getElementById("itemStatus1").innerHTML = data[0].Order1[0].itemStatus;
        
        document.getElementById("itemName2").innerHTML = data[0].Order1[1].itemName;
        document.getElementById("itemQty2").innerHTML = data[0].Order1[1].itemQTY;
        document.getElementById("itemPrice2").innerHTML = data[0].Order1[1].itemPrice;
        document.getElementById("itemStatus2").innerHTML = data[0].Order1[1].itemStatus;

        document.getElementById("itemName3").innerHTML = data[0].Order2[0].itemName;
        document.getElementById("itemQty3").innerHTML = data[0].Order2[0].itemQTY;
        document.getElementById("itemPrice3").innerHTML = data[0].Order2[0].itemPrice;
        document.getElementById("itemStatus3").innerHTML = data[0].Order2[0].itemStatus;

        document.getElementById("itemName4").innerHTML = data[0].Order2[1].itemName;
        document.getElementById("itemQty4").innerHTML = data[0].Order2[1].itemQTY;
        document.getElementById("itemPrice4").innerHTML = data[0].Order2[1].itemPrice;
        document.getElementById("itemStatus4").innerHTML = data[0].Order2[1].itemStatus;
        
        
    })