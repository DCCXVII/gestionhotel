import './bootstrap';


document.querySelector(".input-container input").addEventListener("input", function() {
    this.value = this.value.toLowerCase();
});

const passwordField = document.getElementById('password');
const passwordIcon = document.querySelector('.password-icon');

passwordIcon.addEventListener('click', () => {
    if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordIcon.classList.remove('fa-eye');
        passwordIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = "password";
        passwordIcon.classList.remove('fa-eye-slash');
        passwordIcon.classList.add('fa-eye');
    }
});
