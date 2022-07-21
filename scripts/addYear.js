// Get the modal
var addYear = document.getElementById("addYear");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementById("close1");

// When the user clicks the button, open the modal 
btn.onclick = function () {
    addYear.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    addYear.style.display = "none";
}

