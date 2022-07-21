// Get the modal
var deleteLesson = document.getElementById("deleteLesson");

// Get the button that opens the modal
var btn = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var span = document.getElementById("close4");

// When the user clicks the button, open the modal 
btn.onclick = function () {
    deleteLesson.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    deleteLesson.style.display = "none";
}

