//this will make confirm box and if true it will make href of element to logut.php for redirection
var element = document.getElementById("lgout");
element.addEventListener("click", () => {
  var logout = confirm(
    "Are you sure to logout?"
  );
  if (logout) {
    element.href = "../logout.php?succesfully-logout"; //means if user click ok than only it will set logout href
  }
});
