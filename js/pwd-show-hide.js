
/*targeting pwdfield and eyeelement to make password show and hide with 
  changing eyefont opacity by creating another class for css from DOM*/

const pwdField = document.querySelector("#password");
const toggleButton = document.querySelector("i");

toggleButton.onclick = () => {
  if (pwdField.type === "password") {
    pwdField.type = "text"
    toggleButton.classList.add("show");
  } else {
    pwdField.type = "password"
    toggleButton.classList.remove("show");
  }
}
