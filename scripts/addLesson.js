// Get the modal
var addLesson = document.getElementById("addLesson");

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementById("close2");

// When the user clicks the button, open the modal 
btn.onclick = function () {
    addLesson.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    addLesson.style.display = "none";
}

