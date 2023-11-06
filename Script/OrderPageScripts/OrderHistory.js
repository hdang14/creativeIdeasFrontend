async function getOrders() {
    const request = {
        customerId: 10002
    };
    
    const response = await fetch('http://localhost/CreativeIdeasBackend/OrdersApi/index.php/GetOrders', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(request),
    });
    
    if(response) {
        const responseData = await response.json();
        console.log(responseData);

        var li = document.createElement('li');

        for(var i in responseData){

            var row = 
                `<div class="card box-card order-card">

                    <h3 class="align-text"><Strong>Order: ${parseInt(i) + 1}</Strong></h3>
                        <table>
                            <tr>
                                <td class="name">${responseData[i].itemName}</td>
                                <td class="col-size label">QTY:</td>
                                <td class="col-size">${responseData[i].qty}</td>
                                <td class="col-size label">Price:</td>
                                <td class="col-size">${responseData[i].totalPrice}</td>
                                <td class="col-size label">Status:</td>
                                <td class="col-size"">${responseData[i].status}</td>
                            </tr>
                        </table>
                </div>`
                    
            li.innerHTML += row;
        }
    

document.getElementById("my-order").appendChild(li);
    }
}

getOrders();