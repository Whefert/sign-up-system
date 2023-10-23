const submitButton = document.querySelector("#submit");
const password = document.getElementById("password");
const warning = document.getElementById("warning");
const confirmPassword = document.getElementById("confirmPassword");

confirmPassword.addEventListener("keyup", comparePassword);

//Check if password and confirm password text value inputs match
// Disable submit button if they don't match and give user a warning
function comparePassword() {
  if (password.value != confirmPassword.value) {
    warning.innerHTML =
      "<div class='alert alert-danger mt-2' role='alert'> Password confirmation must match exactly with password!</div>";
    submitButton.disabled = true;
  } else {
    submitButton.disabled = false;
    warning.innerHTML = "";
  }
}
