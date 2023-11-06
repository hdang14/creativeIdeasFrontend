async function sha256(message) {
    const msgBuffer = new TextEncoder().encode(message);                    

    const hashBuffer = await crypto.subtle.digest('SHA-256', msgBuffer);

    const hashArray = Array.from(new Uint8Array(hashBuffer));
                
    const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');

    hash = hashHex; 

    return hashHex;
}

async function createUser(){

    const username = document.getElementById("username").value; 
    const password = await sha256(document.getElementById("pass").value); 
    const users_name = document.getElementById("name").value;

    const request = {
        username: username,
        password: password,
        name: users_name,
    };

    console.log("cu request " + request);

    const response = await fetch('http://localhost/CreativeIdeasBackend/UsersApi/index.php/CreateUser', {

        method: 'POST',
        headers:{
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: JSON.stringify(request),

    });

    if(response){
        window.location.href = "http://localhost/CreativeIdeasFrontend/Pages/Authentication/Login.html";
        console.log(response);
    }
}