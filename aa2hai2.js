var data = document.querySelector("#fixedspan");
var i = 1;
var id = setInterval(function () {
  data.innerText = i;
  if (i > 3) {
    data.innerText = "Login";
  }
  i++;
}, 1000);

setTimeout(() => {
  clearInterval(id);
  window.location.href = "login.php";
}, 5000);
