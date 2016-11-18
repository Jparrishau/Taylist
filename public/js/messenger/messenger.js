$(function (){
    
    $('a').on('click', function (){
        var thread_id = $(this).data('id');
        var message_area = $('#message-area');
    
        $('#message-area').empty();
        
        $('#message-form').attr("action", "/messages/" + thread_id);
        
       $.ajax({
        type: 'GET',
        url: '/messages/getMessagesByThreadId/' + thread_id,
        success: function(messages){
            $.each(messages, function(i, message){
                message_area.append('<div class="message-text message-to"><p>' + message.body + '</p></div>');
            });
        }
    
       });
    });
    
});