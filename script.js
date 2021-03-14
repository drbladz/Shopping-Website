const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})


/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

function calculate() {
  var applesqty = document.getElementById("applesqty").value;
  var beefqty = document.getElementById("beefqty").value;
  var shrimpqty = document.getElementById("shrimpqty").value;

  document.getElementById("applestot").innerHTML = "$"+applesqty*0.79;
  document.getElementById("beeftot").innerHTML = "$"+beefqty*10.00;
  document.getElementById("shrimptot").innerHTML = "$"+shrimpqty*13.99;

  var subtotal = "$"+(applesqty*0.79 + beefqty*10 + shrimpqty*13.99).toFixed(2);
  var nbitems = parseInt(applesqty)+parseInt(beefqty)+parseInt(shrimpqty);
  var qst = "$"+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)*0.09975).toFixed(2);
  var gst = "$"+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)*0.05).toFixed(2);
  var total = "$"+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)*0.09975)+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)*0.05)).toFixed(2);

  document.getElementById("subtotal").innerHTML = subtotal;
  document.getElementById("nbitems").innerHTML = nbitems;
  document.getElementById("qst").innerHTML = qst;
  document.getElementById("gst").innerHTML = gst;
  document.getElementById("total").innerHTML = total;
}