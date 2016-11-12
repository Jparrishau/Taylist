//Need to use AJAX here

/* Post Detail Modal */
// Get the modal
var postDetailModal = document.getElementById('postDetailModal');

// Get the button that opens the modal
var postDetailBtn = document.getElementById("postDetailModalBtn");

// When the user clicks on the button, open the modal
postDetailBtn.onclick = function() {
    postDetailModal.style.display = "block";
};

/* Add Post Modal */
// Get the modal
var addPostModal = document.getElementById('addPostModal');

// Get the button that opens the modal
var addPostBtn = document.getElementById("addPostModalBtn");

// When the user clicks on the button, open the modal
addPostBtn.onclick = function() {
    addPostModal.style.display = "block";
};

/* Close Modals*/
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == addPostModal || event.target == postDetailModal) {
        event.target.style.display = "none";
    }
};