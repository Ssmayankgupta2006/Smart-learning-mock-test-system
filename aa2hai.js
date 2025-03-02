var iteration = 0,
  min = 0;
var id = setInterval(function () {
  iteration++;
  document.querySelector(".timer").innerText = min + " : " + iteration;
  if (iteration == 60) {
    iteration = 0;
    min++;
  }
  if (min == 60) {
    document.querySelector("#submit_hai").click();
  }
}, 1000);
// var call = 0;
setTimeout(function () {
  clearInterval(id);
}, 3600000);
