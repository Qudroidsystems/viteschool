"use strict";

// Class definition
var KTUsersUpdatePermissions = function () {
    // Shared variables
    const element = document.getElementById('kt_modal_update_role');
    const form = element.querySelector('#kt_modal_update_role_form');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initUpdatePermissions = () => {

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'update_house': {
                        validators: {
                            notEmpty: {
                                message: 'House name is required'
                            }
                        }
                    },
                    'update_housecolour': {
                        validators: {
                            notEmpty: {
                                message: 'House Colour  is required'
                            }
                        }
                    },
                    'update_housemasterid': {
                        validators: {
                            notEmpty: {
                                message: 'House master  is required'
                            }
                        }
                    },
                    'update_termid': {
                        validators: {
                            notEmpty: {
                                message: 'Term is required'
                            }
                        }
                    },
                    'update_sessionid': {
                        validators: {
                            notEmpty: {
                                message: 'Session is required'
                            }
                        }
                    },

                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Close button handler
        const closeButton = element.querySelector('[data-kt-roles-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to close?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, close it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Hide modal
                    removeitems();
                }
            });
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-roles-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-roles-modal-action="submit"]');
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click
                        submitButton.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;

                            // Show popup confirmation
                            Swal.fire({
                                text: "Form has been successfully submitted!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();
                                }
                            });

                            form.submit(); // Submit form
                        }, 2000);
                    } else {
                        // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });
    }

    // Select all handler
    const handleSelectAll = () => {
        // Define variables
        const selectAll = form.querySelector('#kt_roles_select_all');
        const allCheckboxes = form.querySelectorAll('[type="checkbox"]');

        // Handle check state
        selectAll.addEventListener('change', e => {

            // Apply check state to all checkboxes
            allCheckboxes.forEach(c => {
                c.checked = e.target.checked;
            });
        });
    }

    return {
        // Public functions
        init: function () {
            initUpdatePermissions();
            handleSelectAll();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUsersUpdatePermissions.init();
});


$(function () {

    // ON SELECTING ROW
    $(".sel-house").click(function () {
      //FINDING ELEMENTS OF ROWS AND STORING THEM IN VARIABLES
    var id = $(this).parents("tr").find("#tid").val();
    var a = $.trim($(this).parents("tr").find(".schoolhouse").text());
    var b = $.trim($(this).parents("tr").find(".housecolour").text());
    var housemaster = $.trim($(this).parents("tr").find(".housemaster").text());
    var term = $.trim($(this).parents("tr").find(".termid").text());
    var session= $.trim($(this).parents("tr").find(".sessionid").text());


    var housemaster_options_v = $.map($('#housemasterid option'), e=>$(e).val());
    var housemaster_values_v = $.map($('#housemasterid option'), e=>$(e).text());
   populate(update_housemasterid,housemaster_options_v,housemaster_values_v);

     var term_options_v = $.map($('#termid option'), e=>$(e).val());
     var term_values_v = $.map($('#termid option'), e=>$(e).text());
    populate(update_termid,term_options_v,term_values_v);

    var session_options_v = $.map($('#sessionid option'), e=>$(e).val());
    var session_values_v = $.map($('#sessionid option'), e=>$(e).text());
   populate(update_sessionid,session_options_v,session_values_v);




     function populate(selectid,valuearr,optionarr,){;
            for (var i = 0, ii = optionarr.length; i<ii; i++) {
                let optn = optionarr[i];
                let el = document.createElement("option");
                el.textContent = optn;
                el.value = valuearr[i];
                selectid.appendChild(el);
            }
        }



        $("#kt_modal_update_role").on('hide.bs.modal', function(){
            $("#update_termid").find("option").remove().end().append('');
            $("#update_housemasterid").find("option").remove().end().append('');
             $("#update_sessionid").find("option").remove().end().append('');
          });

        // CREATING DATA TO SHOW ON MODEL

        var  content = "";
        content +='<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">'

       + '<div class="fv-row mb-10">'
        +'<input type="hidden"  name="id" value="'+id+'" />'



        +'<div class="fv-row mb-7">'

        +'<label class="required fw-semibold fs-6 mb-2">House Name</label>'



        +'<input type="text" name="house" id="update_house" value="'+a+'" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="House Name ..." required  />'

        +'</div>'




        +' <div class="fv-row mb-7">'

        +'<label class="required fw-semibold fs-6 mb-2">House Colour</label>'



        +'<input type="text" name="housecolour" id="update_housecolour" value="'+b+'" class="form-control form-control-solid mb-3 mb-lg-0" required placeholder="House Colour ..."  />'

        +'</div>'


                    +'  </div>';
        var prev_housemaster = "";
        prev_housemaster +='Previous Selection: <input type="text" value="'+housemaster+'" class="form-control form-control-solid mb-3 mb-lg-0" readonly/>';
        var prev_term = "";
        prev_term +='Previous Selection: <input type="text" value="'+term+'" class="form-control form-control-solid mb-3 mb-lg-0" readonly/>';
        var prev_session = "";
        prev_session +='Previous Selection: <input type="text" value="'+session+'" class="form-control form-control-solid mb-3 mb-lg-0"  readonly/>';

        //CLEARING THE PREFILLED DATA

        $("#content").empty();

        //WRITING THE DATA ON MODEL
        $("#content").append(content);
        $("#prev_housemaster").append(prev_housemaster);
        $("#prev_term").append(prev_term);
        $("#prev_session").append(prev_session);


    });
});
