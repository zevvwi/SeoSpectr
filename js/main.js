$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../formLog/Logger.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            $('form').trigger('reset');
        });
        return false;
    });
});