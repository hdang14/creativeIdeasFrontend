var hash = "";

async function sha256(message) {
    const msgBuffer = new TextEncoder().encode(message);                    

    const hashBuffer = await crypto.subtle.digest('SHA-256', msgBuffer);

    const hashArray = Array.from(new Uint8Array(hashBuffer));
                
    const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');

    hash = hashHex; 

    return hashHex;
}

async function login() {

    const u = document.getElementById("username").value;
    const p = document.getElementById("pass").value;
    const pass = await sha256(p);

    const request = {
        username: u,
        password: pass
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
            window.location.href = "http://localhost/CreativeIdeasFrontend/Pages/Store/StorePage.php";
        } else {
            document.getElementById("errorMsg").innerText = "Invalid Username / Password";
        }
    }

    console.log("Function Ended");
}
