function validation() {
    var form = document.querySelector("body > form");
    var email = document.querySelector("body > form > input:nth-child(2)");
    var password = document.querySelector("body > form > input:nth-child(3)");
    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    var login = document.querySelector("#login")

    /* login.addEventListener("click" ()=> {
    }) */

    
    if (email.value.match(pattern)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML = "Your Email address is valid ";
        text.style.color = "#00ff00";
    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML = "Please enter Valid Email address ";
        text.style.color = "#ff0000";
    }
    if (email == ""){
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML = "";
        text.style.color = "#00ff00";
    }
}