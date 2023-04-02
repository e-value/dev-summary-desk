$(function() {
    $('input[type=checkbox][id="issue_date"]').change(function() {
        if($(this).prop('checked')) {
            $('#enforcement_date').prop('checked', false);
        }
    });
    $('input[type=checkbox][id="enforcement_date"]').change(function() {
        if($(this).prop('checked')) {
            $('#issue_date').prop('checked', false);
        }
    });
})