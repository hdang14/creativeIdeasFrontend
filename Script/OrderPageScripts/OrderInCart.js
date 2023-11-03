

fetch("../../Script/OrderPageScripts/OrderInCart.json")

    .then(response => response.json())
    .then(data =>{
        console.log(data)

        buildTable(data);

        function buildTable(data){

        var li = document.createElement('li');
        var total = 0;
        console.log(data);
        for(var i = 0; i < data.length; i++){

            var row =   
                `<div class="card box-card order-card" id="Order">
                    <table>
                        <tr>
                            <td class="name"><h3 class="align-text">${data[i].itemName}</h3></td>
                            <td class="col-size">QTY: </td>
                            <td class="col-size">${data[i].itemQTY}</td>
                            <td class="col-size"><label class="align-text">Price: </label></td>
                            <td class="col-size"><p class="align-text">${data[i].itemPrice.toFixed(2)}</p></td>
                        </tr>
                    </table>
                    <button class="removeBtn Order">Remove</button></td>
                </div>`
            total += parseFloat(data[i].itemPrice);
            li.innerHTML += row; 
        }
        document.getElementById("total").innerHTML = total.toFixed(2);
        document.getElementById("my-table").appendChild(li);
    }

    
    const element = document.getElementById("Order");

    function onDeleteRow(e) {
        if(!e.target.classList.contains("removeBtn")){
            return;
        }
        element.closest("div").remove();
        console.log(e);
    }
    element.addEventListener('click', onDeleteRow);
    })
    
    
    
    

    