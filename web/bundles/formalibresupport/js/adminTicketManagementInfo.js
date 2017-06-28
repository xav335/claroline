(function () {
    'use strict';
    
    var ticketId = $('#latest-intervention-datas-box').data('ticket-id');
    var ongoingStart = $('#latest-intervention-datas-box').data('ongoing-start');
    var previousTime = $('#latest-intervention-datas-box').data('previous-time');
    var availableCredits = $('#latest-intervention-datas-box').data('available-credits');
    var hasOngoingIntervention = $('#latest-intervention-datas-box').data('has-ongoing-intervention');
    var withCredits = $('#latest-intervention-datas-box').data('with-credits');
    var ongoingBox = $('#ongoing-intervention-box');
    var ongoingBoxType = 'info';
    var ongoingTimer = $('#ongoing-intervention-timer');
    
    var displayOngoingTimer = function () {
        var now = Math.round(+new Date()/1000);
        var diff = now - ongoingStart;
        var minutes = (diff / 60) >> 0;
        var seconds = diff % 60;
        var timerDisplay = minutes + ':' + (('' + seconds).length > 1 ? '' : '0') + seconds;
        
        if (withCredits) {
            var totalTime = previousTime + minutes;

            if (seconds > 0) {
                totalTime++;
            }
            var nbHours = Math.floor(totalTime / 60);
            var nbMinutes = totalTime % 60;
            var requiredCredits = (5 * nbHours) + Math.ceil(nbMinutes / 15);
            var remainingCredits = availableCredits - requiredCredits;

            timerDisplay += '<br><b>' + Translator.trans('required_credits', {}, 'support')  + ' :</b> ' + requiredCredits;
            timerDisplay += '<br><b>' + Translator.trans('remaining_credits', {}, 'support')  + ' :</b> ' + remainingCredits;

            if (remainingCredits > 5 && ongoingBoxType !== 'info') {
                ongoingBox.removeClass('alert-' + ongoingBoxType);
                ongoingBox.addClass('alert-info');
                ongoingBoxType = 'info';
            } else if (remainingCredits > 1 && remainingCredits <= 5 && ongoingBoxType !== 'warning') {
                ongoingBox.removeClass('alert-' + ongoingBoxType);
                ongoingBox.addClass('alert-warning');
                ongoingBoxType = 'warning';
            } else if (remainingCredits <= 1 && ongoingBoxType !== 'danger') {
                ongoingBox.removeClass('alert-' + ongoingBoxType);
                ongoingBox.addClass('alert-danger');
                ongoingBoxType = 'danger';
            }
        }
        ongoingTimer.html(timerDisplay);
    };
    
    $('#latest-intervention-info').on('click', '#start-intervention-btn', function () {
        $.ajax({
            url: Routing.generate(
                'formalibre_admin_ticket_intervention_start',
                {'ticket': ticketId}
            ),
            type: 'POST',
            success: function () {
                window.location.reload();
            }
        });
    });
    
    $('#latest-intervention-info').on('click', '#stop-ongoing-intervention-btn', function () {
        var interventionId = $(this).data('intervention-id');
        
        window.Claroline.Modal.displayForm(
            Routing.generate(
                'formalibre_admin_ticket_intervention_status_edit_form',
                {'intervention': interventionId}
            ),
            stopIntervention,
            function() {}
        );
    });
    
    if (hasOngoingIntervention) {
        setInterval(displayOngoingTimer, 1000);
    }
    
    var stopIntervention = function (interventionId) {
        $.ajax({
            url: Routing.generate(
                'formalibre_admin_ticket_intervention_stop',
                {'intervention': interventionId}
            ),
            type: 'POST',
            success: function () {
                window.location.reload();
            }
        });
    };
})();