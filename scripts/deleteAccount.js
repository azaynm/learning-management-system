// Get the modal
var deleteAccount = document.getElementById("deleteAccount");

// Get the button that opens the modal
var btn = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span = document.getElementById("close6");

// When the user clicks the button, open the modal 
btn.onclick = function () {
    deleteAccount.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    deleteAccount.style.display = "none";
}

