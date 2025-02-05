const eyeIcon = document.getElementById("eye");
const passwordField = document.getElementById("password");
eyeIcon.addEventListener("click", () => {
  if (passwordField.type === "password" && passwordField.value) {
    passwordField.type = "text";
    eyeIcon.classList.remove("fa-solid fa-eye");
    eyeIcon.classList.add("fa-regular fa-eye-slash");
  } else {
    passwordField.type = "password";
    eyeIcon.classList.remove("fa-regular fa-eye-slash");
    eyeIcon.classList.add("fa-solid fa-eye");
  }
});
