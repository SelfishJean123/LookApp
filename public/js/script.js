const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const confirmedPasswordInput = form.querySelector('input[name="confirmedPassword"]');

function isEmail(email) {
  return /\S+@\S+\.\S+/.test(email);
}

function checkCondition(element, condition) {
  !condition ? element.classList.add("invalid") : element.classList.remove("invalid");
}

function validateEmail() {
  setTimeout(function () {
    checkCondition(emailInput, isEmail(emailInput.value));
  }, 2000);
}

function validatePassword() {
  setTimeout(function () {
    const condition = confirmedPasswordInput.previousElementSibling.value === confirmedPasswordInput.value;
    checkCondition(confirmedPasswordInput, condition);
  }, 2000);
}

emailInput.addEventListener("keyup", validateEmail);
confirmedPasswordInput.addEventListener("keyup", validatePassword);
