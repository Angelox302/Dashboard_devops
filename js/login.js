const form = document.getElementById("loginForm");
const password = document.getElementById("password");

const length = document.getElementById("length");
const number = document.getElementById("number");
const uppercase = document.getElementById("uppercase");
const special = document.getElementById("special");
const space = document.getElementById("space");

// Validar contraseña mientras se escribe
password.addEventListener("input", function () {

    const value = password.value;

    length.style.color = value.length > 0 && value.length <= 8 ? "green" : "red";
    number.style.color = /\d/.test(value) ? "green" : "red";
    uppercase.style.color = /[A-Z]/.test(value) ? "green" : "red";
    special.style.color = /[^A-Za-z0-9\s]/.test(value) ? "green" : "red";
    space.style.color = !/\s/.test(value) && value.length > 0 ? "green" : "red";

});

// Validar antes de enviar
form.addEventListener("submit", function (event) {

    const value = password.value;

    const valid =
        value.length > 0 &&
        value.length <= 8 &&
        /\d/.test(value) &&
        /[A-Z]/.test(value) &&
        /[^A-Za-z0-9\s]/.test(value) &&
        !/\s/.test(value);

    if (!valid) {
        event.preventDefault();
        alert("La contraseña no cumple con los requisitos.");
    } else {
    window.location.href = "dashboar.php";
    }

});

// Mostrar / ocultar contraseña
document.getElementById("togglePassword").addEventListener("click", function () {

    if (password.type === "password") {
        password.type = "text";
        this.textContent = "🔒";
    } else {
        password.type = "password";
        this.textContent = "👁";
    }

});
