const form = document.querySelector("#form");
const inputs = document.querySelectorAll("input, textarea");
const submitButton = document.querySelector(".submit-button");

// Máscara para o input de telefone
const phoneInput = document.querySelector(".phone-input");
phoneInput.addEventListener("input", handleInput, false);

function handleInput(e) {
  e.target.value = phoneMask(e.target.value);
}

function phoneMask(phone) {
  return phone
    .replace(/\D/g, "")
    .replace(/^(\d)/, "($1")
    .replace(/^(\(\d{2})(\d)/, "$1) $2")
    .replace(/(\d{5})(\d{1,5})/, "$1-$2")
    .replace(/(-\d{4})\d+?$/, "$1");
}

// Verifica se os inputs foram preenchidos
let validInputs = false;

console.log(inputs);
inputs.forEach((input) => {
  input.addEventListener("change", () => {
    validInputs = Array.from(inputs).filter((input) => input.value !== "");

    if (validInputs.length != inputs.length) {
      submitButton.setAttribute("disabled", true);
    } else {
      submitButton.removeAttribute("disabled");
    }
  });
});
