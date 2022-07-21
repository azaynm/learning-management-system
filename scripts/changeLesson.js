// Get the modal
var changeLesson = document.getElementById("changeLesson");

// Get the button that opens the modal
var btn = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span = document.getElementById("close3");

// When the user clicks the button, open the modal 
btn.onclick = function () {
    changeLesson.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    changeLesson.style.display = "none";
}

