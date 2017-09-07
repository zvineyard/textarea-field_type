$(document).on('ajaxComplete ready', function () {

    // Initialize text suggestions
    $('textarea[data-provides="anomaly.field_type.textarea"]:not([data-initialized])').each(function () {

        $(this).attr('data-initialized', '');

        var wrapper = $(this).closest('div');
        var counter = wrapper.find('.counter');

        $(this).characterCounter({
            limit: $(this).data('max'),
            counterSelector: $(this).closest('div').find('.count'),
            onExceed: function () {
                counter.addClass('text-danger');
            },
            onDeceed: function () {
                counter.removeClass('text-danger');
            }
        });
    });
});
