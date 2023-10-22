const submitButton = document.querySelector("#submit");
const password = document.getElementById("password");
const warning = document.getElementById("warning");
const confirmPassword = document.getElementById("confirmPassword");

confirmPassword.addEventListener("keyup", comparePassword);

//check if password and confirm password text value inputs match
function comparePassword() {
  if (password.value != confirmPassword.value) {
    console.log(password.innerText);
    console.log("empty");
    //   if (password.innerText != confirmPassword.innerText) {
    warning.innerHTML =
      "<div class='alert alert-danger mt-2' role='alert'> Password confirmation must match exactly with password!</div>";
    submitButton.disabled = true;
  } else {
    submitButton.disabled = false;
    warning.innerHTML = "";
  }
}
