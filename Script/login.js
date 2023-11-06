async function login(){

    console.log("Funtion Ran!");

    const u = document.getElementById("username").value;
    const p = document.getElementById("pass").value;

    console.log("username: " + u + "password: " + p);

    const request = {
        username: u,
        password: p
    };

    console.log(request);

    const response = await fetch('http://localhost/CreativeIdeasBackend/UsersApi/index.php/Login', {

        method: 'POST',
        headers:{
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(request),

    });

    console.log(response);

    if(response){
        const r = await response.json();
        console.log(r);
        if(typeof r.inv_id != "undefined"){
            localStorage.setItem("user_id", r.inv_id);
	    console.log("GOT HERE");
            window.location.href = "http://localhost/CreativeIdeasFrontend/Pages/Store/StorePage.php";
        }else{
            document.getElementById("errorMsg").innerText = "Invalid Username / Password";
        }
    }

    console.log("Function Ended");
}
