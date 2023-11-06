async function login() {

    console.log("Function Ran!");

    const u = document.getElementById("username").value;
    const p = document.getElementById("pass").value;

    console.log("username: " + u + " password: " + p);

    const request = {
        username: u,
        password: p
    };

    console.log(JSON.stringify(request));
    const response = await fetch('http://localhost/CreativeIdeasBackend/UsersApi/index.php/Login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(request),
    });

    if (response) {
        const data = await response.json();
        if (typeof data.customer_id != "undefined") {
            localStorage.setItem("user_name", data.name);
            localStorage.setItem("custId", data.customer_id);
            console.log("GOT HERE");
            window.location.href = "http://localhost:8080/Pages/Store/StorePage.php";
        } else {
            document.getElementById("errorMsg").innerText = "Invalid Username / Password";
        }
    }

    console.log("Function Ended");
}
