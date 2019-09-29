// Keep your scripts in here

function error_handller() {
    // Hadles the error handling  for the page and prints in a readable format.

    onerror = errorHandler;
    function errorHandler(message, link, line) {
        message = "Error Encountered:\n\n";
        message += "URL: " + link + "\n";
        message += "Line: " + line + "\n";
        alert(message);
        return true;
    }
}

function make_collapsible() {
    // Creates the collapsiable animations and functionallity

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i= 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
}

$(document).ready(function () {
    $('.header').height($(window).height());
})