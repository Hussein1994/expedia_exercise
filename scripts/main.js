/**
 * Created by ekermawi on 2/19/17.
 */
$( function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });

    $("#reset").click( function () {
        $("#form").find('input:text').val('');
        $("#lengthOfStay").val('');
        $("#form").find('input:radio').removeAttr('checked');
    })
} );
