/*
 Jquery Validation using jqBootstrapValidation
 example is taken from jqBootstrapValidation docs
 */
$(function() {

    $("input,textarea").jqBootstrapValidation(
        {
            preventSubmit: true,
            submitError: function($form, event, errors) {
                // something to have when submit produces an error ?
                // Not decided if I need it yet
            },
            submitSuccess: function($form, event) {
                event.preventDefault(); // prevent default submit behaviour
                // get values from FORM
                var name = $("#input_name").val();
                var email = $("#input_mail").val();
                var message = $("#input_message").val();
                var captcha = $("#captcha_code").val();

                $.ajax({
                    url: "../contact_me.php",
                    type: "POST",
                    /*data: {name: name, email: email, message: message},*/
                    /*data: "name=" + name + "&email=" + email+ "&message=" + message+"&captcha="+captcha,*/
                    data: $("#contactForm").serialize(),
                    datatype: 'json',
                    success: function() {
                        // Success message
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append( "</button>");
                        $('#success > .alert-success')
                            .append("<strong>Ihre Nachricht wurde versandt! </strong>");
                        $('#success > .alert-success')
                            .append('</div>');

                        //clear all fields
                        $('#contactForm').trigger("reset");
                        $('#captcha').attr('src', '/captcha/securimage/securimage_show.php?' + Math.random());
                    },
                    error: function() {
                        // Fail message
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append( "</button>");
                        $('#success > .alert-danger').append("<strong>Entschuldigung! Ein Fehler ist aufgetreten! </strong> Könnten Sie mir Ihre Nachricht bitte direkt an <a href='mailto:kristin@sofortsurf.de?Subject=Nachricht von testwebsite.de;>kristin@sofortsurf.de'</a> senden?");
                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        //$('#contactForm').trigger("reset");
                    }
                })
            },
            filter: function() {
                return $(this).is(":visible");
            }
        });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('input_name').focus(function() {
    $('#success').html('');
});