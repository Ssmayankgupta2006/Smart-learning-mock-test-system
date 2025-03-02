var data = document.querySelector("#fixedspan");
var i = 1;
var id = setInterval(function () {
  data.innerText = i;
  if (i > 3) {
    data.innerText = "Go";
  }
  i++;
}, 1000);

setTimeout(() => {
  clearInterval(id);
  window.location.href = "assisgnament_1.php";
}, 5000);
