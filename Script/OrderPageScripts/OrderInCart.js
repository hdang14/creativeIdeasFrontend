fetch("../../Script/OrderPageScripts/OrderInCart.json")
    .then(response => response.json())
    .then(data =>{
        console.log(data)

        buildTable(data);
    })
    
    function buildTable(data){
        var li = document.createElement('li');
        console.log(data);
        for(var i = 0; i < data.length; i++){

            var row =   
                `<div class="card box-card order-card">
                    <table>
                        <tr>
                            <td class="name"><h3 class="align-text">${data[i].itemName}</h3></td>
                            <td class="col-size">QTY: </td>
                            <td class="col-size">${data[i].itemQTY}</td>
                            <td class="col-size"><label class="align-text">Price: </label></td>
                            <td class="col-size"><p class="align-text">${data[i].itemPrice}</p></td>
                        </tr>
                    </table>
                    <button class="removeBtn order">Remove</button></td>
                </div>`

            li.innerHTML += row; 
        }
        document.getElementById("my-table").appendChild(li);
    }