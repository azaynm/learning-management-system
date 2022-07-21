// Get the modal
var changePassword = document.getElementById("changePassword");

// Get the button that opens the modal
var btn = document.getElementById("myBtn5");

// Get the <span> element that closes the modal
var span = document.getElementById("close5");

// When the user clicks the button, open the modal 
btn.onclick = function () {
    changePassword.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    changePassword.style.display = "none";
}

