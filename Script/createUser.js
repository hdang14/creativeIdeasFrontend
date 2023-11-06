async function createUser(){

    const username = document.getElementById("username").value; 
    const password = document.getElementById("pass").value; 
    const users_name = document.getElementById("name").value;

    const request = {
        username: username,
        password: password,
        name: users_name,
    };

    console.log(request);

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