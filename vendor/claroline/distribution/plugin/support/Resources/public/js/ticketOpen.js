(function () {
    'use strict';
    
    $('#ticket-comment-form-box').on('click', '#add-comment-btn', function (e) {
        e.stopImmediatePropagation();
        e.preventDefault();

        var form = document.getElementById('comment-create-form');
        var action = form.getAttribute('action');
        var formData = new FormData(form);

        $.ajax({
            url: action,
            data: formData,
            type: 'POST',
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                switch (jqXHR.status) {
                    case 201:
                        $('#comment_form_content').html('');
                        window.location.reload();
                        break;
                    default:
                        $('#ticket-comment-form-box').html(data);
                }
            }
        });
    });
    
    $('#ticket-open-head').on('click', '#ticket-edit-btn', function () {
        var ticketId = $(this).data('ticket-id');
        
        window.Claroline.Modal.displayForm(
            Routing.generate(
                'formalibre_ticket_edit_modal_form',
                {'ticket': ticketId}
            ),
            refreshPageAfterEdition,
            function() {}
        );
    });

    var refreshPageAfterEdition = function () {
        $('#ticket_form_description').html('');
        window.location.reload();
    };
})();