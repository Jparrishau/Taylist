/*
 *
 *  Post Detail Modal
 *
*/
$('#postDetailModal').on('show.bs.modal', function (event) {
    // Get the button that opens the modal
    var postDetailBtn = $(event.relatedTarget);
    
    //Grab POST data
    var data = postDetailBtn.data('post');
    console.log(data.id);
    
    new Vue({
        el: '#vueid',
         data: {
            data: data
        }  
    });
});

$('#postDetailModal').on('hidden.bs.modal', function () {
    $(this).removeData('bs.modal');
});

/*
 *
 *  Add Post Modal
 *
 */
$('#addPostModal').on('show.bs.modal', function (event) {
    // Get the button that opens the modal
    var addPostBtn = $(event.relatedTarget);
    
    // Get the modal
    var addPostModal = $(this);
    
    // When the user clicks on the button, open the modal
    addPostBtn.onclick = function() {
        addPostModal.style.display = "block";
    };
});