fetch("../../Script/OrderPageScripts/OrderHistory.json")
    .then(response => response.json())
    .then(data =>{
        console.log(data)
   
        buildTable(data);
        
    })

    function buildTable(data){
        var li = document.createElement('li');
        
        console.log(data);

        for(var i in data){

                    var row = 
                        `<div class="card box-card order-card">

                            <h3 class="align-text"><Strong>Order: ${(i)}</Strong></h3>
                                <table>
                                    <tr>
                                        <td class="name">${data[i].itemName}</td>
                                        <td class="col-size label">QTY:</td>
                                        <td class="col-size">${data[i].qty}</td>
                                        <td class="col-size label">Price:</td>
                                        <td class="col-size">${data[i].totalPrice}</td>
                                        <td class="col-size label">Status:</td>
                                        <td class="col-size"">${data[i].status}</td>
                                    </tr>
                                </table>
                        </div>`
                            
                    li.innerHTML += row;
                }
            
        
        document.getElementById("my-order").appendChild(li);
    }