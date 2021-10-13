(function ($) {
    "use strict"

jQuery("#add-room").validate({
    rules: {
        "room_name": {
            required: true
        },
        "type_id": {
            required: true,
        },
        "status": {
            required: true
        },
    },
    messages: {
        "room_name": "Please enter a room name!",
        "type_id": "Please select a room type!",
        "status": "Please select a room status!",
    },

    // ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    // errorElement: "input",
    errorPlacement: function(error, element) {
        if(element.attr("name") == "type_id"){
            error.appendTo('#error-type');
        }else if(element.attr("name") == "status"){
            error.appendTo('#error-status');
        }else{
            error.insertAfter(element);
        }
        // jQuery(a).parents(".form-group > input").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-control").addClass("is-invalid")
    },
    success: function(e, element) {
        jQuery(element).closest(".form-control").removeClass("is-invalid").addClass('is-valid');
    },
});



})(jQuery);
