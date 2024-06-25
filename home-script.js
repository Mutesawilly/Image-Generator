// Get references to HTML elements
let registerLinkButton = document.getElementById("register-link");
let register = document.getElementById("register");
let signup = document.getElementById("signup");
let login = document.getElementById("login");

// Initial setup
registerLinkButton.textContent = "Login";
signup.style.display = "flex";
login.style.display = "none";

// Add event listener to the register link button
registerLinkButton.addEventListener("click", function() {
    if (registerLinkButton.textContent === "Login") {
        registerLinkButton.textContent = "Register";
        register.textContent = "Don't have an account?";
        signup.style.display = "none";
        login.style.display = "flex";
    } else {
        registerLinkButton.textContent = "Login";
        register.textContent = "Have an account?";
        signup.style.display = "flex";
        login.style.display = "none";
    }
});
