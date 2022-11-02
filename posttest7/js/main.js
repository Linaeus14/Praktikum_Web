const x = document.getElementsByClassName("sinmo1");
const y = document.getElementsByClassName("sinmo2");

function readmore() {
  for (let i = 0; i < x.length; i++) {
    if (x[i].style.display == "none") {
      x[i].style.display = "block";
      y[i].style.display = "none";
    } 
    else {
      x[i].style.display = "none";
      y[i].style.display = "block";
    }
  }
}